@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
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
                    <div class="time">{{ Carbon\Carbon::parse($tt->ngaydang)->format('d-m-Y') }}</div>
                    <div class="events">
                        <div class="events-header">
                          {{$tt->tieude}}

                          @if (Auth::user() && Auth::user()->quyen==5)
                            <div class="sua-xoa-item">
                              <a onclick="return confirm('Bạn muốn sửa mục này?')" href="/adminstrap/sua-tin-tuc/{{$tt->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a onclick="return confirm('Bạn muốn xóa mục này?')" href="/adminstrap/xoa-tin-tuc/{{$tt->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                          @endif

                        </div>
                        <div class="events-body">
                            <div class="row">

                              @if (strlen(trim($tt->urlhinh))>0)
                                <div class="col-md-6 pull-left">
                                    <a href="tin-tuc/{{$tt->id}}">
                                      <img class="events-object img-responsive img-rounded" src="upload/tintuc/{{$tt->urlhinh}}" />
                                    </a>
                                </div>
                              @endif
                                <div class="events-desc">
                                  {{$tt->tomtat}}.<a href="tin-tuc/{{$tt->id}}"><em>đọc tiếp...</em></a>
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
