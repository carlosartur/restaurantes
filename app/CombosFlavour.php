<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CombosFlavour extends Model
{
    protected $table = 'combos_flavour';

    protected $fillable = ['combo_id', 'flavour_id'];
}
