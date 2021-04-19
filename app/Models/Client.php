<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function user_workDays()
    {
        return $this->hasMany('App\Models\Work_Day','idUsu','idUsu');//1 a muchos
    }
    public function client_orders()
    {
        return $this->hasMany('App\Models\Order','idCli','idCli');//1 a muchos
    }

    public function clients_users()
    {
        return $this->belongsToMany('App\Models\User','users_clients','idCli','idUsu');//muchos a muchos
    }
}
