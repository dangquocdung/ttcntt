<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HT ITC | Dashboard</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome, {{ Auth::user()->name }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">
            <li class="active"><a href="adminstrap">Bảng Điều khiển</a></li>
            <li><a href="adminstrap/dieu-hanh-cong-viec">Điều hành công việc</a></li>
            @if (Auth::user()->quyen > 1 )
            <li><a href="adminstrap/lich-cong-tac-all">Lịch</a></li>
            <li><a href="adminstrap/tin-tuc-all">Tin tức</a></li>
            <li><a href="adminstrap/cong-van-all">Công văn</a></li>
            @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li> -->
            <li><a href="/">Trang chủ</a></li>
            <li>
              <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap">Bảng điều khiển</a> <small> dùng để quản trị nội dung</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Tạo Nội dung
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addLichCongTac">Thêm Lịch công tác</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addTinTuc">Thêm Tin tức - Sự kiện</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addVanBan">Thêm Văn bản - Tài liệu</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="adminstrap" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Cá nhân
              </a>
              <a href="/adminstrap/lich-cong-tac" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lịch công tác <span class="badge">{{$lct1}}</span></a>
              <a href="/adminstrap/tin-tuc" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tin tức đã đăng <span class="badge">{{$tt1}}</span></a>
              <a href="/adminstrap/van-ban" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Công văn đã đăng <span class="badge">{{$cv1}}</span></a>
            </div>

            <div class="well">
              <h4>Tỉ lệ đầu việc</h4>
              <div class="progress">
                <?php
                 if ($slct>0){
                   $i = ($lct1/$slct)*100;

                 }else{
                   $i = 0;
                 }
                 ?>
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
                    {{$i}}%
                </div>
              </div>
              <h4>Tỉ lệ đăng tin </h4>
              <div class="progress">
                <?php
                 if ($stt>0){
                   $i = ($tt1/$stt)*100;

                 }else{
                   $i = 0;
                 }
                 ?>
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
                      {{$i}}%
                </div>
              </div>

              <h4>Tỉ lệ đăng công văn </h4>
              <div class="progress">
                <?php
                 if ($scv>0){
                   $i = ($cv1/$scv)*100;

                 }else{
                   $i = 0;
                 }
                ?>
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
                      {{$i}}%
                </div>
              </div>
            </div>

            <div class="list-group">
              <a href="adminstrap" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Điều hành công việc
              </a>
              <a href="adminstrap" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Tạo việc <span class="badge"></span></a>
              <a href="adminstrap" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đầu việc chưa xử lý <span class="badge">2</span></a>
              <a href="adminstrap" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đầu việc đang xử lý <span class="badge">3</span></a>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            @yield('content')
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Đặng Quốc Dũng, &copy; 2017. All rights reserved.</p>
    </footer>

<!-- Modals -->

<!-- Add LichCongTac -->
<div class="modal fade" id="addLichCongTac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-lich-cong-tac" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Lịch Công Tác</h4>
          </div>
          <div class="modal-body">
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
              <input type="time" class="form-control" name="batdau" value="batdau" required="">
            </div>
            <script type="text/javascript">
              $(function(){
                $('input[type="time"][value="batdau"]').click(function(){
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
              <input type="time" class="form-control" name="ketthuc" value="ketthuc" required="">
            </div>
            <script type="text/javascript">
              $(function(){
                $('input[type="time"][value="ketthuc"]').click(function(){
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
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="reset" class="btn btn-default">Làm lại</button>
            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>

<!-- Add Tin Tuc -->
<div class="modal fade" id="addTinTuc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-tin-tuc" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Tin tức - Sự kiện</h4>
          </div>
          <div class="modal-body">
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
                <input type="file" id="imgInp" name="hinhanh" />
                <br>
                <img id="blah" src="" width="80%" style="display:block; margin: 0 auto"/>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="noidung" id="demo" class="form-control ckeditor" rows="5"></textarea>
            </div>


            <div class="form-group">
              <label>Ghi chú</label>
              <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="reset" class="btn btn-default">Làm lại</button>
            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>

<!-- Add Cong Van -->
<div class="modal fade" id="addVanBan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-van-ban" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Công văn - Tài Liệu</h4>
          </div>
          <div class="modal-body">

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


          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="reset" class="btn btn-danger">Làm lại</button>
            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>


  <script>
     CKEDITOR.replace( 'noidung' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

      function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }

      $("#imgInp").change(function(){
          readURL(this);
      });

      $('.chonhinh').change(function(){

      })







    </script>
  </body>
</html>
