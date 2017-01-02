@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li class="active"><a href="/tin-tuc">Tin tức - Sự kiện</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Tin tức - Sự kiện</h1>
  </div>
</div>

<div class="main">
  <div class="container">

    <div class="row">
        <div class="col-md-8">
          <div class="chitiettin">

            <h2>{{$tin->tieude}}</h2>

            <img src="upload/tintuc/{{$tin->urlhinh}}" alt="">
            <br>
            <h4>{{$tin->tomtat}}</h4>

            {!! $tin->noidung!!}

          </div>

        </div>

        <div class="col-md-4">
          @include('flayout.sidebar')
        </div>
    </div>
  </div>
</div>
@endsection
