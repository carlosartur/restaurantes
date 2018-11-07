<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    /**
     * Timestamp
     * @var boolean
     */
    public $timestamps = false;

    public static function getFlavoursHomePage($name = false)
    {
        $flavour_retrieve = self::select(
            'flavours.id as id',
            'flavours.name as name',
            'flavours.old_value as old_value',
            'flavours.new_value as new_value',
            'categories.name as category_name'
        )
            ->when($name, function ($query) use ($name) {
                return $query->where('name', 'like', "%$name%");
            })
            ->orderBy('name', 'asc')
            ->join('categories', 'categories.id', '=', 'flavours.category_id')
            ->get();
        $flavour_retrieved_values = [];
        foreach ($flavour_retrieve as $flavour) {
            $flavour_retrieved_values[$flavour->category_name][] = $flavour;
        }
        return collect($flavour_retrieved_values);
    }

    public function combos()
    {
        return $this->belongsToMany(\App\Combo::class, 'combos_flavour', 'flavour_id', 'combo_id');
    }

    public function flavour_size()
    {
        return $this->hasMany('App\FlavourSize');
    }
    
    public function flavour_ingredients()
    {
        return $this->hasMany('App\FlavourIngredient');
    }
}
