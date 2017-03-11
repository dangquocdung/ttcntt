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

Route::get('/', 'FrontController@getTrangChu');

Route::get('/gioi-thieu', 'FrontController@getGioiThieu');

Route::get('/nang-luc', 'FrontController@getNangLuc');

Route::get('/chuyen-so', 'FrontController@getChuyenSo');

Route::get('/dich-vu', 'FrontController@getDichVu');

Route::get('/tin-tuc', 'FrontController@getTinTuc');

Route::get('/tin-tuc/{id}', 'FrontController@getChiTietTin');


Route::get('/bien-dao-viet-nam', 'FrontController@getBienDao');

Route::get('/nong-thon-moi', 'FrontController@getNongThonMoi');


Route::get('/lich-cong-tac', 'FrontController@getLichCongTac');

Route::get('/van-ban', 'FrontController@getCongVan');

Route::get('/diem-bao/ictnews/{loaitin}', 'FrontController@getDiemBao');

Route::get('/diem-bao/the-gioi-vi-tinh', 'FrontController@getTheGioiViTinh');


Route::post('/goi-thong-diep', 'FrontController@postGoiThongDiep');


Route::group(['prefix'=>'adminstrap','middleware'=>'userLogin'],function(){

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




});

Route::group(['prefix'=>'adminstrap','middleware'=>'adminLogin'],function(){

  Route::get('/san-pham', 'AdminController@getSanPham');
  Route::put('/put-san-pham/{id}', 'AdminController@putSanPham');
  Route::delete('/delete-san-pham/{id}', 'AdminController@deleteSanPham');
  Route::post('/them-san-pham', 'AdminController@themSanPham');

  Route::get('/hinh-slide', 'AdminController@getHinhSlide');
  Route::put('/put-hinh-slide/{id}', 'AdminController@putHinhSlide');
  Route::delete('/delete-hinh-slide/{id}', 'AdminController@deleteHinhSlide');
  Route::post('/them-hinh-slide', 'AdminController@themHinhSlide');


  Route::get('/user-all', 'AdminController@getUserAll');
  Route::put('/user-all/edit/{id}', 'AdminController@putEditUser');
  Route::delete('/user-all/delete/{id}', 'AdminController@deleteUser');

  Route::get('/lich-cong-tac-all', 'AdminController@getLichCongTacAll');
  Route::get('/tin-tuc-all', 'AdminController@getTinTucAll');
  Route::get('/van-ban-all', 'AdminController@getVanBanAll');

  Route::post('/lich-cong-tac-all/tim-kiem', 'AdminController@postLichCongTacAllTimKiem');
  Route::post('/tin-tuc-all/tim-kiem', 'AdminController@postTinTucAllTimKiem');
  Route::post('/van-ban-all/tim-kiem', 'AdminController@postVanBanAllTimKiem');

  Route::post('/lich-cong-tac/tim-kiem', 'AdminController@postLichCongTacTimKiem');
  Route::post('/tin-tuc/tim-kiem', 'AdminController@postTinTucTimKiem');
  Route::post('/van-ban/tim-kiem', 'AdminController@postVanBanTimKiem');

});


Route::group(['prefix'=>'ajax'],function(){

  Route::get('/phongban/{idDonVi}', 'AjaxController@getPhongBan');

});

Route::group(['prefix'=>'adminstrap/dieu-hanh-cong-viec','middleware'=>'userLogin'],function(){

  Route::get('/', 'DieuHanhController@getDieuHanhCongViec');

  Route::post('/them-cong-viec', 'DieuHanhController@postThemCongViec');

  Route::get('/cho-tiep-nhan', 'XuLyCongViecController@getChoTiepNhan');
  Route::get('/da-tu-choi', 'XuLyCongViecController@getDaTuChoi');
  Route::get('/dang-xu-ly', 'XuLyCongViecController@getDangXuLy');
  Route::get('/da-xu-ly', 'XuLyCongViecController@getDaXuLy');
  Route::get('/sap-het-han', 'XuLyCongViecController@getSapHetHan');
  Route::get('/da-qua-han', 'XuLyCongViecController@getDaQuaHan');

  Route::post('/xu-ly-cong-viec/{id}', 'XuLyCongViecController@postXuLyCongViec');
  Route::post('/dang-xu-ly/{id}', 'XuLyCongViecController@postCapNhatCongViec');

  Route::get('/danh-sach-thanh-vien', 'QuanLyNhanSuController@getDanhSachThanhVien');

  Route::post('/tao-cong-van', 'DieuHanhController@postTaoCongVan');


});

Route::group(['prefix'=>'adminstrap/so-tay-ca-nhan','middleware'=>'userLogin'],function(){

  Route::get('/', 'SoTayController@getSoTay');

  Route::post('/them-ghi-chu', 'SoTayController@postThemGhiChu');
  Route::post('/them-ghi-chu', 'SoTayController@postThemGhiChu');
  Route::put('/sua-ghi-chu/{id}', 'SoTayController@putGhiChu');
  Route::delete('/xoa-ghi-chu/{id}', 'SoTayController@deleteGhiChu');
});
