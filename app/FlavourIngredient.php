<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlavourIngredient extends Model
{
    protected $table = "flavour_ingredient";

    public function add($flavour, $ingredient)
    {
        if (is_object($ingredient)) {
            $ingredient = $ingredient->id;
        }
        $_this = $this->getThis($flavour, $ingredient);
        $_this = $_this ?? $this;
        $_this->flavour_id = $flavour->id;
        $_this->ingredient_id = $ingredient;
        $_this->save();
    }

    public function getThis($flavour, $ingredient)
    {
        if (!$flavour || !$ingredient) {
            return new self();
        }
        if (is_object($ingredient)) {
            $ingredient = $ingredient->id;
        }
        return $this
            ->where('flavour_id', $flavour->id)
            ->where('ingredient_id', $ingredient)
            ->first();
    }

    public function ingredients()
    {
        return $this->belongsTo('App\Ingredient', 'ingredient_id');
    }
}
