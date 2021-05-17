<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $filllable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phone'
    ];

    public function user_workDays()
    {
        return $this->hasMany(WorkDays::class,'work_days_id');//1 a muchos
    }
    public function client_orders()
    {
        return $this->hasMany(Order::class,'order_id');//1 a muchos
    }

    public function clients_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}
