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
            <h4 class="panel-title">Thêm Công văn - Tài Liệu</h4>
          </div>
          <div class="panel-body">
            <form action="them-cong-van" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>
                
                <div class="form-group">
                  <label>Thời gian</label>
                  <input type="time" class="form-control" name="giodang" value="giodang">
                </div>
                <script type="text/javascript">
                  $(function(){
                    $('input[type="time"][value="giodang"]').each(function(){
                      var d = new Date(),
                          h = d.getHours(),
                          m = d.getMinutes();
                      if(h < 10) h = '0' + h;
                      if(m < 10) m = '0' + m;
                      $(this).attr({
                        'value': h + ':' + m
                      });
                    });
                  });
                </script>

                <div class="form-group">
                  <label>Số / Kí hiệu văn bản</label>
                  <input type="text" class="form-control" name="socv" placeholder="Nhập Số / Kí hiệu văn bản" required="" autofocus="" />
                </div>
                <div class="form-group">
                  <label>Tiêu đề Văn bản</label>
                  <input type="text" class="form-control" name="tieude" placeholder="Nhập Tiêu đề văn bản" required="" />
                </div>
                <div class="form-group">
                    <label>File Văn bản</label>
                    <input type="file" name="vanban" required="" />
                </div>

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
