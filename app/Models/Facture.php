<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public function facture_order()
    {
        return $this->belongsTo('App\Models\Order','idFac','idFac');//muchos a 1
    }

    public function factures_users()
    {
        return $this->belongsToMany('App\Models\User','users_factures','idFac','idUsu');//muchos a muchos
    }
}
