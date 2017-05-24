<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'local';
    public $timestamps = true;

    public function caixotesLixo()
    {
        return $this->hasMany('app\CaixoteLixo', 'local_id');
    }
}
