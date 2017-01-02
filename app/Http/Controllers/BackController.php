<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichCongTac;
use App\TinTuc;

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


}
