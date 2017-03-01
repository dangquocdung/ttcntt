<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonVi extends Model
{
    //
    protected $table = 'donvi';

    public function phongban()
    {
      return $this->hasMany('App\PhongBan','donvi_id','id');
    }
}
