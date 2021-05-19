<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'date',
        'pax',
        'hour',
        'table_id'
    ];

    public function reservations_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }

    public function reservations_table()
    {
        return $this->belongsTo(Table::class);//muchos a 1
    }
}
