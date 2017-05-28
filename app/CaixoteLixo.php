<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaixoteLixo extends Model
{
    protected $table = 'caixoteLixo';
    public $timestamps = true;

    public function recolhas()
    {
        return $this->belongsToMany('App\Recolha', 'caixote_has_recolha', 'caixoteLixo_id', 'recolha_id');
    }
}
