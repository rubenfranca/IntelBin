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
}
