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
    <h3 class="panel-title">Sản phẩm trung tâm</h3>
  </div>
  <div class="panel-body">
    <div class="row">
          <div class="col-md-12">
            <form action="adminstrap/van-ban-all/tim-kiem" method="post">
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
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Liên kết</th>
            <th>Ngày tạo</th>
            <th> <a class="btn-sm btn-success" data-toggle="modal" data-target="#themSanPham">Thêm</a></th>
          </tr>
          @foreach( $sanpham as $sp )
          @if ($sp->loaihinh == 2)
          <tr>
            <td>{{ $sp->id }}</td>
            <td>{{ $sp->tieude }}</td>
            <td>
              <img src="./upload/banner/{{ $sp->hinhanh }}" alt="{{ $sp->tieude }}" width="100px">
            </td>
            <td>{{ $sp->lienket }}</td>
            <td>{{ $sp->created_at }}</td>
            <td>
              <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editSanPham{{$sp->id}}">Edit</a>
              <a class="btn btn-sm btn-danger" onclick="return confirm('Bạn muốn xóa mục này?')" href="/adminstrap/delete-san-pham/{{$sp->id}}">Delete</a>
            </td>
          </tr>

          <!-- Edit SanPham -->
          <div class="modal fade" id="editSanPham{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="adminstrap/put-san-pham/{{$sp->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit sản phẩm</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Tên</label>
                      <input type="text" class="form-control" name="tieude" value="{{$sp->tieude}}" required="" autofocus="" />
                    </div>

                    <div class="form-group">
                      <label>Liên kết</label>
                      <input type="text" class="form-control" name="lienket" value="{{$sp->lienket}}" required=""  />
                    </div>

                    <div class="form-group">
                      <label>Hình ảnh</label>
                        <input type="file" name="hinhanh"/>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-info" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                  </div>
              </form>
              </div>
            </div>
          </div>

          @endif
          @endforeach
        </table>
      </div>
      <!-- Them SanPham -->
      <div class="modal fade" id="themSanPham" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="adminstrap/them-san-pham" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Thêm Sản Phẩm</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Tên</label>
                  <input type="text" class="form-control" name="tieude" required="" autofocus="" />
                </div>

                <div class="form-group">
                  <label>Liên kết</label>
                  <input type="text" class="form-control" name="lienket" required=""  />
                </div>

                <div class="form-group">
                  <label>Hình ảnh</label>
                    <input type="file" name="hinhanh" required  />
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-success">Thêm</button>
              </div>
          </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
