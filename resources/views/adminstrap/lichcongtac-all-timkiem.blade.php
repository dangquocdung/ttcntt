@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Lịch công tác. Tìm kiếm theo nội dung: {{$timkiem}}</h3>
  </div>
  <div class="panel-body">
    <div class="row">
          <div class="col-md-12">
              <!-- <input class="form-control" type="submit" placeholder="Filter Pages..."> -->
              <form action="adminstrap/lich-cong-tac-all/tim-kiem" method="post">
                <input class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Filter Pages..." name="timkiem">
              </form>

          </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày tháng</th>
            <th>Người đăng</th>
            <th>Nội dung</th>
            <th>Địa điểm</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Ghi chú</th>
            <th></th>
          </tr>
          @foreach($lichcongtac as $lct)
          <tr>
            <td>{{$lct->ngaythang}}</td>
            <td>{{$lct->user->name}}</td>
            <td>{!!$lct->noidung!!}</td>
            <td>{{$lct->diadiem}}</td>
            <td>{{$lct->batdau}}</td>
            <td>{{$lct->ketthuc}}</td>
            <td>{!!$lct->ghichu!!}</td>
            <td>
              <a class="btn btn-default" onclick="return confirm('Bạn muốn sửa mục này??')" data-toggle="modal" data-target="#editLichCongTac{{$lct->id}}">Edit</a>
              <a class="btn btn-danger" onclick="return confirm('Bạn muốn xóa mục này??')" href="/adminstrap/xoa-lich-cong-tac/{{$lct->id}}">Delete</a>
            </td>
          </tr>
          <!-- Edit LichCongTac -->
          <div class="modal fade" id="editLichCongTac{{$lct->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="adminstrap/sua-lich-cong-tac/{{$lct->id}}" method="POST">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Sửa Lịch Công Tác</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Ngày tháng</label>
                        <input type="text" class="form-control" name="ngaythang" value="{{$lct->ngaythang}}" required="" autofocus="">
                      </div>
                      <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" name="noidung" required="" autofocus="">{{$lct->noidung}}</textarea>
                      </div>
                      <div class="form-group">
                        <label>Địa điểm</label>
                        <input type="text" class="form-control" name="diadiem" value="{{$lct->diadiem}}" required="">
                      </div>
                      <div class="form-group">
                        <label>Giờ bắt đầu</label>
                        <input type="time" class="form-control" name="batdau" value="{{$lct->batdau}}" required="">
                      </div>

                      <div class="form-group">
                        <label>Giờ kết thúc (dự kiến)</label>
                        <input type="time" class="form-control" name="ketthuc" value="{{$lct->ketthuc}}" required="">
                      </div>

                      <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="ghichu">{{$lct->ghichu}}</textarea>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
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
