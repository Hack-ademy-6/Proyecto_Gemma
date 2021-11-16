<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __contruct()
    {
        $this -> middleware('auth');
    }

    public function index(){
        return view('welcome');
    }

    public function newAd(){
        return view('ad.new');
    }

    public function createAd(AdRequest $request){
        $a = new Ad();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->save();
        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con éxito');
    }
}
