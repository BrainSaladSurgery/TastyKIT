<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public function dishes_orders()
    {
        return $this->belongsToMany('App\Models\Order','orders_dishes','idDis','idOrd');//muchos a muchos
    }

    public function dishes_users()
    {
        return $this->belongsToMany('App\Models\User','users_dishes','idDis','idUsu');//muchos a muchos
    }

    public function dishes_products()
    {
        return $this->belongsToMany('App\Models\Product','dishes_products','idDis','idPro');//muchos a muchos
    }

    public function dishes_category()
    {
        return $this->belongsTo('App\Models\DishCategory','idCat','idCat');//muchos a 1
    }
}
