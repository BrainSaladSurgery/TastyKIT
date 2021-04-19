<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    use HasFactory;

    public function dishes_category()
    {
        return $this->hasOne('App\Models\Dish','idCat','idCat');//1 a muchos
    }
}
