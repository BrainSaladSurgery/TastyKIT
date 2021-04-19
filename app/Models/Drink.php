<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    public function drinks_orders()
    {
        return $this->belongsToMany('App\Models\Order','orders_drinks','idDri','idOrd');//muchos a muchos
    }

    public function drinks_users()
    {
        return $this->belongsToMany('App\Models\User','users_drinks','idDrin','idUsu');//muchos a muchos
    }
}
