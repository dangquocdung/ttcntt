@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Lịch công tác</h1>
  </div>
</div>

<div class="main">
<div class="container">

  <div class="row">
      <div class="col-md-8">
        <div class="VivaTimeline">
          <dl>
            @foreach ($ngaythang as $nt)
              <dt>{{ Carbon\Carbon::parse($nt->ngaythang)->format('d-m-Y') }}</dt>

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
                                  @if (Auth::user() && Auth::user()->quyen==5)
                                  <div class="sua-xoa-item">
                                    <a onclick="return confirm('Bạn muốn sửa mục này??')" href="/adminstrap/sua-lich-cong-tac/{{$lct->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a onclick="return confirm('Bạn muốn xóa mục này??')" href="/adminstrap/xoa-lich-cong-tac/{{$lct->id}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                  </div>
                                @endif
                              </div>
                              <div class="events-body">
                                  <div class="row">
                                    <div class="events-desc">
                                      <p><strong>Ngày tháng:</strong> {{ Carbon\Carbon::parse($lct->ngaythang)->format('d-m-Y') }}<p>
                                      <p><strong>Nội dung:</strong> {!!$lct->noidung!!}<p>
                                      <p><strong>Địa điểm:</strong> {{$lct->diadiem}}</p>
                                      <p><strong>Bắt đầu:</strong> {{$lct->batdau}}</p>
                                      <p><strong>Kết thúc (dự kiến):</strong> {{$lct->ketthuc}}</p>
                                      @if (strlen(trim($lct->ghichu))>0)
                                        <p><strong>Ghi chú:</strong> {{$lct->ghichu}}</p>
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
