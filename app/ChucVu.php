<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    //
    protected $table = 'chucvu';

    public function user()
    {
      return $this->hasMany('App\User','chucvu_id','id');
    }
}
