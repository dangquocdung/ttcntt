@extends('adminstrap.dieuhanh.layout')
@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Công việc chờ tiếp nhận</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
              <th></th>
              <th>Người tạo</th>
              <th>Chủ đề</th>
              <th>Ngày tạo</th>
              <th>Hạn xử lý</th>
              <th>Yêu cầu</th>
              <th></th>
            </tr>
            @foreach ($chotiepnhan as $ctn)
            <tr>
              <td><input type="checkbox" name="action" value=""></td>
              <td>{{$ctn->user->name}}</td>
              <td>{{$ctn->taoviec->tencongviec}}</td>
              <td>{{$ctn->taoviec->thoigiantao}}</td>
              <td>{{$ctn->taoviec->hanxuly}}</td>
              <td>{!!$ctn->taoviec->yeucaucongviec!!}</td>
              <td><button type="button" class="btn btn-success"  data-toggle="modal" data-target="#CongViec{{$ctn->id}}">Chi tiết</button></td>
            </tr>
            <!-- Chitiet Cong viec -->
            <div class="modal fade" id="CongViec{{$ctn->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form action="adminstrap/dieu-hanh-cong-viec/them-cong-viec" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Thêm Công việc</h4>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                          <label>Tên công việc</label>
                          <input type="text" class="form-control" name="tenCongViec" placeholder="Nhập tên công việc" required="" autofocus="" />
                        </div>
                        <div class="form-group">
                            <label>Tệp đính kèm <span class="glyphicon glyphicon-paperclip"></span></label>
                            <input type="file" name="tepDinhKem"/>
                        </div>
                        <div class="form-group">
                          <label>Yêu cầu công việc</label>
                          <textarea class="form-control" name="yeuCauCongViec" rows="5" placeholder="Nhập yêu cầu công việc" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Việc gấp</label>
                            <select name="viecGap" class="form-control">
                              <option value="0" selected="">Không gấp</option>
                              <option value="1">Gấp</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hạn xử lý</label>
                            <input type="datetime-local" name="hanXuLy" required="" class="form-control"/>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Thêm Việc</button>
                      </div>
                </form>
                </div>
              </div>
            </div>

            @endforeach
        </table>
      </div>
    </div>
    <div class="panel-footer">
      <button type="button" class="btn btn-success" value="1">Tiếp nhận</button>
      <button type="button" class="btn btn-info" value="2">Chuyển tiếp</button>
      <button type="button" class="btn btn-danger" value="3">Từ chối</button>
    </div>
</div>

@endsection
