<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Auth;

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
            session()->get("images.{$uniqueSecret}")
        );
    }

    public function newAd(){
        $uniqueSecret = base_convert(sha1(uniqid(mt_rand())),16,36);
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

        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con éxito');
    }
}
