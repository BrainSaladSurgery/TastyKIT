<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $filllable = [
        'city',
        'location',
        'address',
        'country',
        'ZIP'
    ];

    public function user_address()
    {
        return $this->hasMany(User::class,'user_id');//1 a muchos
    }
}
