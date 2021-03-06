<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeLabelImage;
use App\Jobs\GoogleVisionSafeSearchImage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }

    public function uploadImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');
        $filePath = $request->file('file')->store("public/temp/{$uniqueSecret}");
        dispatch(new ResizeImage($filePath,120,120));
        session()->push("images.{$uniqueSecret}", $filePath);
        return response()->json(

            [
                'id' => $filePath
            ]
        );
    }

    public function removeImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->input('id');
        session()->push("removedImages.{$uniqueSecret}", $fileName);
        Storage::delete($fileName);
        return response()->json('ok');
    }

    public function newAd(Request $request){
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())),16,36)
        );
        
        return view('ad.new', compact('uniqueSecret'));
    }

    public function createAd(AdRequest $request){
        $a = new Ad();
        $a->title = $request->input('title');
        $a->slug = Str::of($a->title)->slug('-');
        $a->body = $request->input('body');
        $a->user_id = Auth::id();
        $a->category_id = $request->input('category');
        $a->price = $request->input('price');
        $a->save();
        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);
        $images = array_diff($images, $removedImages);

        foreach ($images as $image) {
            $i = new AdImage;
            $fileName = basename($image);
            $newFilePath = "public/ads/{$a->id}/{$fileName}";
            Storage::move($image, $newFilePath);

            dispatch(new ResizeImage(
                $newFilePath,
                300,
                150
            ));

            $i->file = $newFilePath;
            $i->ad_id = $a->id;
            $i->save();
            dispatch(new GoogleVisionSafeSearchImage($i->id));
            dispatch(new GoogleVisionSafeLabelImage($i->id));
        }
        
        Bus::chain([
            new GoogleVisionSafeSearchImage($i->id),
            new GoogleVisionSafeLabelImage($i->id),
            new GoogleVisionRemoveFaces($i->id),
            new ResizeImage($i->file, 300,150)
        ])->dispatch();
        
        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con ??xito, se subir?? en ser revisado');

    }

    public function getImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);
        $images = array_diff($images, $removedImages);
        $data = [];
        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'name' => basename($image),
                'src' => AdImage::getUrlByFilePath($image, 120, 120),
                'size' => Storage::size($image)
            ];
        }
        return response()->json($data);
    }

    
}
