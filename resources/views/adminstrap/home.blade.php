@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tổng quan trang web</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$stv}}</h2>
        <h4>Thành viên</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{$slct}}</h2>
        <h4>Lịch công tác</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> {{$stt}}</h2>
        <h4>Tin tức</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{$scv}}</h2>
        <h4>Công văn</h4>
      </div>
    </div>
  </div>
  </div>

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Danh sách thành viên</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <th>Họ và Tên</th>
            <th>Chức vụ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
          </tr>
          @foreach ($thanhvien as $tv)
          <tr>
            <td>{{$tv->name}}</td>
            <td>{{$tv->chucvu}}</td>
            <td>{{$tv->email}}</td>
            <td>{{$tv->didong}}</td>
          </tr>
          @endforeach
      </table>
    </div>
    </div>
  </div>
@endsection
