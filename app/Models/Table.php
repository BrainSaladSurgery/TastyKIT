<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
        'min_pax',
        'max_pax',
        'photo'
    ];

    public function table_reservations()
    {
        return $this->hasMany(Reservation::class,'reservation_id');//1 a muchos
    }

    public function tables_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    /**
     * Return relationship Table with orders
     *
     * @return $table
     */
    public function order()
    {
        return $this->hasMany(Order::class,'order_id','id');//1 a muchos
    }
}