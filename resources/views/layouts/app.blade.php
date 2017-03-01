<!DOCTYPE html>
<html lang="en">
  <head>
    <!--*************************************************-->
    <!-- Tác giả: Đặng Quốc Dũng - PGD TTCNTT-TT Hà Tĩnh -->
    <!-- Email: dungthinhvn@gmail.com - Phone:0986242487 -->
    <!--      Website: http://www.dangquocdung.com       -->
    <!--*************************************************-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HT ITC | Members zone</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
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
          <a class="navbar-brand" href="/">Trang chủ</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Dành cho thành viên <small>Đăng nhập bằng account</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">

            @yield('content')

    </section>

    <footer id="footer">
      <p>Copyright Đặng Quốc Dũng, &copy; 2017</p>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
