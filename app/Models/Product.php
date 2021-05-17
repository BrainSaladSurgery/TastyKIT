<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'image',
        'description',
        'name',
        'product_categories_id'
    ];

    public function products_dishes()
    {
        return $this->belongsToMany(Dish::class);//muchos a muchos
    }

    public function products_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    public function products_category()
    {
        return $this->belongsTo(ProductCategory::class);//muchos a 1
    }

    public function products_allergens()
    {
        return $this->belongsToMany(Allergen::class);//muchos a muchos
    }
}