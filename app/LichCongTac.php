<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichCongTac extends Model
{
    //
    protected $table = 'lichcongtac';

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
