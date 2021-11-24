<?php

namespace App\Models;
use App\Models\Ad;
use App\Models\User;
use App\Models\AdImage;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    static public function ToBeRevisionedCount(){
        return Ad::where('is_accepted',null)->count();
    }

    public function images(){

        return $this->HasMany(AdImage::class);
    }

    public function getRouteKeyName(){

        return 'slug';
    }
}
