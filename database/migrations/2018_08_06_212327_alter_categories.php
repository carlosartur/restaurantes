<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null');
            $table->boolean('additional')->default(false);
            $table->boolean('required')->default(false);
        });
        
        Schema::create('categories_additionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_father_id')->unsigned()->nullable();
            $table->foreign('category_father_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
            $table->integer('category_son_id')->unsigned()->nullable();
            $table->foreign('category_son_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
