<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolha extends Model
{
    protected $table = 'recolha';
    public $timestamps = true;

    public function caixotesLixo()
    {
        return $this->belongsToMany('app\CaixoteLixo', 'caixote_has_recolha', 'recolha_id', 'caixoteLixo_id');
    }

}
