<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'data_nascimento', 'tipo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public $timestamps = true;

    public function edificios()
    {
        return $this->belongsToMany('App\Edificio', 'edificio_has_user', 'user_id', 'edificio_id');
    }

    public function recolhas()
    {
        return $this->hasMany('App\Recolha', 'user_id');
    }

    public function tipos()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }
}
