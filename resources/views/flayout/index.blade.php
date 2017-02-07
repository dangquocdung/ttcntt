<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="hà tĩnh, ha-tinh, web design, web app, software">
    <meta name="keywords" content="Dũng Thịnh, Dung-Thinh, Web App, Mobile App, Native App, IoT, Internet of Things, Computer, Web Developer, Hosting, Software, Networking, Hardware, Server, VPS, Cloud, Android, iOS ">
    <meta name="author" content="Đặng Quốc Dũng, Dang-Quoc-Dung">
    @yield('title')
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="/css/jquery.eeyellow.Timeline.css">
    <link rel="stylesheet" href="/css/jquery.superbox.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/my.css">



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

          <a class="navbar-brand" style="float:none" href="/">

            <img src="upload/logo.png" alt="HaTinhITC">

          </a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="/">Trang chủ</a></li> -->
            <li><a href="/gioi-thieu">Giới thiệu</a></li>
            <li><a href="/nang-luc">Năng lực</a></li>
            <li><a href="/dich-vu">Dịch vụ</a></li>
            <li><a href="/lich-cong-tac">Lịch Công tác <span class="badge" style="background-color:orange !important;">{{$slct}}</span></a></li>
            <li><a href="/van-ban">Văn bản <span class="badge" style="background-color:orange !important;">{{$scv}}</span></a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Tin Tức <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/tin-tuc"> Tin Nội bộ <span class="badge" style="float:right; background-color:orange !important;">{{$stt}}</span></a></li>
                  <li class="divider"></li>
                  <li><a href="/diem-bao/the-gioi-vi-tinh"> PC World VN</a></li>
                  <li class="divider"></li>
                  <li><a href="/diem-bao/ictnews/thoi-su"> ICTnews: Thời sự</a></li>
                  <li><a href="/diem-bao/ictnews/vien-thong"> ICTnews: Viễn Thông</a></li>
                  <li><a href="/diem-bao/ictnews/internet"> ICTnews: Internet</a></li>
                  <li><a href="/diem-bao/ictnews/cntt"> ICTnews: Công nghệ Thông tin</a></li>
                  <li><a href="/diem-bao/ictnews/kinh-doanh"> ICTnews: Kinh Doanh</a></li>
                  <li><a href="/diem-bao/ictnews/the-gioi-so"> ICTnews: Thế giới số</a></li>
                  <li><a href="/diem-bao/ictnews/khoi-nghiep"> ICTnews: Khởi nghiệp</a></li>
                  <li><a href="/diem-bao/ictnews/cong-nghe-360"> ICTnews: Công nghệ 360</a></li>



                </ul>
            </li>


          <!-- </ul>
          <ul class="nav navbar-nav navbar-right"> -->
            <!-- <li><a href="https://www.facebook.com/hatinhitc/"><i class="fa fa-facebook"></i></a></li> -->
            <!-- <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://google-plus.com"><i class="fa fa-google-plus"></i></a></li> -->

            @if (Auth::guest())

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <i class="fa fa-user"></i> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/login"><i class="fa fa-key" aria-hidden="true"></i> Đăng nhập</a></li>
                    <li class="divider"></li>
                    <li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a></li>
                  </ul>
              </li>

            @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="/adminstrap">Trang Quản trị</a></li>

                      <li class="divider"></li>

                      <li><a href="/adminstrap/dieu-hanh-cong-viec">Văn phòng Thông minh (iO)</a></li>

                      <li class="divider"></li>

                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Đăng xuất
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    @yield('content')


    <!-- <div class="section-c">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Đăng kí nhận tin</h2>
            <br />
            <p>Cung cấp địa chỉ email để nhận bản tin điện tử của chúng tôi.</p>
            <hr />
            <form>
              <input type="text" class="form-control input-lg" placeholder="Địa chỉ Email">
              <br />
              <button class="btn btn-primary btn-lg btn-block">Đăng kí</button>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer_area">
  		<div class="container">
  			<div class="row">
  				<!--section title-->
  				<div class=" col-sm-12 col-md-12 col-lg-12">
  					<div class="section_title service_color">
  						<h2 class="title-footer"><span>Trung tâm CNTT&TT Hà Tĩnh</span></h2>
  					</div>
  				</div>
  				<!--end section title-->
  			</div>
  			<div class="row">
  				<div class="col-sm-4 col-md-4 col-lg-4">
  					<div class="single_address fix">
  						<div class="address_icon"><span><i class="fa fa-map-marker"></i></span></div>
  						<div class="address_text"><p><span>Địa chỉ:</span> Số 18 Đường 26-3, TP.Hà Tĩnh, Hà Tĩnh.</p></div>
  					</div>
  					<div class="single_address fix">
  						<div class="address_icon"><span><i class="fa fa-phone"></i></span></div>
  						<div class="address_text"><p><span>Điện Thoại:</span>  (+039) 385 3926</p></div>
  					</div>
  					<div class="single_address fix">
  						<div class="address_icon"><span><i class="fa fa-envelope-o"></i></span></div>
  						<div class="address_text"><p><span>Email: </span> info@itc.hatinh.vn</p></div>
  					</div>
  				</div>

  				<div class="col-sm-4 col-md-4 col-lg-4">

                    <div id="googleMap"></div>

  				</div>

  				<div class="col-sm-4 col-md-4 col-lg-4">
  					<form action="/goi-thong-diep" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
  						<div class="contract_us">
  							<div class="inputt input_change">
  								<span class="message_icon"><i class="fa fa-user"></i></span>
  								<input type="text" name="name" class="form-control" id="name_mes" placeholder="Họ và Tên" required="">
  							</div>
  							<div class="inputt input_change">
  								<span class="message_icon"><i class="fa fa-envelope-o"></i></span>
  								<input type="email" name="email" class="form-control" id="email_mes" placeholder="Email" required="">
  							</div>
  							<div class="inputt">
  								<span class="message_icon"><i class="fa fa-external-link"></i></span>
  								<textarea class="form-control" name="message" rows="4" id="message_mes" placeholder="Thông điệp" required=""></textarea>
  							</div>
  							<div class="sunmite_button">
  								<button type="submit">Gởi Thông điệp</button>
  							</div>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>

    <footer>
      <div class="container">
          <p>Copyright <a href="http://dangquocdung.com">Đặng Quốc Dũng</a> © 2017. All rights reserved.</p>
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.eeyellow.Timeline.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.6"></script>


    <script type="text/javascript">
      $(document).ready(function() {
        $('.VivaTimeline').vivaTimeline({
          carousel: true,
          carouselTime: 3000
        });

        //fancybox

        $(".fancybox").fancybox();
      });

    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        var owl = $("#owl-demo");



        owl.owlCarousel({
            items : 5, //10 items above 1000px browser width
            itemsDesktop : [1000,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false,
            autoPlay: true

             // itemsMobile disabled - inherit from itemsTablet option
        });

        // Custom Navigation Events
        $(".next").click(function(){
          owl.trigger('owl.next');
        })
        $(".prev").click(function(){
          owl.trigger('owl.prev');
        })
        $(".play").click(function(){
          owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
        })
        $(".stop").click(function(){
          owl.trigger('owl.stop');
        })

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

      });

    </script>    

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRKmIRjZ9GPop3H4nOvRx9G9_--QHBAJo&callback=initMap" type="text/javascript"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(18.335534, 105.906581)
          };

          var map = new google.maps.Map(document.getElementById('googleMap'),
              mapOptions);


          var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
          });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-587daeb9f12bee24"></script>

    </body>
    </html>
