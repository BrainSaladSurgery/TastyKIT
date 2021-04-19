<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function rol_user()
    {
        return $this->hasMany('App\Models\User','idRol','idRol');//1 a muchos
    }
}
