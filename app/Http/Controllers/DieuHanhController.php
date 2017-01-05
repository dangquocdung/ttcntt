<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DieuHanhController extends Controller
{
    //
    public function getDieuHanhCongViec()

    {
        return view('adminstrap.dieuhanh.home');
    }
}
