<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrangThai extends Model
{
    //
    protected $table = 'taoviec';

    public function taoviec()
    {
    	return $this->hasMany('App\TaoViec','trangthai_id','id');
    }

    public function xuly()
    {
    	return $this->hasMany('App\XuLy','trangthai_id','id');
    }
}
