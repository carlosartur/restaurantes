<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesSize extends Model
{
    public function add($category, $size, $price)
    {
        $_this = $this->getThis($category, $size);
        $_this = $_this ?? $this;
        if ($price == 0) {
            $_this->delete();
            return;
        }
        $_this->value = $price;
        $_this->category_id = $category->id;
        $_this->size_id = $size->id;
        $_this->save();
    }

    public function getThis($category, $size)
    {
        return $this
            ->where('category_id', $category->id)
            ->where('size_id', $size->id)
            ->first();
    }
}
