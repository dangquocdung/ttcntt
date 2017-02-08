<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoTayController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

      $thanhvien = User::orderby('id','asc')->get();
      view()->share('thanhvien',$thanhvien);

      $trangthai = TrangThai::orderby('id','asc')->get();
      view()->share('trangthai',$trangthai);

      $xuly = XuLy::all();
      view()->share('xuly',$xuly);

      $loaivb = LoaiVB::all();
      view()->share('loaivb',$loaivb);

      // $tcvcn = TaoViec::where('thuchien','=',Auth::user()->id)->count();
      // view()->share('tcvcn',$tcvcn);
      //
      // $tcvcncxl = TaoViec::where('thuchien',Auth::user()->id)->where('tiendo','0')->count();
      // view()->share('tcvcncxl',$tcvcncxl);
      //
      // $tcvcndxl = TaoViec::where('thuchien',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();
      // view()->share('tcvcndxl',$tcvcndxl);
      //
      // $tcvcnxl = TaoViec::where('thuchien',Auth::user()->id)->where('tiendo','100')->count();
      // view()->share('tcvcnxl',$tcvcnxl);




  }

  public function getSoTay()
  {
      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $tendauviec = TaoViec::where('nguoitao',Auth::user()->id)->orderby('id','desc')->get();

      $tenvanban = VanBan::where('user_id',Auth::user()->id)->orderby('id','desc')->get();



      return view('adminstrap.sotay.home',['tenvanban'=>$tenvanban,'tendauviec'=>$tendauviec,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

      // return view('adminstrap.dieuhanh.home');

  }

}
