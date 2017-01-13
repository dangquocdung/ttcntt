<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\PhongBan;
use App\ChucVu;
use App\Level;
use App\XuLy;

class QuanLyNhanSuController extends Controller
{
    //
    public function __construct()
    {
      $thanhvien = User::orderby('id','asc')->get();
      view()->share('thanhvien',$thanhvien);

      $phongban = PhongBan::orderby('id','asc')->get();
      view()->share('phongban',$phongban);

      $chucvu = ChucVu::orderby('id','asc')->get();
      view()->share('chucvu',$chucvu);

      $level = Level::orderby('id','asc')->get();
      view()->share('level',$level);

    }

    public function getDanhSachThanhVien()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();


      return view('adminstrap.dieuhanh.danhsachthanhvien',['tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }
}
