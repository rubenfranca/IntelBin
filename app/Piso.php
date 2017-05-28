<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = 'piso';
    public $timestamps = true;

    public function locais()
    {
        return $this->hasMany('App\Local', 'piso_id');
    }
    
    public function caixotes()
    {
        return $this->hasManyThrough('App\CaixoteLixo', 'App\Local', 'piso_id', 'local_id', 'id');
    }
}
