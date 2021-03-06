@extends('flayout.index')

@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('content')

<div class="showcase">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $i=0 ?>
    @foreach ($sanpham as $sp)
    @if ($sp->loaihinh == 1)
      <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"
        @if ($i == 0)
          class="active"
        @else
          class=""
        @endif
        ></li>
      <?php $i++ ?>
    @endif
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php $i=0 ?>
    @foreach ($sanpham as $sp)
    @if ($sp->loaihinh == 1)
      @if ($i == 0)
        <div class="item active">
      @else
        <div class="item">
      @endif
          <img src="./upload/banner/{{ $sp->hinhanh }}" alt="">
        </div>
      <?php $i++ ?>
    @endif
    @endforeach
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>
</div>

<section class="section-a">

    <div class="row">
      <div class="title">
        <h2>Bản tin công nghệ</h2>
      </div>

      <div class="large-12 columns">

        <div id="owl-demo" class="owl-carousel owl-theme">

          @foreach ($diembao as $db)
            <div class="item2">
              <a href="{{$db->link}}" target="_blank"><img src="{{$db->media}}" alt=""></a>
              <div class="content_news">
                <a href="{{$db->link}}" target="_blank">{{$db->title}}</a>
              </div>
            </div>
          @endforeach

        </div>

        <div class="customNavigation">
          <a class="btn prev">Trước</a>
          <a class="btn next">Sau</a>
          <a class="btn play">Tự động</a>
          <a class="btn stop">Dừng</a>
        </div>
      </div>


  </div>

  <script>
    $(document).ready(function() {
      var owl = $(".owl-carousel");

      owl.owlCarousel({
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false,
          autoPlay: true
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
    })

  </script>

</section>



<section class="section-b">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2>Dịch vụ</h2>
      </div>
      <div class="col-md-6">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-plus" aria-hidden="true"></i>

                  Tư vấn, quản lý các dự án, hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.

                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>Tư vấn lập và quản lý dự án đầu tư, tư vấn đấu thầu, giám sát thực hiện các chương trình, dự án đầu tư và hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</p>
                <p>Lập dự án xây dựng công trình về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</p>
                <p>Quản lý, giám sát việc xây dựng, triển khai và duy trì các hệ thống thông tin.</p>
                <p>Trực tiếp làm chủ đầu tư các dự án, hạng mục công việc trọng điểm của thành phố.</p>
                <p>Thực hiện dịch vụ tư vấn giải pháp công nghệ, thiết kế, phát triển, kiểm thử và cung cấp các sản phẩm về các lĩnh vực trên; khai thác các cơ sở dữ liệu, các hệ thống thông tin và truyền thông.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Thiết kế & cho thuê ứng dụng CNTT trong Cải cách hành chính và Chính phủ điện tử
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>Thiết kế xây dựng công trình công nghệ thông tin: thiết kế phần mềm và hệ thống phần mềm; thiết kế cơ sở dữ liệu và hệ thống cơ sở dữ liệu; thiết kế hệ thống máy tính (thiết kế, tạo lập trang chủ internet, thiết kế hệ thống máy tính tích hợp với phần cứng, phần mềm và với các công nghệ truyền thông).</p>
                <p>Nghiên cứu, thiết kế, xây dựng chương trình, đề án và ứng dụng các tiến bộ khoa học, công nghệ về các lĩnh vực trên.</p>
                <p>Triển khai, cho thuê và phối hợp vận hành các mô hình, giải pháp công nghệ và các hoạt động nghiên cứu ứng dụng trong các lĩnh vực trên.</p>
                <p>Hợp tác, phối hợp tổ chức, thực hiện các chương trình hợp tác, liên kết, chuyên đề nghiên cứu khoa học với các tổ chức, cá nhân trong và ngoài nước.</p>
                <p>Thực hiện dịch vụ thu thập, lưu trữ, xử lý và cung cấp thông tin.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-plus" aria-hidden="true"></i> Hoạt động quản trị, vận hành cơ sở hạ tầng công nghệ thông tin và truyền thông.
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <p>Triển khai, quản trị, vận hành, giám sát, theo dõi, đề xuất kế hoạch nâng cấp, bảo trì, duy tu, bảo dưỡng, sửa chữa các cơ sở hạ tầng công nghệ thông tin, truyền thông, báo chí và xuất bản của thành phố và khu vực.</p>
                <p>Thực hiện các dịch vụ bảo mật mạng và an toàn thông tin trên các lĩnh vực công nghệ thông tin, truyền thông, báo chí và xuất bản.</p>
                <p>Thực hiện chức năng cung cấp dịch vụ chứng thực chữ ký số;</p>
                <p>Thực hiện công tác hướng dẫn, kiểm tra về thực hiện quy hoạch phân bổ kênh tần số, các hoạt động thu phát vô tuyến điện trên địa bàn thành phố, các quy định về điều kiện, kỹ thuật, điều kiện khai thác thiết bị vô tuyến điện được sử dụng có điều kiện.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading4">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  <i class="fa fa-plus" aria-hidden="true"></i> Đào tạo & Tổ chức sự kiện.
                </a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
              <div class="panel-body">
                <p>Tổ chức thực hiện các sự kiện, hội nghị, hội thảo, họp báo, triển lãm; phổ biến, tuyên truyền chính sách của ngành, các ứng dụng công nghệ thông tin.</p>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="col-md-6">
        <img src="img/cpu.jpg">
      </div>
    </div>
  </div>
</section>

<section class="section-c">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2>Sản phẩm</h2>
      </div>
      <div class="owl-carousel owl-theme">
        @foreach ($sanpham as $sp)
        @if ($sp->loaihinh == 2)
          <div class="item">
            <a href="{{$sp->lienket}}" target="_blank"><img src="./upload/banner/{{$sp->hinhanh}}" alt=""></a>
          </div>
        @endif
        @endforeach
      </div>
      <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
    </div>
  </div>

</section>


<section class="section-d">
  <div class="container">
    <div class="row">
      <h2>TẦM NHÌN, MỤC TIÊU</h2>
      <p>TT CNTT Hà Tĩnh có nhiệm vụ trọng tâmlà triển khai các dự án, hạng mục trọng điểm về CNTT của tỉnh do Sở TT-TT giao.</p>
      <p>1. Làm đầu mối triển khai ứng dụng CNTT cho các Sở, Ban, Ngành, Huyện, Thị, Phường, Xã trên địa bàn tỉnh.</p>
      <p>2. Hỗ trợ cho các doanh nghiệp trong và ngoài tỉnh triển khai ứng dụng CNTT.</p>
      <p>3. Luôn là đơn vị tiên phong trong việc áp dụng công nghệ mới trong triển khai các ứng dụng công nghệ thông tin, chính sách nhân sự mới, hiện đại và tiên tiến.</p>
      <p>4. Cam kết mang đến những sản phẩm và dịch vụ hoàn hảo nhất, xây dựng niềm tin và sự bền vững giữa khách hàng và chuyên viên tư vấn bởi phong cách làm việc tận tụy, chuyên nghiệp và sáng tạo.</p>
    </div>
  </div>
</section>
<!-- <div id = "googleMap" style = "width:100%; height:400px;"></div> -->

@endsection
