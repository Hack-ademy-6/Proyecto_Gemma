<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __contruct()
    {
        $this -> middleware('auth');
    
    }

    public function newAd(){
        return view('ad.new');
    }

    public function createAd(AdRequest $request){
        $a = new Ad();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->user_id = Auth::id();
        $a->category_id = $request->input('category');
        $a->price = $request->input('price');
        $a->save();
        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con éxito');
    }
}
