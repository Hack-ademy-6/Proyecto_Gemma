<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;

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
        $a->category_id = $request->input('category');
        $a->save();
        return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con éxito');
    }
}
