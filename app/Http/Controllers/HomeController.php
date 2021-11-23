<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }

    public function uploadImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
        session()->push("images.{$uniqueSecret}", $fileName);
        return response()->json(

            [
                'id' => $fileName
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
            $i->file = $newFilePath;
            $i->ad_id = $a->id;
            $i->save();
        }
        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con éxito, se subirá en ser revisado');
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
                'src' => Storage::url($image),
                'size' => Storage::size($image)
            ];
        }
        return response()->json($data);
    }
}
