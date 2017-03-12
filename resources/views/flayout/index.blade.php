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
    <meta name="description" content="">
    <meta name="keywords" content="hà tĩnh, ha-tinh, web design, web app, software">
    <meta name="keywords" content="Dũng Thịnh, Dung-Thinh, Web App, Mobile App, Native App, IoT, Internet of Things, Computer, Web Developer, Hosting, Software, Networking, Hardware, Server, VPS, Cloud, Android, iOS ">
    <meta name="author" content="Đặng Quốc Dũng, Dang-Quoc-Dung">
    @yield('title')
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="/css/jquery.eeyellow.Timeline.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
    <link rel="stylesheet" href="./assets/css/app.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>




  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <div class="col-xs-10 banner-brand">
              <a href="/"><img src="upload/ttcntthatinh.png" alt="{{ config('app.name', 'Dang Quoc Dung') }}" width="100%"></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="/">Trang chủ</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Giới thiệu <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/gioi-thieu"> Tổng quan</a></li>
                  <li class="divider"></li>
                  <li><a href="/nang-luc"> Năng lực</a></li>
                  <li class="divider"></li>
                  <li><a href="/san-pham"> Sản phẩm</a></li>
                  <li class="divider"></li>
                  <li><a href="/doi-ngu"> Đội ngũ quản lý</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Dịch vụ <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/dich-vu"> Giới thiệu </a></li>
                  <li class="divider"></li>
                  <li><a href="/phan-mem"> DV Phần mềm / Software</a></li>
                  <li class="divider"></li>
                  <li><a href="/phan-cung"> DV Phần cứng / Hardware </a></li>
                  <li class="divider"></li>
                  <li><a href="/dao-tao"> DV Đào tạo </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Tra cứu <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/lich-cong-tac">Lịch Công tác <span class="badge" style="background-color:orange !important;">{{$slct}}</span></a></li>
                  <li class="divider"></li>
                  <li><a href="/van-ban">Văn bản <span class="badge" style="background-color:orange !important;">{{$scv}}</span></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Tiện ích <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/chuyen-so">Chuyển mã vùng </a></li>
                </ul>
            </li>
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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Tuyển dụng <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/thong-diep"> Thông điệp </li>
                  <li class="divider"></li>
                  <li><a href="/vi-tri-tuyen-dung"> Vị trí cần tuyển</a></li>
                </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
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

                      <li><a href="/adminstrap/so-tay-ca-nhan">Sổ tay cá nhân</a></li>

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
  						<div class="address_text"><p><span>Điện Thoại:</span>  (+0239) 385 3926</p></div>
  					</div>
  					<div class="single_address fix">
  						<div class="address_icon"><span><i class="fa fa-envelope-o"></i></span></div>
  						<div class="address_text"><p><span>Email: </span> ttcntthatinh@gmail.com</p></div>
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
          <p>Chịu trách nhiệm nội dung: {{ config('app.CIO', 'Dang Quoc Dung') }} - Giám Đốc {{ config('app.name', 'Dang Quoc Dung') }}</p>
          <p>&copy;2017 Bản quyền nội dung thuộc {{ config('app.name', 'Dang Quoc Dung') }} | Thiết kế và phát triển: <a href="http://dangquocdung.com" target="_blank">Đặng Quốc Dũng</a></p>
          <p><a href="#">Điều khoản sử dụng thông tin</a> | <a href="#">Chính sách bảo mật</a> | Lượt truy cập: <img src="http://www.reliablecounter.com/count.php?page=itc.hatinh.gov.vn&digit=style/plain/12/&reloads=0" alt="" title="" border="0"></a></p>
      </div>
    </footer>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/owl.autoplay.js"></script>

    <script type="text/javascript" src="js/jquery.eeyellow.Timeline.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.6"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.VivaTimeline').vivaTimeline({
          carousel: true,
          carouselTime: 3000
        });

        //fancybox

        $(".fancybox").fancybox();

        //owl.carousel

        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true,
          responsiveClass:true,
          responsive:{
              0:{
                  items:2,
                  nav:true
              },
              767:{
                  items:4,
                  nav:false
              },
              1000:{
                  items:5,
                  nav:true,
                  loop:false
              }
          }


      })

      var owl = $("#owl-diembao");

      $('#play').on('click',function(){
          owl.trigger('play.owl.autoplay',[1000])
      })
      $('#stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })

      var owl = $("#owl-sanpham");

      $('#playsp').on('click',function(){
          owl.trigger('play.owl.autoplay',[1000])
      })
      $('#stopsp').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })


      });

    </script>

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClqb4ClPasKU8unirsY-uT9mw2t7G7d8k&callback=initMap" type="text/javascript"></script>
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
