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
    <h1>Biển, Đảo Việt Nam</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="biendao">
        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/m-nz3bh2S3c?list=PLLsBxGJhjWcZvdtZQTtLWeGmU8KzyW8YQ" frameborder="0" allowfullscreen></iframe>
      </div>

    </div>


    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>
@endsection
