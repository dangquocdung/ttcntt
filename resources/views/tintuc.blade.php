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
        <div class="VivaTimeline">
          <dl>
            <?php $i=1 ?>
            @foreach ($tintuc as $tt)
              @if ( $i%2 == 1)
                <dd class="pos-left clearfix">
              @else
                <dd class="pos-right clearfix">
              @endif

                    <div class="circ"></div>
                    <div class="time">{{$tt->ngaydang}}</div>
                    <div class="events">
                        <div class="events-header">
                          <a href="/tin-tuc/{{$tt->id}}">{{$tt->tieude}}</a>

                        </div>
                        <div class="events-body">
                            <div class="row">
                              <div class="col-md-6 pull-left">
                                    <img class="events-object img-responsive img-rounded" src="upload/tintuc/{{$tt->urlhinh}}" />
                                </div>
                                <div class="events-desc">
                                  {{$tt->tomtat}}
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
                <?php $i++ ?>
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