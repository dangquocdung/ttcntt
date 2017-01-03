@extends('blayout.index')

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Trang Người dùng</h1>
  </div>
</div>

<div class="main">


<div class="container">
    <div class="row">
      <div class="col-md-4">
        @include('blayout.sidebar')
      </div>

      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Thêm Tin tức - Sự kiện</h4>
          </div>
          <div class="panel-body">
            <form action="them-tin-tuc" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

                <div class="form-group">
                  <label>Tiêu đề</label>
                  <input type="text" class="form-control" name="tieude" placeholder="Nhập Tiêu đề" required="" autofocus="">
                </div>
                <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea type="text" class="form-control" name="tomtat" rows="3" placeholder="Nhập tóm tắt" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="hinhanh" />
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="noidung" id="demo" class="form-control ckeditor" rows="5"></textarea>
                </div>
                <script src="//cdn.ckeditor.com/4.6.1/basic/ckeditor.js"></script>

                <div class="form-group">
                  <label>Ghi chú</label>
                  <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
                </div>

                <button type="submit" class="btn btn-info">Đăng</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
              </form>
          </div>
        </div>
      </div>

    </div>
</div>
</div>
@endsection
