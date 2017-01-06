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
Route::get('home', 'BackController@getAdminStrap');

Route::group(['prefix'=>'adminstrap','middleware'=>'adminLogin'],function(){

  Route::get('/', 'BackController@getAdminStrap');
  Route::get('/lich-cong-tac', 'BackController@getLichCongTac');
  Route::get('/tin-tuc', 'BackController@getTinTuc');
  Route::get('/van-ban', 'BackController@getVanBan');

  Route::post('/them-lich-cong-tac', 'BackController@postThemLichCongTac');
  Route::put('/sua-lich-cong-tac/{id}', 'BackController@putSuaLichCongTac');
  Route::get('/xoa-lich-cong-tac/{id}', 'BackController@getXoaLichCongTac');

  Route::post('/them-tin-tuc', 'BackController@postThemTintuc');
  Route::get('/xoa-tin-tuc/{id}', 'BackController@getXoaTinTuc');
  Route::put('/sua-tin-tuc/{id}', 'BackController@putSuaTinTuc');

  Route::post('/them-van-ban', 'BackController@postThemCongVan');
  Route::get('/xoa-van-ban/{id}', 'BackController@getXoaCongVan');
  Route::put('/sua-van-ban/{id}', 'BackController@putSuaCongVan');

  Route::get('/lich-cong-tac-all', 'BackController@getLichCongTacAll');
  Route::get('/tin-tuc-all', 'BackController@getTinTucAll');
  Route::get('/van-ban-all', 'BackController@getVanBanAll');

});

Route::group(['prefix'=>'adminstrap/dieu-hanh-cong-viec','middleware'=>'adminLogin'],function(){
  Route::get('/', 'DieuHanhController@getDieuHanhCongViec');
});




Route::get('/', function () {
    // return view('trangchu');
    $dichvu = DichVu::orderby('id','asc')->get();
    $doingu = User::where('quyen','>','0')->orderby('id','asc')->get();
    return view('trangchu',['dichvu'=>$dichvu, 'doingu'=>$doingu]);
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

Route::get('/van-ban', 'FrontController@getCongVan');
