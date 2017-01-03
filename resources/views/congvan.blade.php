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
            @foreach ($ngaythang as $nt)
              <dt>{{$nt->ngaythang}}</dt>

                  <?php $i=1 ?>
                  @foreach ($lichcongtac as $lct)
                    @if ($lct->ngaythang == $nt->ngaythang)
                      @if ( $i%2 == 1)
                        <dd class="pos-left clearfix">
                      @else
                        <dd class="pos-right clearfix">
                      @endif
                          <div class="circ"></div>
                          <div class="time">{{$lct->batdau}}</div>
                          <div class="events">
                              <div class="events-header">
                                <a href="/lich-cong-tac/{{$lct->user_id}}">{{$lct->user->name}}</a>
                              </div>
                              <div class="events-body">
                                  <div class="row">
                                    <div class="events-desc">
                                      <p>Ngày tháng: {{$lct->ngaythang}}<p>
                                      <p>Nội dung: {{$lct->noidung}}<p>
                                      <p>Địa điểm: {{$lct->diadiem}}</p>
                                      <p>Bắt đầu: {{$lct->batdau}}</p>
                                      <p>Kết thúc (dự kiến): {{$lct->ketthuc}}</p>
                                      <p>Ghi chú: {{$lct->ghichu}}</p>
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
