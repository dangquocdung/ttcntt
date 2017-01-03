<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LichCongTac;

class FrontController extends Controller
{
  public function getLichCongTac() {
      $ngaythang = LichCongTac::select('ngaythang')->orderby('ngaythang','desc')->groupby('ngaythang')->get();
      $lichcongtac = LichCongTac::orderby('ngaythang', 'desc')->orderby('batdau', 'desc')->get();
      return view('lichcongtac',['lichcongtac'=>$lichcongtac, 'ngaythang'=>$ngaythang]);
  }

  public function getCongVan() {
      $ngaydang = CongVan::select('ngaydang')->orderby('ngaydang','desc')->groupby('ngaydang')->get();
      $congvan = CongVan::orderby('ngaydang', 'desc')->orderby('giodang', 'desc')->get();
      return view('congvan',['congvan'=>$congvan, 'ngaydang'=>$ngaydang]);
  }
}
