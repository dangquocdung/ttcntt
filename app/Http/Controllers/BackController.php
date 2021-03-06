<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\LichCongTac;
use App\TinTuc;
use App\CongVan;
use App\User;
use App\DonVi;
use App\PhongBan;
use App\ChucVu;
use App\Level;
use App\ThongDiep;


use App\SanPham;

class BackController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $stv = User::count();
        view()->share('stv',$stv);

        $thanhvien = User::orderby('id','asc')->get();
        view()->share('thanhvien',$thanhvien);

        $donvi = DonVi::orderby('id','asc')->get();
        view()->share('donvi',$donvi);

        $phongban = PhongBan::orderby('id','asc')->get();
        view()->share('phongban',$phongban);

        $chucvu = ChucVu::orderby('id','asc')->get();
        view()->share('chucvu',$chucvu);

        $level = Level::orderby('id','asc')->get();
        view()->share('level',$level);

        $slct = LichCongTac::count();
        view()->share('slct',$slct);

        $lichcongtacall = LichCongTac::orderby('id','desc')->limit(5)->get();
        view()->share('lichcongtacall',$lichcongtacall);

        $stt = TinTuc::count();
        view()->share('stt',$stt);

        $tintucall = TinTuc::orderby('id','desc')->limit(5)->get();
        view()->share('tintucall',$tintucall);

        $scv = CongVan::count();
        view()->share('scv',$scv);

        $vanbanall = CongVan::orderby('id','desc')->limit(5)->get();
        view()->share('vanbanall',$vanbanall);




    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAdminStrap()

    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      return view('adminstrap.home',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1 ]);
    }




    public function postThemLichCongTac(Request $request){

        $lct = new LichCongTac;
        $lct->user_id = Auth::user()->id;
        $lct->ngaythang = $request->ngaythang;
        $lct->noidung = $request->noidung;
        $lct->diadiem = $request->diadiem;
        $lct->batdau = $request->batdau;
        $lct->ketthuc = $request->ketthuc;
        $lct->ghichu = $request->ghichu;

        $lct->save();

        return redirect('adminstrap/lich-cong-tac');

    }

    public function putSuaLichCongTac(Request $request, $id)
    {
        $lct = LichCongTac::find($id);
        $lct->noidung = $request->noidung;
        $lct->diadiem = $request->diadiem;
        $lct->batdau = $request->batdau;
        $lct->ketthuc = $request->ketthuc;
        $lct->ghichu = $request->ghichu;
        $lct->save();
        return redirect('adminstrap/lich-cong-tac');
    }


    public function getXoaLichCongTac($id)
    {
        $lct = LichCongTac::find($id);
        $lct->delete();
        return redirect('adminstrap/lich-cong-tac');
    }



    public function postThemTinTuc(Request $request){

        $tin = new TinTuc;
        $tin->user_id = Auth::user()->id;
        $tin->tieude = $request->tieude;
        $tin->tieudekhongdau = changeTitle($request->tieude);
        $tin->tomtat = $request->tomtat;
        $tin->noidung = $request->noidung;
        $tin->ngaydang = $request->ngaydang;

        if ($request->hasfile('hinhanh')){

          $file = $request->file('hinhanh');

          $name = $file->getClientOriginalName();

          $Hinh = str_random(4)."_".$name;

          while (file_exists("upload/tintuc/".$Hinh)){
            $Hinh = str_random(4)."_name";
          }

          $file->move("upload/tintuc",$Hinh);

          $tin->urlhinh = $Hinh;

        }else{

          $tin->urlhinh = "";

        }

        $tin->save();

        return redirect('adminstrap/tin-tuc');

    }

    public function putSuaTinTuc(Request $request, $id){

        $tin = TinTuc::find($id);
        $tin->tieude = $request->tieude;
        $tin->tieudekhongdau = changeTitle($request->tieude);
        $tin->tomtat = $request->tomtat;
        $tin->noidung = $request->noidung;
        $tin->ghichu = $request->ghichu;



        if ($request->hasfile('hinhanh')){

          $file = $request->file('hinhanh');

          $name = $file->getClientOriginalName();

          $Hinh = str_random(4)."_".$name;

          while (file_exists("upload/tintuc/".$Hinh)){
            $Hinh = str_random(4)."_name";
          }

          $file->move("upload/tintuc",$Hinh);

          $tin->urlhinh = $Hinh;

        }

        $tin->save();

        return redirect('adminstrap/tin-tuc');

    }


    public function getXoaTinTuc($id)
    {
        $tin = TinTuc::find($id);
        $tin->delete();
        return redirect('adminstrap/tin-tuc');
    }




    public function postThemCongVan(Request $request){

        $cv = new CongVan;
        $cv->user_id = Auth::user()->id;
        $cv->ngaydang = $request->ngaydang;
        $giodang = Carbon::now();
        $cv->giodang = $giodang->toTimeString();
        $cv->socv = $request->socv;
        $cv->tieude = $request->tieude;
        // $cv->tieudekhongdau = changeTitle($request->tieude);
        $cv->ghichu = $request->ghichu;

        $cv->ngaydang = $request->ngaydang;

        if ($request->hasfile('vanban')){

          $file = $request->file('vanban');

          $name = $file->getClientOriginalName();

          $Hinh = str_random(4)."_".$name;

          while (file_exists("upload/vanban/pdf/".$Hinh)){
            $Hinh = str_random(4)."_name";
          }

          $file->move("upload/vanban/pdf",$Hinh);

          $cv->vanban = $Hinh;

        }else{

          $cv->vanban = "";

        }

        $cv->save();

        return redirect('adminstrap/van-ban');

    }

    public function putSuaCongVan(Request $request, $id){

        $cv = CongVan::find($id);

        $cv->socv = $request->socv;
        $cv->tieude = $request->tieude;
        // $cv->tieudekhongdau = changeTitle($request->tieude);
        $cv->ghichu = $request->ghichu;



        if ($request->hasfile('vanban')){

          $file = $request->file('vanban');

          $name = $file->getClientOriginalName();

          $Hinh = str_random(4)."_".$name;

          while (file_exists("upload/vanban/pdf/".$Hinh)){
            $Hinh = str_random(4)."_name";
          }

          $file->move("upload/vanban/pdf",$Hinh);

          $cv->vanban = $Hinh;

        }

        $cv->save();

        return redirect('adminstrap/van-ban');

    }

    public function getXoaCongVan($id)
    {
        $cv = CongVan::find($id);
        $cv->delete();
        return redirect('adminstrap/van-ban');
    }

    public function getLichCongTac()
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $lichcongtac = LichCongTac::where('user_id','=',Auth::user()->id)->orderby('id','desc')->get();

      return view('adminstrap.lichcongtac',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'lichcongtac'=>$lichcongtac ]);
    }

    public function getThongDiep()
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $thongdiep = \Response::json(CongVan::get());

      // view()->share('thongdiep',$thongdiep);
      //
      //
      // return view('adminstrap.thongdiep',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1]);

      // return \Response::json(CongVan::get());

      return \View::make('adminstrap.thongdiep',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'thongdiep'=>$thongdiep]);
    }


    public function getTinTuc()
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $tintuc = TinTuc::where('user_id','=',Auth::user()->id)->orderby('id','desc')->get();

      return view('adminstrap.tintuc',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'tintuc'=>$tintuc ]);
    }

    public function getVanBan()
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $vanban = CongVan::where('user_id','=',Auth::user()->id)->orderby('id','desc')->get();

      return view('adminstrap.vanban',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'vanban'=>$vanban ]);
    }



    public function postLichCongTacTimKiem(Request $request)
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $noidung = $request->timkiem;

      $lichcongtac = LichCongTac::where('user_id','=',Auth::user()->id)->where('noidung','like',"%$noidung%")->orderby('id','desc')->get();

      return view('adminstrap.lichcongtac',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'lichcongtac'=>$lichcongtac ]);
    }

    public function postTinTucTimKiem(Request $request)
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $noidung = $request->timkiem;

      $tintuc = TinTuc::where('user_id','=',Auth::user()->id)->where('noidung','like',"%$noidung%")->orderby('id','desc')->get();

      return view('adminstrap.tintuc',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'tintuc'=>$tintuc ]);
    }

    public function postVanBanTimKiem(Request $request)
    {
      $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

      $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

      $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

      $noidung = $request->timkiem;

      $vanban = CongVan::where('user_id','=',Auth::user()->id)->where('tieude','like',"%$noidung%")->orwhere('socv','like',"%$noidung%")->orderby('id','desc')->get();

      return view('adminstrap.vanban',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'vanban'=>$vanban ]);
    }



}
