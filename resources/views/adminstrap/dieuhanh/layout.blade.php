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
            <li><a href="adminstrap">Bảng Điều khiển</a></li>
            <li class="active"><a href="adminstrap/dieu-hanh-cong-viec">Điều hành công việc</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap/dieu-hanh-cong-viec">E-Office</a> <small> Văn phòng điện tử</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Tạo mới
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#">Thêm Công việc</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Điều hành công việc</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">


            <div class="list-group">
              <a href="adminstrap" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Điều hành công việc cá nhân
              </a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Sắp hết hạn <span class="badge"></span></a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tất cả <span class="badge">2</span></a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Trể hạn <span class="badge">3</span></a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Chưa xử lý <span class="badge"></span></a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đang xử lý <span class="badge">2</span></a>
              <a href="adminstrap/dieu-hanh-cong-viec" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đã xử lý <span class="badge">3</span></a>
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



  <script>
     CKEDITOR.replace( 'noidung' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
