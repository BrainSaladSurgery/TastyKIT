<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    public function table_reservations()
    {
        return $this->hasMany('App\Models\reservation','idTab','idTab');//1 a muchos
    }

    public function tables_users()
    {
        return $this->belongsToMany('App\Models\User','users_tables','idUsu','idTab');//muchos a muchos
    }

    public function table_orders()
    {
        return $this->hasMany('App\Models\Order','idTab','idTab');//1 a muchos
    }


}
