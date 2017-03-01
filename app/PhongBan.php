<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    //

    protected $table = 'phongban';

    public function user()
    {
      return $this->hasMany('App\User','phongban_id','id');
    }

    public function donvi()
    {
      return $this->belongsTo('App\DonVi','donvi_id','id');
    }


}
