<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function user_address()
    {
        return $this->belongsTo('App\Models\Address','idAdr','idAdr');//muchos a 1
    }

    public function user_rol()
    {
        return $this->belongsTo('App\Models\Rol','idRol','idRol');//muchos a 1
    }

    public function user_workDays()
    {
        return $this->hasMany('App\Models\Work_Day','idUsu','idUsu');//1 a muchos
    }

    public function users_reservations()
    {
        return $this->belongsToMany('App\Models\reservation','users_reservations','idUsu','idRes');//muchos a muchos
    }

    public function users_clients()
    {
        return $this->belongsToMany('App\Models\Client','users_clients','idUsu','idCli');//muchos a muchos
    }

    public function users_orders()
    {
        return $this->belongsToMany('App\Models\Order','users_orders','idUsu','idOrd');//muchos a muchos
    }

    public function users_drinks()
    {
        return $this->belongsToMany('App\Models\Drink','users_drinks','idUsu','idDri');//muchos a muchos
    }

    public function menus_users()
    {
        return $this->belongsToMany('App\Models\Menu','users_menus','idUsu','idMen');//muchos a muchos
    }

    public function users_dishes()
    {
        return $this->belongsToMany('App\Models\Dish','users_dishes','idUsu','idDis');//muchos a muchos
    }

    public function users_products()
    {
        return $this->belongsToMany('App\Models\Product','users_products','idUsu','idPro');//muchos a muchos
    }

    public function users_allergens()
    {
        return $this->belongsToMany('App\Models\Allergens','users_allergens','idUsu','idAle');//muchos a muchos
    }

    public function users_factures()
    {
        return $this->belongsToMany('App\Models\Facture','users_factures','idUsu','idFac');//muchos a muchos
    }
}
