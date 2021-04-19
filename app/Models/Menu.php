<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function menus_orders()
    {
        return $this->belongsToMany('App\Models\Order','orders_menus','idMen','idOrd');//muchos a muchos
    }

    public function users_menus()
    {
        return $this->belongsToMany('App\Models\User','users_menus','idMen','idUsu');//muchos a muchos
    }
}
