<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problemas extends Model
{
    protected $table='problemas';
    public $timestamps = true;
    
    function local()
    {
        $this->belongsTo('App\Local', 'local_id');
    }
}
