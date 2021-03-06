@extends('adminstrap.layout')

@section('css')
  @include('adminstrap.css')
@endsection

@section('header')
  @include('adminstrap.header')
@endsection

@section('left-menu')
  @include('adminstrap.left-menu')
@endsection

@section('content')
<div class="col-md-9 col-lg-9">
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tin tức đã đăng của {{ Auth::user()->name }}</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form action="adminstrap/tin-tuc/tim-kiem" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-group">
            <input class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Filter Pages..." name="timkiem">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Tìm</button>
            </span>
          </div><!-- /input-group -->
        </form>
      </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày đăng</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Tóm tắt</th>
            <th>Ghi chú</th>
            <th></th>
          </tr>
          @foreach($tintuc as $tt)
          <tr>
            <td>{{$tt->ngaydang}}</td>
            <td>{{$tt->tieude}}</td>
            <td><img src="upload/tintuc/{{$tt->urlhinh}}" height="30px"></td>
            <td>{{$tt->tomtat}}</td>
            <td>{{$tt->ghichu}}</td>

            <td>
              <a class="btn btn-sm btn-default" onclick="return confirm('Bạn muốn sửa mục này?')" data-toggle="modal" data-target="#editTinTuc{{$tt->id}}">Edit</a>
              <a class="btn btn-sm btn-danger" onclick="return confirm('Bạn muốn xóa mục này?')" href="/adminstrap/xoa-tin-tuc/{{$tt->id}}">Delete</a>
            </td>
          </tr>

          <!-- Edit TinTuc -->
          <div class="modal fade" id="editTinTuc{{$tt->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="adminstrap/sua-tin-tuc/{{$tt->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sửa Tin Tức</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Tiêu Đề</label>
                      <input type="text" class="form-control" name="tieude" value="{{$tt->tieude}}" required="" autofocus="">
                    </div>
                    <div class="form-group">
                      <label>Tóm Tắt</label>
                      <textarea class="form-control" name="tomtat">{{$tt->tomtat}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Hình ảnh</label>
                      <input type="file" name="hinhanh" />
                      <br>
                      <img src="upload/tintuc/{{ $tt->urlhinh }}" width="50%" style="display:block; margin: 0 auto" />
                    </div>
                    <div class="form-group">
                      <label>Nội dung</label>
                      <textarea class="form-control" name="noidung" required="" autofocus="">{{$tt->noidung}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Ghi chú</label>
                      <textarea class="form-control" name="ghichu">{{$tt->ghichu}}</textarea>
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
</div>
@endsection

@section('modal')
  @include('adminstrap.modal')
@endsection
