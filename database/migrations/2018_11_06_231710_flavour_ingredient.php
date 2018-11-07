<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FlavourIngredient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flavour_ingredient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flavour_id')->unsigned();
            $table->foreign('flavour_id')
                ->references('id')->on('flavours')
                ->onDelete('cascade');

            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')
                ->references('id')->on('ingredients')
                ->onDelete('cascade');
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
        //
    }
}
