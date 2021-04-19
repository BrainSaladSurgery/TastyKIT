<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orders_table()
    {
        return $this->belongsTo('App\Models\Table','idTab','idTab');//muchos a 1
    }

    public function orders_client()
    {
        return $this->belongsTo('App\Models\Client','idCli','idCli');//muchos a 1
    }

    public function orders_users()
    {
        return $this->belongsToMany('App\Models\User','users_orders','idOrd','idUsu');//muchos a muchos
    }

    public function orders_drinks()
    {
        return $this->belongsToMany('App\Models\Drink','orders_drinks','idOrd','idDri');//muchos a muchos
    }

    public function orders_menu()
    {
        return $this->belongsToMany('App\Models\Menu','orders_menus','idOrd','idMen');//muchos a muchos
    }

    public function orders_dishes()
    {
        return $this->belongsToMany('App\Models\Dish','orders_dishes','idOrd','idDis');//muchos a muchos
    }

    public function order_facture()
    {
        return $this->hasOne('App\Models\Facture','idFac','idFac');
    }
}
