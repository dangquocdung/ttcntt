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

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $chotiepnhan = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.chotiepnhan',['chotiepnhan'=>$chotiepnhan,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getDaTuChoi()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $datuchoi = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.datuchoi',['datuchoi'=>$datuchoi,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getDangXuLy()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $dangxuly = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','4')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.dangxuly',['dangxuly'=>$dangxuly,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getDaXuLy()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $daxuly = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','4')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.daxuly',['daxuly'=>$daxuly,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getSapHetHan()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $saphethan = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','4')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.saphethan',['saphethan'=>$saphethan,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getDaQuaHan()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $daquahan = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','4')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.daquahan',['daquahan'=>$daquahan,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function postXuLyCongViec(Request $request, $id){

      $xuly = XuLy::find($id);

      $xuly->trangthai_id = $request->hanhdong;

      $xuly->tiendo = '1';

      $xuly->save();

      return redirect('adminstrap/dieu-hanh-cong-viec/cho-tiep-nhan');


    }

}
