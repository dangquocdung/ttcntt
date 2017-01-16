<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\DichVu;
use App\TinTuc;
use App\DiemBao;
use App\LichCongTac;
use App\CongVan;
use App\ThongDiep;

class FrontController extends Controller
{
  public function __construct()
  {
      $stv = User::count();
      view()->share('stv',$stv);

      $slct = LichCongTac::count();
      view()->share('slct',$slct);

      $stt = TinTuc::count();
      view()->share('stt',$stt);

      $scv = CongVan::count();
      view()->share('scv',$scv);

  }

  public function getTrangChu(){
    $dichvu = DichVu::orderby('id','asc')->get();
    $doingu = User::where('quyen','>','0')->where('phongban_id','<','7')->orderby('chucvu_id','asc')->get();

    return view('trangchu',['dichvu'=>$dichvu, 'doingu'=>$doingu]);
  }

  public function getGioiThieu(){

    return view('gioithieu');

  }

  public function getNangLuc(){

    return view('nangluc');

  }

  public function getDichVu(){

    return view('dichvu');

  }

  public function getTinTuc(){

    $tintuc = TinTuc::orderby('ngaydang','desc')->paginate(10);
    return view('tintuc',['tintuc'=>$tintuc]);

  }

  public function getDiemBao(){

  		$url = "http://ictnews.vn/rss/thoi-su";
  		$xml = simplexml_load_file($url);


  		foreach($xml->channel->item as $entry){

  			// $title = $entry->title;
  			// $tieudekhongdau = changeTitle($title);
  			// $link = $entry->link;
  			// $loaitin= substr($link, 35,strlen($link)-35);
  			// $loaitin= substr($loaitin, 0, strpos($loaitin,'/'));
  			// $description = $entry->description;
  			// $pubDate = $entry->pubDate;
  			// $hinh = $entry->children('http://search.yahoo.com/mrss/')->thumbnail->attributes();
        //
  			// //
  			// $slt = LoaiTin::where('TenKhongDau','like',$loaitin)->count();
        //
  			// if ($slt==0){
        //
  			// 	$lt = new LoaiTin;
  			// 	$lt->idTheLoai = 1;
  			// 	$lt->TenKhongDau = $loaitin;
  			// 	$lt->save();
  			// }
        //
  			// $ltm = LoaiTin::where('TenKhongDau','like',$loaitin)->first();
        //

  			$kttin = DiemBao::where('tieudekhongdau','like',$tieudekhongdau)->count();

  			if ($kttin == 0){

  			$tindb = new DiemBao;

        $tindb->loaitin_id = '1';
        $tindb->title = $entry->title;
        $tindb->tieudekhongdau = changeTitle($entry->title);
        $tindb->description = $entry->description;
        $tindb->link = $entry->link;
        $tindb->pubDate = $entry->pubDate;


  			$tindb->save();

  			}

  		}

    $diembao = DiemBao::orderby('pubDate','desc')->paginate(10);
    return view('diembao',['diembao'=>$diembao]);

  }




  public function getChiTietTin($id){

    $tin = TinTuc::find($id);
    return view('chitiettin',['tin'=>$tin]);


  }

  public function getLienHe(){

    return view('lienhe');

  }

  public function getBienDao(){

    return view('biendao');

  }


  public function getLichCongTac() {
      $ngaythang = LichCongTac::select('ngaythang')->orderby('ngaythang','desc')->groupby('ngaythang')->get();
      $lichcongtac = LichCongTac::orderby('ngaythang', 'desc')->orderby('batdau', 'desc')->get();
      return view('lichcongtac',['lichcongtac'=>$lichcongtac, 'ngaythang'=>$ngaythang]);
  }

  public function getCongVan() {
      $ngaydang = CongVan::select('ngaydang')->orderby('ngaydang','desc')->groupby('ngaydang')->get();
      $congvan = CongVan::orderby('ngaydang', 'desc')->orderby('giodang', 'desc')->get();
      return view('vanban',['congvan'=>$congvan, 'ngaydang'=>$ngaydang]);
  }

  public function postGoiThongDiep(Request $request){

    $td = new ThongDiep;

    $td->name = $request->name;
    $td->email = $request->email;
    $td->mes = $request->message;
    $td->save();

    return redirect('/');

  }
}
