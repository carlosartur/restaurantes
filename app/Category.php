<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    /**
     * Table of model
     * @var string
     */
    protected $table = 'categories';

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'categories_sizes')->withPivot('value');
    }

    /**
     * Disable timestamps
     *
     * @return void
     */
    public function disableTimestamps()
    {
        $this->timestamps = false;
    }

    /**
     * Get the category fater
     *
     * @return void
     */
    public function categoryFather()
    {
        return $this->belongsTo(self::class, 'category_id', 'id');
    }

    /**
     * Get the sons categories
     *
     * @return void
     */
    public function categoriesSon()
    {
        return $this->hasMany(self::class);
    }

    /**
     *
     */
    public function flavours()
    {
        return $this->hasMany('App\Flavour');
    }

    /**
     * If is a addicional, returns the categories witch this category is a additional.
     * Otherwise, returns a empty collection
     *
     * @return void
     */
    public function categoryAdditionals()
    {
        return $this->where('categories.id', $this->id)
            ->join('categories_additionals', 'categories.id', 'categories_additionals.category_son_id')
            ->join(DB::raw('categories as category_contains'), 'category_contains.id', 'categories_additionals.category_father_id')
            ->select([DB::raw('category_contains.id as id'), DB::raw('category_contains.name as name')])
            ->get();
    }

    public function getMyAdditionals()
    {
        return $this->where('categories_additionals.category_father_id', $this->id)
            ->join('categories_additionals', 'categories.id', 'categories_additionals.category_son_id')
            ->join(DB::raw('categories as category_contains'), 'category_contains.id', 'categories_additionals.category_son_id')
            ->select([DB::raw('category_contains.id as id'), DB::raw('category_contains.name as name')])
            ->get();
    }
}
