<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    public function stringPrintValues()
    {
        return "De R$ {$this->formatValue($this->originalValue())} por R$ {$this->formatValue($this->value)}";
    }

    public function originalValue()
    {
        return $this->flavours->sum('old_value');
    }

    public function formatValue($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function flavours()
    {
        return $this->belongsToMany(\App\Flavour::class, 'combos_flavour', 'combo_id', 'flavour_id');
    }
}
