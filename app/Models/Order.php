<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'ticket',
        'status',
        'comment',
        'table_id',
        'dish_id',
        'drink_id',
        'ud',
        'user_id',
        'total'
    ];

    public function table()
    {
        return $this->belognsTo(Table::class, 'table_id' , 'id');//1 a muchos
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id' ,'id');//1 a 1
    }

    public function drinks()
    {
        return $this->belongsToMany(Drink::class, 'drink_order', 'order_id', 'drink_id');//muchos a muchos
    }

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_id', 'id');//muchos a muchos
    }

}