<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = 'tintuc';    

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
