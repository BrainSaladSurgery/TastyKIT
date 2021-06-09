<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'total',
        'created_at'
    ];

    public function table()
    {
        return $this->belognsTo(Table::class, 'table_id' , 'id');//muchos a 1
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id' ,'id');//1 a 1
    }

    public function drink($drinkId)
    {
        return DB::table('orders')->join('drinks','orders.drink_id','=','drinks.id')->where('drinks.id', $drinkId)->first();
    }

    public function dish($dishId)
    {
        return DB::table('orders')->join('dishes','orders.dish_id','=','dishes.id')->where('dishes.id', $dishId)->first();
    }

    public function mesa($mesaId)
    {
        return DB::table('orders')->join('tables','orders.table_id','=','tables.id')->where('tables.id', $mesaId)->first();
    }

    public function owner($userId)
    {
        return DB::table('orders')->join('users','orders.user_id','=','users.id')->where('users.id', $userId)->first();
    }

}