<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\SoTay;


class SoTayController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

      $thanhvien = User::orderby('id','asc')->get();
      view()->share('thanhvien',$thanhvien);


  }

  public function getSoTay()
  {
      $ghichu = SoTay::where('nguoitao',Auth::user()->id)->orderby('id','desc')->get();

      return view('adminstrap.sotay.home',['ghichu'=>$ghichu]);

      // return view('adminstrap.dieuhanh.home');

  }

  public function postThemGhiChu(Request $request)
  {
    $gc = new SoTay;

    $gc->nguoitao = Auth::user()->id;

    $gc->tieude = $request->tieude;
    $gc->diadiem = $request->diadiem;
    $gc->noidung = $request->noidung;

    $gc->save();

    return redirect('adminstrap/so-tay-ca-nhan');



  }

}
