<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'Roles';

    protected $fillable = [
        'name'
    ];

    public function rol_user()
    {
        return $this->hasMany(User::class,'user_id');//1 a muchos
    }
}
