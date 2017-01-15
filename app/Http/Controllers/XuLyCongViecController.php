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
use App\LoaiVB;


class XuLyCongViecController extends Controller
{

    //
    public function __construct()
    {
      $thanhvien = User::orderby('id','asc')->get();
      view()->share('thanhvien',$thanhvien);

      $trangthai = TrangThai::orderby('id','asc')->get();
      view()->share('trangthai',$trangthai);

      $loaivb = LoaiVB::all();
      view()->share('loaivb',$loaivb);


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

      $dangxuly = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->orderby('id','desc')->get();

      return view('adminstrap.dieuhanh.dangxuly',['dangxuly'=>$dangxuly,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

    }

    public function getDaXuLy()
    {

      $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

      $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

      $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

      $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

      $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

      $daxuly = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->orderby('id','desc')->get();

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

        $taoviec = TaoViec::find($xuly->taoviec_id);
        if ($taoviec->trangthai_id==1) {
          $taoviec->trangthai_id = $request->hanhdong;
        }
        $taoviec->save();

      $xuly->trangthai_id = $request->hanhdong;
      $xuly->tiendo = '10';
      $xuly->save();

      return redirect('adminstrap/dieu-hanh-cong-viec/cho-tiep-nhan');


    }

    public function postCapNhatCongViec(Request $request, $id){

      $xuly = XuLy::find($id);

      $xuly->noidung = $request->noiDungXuLy;
      $xuly->tiendo = $request->tienDoXuLy;

      if ($request->tienDoXuLy == 100){

        $taoviec = TaoViec::find($xuly->taoviec_id);

          $taoviec->trangthai_id = '6';

        $taoviec->save();

      }

      if ($request->hasfile('tepDinhKem')){

        $file = $request->file('tepDinhKem');

        $name = $file->getClientOriginalName();

        $tdk = str_random(4)."_".$name;

        while (file_exists("upload/taoviec/xuly/".$tdk)){
          $tdk = str_random(4)."_name";
        }

        $file->move("upload/taoviec/xuly",$tdk);

        $xuly->tepdinhkem = $tdk;

      }

      $xuly->save();

      return redirect('adminstrap/dieu-hanh-cong-viec/dang-xu-ly');


    }

}
