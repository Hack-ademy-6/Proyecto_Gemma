<?php

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNameToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table("categories")->delete();
           $categories  = [
            'Motos', 'Coches', 'Accesorios', 'Libros', 'Juegos', 'Deporte', 'Moda', 'Móviles', 'Electrónica'
        ];
           foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category;
            $c->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("categories")->delete();
        $categories  = [
            'motores', 'auto', 'electrodomésticos', 'libros', 
            'juegos', 'deporte', 'imobiles', 'móviles', 'mobiliario'
     ];
        foreach ($categories as $category) {
         $c = new Category();
         $c->name = $category;
         $c->save();

    }
    }
}
