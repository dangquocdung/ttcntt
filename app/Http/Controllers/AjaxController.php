<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DonVi;
use App\PhongBan;

class AjaxController extends Controller
{
    //
    public function getPhongBan($idDonVi)

    {
      $phongban = PhongBan::where('donvi_id', $idDonVi)->get();

      foreach ($phongban as $pb) {
        # code...
        echo "<option value='".$pb->id."'>".$pb->tenphongban."</option>";
      }
    }
}
