<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoTayController extends Controller
{
    //
    public function getSoTay (){
      return view('adminstrap.so-tay');
    }
}
