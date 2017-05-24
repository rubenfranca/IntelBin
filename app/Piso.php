<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = 'piso';
    public $timestamps = true;

    public function locais()
    {
        return $this->hasMany('app\Local', 'piso_id');
    }
}
