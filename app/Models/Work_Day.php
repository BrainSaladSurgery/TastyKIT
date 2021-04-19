<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_Day extends Model
{
    use HasFactory;

    public function workDays_user()
    {
        return $this->belongsTo('App\Models\User','idUsu','idUsu');//muchos a 1
    }


}
