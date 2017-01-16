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

  public function getDiemBao($loaitin){

  		$url = "http://ictnews.vn/rss/".$loaitin;
  		$xml = simplexml_load_file($url);

      DiemBao::getQuery()->delete();


  		foreach($xml->channel->item as $entry){

  			$tindb = new DiemBao;

        $tindb->loaitin_id = '1';
        $tindb->title = $entry->title;

        $tindb->description = $entry->description;
        $tindb->link = $entry->link;
        $tindb->pubDate = $entry->pubDate;

  			$tindb->save();



  		}

    $diembao = DiemBao::orderby('pubDate','desc')->paginate(10);
    return view('diembao',['diembao'=>$diembao]);

  }

  public function getTheGioiViTinh(){

  		$url = "http://www.pcworld.com.vn/articles.rss";
  		$xml = simplexml_load_file($url);

      // DiemBao::getQuery()->delete();

      $diembao = array();


  		foreach($xml->channel->item as $entry){

        $diembao["title"] = $entry->title;
        $diembao["media"] = $entry->children('http://search.yahoo.com/mrss/')->thumbnail->attributes();
        $diembao["description"] = $entry->description;
        $diembao["link"] = $entry->link;
        $diembao["pubDate"] = $entry->pubDate;
        
  		}

    // $diembao = DiemBao::orderby('pubDate','desc')->paginate(10);
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
