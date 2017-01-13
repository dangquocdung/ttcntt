@extends('adminstrap.dieuhanh.layout')
@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Công việc chờ tiếp nhận</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
              <th>TT</th>
              <th>Người tạo</th>
              <th>Chủ đề</th>
              <th>Ngày tạo</th>
              <th>Hạn xử lý</th>
              <th>Yêu cầu</th>
              <th></th>
            </tr>
            <?php $i=1 ?>
            @foreach ($chotiepnhan as $ctn)
            <tr>
              <td>{{$i}}</td>
              <td>{{$ctn->user->name}}</td>
              <td>{{$ctn->taoviec->tencongviec}}</td>
              <td>{{$ctn->taoviec->thoigiantao}}</td>
              <td>{{$ctn->taoviec->hanxuly}}</td>
              <td>{!!$ctn->taoviec->yeucaucongviec!!}</td>
              <td>
                <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#CongViec{{$ctn->id}}">Chi tiết</button>
                <button type="button" class="btn btn-sm btn-info"  data-toggle="modal" data-target="#ChuyenTiep{{$ctn->id}}">Chuyển Tiếp</button>
              </td>
            </tr>
            <?php $i++; ?>
            <!-- Chitiet Cong viec -->
            <div class="modal fade" id="CongViec{{$ctn->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form action="adminstrap/dieu-hanh-cong-viec/xu-ly-cong-viec/{{$ctn->id}}" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Chi tiết Công việc</h4>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                          @if ($ctn->taoviec->viecgap)
                            <label>Việc gấp</label>
                          @endif
                        </div>

                        <div class="form-group">
                          <p><strong>Người tạo: </strong> <span>{{$ctn->user->name}}</span></p>
                        </div>

                        <div class="form-group">
                          <p><strong>Tên công việc: </strong> <span>{{$ctn->taoviec->tencongviec}}</span></p>
                        </div>
                        <div class="form-group">
                          <p><strong>Tệp đính kèm: </strong></p>
                          <p><a href="/upload/taoviec/{{$ctn->taoviec->tepdinhkem}}"><span class="glyphicon glyphicon-paperclip"></span></a></p>
                        </div>
                        <div class="form-group">
                          <p><strong>Yêu cầu công việc: </strong>
                          <p>{!! $ctn->taoviec->yeucaucongviec !!}</p>
                        </div>
                       <div class="form-group">
                            <p><strong>Hạn xử lý:</strong> <span>{{$ctn->taoviec->hanxuly}}</span></p>
                        </div>

                        <div class="form-group">
                          <label class="radio-inline"><input id="tiepnhan" type="radio" name="hanhdong" value="4" checked>Tiếp nhận</label>
                          <label class="radio-inline"><input id="tuchoi" type="radio" name="hanhdong" value="2">Từ chối</label>
                        </div>


                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Xử lý</button>

                      </div>
                </form>
                </div>
              </div>
            </div>

            @endforeach
        </table>
      </div>
    </div>
</div>

@endsection
