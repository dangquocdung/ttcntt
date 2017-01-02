<?php

use App\User;
use App\DichVu;
use App\TinTuc;
use App\LichCongTac;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/home', 'BackController@index');

Route::get('/them-lich-cong-tac', 'BackController@getThemLichCongTac');
Route::post('/them-lich-cong-tac', 'BackController@postThemLichCongTac');

Route::get('/them-tin-tuc', 'HomeController@getThemTinTuc');
Route::post('/them-tin-tuc', 'HomeController@postThemTintuc');

Route::get('/', function () {
    return view('welcome');
    // $dichvu = DichVu::all();
    // $doingu = User::all();
    // return view('trangchu',['dichvu'=>$dichvu, 'doingu'=>$doingu]);
});

Route::get('/gioi-thieu', function () {
    return view('gioithieu');
});

Route::get('/nang-luc', function () {
    return view('nangluc');
});
Route::get('/dich-vu', function () {
    return view('dichvu');
});
Route::get('/tin-tuc', function () {
    $tintuc = TinTuc::orderby('ngaydang','desc')->paginate(10);
    return view('tintuc',['tintuc'=>$tintuc]);
});

Route::get('/tin-tuc/{id}', function ($id) {
    $tin = TinTuc::find($id);
    return view('chitiettin',['tin'=>$tin]);
});

Route::get('/lien-he', function () {
    return view('lienhe');
});
Route::get('/bien-dao-viet-nam', function () {
    return view('biendao');
});
Route::get('/lich-cong-tac', 'FrontController@getLichCongTac');
