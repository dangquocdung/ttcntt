<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongVan extends Model
{
    //
    protected $table = 'congvan';

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
