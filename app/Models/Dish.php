<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $filllable = [
        'name',
        'price',
        'description',
        'dish_categories_id'
    ];

    public function dishes_orders()
    {
        return $this->belongsToMany(Order::class);//muchos a muchos
    }

    public function dishes_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    public function dishes_products()
    {
        return $this->belongsToMany(Product::class);//muchos a muchos
    }

    public function dishes_category()
    {
        return $this->belongsTo(DishCategory::class);//muchos a 1
    }
}
