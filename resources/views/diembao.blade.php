@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Điểm báo</h1>
  </div>
</div>

<div class="main">
<div class="container">

  <div class="row">
      <div class="col-md-8">
        <div class="VivaTimeline">
          <dl>
            <?php $i=1 ?>
            @foreach ($diembao as $db)
              @if ( $i%2 == 1)
                <dd class="pos-left clearfix">
              @else
                <dd class="pos-right clearfix">
              @endif

                    <div class="circ"></div>
                    <div class="time">{{$db->pubDate}}</div>
                    <div class="events">
                        <div class="events-header">
                          {{$tt->title}}

                          @if (Auth::user() && Auth::user()->quyen==5)
                            <div class="sua-xoa-item">
                              <a onclick="return confirm('Bạn muốn sửa mục này?')" href="/adminstrap/sua-tin-tuc/{{$tt->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a onclick="return confirm('Bạn muốn xóa mục này?')" href="/adminstrap/xoa-tin-tuc/{{$tt->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                          @endif

                        </div>
                        <div class="events-body">
                            <div class="row">
                                <div class="events-desc">
                                  {{$db->description}}.<a href="tin-tuc/{{$db->id}}"><em>đọc tiếp...</em></a>
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
