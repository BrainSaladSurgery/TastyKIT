<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $filllable = [
        'name',
        'description'
    ];

    public function menus_orders()
    {
        return $this->belongsToMany(Order::class);//muchos a muchos
    }

    public function users_menus()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}
