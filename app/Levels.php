<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    protected $table ='levels';
    public $timestamps =true;
    
    public function caixotes()
    {
        return $this->belongsTo('App\CaixoteLixo','caixote_id');
    }
}
