<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Address;
use Spatie\Permission\Traits\HasRoles;//Spatie

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'firstName',
        'lastName',
        'name',
        'dni',
        'Bir_Date',
        'phone',
        'type',
        'rol_id',
        'addresses_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'addresses_id', 'id');
    }

    public function user_rol()
    {
        return $this->belongsTo(Rol::class);//muchos a 1
    }

    public function user_workDays()
    {
        return $this->hasMany(WorkDays::class,'work_days_id');//1 a muchos
    }

    public function users_reservations()
    {
        return $this->belongsToMany(Reservation::class);//muchos a muchos
    }

    public function users_clients()
    {
        return $this->belongsToMany(Client::class);//muchos a muchos
    }

    public function order()
    {
        return $this->hasOne(Order::class,'order_id' , 'id');//1 a 1
    }

    public function users_drinks()
    {
        return $this->belongsToMany(Drink::class);//muchos a muchos
    }


    public function users_dishes()
    {
        return $this->belongsToMany(Dish::class);//muchos a muchos
    }

    public function users_products()
    {
        return $this->belongsToMany(Product::class);//muchos a muchos
    }


    public function users_invoices()
    {
        return $this->belongsToMany(Invoice::class);//muchos a muchos
    }
}