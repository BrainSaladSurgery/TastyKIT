<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    public function reservations_users()
    {
        return $this->belongsToMany('App\Models\User','users_reservations','idRes','idUsu');//muchos a muchos
    }

    public function reservations_table()
    {
        return $this->belongsTo('App\Models\Table','idTab','idTab');//muchos a 1
    }


}
