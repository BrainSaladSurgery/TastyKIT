<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function product_category()
    {
        return $this->hasOne('App\Models\Product','idCat','idCat');//1 a muchos
    }
}
