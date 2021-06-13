<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Return relationship ProductCategory with products
     *
     * @return $productCategory
     */
    public function product_category()
    {
        return $this->hasOne(Product::class);//1 a muchos
    }
}