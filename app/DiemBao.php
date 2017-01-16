<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiemBao extends Model
{
    //
    protected $table = 'diembao';    

    public function user()
    {
      return $this->belongsTo('App\User','user_id','id');
    }
}
