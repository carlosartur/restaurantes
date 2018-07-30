<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlavourSize extends Model
{
    public function add($flavour, $size, $price)
    {
        $_this = $this
            ->where('flavour_id', $flavour->id)
            ->where('size_id', $size->id)
            ->first();
        $_this = $_this ?? $this;
        $_this->flavour_id = $flavour->id;
        $_this->size_id = $size->id;
        $_this->value = $price;
        $_this->save();
    }

    public function size()
    {
        return $this->belongsTo('App\Size', 'size_id', 'id');
    }
}
