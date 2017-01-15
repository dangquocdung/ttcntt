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
use App\VanBan;
use App\LoaiVB;


class DieuHanhController extends Controller
{
    //
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

    public function getDieuHanhCongViec()
    {
        $tcvcn = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','>','3')->count();

        $tcvcncxl = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','1')->count();

        $tcvcndtc = XuLy::where('user_id',Auth::user()->id)->where('trangthai_id','2')->count();

        $tcvcndxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','>','0')->where('tiendo','<','100')->count();

        $tcvcnxl = XuLy::where('user_id',Auth::user()->id)->where('tiendo','100')->count();

        $tendauviec = TaoViec::where('nguoitao',Auth::user()->id)->orderby('id','desc')->get();

        $tenvanban = VanBan::where('user_id',Auth::user()->id)->orderby('id','desc')->get();



        return view('adminstrap.dieuhanh.home',['tenvanban'=>$tenvanban,'tendauviec'=>$tendauviec,'tcvcn'=>$tcvcn, 'tcvcncxl'=>$tcvcncxl, 'tcvcndxl'=>$tcvcndxl, 'tcvcnxl'=>$tcvcnxl,'tcvcndtc'=>$tcvcndtc]);

        // return view('adminstrap.dieuhanh.home');

    }


    public function postThemCongViec(Request $request)
    {

      //Them cong viec vao TaoViec
      $cv = new TaoViec;

      $cv->nguoitao = Auth::user()->id;
      $cv->thuchien = Auth::user()->id;
      $cv->thoigiantao = Carbon::now();
      $cv->tencongviec = $request->tenCongViec;
      $cv->yeucaucongviec = $request->yeuCauCongViec;
      $cv->viecgap = $request->viecGap;
      $cv->hanxuly = $request->hanXuLy;
      $cv->tiendo = '0';
      $cv->trangthai_id = '1';

      if ($request->hasfile('tepDinhKem')){

        $file = $request->file('tepDinhKem');

        $name = $file->getClientOriginalName();

        $tdk = str_random(4)."_".$name;

        while (file_exists("upload/taoviec/".$tdk)){
          $tdk = str_random(4)."_name";
        }

        $file->move("upload/taoviec",$tdk);

        $cv->tepdinhkem = $tdk;

      }else{

        $cv->tepdinhkem = "";

      }

      $cv->save();

      $vm = TaoViec::all()->last()->id;

      //Them cong viec vao XuLy

      $thuchien = $request->thucHien;

      foreach ($thuchien as $th){

        $xl = new XuLy;

        $xl->taoviec_id = $vm;

        $xl->user_id = $th;

        $xl->tiendo = '0';
        $xl->trangthai_id = '1';

        $xl->noidung = '';

        $xl->thoigian = Carbon::now();
        $xl->save();

        return redirect('adminstrap/dieu-hanh-cong-viec');


      };

    }

    public function postTaoCongVan(Request $request)
    {

      //Them cong viec vao TaoViec
      $cv = new VanBan;

      $cv->user_id = Auth::user()->id;
      $cv->ngaybanhanhvb = $request->ngaybanhanhvb;
      $cv->loaivb_id = $request->loaivb_id;
      $cv->sovb = $request->sovb;
      $cv->trichyeuvb = $request->trichyeuvb;
      $cv->nguoikivb_id = $request->nguoikivb_id;
      $cv->dokhanvb_id = $request->dokhanvb_id;
      $cv->trangthaivb_id = '1';


      if ($request->hasfile('tepvanban')){

        $file = $request->file('tepvanban');

        $name = $file->getClientOriginalName();

        $tdk = str_random(4)."_".$name;

        while (file_exists("upload/taocongvan/".$tdk)){
          $tdk = str_random(4)."_name";
        }

        $file->move("upload/taocongvan",$tdk);

        $cv->tepvanban = $tdk;

      }

      $cv->save();


      return redirect('adminstrap/dieu-hanh-cong-viec');




    }
}
