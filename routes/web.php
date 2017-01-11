<?php

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

  Route::post('/lich-cong-tac-all/tim-kiem', 'BackController@postLichCongTacAllTimKiem');
  Route::post('/tin-tuc-all/tim-kiem', 'BackController@postTinTucAllTimKiem');
  Route::post('/van-ban-all/tim-kiem', 'BackController@postVanBanAllTimKiem');

  Route::post('/lich-cong-tac/tim-kiem', 'BackController@postLichCongTacTimKiem');
  Route::post('/tin-tuc/tim-kiem', 'BackController@postTinTucTimKiem');
  Route::post('/van-ban/tim-kiem', 'BackController@postVanBanTimKiem');

});

Route::group(['prefix'=>'adminstrap/dieu-hanh-cong-viec','middleware'=>'adminLogin'],function(){

  Route::get('/', 'DieuHanhController@getDieuHanhCongViec');

  Route::post('/them-cong-viec', 'DieuHanhController@postThemCongViec');

  Route::get('/cho-tiep-nhan', 'XuLyCongViecController@getChoTiepNhan');


});

Route::get('/', 'FrontController@getTrangChu');

Route::get('/gioi-thieu', 'FrontController@getGioiThieu');

Route::get('/nang-luc', 'FrontController@getNangLuc');

Route::get('/dich-vu', 'FrontController@getDichVu');

Route::get('/tin-tuc', 'FrontController@getTinTuc');

Route::get('/tin-tuc/{id}', 'FrontController@getChiTietTin');

Route::get('/bien-dao-viet-nam', 'FrontController@getBienDao');

Route::get('/lich-cong-tac', 'FrontController@getLichCongTac');

Route::get('/van-ban', 'FrontController@getCongVan');

Route::post('/goi-thong-diep', 'FrontController@postGoiThongDiep');
