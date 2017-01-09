<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DieuHanhController extends Controller
{
    //
    public function __construct()
    {
        $thanhvien = User::orderby('id','asc')->get();
        view()->share('thanhvien',$thanhvien);
    }

    public function getDieuHanhCongViec()
    {
        return view('adminstrap.dieuhanh.home');
    }


    public function postThemCongViec(Request $request)
    {


      $thuchien = $request->thucHien;

      foreach ($thuchien as $tv){
        echo $request->tenCongViec."<br>";
        echo $request->viecGap."<br>";

        echo $request->yeuCauCongViec."<br>";
        echo Auth::user()->id."<br>";
        echo $tv."<br>";
        echo "<br>";
      };

    }
}
