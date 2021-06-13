<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Return relationship DishCategory with dish
     *
     * @return $dishCategory
     */
    public function dishes()
    {
        return $this->hasMany(Dish::class, 'categories_id', 'id');//1 a muchos
    }
}