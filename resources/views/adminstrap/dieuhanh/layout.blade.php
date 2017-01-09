<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HT ITC | E-OFFICE</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
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
            <li><a href="adminstrap">Bảng Điều khiển</a></li>
            <li class="active"><a href="adminstrap/dieu-hanh-cong-viec">Điều hành công việc</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li> -->
            <li><a href="/">Website</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap/dieu-hanh-cong-viec">E-Office</a> <small> Văn phòng điện tử</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Tạo mới
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addCongViec">Thêm Công việc</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>



    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">


            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#congViec">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Điều hành công việc cá nhân
              </a>
              <div id="congViec" class="panel-collapse collapse in">
                <a class="list-group-item">
                  <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sắp hết hạn <span class="badge">0</span>
                </a>
                <a class="list-group-item">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Việc gấp chưa xử lý <span class="badge">0</span>
                </a>
                <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongViec">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Tất cả <span class="caret"></span><span class="badge">2</span>
                </a>
                <div id="tatCaCongViec" class="panel-collapse collapse">
                  <a class="list-group-item">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Trể hạn <span class="badge">3</span>
                  </a>
                  <a class="list-group-item">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Chưa xử lý <span class="badge">5</span>
                  </a>
                  <a class="list-group-item">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đang xử lý <span class="badge">2</span>
                  </a>
                  <a class="list-group-item">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đã xử lý <span class="badge">3</span>
                  </a>
                </div>
              </div>

              <script type="text/javascript">
                $('.collapse').on('shown.bs.collapse', function(){
                  $(this).parent().find(".glyphicon-chevron-right").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
                  }).on('hidden.bs.collapse', function(){
                    $(this).parent().find(".glyphicon-chevron-down").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
                });
              </script>

            </div>



            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#congVan">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Quản lý công văn
              </a>
              <div id="congVan" class="panel-collapse collapse">
                <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Công văn đến <span class="badge">0</span></a>
                <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Công văn đi <span class="badge">2</span></a>
              </div>
            </div>

            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#nhanSu">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Quản lý nhân sự
              </a>
              <div id="nhanSu" class="panel-collapse collapse">
                <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Công văn đến <span class="badge">0</span></a>
                <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Công văn đi <span class="badge">2</span></a>
              </div>
            </div>

            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#tienIch">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tiện ích
              </a>
              <div id="tienIch" class="panel-collapse collapse">
                <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lịch làm việc <span class="badge">0</span></a>
                <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đăng kí xe <span class="badge">2</span></a>
                <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Phòng họp <span class="badge">0</span></a>
                <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Theo dõi ra/vào <span class="badge">2</span></a>

              </div>
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


    <!-- Them Cong viec -->
    <div class="modal fade" id="addCongViec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                  <label>Giao việc cho</label>

                    <select id="chkveg" name="thucHien[]" multiple="multiple" >
                      @foreach ($thanhvien as $tv)
                        <option value="{{$tv->id}}">{{$tv->name}}</option>
                      @endforeach
                    </select>
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

              <script type="text/javascript">

                $(function() {

                    $('#chkveg').multiselect({

                        includeSelectAllOption: true
                    });



                });

              </script>
        </form>
        </div>
      </div>
    </div>




  <script>
     CKEDITOR.replace( 'yeuCauCongViec' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




  </body>
</html>
