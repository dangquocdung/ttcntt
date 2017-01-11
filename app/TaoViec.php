<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaoViec extends Model
{
    //
    protected $table = 'taoviec';

    public function user()
    {
    	return $this->belongsTo('App\User','nguoitao','id');
    }

    public function xuly()
    {
    	return $this->hasMany('App\XuLy','taoviec_id','id');
    }

    public function trangthai()
    {
      return $this->belongsTo('App\TrangThai','trangthai_id','id');
    }



}
