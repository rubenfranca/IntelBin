<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    public $timestamps = true;

    public function caixotesLixo()
    {
        return $this->hasMany('App\CaixoteLixo', 'local_id');
    }

    public function pisos()
    {
        return $this->belongsTo('App\Piso', 'piso_id');
    }
    
    public function problemas()
    {
        return $this->hasMany('App\Problemas','local_id');
    }

}
