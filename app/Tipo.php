<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany('app\User', 'tipo_id');
    }
}
