@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Văn bản đã đăng</h3>
  </div>
  <div class="panel-body">
    <div class="row">
          <div class="col-md-12">
              <input class="form-control" type="text" placeholder="Filter Pages...">
          </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày đăng</th>
            <th>Người đăng</th>
            <th>Số / Kí hiệu</th>
            <th>Tiêu đề</th>
            <th>Văn bản</th>
            <th>Ghi chú</th>

            <th></th>
          </tr>
          @foreach($vanban as $vb)
          <tr>
            <td>{{$vb->ngaydang}}</td>
            <td>{{$vb->user->name}}</td>
            <td>{{$vb->socv}}</td>
            <td>{{$vb->tieude}}</td>
            <td style="text-align: center;"><a href="/upload/vanban/pdf/{{$vb->vanban}}" target="_blank"><span class="glyphicon glyphicon-file"></span></a></td>
            <td>{{$vb->ghichu}}</td>

            <td>
              <a class="btn btn-default" onclick="return confirm('Bạn muốn sửa mục này??')" data-toggle="modal" data-target="#editVanBan{{$vb->id}}">Edit</a>
              <a class="btn btn-danger" onclick="return confirm('Bạn muốn xóa mục này??')" href="/adminstrap/xoa-van-ban/{{$vb->id}}">Delete</a>
            </td>
          </tr>

          <!-- Edit TinTuc -->
          <div class="modal fade" id="editVanBan{{$vb->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="adminstrap/sua-van-ban/{{$vb->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sửa Văn Bản</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Số / Kí hiệu văn bản</label>
                      <input type="text" class="form-control" name="socv" value="{{$vb->socv}}" required="" autofocus="" />
                    </div>
                    <div class="form-group">
                      <label>Tiêu đề Văn bản</label>
                      <input type="text" class="form-control" name="tieude" value="{{$vb->tieude}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>File Văn bản</label>
                        <input type="file" name="vanban"/>
                    </div>

                    <div class="form-group">
                      <label>Ghi chú</label>
                      <textarea class="form-control" name="ghichu" rows="3">{{$vb->ghichu}}</textarea>
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
