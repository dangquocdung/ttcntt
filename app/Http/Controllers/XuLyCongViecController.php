<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\TaoViec;
use App\XuLy;
use App\TrangThai;


class XuLyCongViecController extends Controller
{

    //
    public function __construct()
    {
      $thanhvien = User::orderby('id','asc')->get();
      view()->share('thanhvien',$thanhvien);

      $trangthai = TrangThai::orderby('id','asc')->get();
      view()->share('trangthai',$trangthai);


    }

    public function getChoTiepNhan()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $chotiepnhan = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.chotiepnhan',['chotiepnhan'=>$chotiepnhan,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl]);



    }

}
