<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'type',
        'image',
        'amount',
        'categories_id',
        'ud'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_id' , 'id');//muchos a muchos
    }

    public function dishes_products()
    {
        return $this->belongsToMany(Product::class);//muchos a muchos
    }

    public function category()
    {
        return $this->belongsTo(DishCategory::class, 'categories_id', 'id');//1 a muchos
    }
}