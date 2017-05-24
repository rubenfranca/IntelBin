<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table = 'edificio';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsToMany('app\User', 'edificio_has_user', 'edificio_id', 'user_id');
    }

    public function pisos()
    {
        return $this->hasMany('app\Piso', 'edificio_id');
    }
}
