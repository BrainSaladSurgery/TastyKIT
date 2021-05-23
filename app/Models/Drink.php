<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $filllable = [
        'name',
        'amount'
    ];

    public function drinks_orders()
    {
        return $this->belongsToMany(Order::class);//muchos a muchos
    }

    public function drinks_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}
