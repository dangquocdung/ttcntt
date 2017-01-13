<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lichcongtac()
    {
    	return $this->hasMany('App\LichCongTac','user_id','id');
    }

    public function tintuc()
    {
    	return $this->hasMany('App\TinTuc','user_id','id');
    }

    public function taoviec()
    {
    	return $this->hasMany('App\TaoViec','nguoitao','id');
    }

    public function xuly()
    {
    	return $this->hasMany('App\XuLy','user_id','id');
    }


    public function chucvu()
    {
      return $this->belongsTo('App\ChucVu','chucvu_id','id');
    }

    public function phongban()
    {
      return $this->belongsTo('App\PhongBan','phongban_id','id');
    }

    public function level()
    {
      return $this->belongsTo('App\Level','quyen','id');
    }
}
