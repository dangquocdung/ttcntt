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

use App\SanPham;


class AdminController extends Controller
{

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

      $sanpham = SanPham::orderby('id','asc')->get();
      view()->share('sanpham',$sanpham);

  }



  public function getSanPham()
  {
    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return view('adminstrap.san-pham');
  }

  public function putSanPham(Request $request, $id)
  {

    $sanpham = SanPham::find($id);

    $sanpham->tieude = $request->tieude;

    $sanpham->lienket = $request->lienket;

    if ($request->hasfile('hinhanh')){

      $file = $request->file('hinhanh');

      $name = $file->getClientOriginalName();

      $Hinh = str_random(4)."_".$name;

      while (file_exists("upload/banner/".$Hinh)){
        $Hinh = str_random(4)."_name";
      }

      $file->move("upload/banner",$Hinh);

      $sanpham->hinhanh = $Hinh;

    }

    $sanpham->save();


    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);
    return redirect ('adminstrap/san-pham');
  }

  public function deleteSanPham($id)
  {

    $sanpham = SanPham::find($id);
    $sanpham->delete();

    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return redirect ('adminstrap/san-pham');
  }

  public function themSanPham(Request $request)
  {

    $sanpham = new SanPham;

    $sanpham->loaihinh = '2';

    $sanpham->tieude = $request->tieude;

    $sanpham->lienket = $request->lienket;

    if ($request->hasfile('hinhanh')){

      $file = $request->file('hinhanh');

      $name = $file->getClientOriginalName();

      $Hinh = str_random(4)."_".$name;

      while (file_exists("upload/banner/".$Hinh)){
        $Hinh = str_random(4)."_name";
      }

      $file->move("upload/banner",$Hinh);

      $sanpham->hinhanh = $Hinh;

    }

    $sanpham->save();


    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return redirect ('adminstrap/san-pham');
  }

//Hinh Slide
  public function getHinhSlide()
  {
    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return view('adminstrap.hinh-slide');
  }

  public function putHinhSlide(Request $request, $id)
  {

    $sanpham = SanPham::find($id);

    $sanpham->tieude = $request->tieude;

    $sanpham->lienket = changeTitle($request->tieude);

    if ($request->hasfile('hinhanh')){

      $file = $request->file('hinhanh');

      $name = $file->getClientOriginalName();

      $Hinh = str_random(4)."_".$name;

      while (file_exists("upload/banner/".$Hinh)){
        $Hinh = str_random(4)."_name";
      }

      $file->move("upload/banner",$Hinh);

      $sanpham->hinhanh = $Hinh;

    }

    $sanpham->save();


    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);
    return redirect ('adminstrap/hinh-slide');
  }

  public function deleteHinhSlide($id)
  {

    $sanpham = SanPham::find($id);
    $sanpham->delete();

    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return redirect ('adminstrap/hinh-slide');
  }

  public function themHinhSlide(Request $request)
  {

    $sanpham = new SanPham;

    $sanpham->tieude = $request->tieude;

    $sanpham->lienket = changeTitle($request->tieude);

    if ($request->hasfile('hinhanh')){

      $file = $request->file('hinhanh');

      $name = $file->getClientOriginalName();

      $Hinh = str_random(4)."_".$name;

      while (file_exists("upload/banner/".$Hinh)){
        $Hinh = str_random(4)."_name";
      }

      $file->move("upload/banner",$Hinh);

      $sanpham->hinhanh = $Hinh;

    }

    $sanpham->save();


    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();
    view()->share('lct1',$lct1);

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();
    view()->share('tt1',$tt1);

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();
    view()->share('cv1',$cv1);


    return redirect ('adminstrap/hinh-slide');
  }


  public function getLichCongTacAll()
  {
    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $lichcongtac = LichCongTac::orderby('id','desc')->get();

    return view('adminstrap.lichcongtac-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'lichcongtac'=>$lichcongtac ]);
  }

  public function getTinTucAll()
  {
    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $tintuc = TinTuc::orderby('id','desc')->get();

    return view('adminstrap.tintuc-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'tintuc'=>$tintuc ]);
  }

  public function getVanBanAll()
  {
    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $vanban = CongVan::orderby('id','desc')->get();

    return view('adminstrap.vanban-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'vanban'=>$vanban ]);
  }


  public function postLichCongTacAllTimKiem(Request $request){

    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $noidung = $request->timkiem;

    $lichcongtac = LichCongTac::where('noidung','like',"%$noidung%")->orderby('id','desc')->get();

    return view('adminstrap.lichcongtac-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'lichcongtac'=>$lichcongtac]);

  }

  public function postTinTucAllTimKiem(Request $request){

    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $noidung = $request->timkiem;

    $tintuc = TinTuc::where('noidung','like',"%$noidung%")->orderby('id','desc')->get();

    return view('adminstrap.tintuc-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'tintuc'=>$tintuc]);

  }

  public function postVanBanAllTimKiem(Request $request){

    $lct1 = LichCongTac::where('user_id','=',Auth::user()->id)->count();

    $tt1 = TinTuc::where('user_id','=',Auth::user()->id)->count();

    $cv1 = CongVan::where('user_id','=',Auth::user()->id)->count();

    $noidung = $request->timkiem;

    $vanban = CongVan::where('tieude','like',"%$noidung%")->orwhere('socv','like',"%$noidung%")->orderby('id','desc')->get();

    return view('adminstrap.vanban-all',['lct1'=>$lct1, 'tt1'=>$tt1, 'cv1'=>$cv1, 'vanban'=>$vanban]);

  }


  public function getUserAll()
  {

    return view('adminstrap.user-all');
  }


  public function putEditUser(Request $request, $id)
  {
      $usr = User::find($id);

      $usr->name = $request->hovaten;
      $usr->dienthoai = $request->dienthoai;
      $usr->didong = $request->didong;
      $usr->phongban_id = $request->phongban;
      $usr->chucvu_id = $request->chucvu;
      $usr->quyen = $request->level;

      if ($request->hasfile('hinhanh')){

        $file = $request->file('hinhanh');

        $name = $file->getClientOriginalName();

        $Hinh = str_random(4)."_".$name;

        while (file_exists("upload/team/".$Hinh)){
          $Hinh = str_random(4)."_name";
        }

        $file->move("upload/team",$Hinh);

        $usr->tenhinh = $Hinh;

      }
      else{
        $usr->tenhinh = 'man1.jpg';

      }

      $usr->save();
      return redirect('adminstrap/user-all');
  }


  public function deleteUser($id)
  {
      $usr = User::find($id);
      $usr->delete();
      return redirect('adminstrap/user-all');
  }


}
