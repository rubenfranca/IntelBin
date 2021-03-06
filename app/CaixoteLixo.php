<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaixoteLixo extends Model
{
    protected $table = 'caixotelixo';
    public $timestamps = true;

    public function recolhas()
    {
        return $this->belongsToMany('App\Recolha', 'caixote_has_recolha', 'caixoteLixo_id', 'recolha_id');
    }
    
    public function levels()
    {
        return $this->hasMany('App\Levels', 'caixotelixo_id');
    }
}
