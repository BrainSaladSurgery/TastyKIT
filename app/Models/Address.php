<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'location',
        'address',
        'country',
        'ZIP'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'addresses_id', 'id');//1 a muchos
    }
}