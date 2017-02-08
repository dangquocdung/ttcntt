
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
      <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
    <base href="http://www.dangquocdung.com/">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="/css/jquery.eeyellow.Timeline.css">
    <link rel="stylesheet" href="/css/jquery.superbox.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/my.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>



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
            <li><a href="/lich-cong-tac">Lịch Công tác <span class="badge" style="background-color:orange !important;">2</span></a></li>
            <li><a href="/van-ban">Văn bản <span class="badge" style="background-color:orange !important;">10</span></a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Tin Tức <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/tin-tuc"> Tin Nội bộ <span class="badge" style="float:right; background-color:orange !important;">0</span></a></li>
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
                      <i class="fa fa-user"></i> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/login"><i class="fa fa-key" aria-hidden="true"></i> Đăng nhập</a></li>
                    <li class="divider"></li>
                    <li><a href="/register"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a></li>
                  </ul>
              </li>

                      </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="title-bar">
  <div class="container">
    <h1>Tiện ích</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Chuyển đổi mã vùng điện thoại cố định</h4>
        </div>
        <div class="panel-body">

          <div ng-app = "codinh" ng-controller = "codinhController">

             Chọn đầu số: <select ng-model = "codinh.firstName">
                            <option value="239" selected="selected">Hà Tĩnh</option>
                            <option value="238">Nghệ An</option>
                            <option value="237">Thanh Hoá</option>
                            <option value="236">Đà Nẵng</option>
                            <option value="235">Quảng Nam</option>
                            <option value="234">Thừa Thiên - Huế</option>
                            <option value="233">Quảng Trị</option>
                            <option value="232">Quảng Bình</option>
                            <option value="216">Yên Bái </option>
                            <option value="215">Điện Biên</option>
                            <option value="214">Lào Cai</option>
                            <option value="213">Lai Châu</option>
                            <option value="212">Sơn La</option>
                          </select>



             Số máy bàn: <input type = "text" ng-model = "codinh.lastName"><br>
             <br>

             Số điện thoại mới: <strong>{{codinh.fullName()}}</strong>
          </div>

          <script>
             var mainApp2 = angular.module("codinh", []);

             mainApp2.controller('codinhController', function($scope) {
                $scope.codinh = {
                   firstName: "239",
                   lastName: "3123456",

                   fullName: function() {
                      var studentObject;
                      studentObject = $scope.codinh;


                      return studentObject.firstName + " " + studentObject.lastName;
                   }
                };
             });
          </script>

        </div>
      </div>

    </div>
    <div class="col-md-4">
      <ul class="list-group">
  <li class="list-group-item active">
    Quy hoạch Khu CNTT tập trung Hà Tĩnh
  </li>


  <a class="fancybox" href="upload/ttcntt-tt-ht.jpg">
    <img class="img-responsive" src="upload/ttcntt-tt-ht.jpg" style="display:block; margin:0 auto; border-radius:5px;" width="100%">
  </a>
</ul>

<div class="list-group">
  <a href="dich-vu" class="list-group-item active">
    Sản phẩm - Dịch vụ
  </a>
  <a href="/dich-vu" class="list-group-item">Tư vấn, quản lý các dự án, hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</a>
  <a href="/dich-vu" class="list-group-item">Thiết kế & cho thuê ứng dụng CNTT trong Cải cách hành chính và Chính phủ điện tử.</a>
  <a href="/dich-vu" class="list-group-item">Hoạt động quản trị, vận hành cơ sở hạ tầng công nghệ thông tin và truyền thông.</a>
  <a href="/dich-vu" class="list-group-item">Đào tạo & Tổ chức sự kiện.</a>
</div>

<div class="list-group">
  <a href="nang-luc" class="list-group-item active">
    Năng lực
  </a>
  <a href="/nang-luc" class="list-group-item">Năng lực tư vấn Lập & Quản lý dự án</a>
  <a href="/nang-luc" class="list-group-item">Năng lực tư vấn Giám sát</a>
  <a href="/nang-luc" class="list-group-item">Năng lực tư vấn Đấu thầu</a>

</div>

<div class="list-group">

</div>
    </div>
  </div>
</div>
</div>





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
              <input type="hidden" name="_token" value="0p0yMRDZ78AueeKmlzeiKbhjVwMzHWBxMSMgB73d">
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
