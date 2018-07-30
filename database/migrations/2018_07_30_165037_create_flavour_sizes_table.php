<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlavourSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flavour_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('value', 10, 2);
            $table->integer('flavour_id')->unsigned();
            $table->foreign('flavour_id')
                ->references('id')->on('flavours')
                ->onDelete('cascade');

            $table->integer('size_id')->unsigned();
            $table->foreign('size_id')
                ->references('id')->on('sizes')
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
        Schema::dropIfExists('flavour_sizes');
    }
}
