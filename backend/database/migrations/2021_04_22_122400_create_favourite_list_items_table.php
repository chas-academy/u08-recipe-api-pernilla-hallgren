<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_list_items', function (Blueprint $table) {
            $table->id();
            $table->longText('recipe_detail_id');
            $table->longText('recipe_image');
            $table->longText('recipe_label');
            $table->longText('recipe_ingredientlines');
            $table->foreignId('favourite_list_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourite_list_items');
    }
}
