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
  <li class="active"><a href="/van-ban">Văn bản</a></li>
  <li><a href="/tin-tuc">Tin tức</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Văn bản - Tài liệu</h1>
  </div>
</div>

<div class="main">
<div class="container">

  <div class="row">
      <div class="col-md-8">
        <div class="VivaTimeline">
          <dl>
            @foreach ($ngaydang as $nd)
              <dt>{{$nd->ngaydang}}</dt>

                  <?php $i=1 ?>
                  @foreach ($congvan as $cv)
                    @if ($cv->ngaydang == $nd->ngaydang)
                      @if ( $i%2 == 1)
                        <dd class="pos-left clearfix">
                      @else
                        <dd class="pos-right clearfix">
                      @endif
                          <div class="circ"></div>
                          <div class="time">{{$cv->giodang}}</div>
                          <div class="events">
                              <div class="events-header">
                                {{$cv->socv}}
                                @if (Auth::user() && Auth::user()->quyen==5)
                                  <div class="sua-xoa-item">
                                    <a onclick="return confirm('Bạn muốn sửa mục này?')" href="/adminstrap/sua-cong-van/{{$cv->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a onclick="return confirm('Bạn muốn xóa mục này?')" href="/adminstrap/xoa-cong-van/{{$cv->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                  </div>
                                @endif

                              </div>

                              <div class="events-body">
                                  <div class="row">
                                    <div class="events-desc">
                                      <p><strong>Ngày tháng:</strong> {{$cv->ngaydang}}<p>
                                      <p><strong>Số văn bản:</strong> {{$cv->socv}}<p>
                                      <p><strong>Trích yếu:</strong> {{$cv->tieude}}</p>
                                      <p><strong>Người đăng:</strong> {{$cv->user->name}}</p>
                                      <p><strong>Chức vụ:</strong> {{$cv->user->chucvu->chucvu}}</p>


                                      @if (Auth::user())
                                        @if (strlen(trim($cv->ghichu))>0)
                                          <p><strong>Ghi chú:</strong> {{$cv->ghichu}}</p>
                                        @endif
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a>
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                      @else
                                      <p><strong>Văn bản:</strong> Yêu cầu <a href="login">Đăng nhập</a></p>
                                      @endif


                                    </div>
                                  </div>
                              </div>
                          </div>
                        </dd>
                      <?php $i++ ?>
                    @endif
                  @endforeach
              @endforeach
          </dl>
        </div>
      </div>

      <div class="col-md-4">
        @include('flayout.sidebar')
      </div>
  </div>
</div>
</div>
@endsection
