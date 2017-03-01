<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    //
    protected $table = 'vanban';

    public function nguoitaovb()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function nguoikivb()
    {
    	return $this->belongsTo('App\User','nguoikivb_id','id');
    }
}
