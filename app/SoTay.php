<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoTay extends Model
{
    //
    protected $table = 'sotay';

    public function user()
    {
    	return $this->belongsTo('App\User','nguoitao','id');
    }
}
