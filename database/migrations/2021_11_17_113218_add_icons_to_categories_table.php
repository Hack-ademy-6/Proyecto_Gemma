<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIconsToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('icon')->default('fab fa-shopify')->after('name');
        });
        $categories = [
            'Motos', 'Coches', 'Accesorios', 'Libros', 'Juegos', 'Deporte', 'Moda', 'Móviles', 'Electrónica'
        ];
        $icons = [
            "fas fa-motorcycle","fas fa-car","fas fa-gem","fas fa-book","fas fa-gamepad","fas fa-futbol","fas fa-tshirt","fas fa-mobile-alt","fas fa-robot"
        ];
        foreach(Category::all() as $pos=>$category){
            $category->icon = $icons[$pos];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
}
