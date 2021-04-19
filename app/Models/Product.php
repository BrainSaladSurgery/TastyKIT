<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function products_dishes()
    {
        return $this->belongsToMany('App\Models\Dish','dishes_products','idPro','idDis');//muchos a muchos
    }

    public function products_users()
    {
        return $this->belongsToMany('App\Models\User','users_products','idPro','idUsu');//muchos a muchos
    }

    public function products_category()
    {
        return $this->belongsTo('App\Models\ProductCategory','idCat','idCat');//muchos a 1
    }

    public function products_allergens()
    {
        return $this->belongsToMany('App\Models\Allergens','products_allergens','idPro','idAle');//muchos a muchos
    }
}
