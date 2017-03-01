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
    <meta name="keywords" content="Dũng Thịnh, Dung-Thinh, Web App, Mobile App, Native App, IoT, Internet of Things, Computer, Web Developer, Hosting, Software, Networking, Hardware, Server, VPS, Cloud, Android, iOS ">
    <meta name="author" content="Đặng Quốc Dũng, Dang-Quoc-Dung">
    <title>Trung tâm CNTT-TT Hà Tĩnh</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap core CSS -->


    @yield('css')





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
          <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Trở về</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">
            <li><a href="adminstrap">Quản trị Nội Dung</a></li>
            <li><a href="adminstrap/so-tay-ca-nhan">Sổ tay cá nhân (Notepad)</a></li>

            @if (Auth::user()->quyen == 5 )
            <li><a href="adminstrap/lich-cong-tac-all">Lịch</a></li>
            <li><a href="adminstrap/tin-tuc-all">Tin tức</a></li>
            <li><a href="adminstrap/van-ban-all">Công văn</a></li>
            <li><a href="adminstrap/user-all">Users</a></li>
            @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#">Welcome, {{ Auth::user()->name }}</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
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
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    @yield('header')



    <section id="main">
      <div class="container">
        <div class="row">

            @yield('left-menu')


            @yield('content')


        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright <a href="http://dangquocdung.com">Đặng Quốc Dũng</a> &copy; 2017. All rights reserved.</p>
    </footer>

<!-- Modals -->

@yield('modal')

  </body>
</html>
