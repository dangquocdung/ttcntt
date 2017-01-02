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
            <h4 class="panel-title">Thêm lịch công tác</h4>
          </div>
          <div class="panel-body">
            <form action="them-lich-cong-tac" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                <div class="form-group">
                  <label>Ngày tháng</label>
                  <input type="date" class="form-control" name="ngaythang" value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <input type="text" class="form-control" name="noidung" placeholder="Nhập nội dung công việc" required="" autofocus="">
                </div>
                <div class="form-group">
                  <label>Địa điểm</label>
                  <input type="text" class="form-control" name="diadiem" placeholder="Nhập địa điểm thực hiện công việc" required="">
                </div>
                <div class="form-group">
                  <label>Giờ bắt đầu</label>
                  <input type="time" class="form-control" name="batdau" value="batdau">
                </div>
                <script type="text/javascript">
                  $(function(){
                    $('input[type="time"][value="batdau"]').each(function(){
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
                  <label>Giờ kết thúc (dự kiến)</label>
                  <input type="time" class="form-control" name="ketthuc" value="ketthuc">
                </div>
                <script type="text/javascript">
                  $(function(){
                    $('input[type="time"][value="ketthuc"]').each(function(){
                      var d = new Date(),
                          h = d.getHours() + 1,
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
                  <label>Ghi chú</label>
                  <textarea class="form-control" name="ghichu" placeholder="Nhập ghi chú"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Gởi</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
              </form>
          </div>
        </div>
      </div>

    </div>
</div>
</div>
@endsection
