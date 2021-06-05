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

    public function orders_table()
    {
        return $this->belongsTo(Table::class);//muchos a 1
    }

    public function orders_client()
    {
        return $this->belongsTo(Client::class);//muchos a 1
    }

    public function orders_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    public function orders_drinks()
    {
        return $this->belongsToMany(Drink::class);//muchos a muchos
    }

    public function orders_menu()
    {
        return $this->belongsToMany(Menu::class);//muchos a muchos
    }

    public function orders_dishes()
    {
        return $this->belongsToMany(Dish::class);//muchos a muchos
    }

    public function order_facture()
    {
        return $this->hasOne(Invoice::class);
    }
}