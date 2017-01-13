@extends('adminstrap.dieuhanh.layout')
@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Theo dõi tiến độ công việc đã tạo</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <th>Chủ đề</th>
            <th>Người tạo</th>
            <th>Ngày tạo</th>
            <th>Hạn xử lý</th>
            <th>Trạng thái</th>
          </tr>
          @foreach ($tendauviec as $lcv)
            <tr>
              <td data-toggle="collapse" data-parent="#accordion" href="#theoDoi{{$lcv->id}}"><span class="caret"></span> <strong>{{$lcv->tencongviec}}</strong></td>
              <td>{{$lcv->user->name}}</td>
              <td>{{$lcv->thoigiantao}}</td>
              <td>{{$lcv->hanxuly}}</td>
              <td>{{$lcv->trangthai->trangthai}}</td>
            </tr>
            @foreach ($xuly as $xl)
              @if ($xl->taoviec_id == $lcv->id )
              <tr id="theoDoi{{$lcv->id}}" class="info panel-collapse collapse">
                  <td><span class="glyphicon glyphicon-arrow-right"></span> <small>{{$xl->user->name}}</small></td>
                  <td><small>{{$xl->trangthai->trangthai}}</small></td>
                  <td><a href="/upload/taoviec/xuly/{{$xl->tepdinhkem}}"><small>{{$xl->tepdinhkem}}</small></a></td>
                  <td><small>{{$xl->taoviec->hanxuly}}</small></td>
                  <td><small>{{$xl->tiendo}}%</small></td>
              </tr>
              @endif
            @endforeach
          @endforeach
      </table>
    </div>
    </div>
  </div>

  <!-- Tien ich -->

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





@endsection
