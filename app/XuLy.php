<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XuLy extends Model
{
    //
    protected $table = 'xuly';

    public function user()
    {
      return $this->belongsTo('App\User','user_id','id');
    }

    public function taoviec()
    {
      return $this->belongsTo('App\TaoViec','taoviec_id','id');
    }

    public function trangthai()
    {
      return $this->belongsTo('App\TrangThai','trangthai_id','id');
    }
}
