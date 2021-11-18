<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $ads = Ad::where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return view ('welcome', compact('ads'));
    }

    public function adsByCategory($name,$category_id){
        $category = Category::find($category_id);
        $ads = $category->ads()
        ->where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->paginate(3);
        
        return view('ads', compact('category', 'ads'));
    }

    public function details($id){
        $ad = Ad::findOrFail($id);
        return view('ad.details',['ad'=>$ad]);
    }
}
