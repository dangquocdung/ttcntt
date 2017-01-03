<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichCongTac;
use App\TinTuc;
use App\CongVan;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('home');
    }
    public function getThemLichCongTac()
    {
        return view('blayout.themlichcongtac');
    }

    public function postThemLichCongTac(Request $request){

        $lct = new LichCongTac;
        $lct->user_id = $request->user_id;
        $lct->ngaythang = $request->ngaythang;
        $lct->noidung = $request->noidung;
        $lct->diadiem = $request->diadiem;
        $lct->batdau = $request->batdau;
        $lct->ketthuc = $request->ketthuc;
        $lct->ghichu = $request->ghichu;

        $lct->save();

        return redirect('lich-cong-tac');

    }

    public function getThemTinTuc()
    {
        return view('blayout.themtintuc');
    }

    public function postThemTinTuc(Request $request){

        $tin = new TinTuc;
        $tin->user_id = $request->user_id;
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

        return redirect('tin-tuc');

    }


    public function getThemCongVan()
    {
        return view('blayout.themcongvan');
    }

    public function postThemCongVan(Request $request){

        $cv = new CongVan;
        $cv->user_id = $request->user_id;
        $cv->ngaydang = $request->ngaydang;
        $cv->giodang = $request->giodang;
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

        return redirect('cong-van');

    }


}
