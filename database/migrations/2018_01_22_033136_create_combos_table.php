<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('value', 10, 2);
            $table->double('discount', 10, 2);
            $table->string('name', 255);
            $table->string('foto', 255);
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        Schema::create('combos_flavour', function (Blueprint $table) {
            $table->integer('combo_id')->unsigned();
            $table->integer('flavour_id')->unsigned();
            $table->foreign('combo_id')->references('id')->on('combos');
            $table->foreign('flavour_id')->references('id')->on('flavours');
            $table->engine = 'InnoDB';
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
        Schema::dropIfExists('combos_flavour');
        Schema::dropIfExists('combos');
    }
}
