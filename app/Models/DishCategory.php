<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishCategory extends Model
{
    use HasFactory;

    protected $filllable = [
        'name',
        'description'
    ];

    public function dishes_category()
    {
        return $this->hasOne(Dish::class);//1 a muchos
    }
}
