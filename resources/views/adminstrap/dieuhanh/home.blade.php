@extends('adminstrap.dieuhanh.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tổng quan giao việc</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 0</h2>
        <h4>Chưa tiếp nhận</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 0</h2>
        <h4>Đang Xử lý</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 0</h2>
        <h4>Sắp hết hạn</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 0</h2>
        <h4>Đã hoàn thành</h4>
      </div>
    </div>

  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tổng quan nhận việc</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 0</h2>
        <h4>Đã tiếp nhận</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 0</h2>
        <h4>Đã từ chối</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 0</h2>
        <h4>Đã chuyển tiếp</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 0</h2>
        <h4>Đã hoàn thành</h4>
      </div>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Thông tin tiện ích</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 0</h2>
        <h4>Lịch làm việc</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 0</h2>
        <h4>Đăng kí xe</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 0</h2>
        <h4>Đăng kí phòng họp</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 0</h2>
        <h4>Thông tin nhân sự</h4>
      </div>
    </div>
  </div>
</div>

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Luồng công việc</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>


            <th>Chủ đề</th>
            <th>Người tạo</th>

            <th>Ngày tạo</th>
            <th>Hạn xử lý</th>
            <th>Tiến độ</th>


          </tr>

          @foreach ($tendauviec as $lcv)
            <tr>
              <td data-toggle="collapse" data-parent="#accordion" href="#theoDoi{{$lcv->id}}"><span class="caret"></span> {{$lcv->tencongviec}}</td>
              <td>{{$lcv->user->name}}</td>
              <td>{{$lcv->thoigiantao}}</td>
              <td>{{$lcv->hanxuly}}</td>
              <td>{{$lcv->tiendo}}%</td>
            </tr>
            @foreach ($xuly as $xl)
              @if ($xl->taoviec_id == $lcv->id )
              <tr id="theoDoi{{$lcv->id}}" class="panel-collapse collapse">
                  <td><span class="glyphicon glyphicon-arrow-right"></span> {{$xl->user->name}}</td>
                  <td>{{$xl->trangthai->trangthai}}</td>
                  <td>{{$xl->taoviec->tencongviec}}</td>
                  <td>{{$xl->taoviec->hanxuly}}</td>
                  <td>{{$xl->tiendo}}%</td>
              </tr>
              @endif
            @endforeach
          @endforeach

      </table>
    </div>
    </div>
  </div>




@endsection
