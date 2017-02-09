<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Dũng Thịnh, Dung-Thinh, Web App, Mobile App, Native App, IoT, Internet of Things, Computer, Web Developer, Hosting, Software, Networking, Hardware, Server, VPS, Cloud, Android, iOS ">
    <meta name="author" content="Đặng Quốc Dũng, Dang-Quoc-Dung">
    <title>Văn phòng Thông minh | iOFFICE</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css" />
    <link href="css/dhcv.css" rel="stylesheet">

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
            <li><a href="adminstrap">Quản trị Nội Dung</a></li>
            <li><a href="adminstrap/dieu-hanh-cong-viec">Văn Phòng Thông Minh (iO)</a></li>
            <li class="active"><a href="adminstrap/so-tay-ca-nhan">Sổ tay cá nhân (Notepad)</a></li>

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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap/dieu-hanh-cong-viec">iOffice</a> <small> Văn phòng thông minh</small></h1>
          </div>
          <div class="col-md-2">
            @if (Auth::user() && Auth::user()->quyen > 1 )
            <div class="dropdown create">
              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="modal" data-target="#addSoTay">
                Tạo mới
              </button>

            </div>
            @endif
          </div>
        </div>
      </div>
    </header>



    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <div class="list-group">
              <a href="adminstrap/so-tay-ca-nhan" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Sổ tay cá nhân (Notepad)
              </a>
            </div>

            <div class="list-group">
              <a  class="list-group-item active main-color-bg" href="/adminstrap/dieu-hanh-cong-viec">
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Theo dõi công việc đã tạo
              </a>
            </div>

            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#congViec">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Điều hành công việc cá nhân
              </a>
              <div id="congViec" class="panel-collapse collapse in">
                <a class="bg-info list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/cho-tiep-nhan">
                  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Chờ tiếp nhận <span class="badge">{{$tcvcncxl}}</span>
                </a>

                <a class="bg-success list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongViec">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Tất cả <span class="caret"></span><span class="badge">{{$tcvcn}}</span>
                </a>

                <div id="tatCaCongViec" class="panel-collapse collapse in">


                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
                  </a>

                </div>

                <a class="bg-danger list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/sap-het-han">
                  <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sắp hết hạn <span class="badge">0</span>
                </a>

                <a class="bg-warning list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/da-tu-choi">
                  <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã từ chối <span class="badge">{{$tcvcndtc}}</span>
                </a>

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
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Gởi nhận công văn
              </a>

              <div id="congVan" class="panel-collapse collapse in">
                <a class="bg-danger list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongVanDen">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Công văn đến <span class="caret"></span><span class="badge">0</span>
                </a>
                <div id="tatCaCongVanDen" class="panel-collapse collapse">


                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
                  </a>

                </div>




                <a class="bg-success list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongVanDi">
                  <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Công văn đi <span class="caret"></span><span class="badge">2</span>
                </a>

                <div id="tatCaCongVanDi" class="panel-collapse collapse">


                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
                    <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
                  </a>
                  <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
                  </a>

                </div>

              </div>
            </div>

            <div class="list-group">
              <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#nhanSu">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Quản lý nhân sự
              </a>
              <div id="nhanSu" class="panel-collapse collapse in">
                <a class="bg-info list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/danh-sach-thanh-vien">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Danh sách thành viên <span class="badge">{{count($thanhvien)}}</span>
                </a>
                <a class="bg-warning list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/danh-sach-thanh-vien">
                  <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Xếp loại nhân viên
                </a>
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
      <p>Copyright <a href="http://dangquocdung.com">Đặng Quốc Dũng</a> &copy; 2017. All rights reserved.</p>
    </footer>


    <!-- Tao Cong viec -->
    <div class="modal fade" id="addSoTay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="adminstrap/so-tay/them-ghi-chu" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tạo Ghi chú</h4>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label>Tiêu đề</label>
                  <input type="text" class="form-control" name="tieuDe" placeholder="Tiêu đề ghi chú" required="" autofocus="" />
                </div>

                <div class="form-group">
                  <label>Địa điểm</label>
                  <input type="text" class="form-control" name="diaDiem" placeholder="Địa điểm ghi chú" autofocus="" />
                </div>


                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control" name="ghiChu" rows="5" placeholder="Nội dung ghi chú" required></textarea>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>


        </form>
        </div>
      </div>
    </div>






  <script>
     CKEDITOR.replace( 'ghiChu' );

 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




  </body>
</html>
