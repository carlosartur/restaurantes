<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'categories_sizes')->withPivot('value');
    }

    public function flavours()
    {
        $this->flavoursRel = $this
            ->join('flavour_sizes', 'flavour_sizes.size_id', '=', 'sizes.id')
            ->join('flavours', 'flavour_sizes.flavour_id', '=', 'flavours.id')
            ->where('sizes.id', $this->id)
            ->get();
    }
}
