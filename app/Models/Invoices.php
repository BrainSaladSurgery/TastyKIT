<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $filllable = [
        'total',
        'status'
    ];

    public function invoice_order()
    {
        return $this->belongsTo(Order::class);//muchos a 1
    }

    public function invoices_users()
    {
        return $this->belongsToMany(User::class);//muchos a muchos
    }
}
