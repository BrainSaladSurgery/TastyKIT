<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkDays extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_Time',
        'departure_Time',
        'date',
        'day_week',
        'user_id',
    ];

    public function workDays_user()
    {
        return $this->belongsTo(User::class);//muchos a 1
    }
}
