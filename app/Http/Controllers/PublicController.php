<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $ads = Ad::orderBy('created_at','desc')->take(5)->get();
        return view ('welcome', compact('ads'));
    }

    public function adsByCategory($name,$category_id){
        $category = Category::find($category_id);
        $ads = $category->ads()
        ->orderBy('created_at', 'desc')
        ->paginate(5);
        
        return view('ads', compact('category', 'ads'));
    }
}
