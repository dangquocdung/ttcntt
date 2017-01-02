@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/tin-tuc">Tin tức - Sự kiện</a></li>
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
          <h4 class="panel-title">Điền thông tin theo mẫu</h4>
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
    </div>
    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>
@endsection
