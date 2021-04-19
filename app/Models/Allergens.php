<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergens extends Model
{
    use HasFactory;

    public function allergens_products()
    {
        return $this->belongsToMany('App\Models\Allergens','products_allergens','idAle','idPro');//muchos a muchos
    }

    public function allergens_users()
    {
        return $this->belongsToMany('App\Models\User','users_allergens','idAle','idUsu');//muchos a muchos
    }


}
