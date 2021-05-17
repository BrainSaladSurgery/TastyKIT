<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    use HasFactory;

    protected $filllable = [
        'name',
        'family'
    ];

    public function allergens_products()
    {
        return $this->belongsToMany(Product::class);//muchos a muchos
    }

    public function allergens_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}
