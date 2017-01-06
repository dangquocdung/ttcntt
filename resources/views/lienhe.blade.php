@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/lich-cong-tac">Lịch Công tác</a></li>
  <li><a href="/van-ban">Văn bản</a></li>
  <li><a href="/tin-tuc">Tin tức</a></li>
  <li class="active"><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Liên hệ</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Thông tin liên hệ</h4>
        </div>
        <div class="panel-body">

          <label>Trung tâm Công Nghệ Thông Tin và Truyền Thông tỉnh Hà Tĩnh</label>
          <br>
          <label>Địa chỉ: số 18 đường 26-3, TP. Hà Tĩnh, tỉnh Hà Tĩnh</label>
          <br>
          <label>Điện thoại: 0393.853926</label>

        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Gởi Tin nhắn</h4>
        </div>
        <div class="panel-body">
          <form>
              <div class="form-group">
                <label>Họ và Tên</label>
                <input type="text" class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Thông điệp</label>
                <textarea class="form-control" placeholder="Enter Message"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Gởi</button>
            </form>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Bản đồ</h4>
        </div>
        <div class="panel-body">
          <div id = "googleMap" style = "width:100%; height:400px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>
@endsection
