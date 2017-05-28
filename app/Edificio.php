<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table = 'edificio';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany('App\User', 'edificio_has_user', 'edificio_id', 'user_id');
    }

    public function pisos()
    {
        return $this->hasMany('App\Piso', 'edificio_id');
    }
    
    public function locais()
    {
        return $this->hasManyThrough('App\Local', 'App\Piso', 'edificio_id', 'piso_id', 'id');
    }
}
