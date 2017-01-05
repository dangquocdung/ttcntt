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



  Route::get('/them-lich-cong-tac', 'BackController@getThemLichCongTac');
  Route::post('/them-lich-cong-tac', 'BackController@postThemLichCongTac');
  Route::get('/xoa-lich-cong-tac/{id}', 'BackController@getXoaLichCongTac');
  Route::get('/sua-lich-cong-tac/{id}', 'BackController@getSuaLichCongTac');
  Route::post('/sua-lich-cong-tac/{id}', 'BackController@postSuaLichCongTac');

  Route::get('/them-tin-tuc', 'BackController@getThemTinTuc');
  Route::post('/them-tin-tuc', 'BackController@postThemTintuc');
  Route::get('/xoa-tin-tuc/{id}', 'BackController@getXoaTinTuc');
  Route::get('/sua-tin-tuc/{id}', 'BackController@getSuaTinTuc');
  Route::post('/sua-tin-tuc/{id}', 'BackController@postSuaTinTuc');

  Route::get('/them-cong-van', 'BackController@getThemCongVan');
  Route::post('/them-cong-van', 'BackController@postThemCongVan');
  Route::get('/xoa-cong-van/{id}', 'BackController@getXoaCongVan');
  Route::get('/sua-cong-van/{id}', 'BackController@getSuaCongVan');
  Route::post('/sua-cong-van/{id}', 'BackController@postSuaCongVan');

  Route::get('/lich-cong-tac','BackController@getLichCongTac' );
  Route::get('/tin-tuc-su-kien','BackController@getTinTuc' );
  Route::get('/cong-van-tai-lieu','BackController@getCongVan' );

});




Route::get('/', function () {
    // return view('trangchu');
    $dichvu = DichVu::orderby('id','asc')->get();
    $doingu = User::->where('didong','<>','null')orderby('id','asc')->get();
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

Route::get('/cong-van', 'FrontController@getCongVan');
