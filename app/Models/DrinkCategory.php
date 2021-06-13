<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Return relationship DrinkCategory with drinks
     *
     * @return $drinkCategory
     */
    public function drinks()
    {
        return $this->hasMany(Drink::class, 'categories_id', 'id');//1 a muchos
    }

}