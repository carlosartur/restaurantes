<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
