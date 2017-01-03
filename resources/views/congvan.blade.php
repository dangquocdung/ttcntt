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
    <h1>Công văn - Tài liệu</h1>
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
                                <a href="/cong-van/{{$cv->id}}">{{$cv->socv}}</a>
                                @if (Auth::user())
                                  <div class="sua-xoa-item">
                                    <a onclick="return confirm('Bạn muốn sửa mục này?')" href="/admin/sua-cong-van/{{$cv->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a onclick="return confirm('Bạn muốn xóa mục này?')" href="/admin/xoa-cong-van/{{$cv->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                  </div>
                                @endif

                              </div>

                              <div class="events-body">
                                  <div class="row">
                                    <div class="events-desc">
                                      <p>Ngày tháng: {{$cv->ngaydang}}<p>
                                      <p>Số văn bản: {{$cv->socv}}<p>
                                      <p>Tiêu đề: {{$cv->tieude}}</p>
                                      <p>Người đăng: {{$cv->user->name}}</p>
                                      <p>Ghi chú: {{$cv->ghichu}}</p>
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a>
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                      <a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>



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
