@extends('flayout.index')

@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li class="active"><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/lich-cong-tac">Lịch Công tác</a></li>
  <li><a href="/van-ban">Văn bản</a></li>
  <li><a href="/tin-tuc">Tin tức</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')

<div class="showcase">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $i=0 ?>
    @foreach ($dichvu as $dv)
      <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"
        @if ($i == 0)
          class="active"
        @else
          class=""
        @endif
        ></li>
      <?php $i++ ?>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php $i=0 ?>
    @foreach ($dichvu as $dv)
      @if ($i == 0)
        <div class="item active">
      @else
        <div class="item">
      @endif
        <img src="/img/{{$dv->hinh}}.jpg" alt="">
        <div class="carousel-caption">
          <h3>{{$dv->ten}}</h3>
          <div class="hidden-sm hidden-xs">
            <p>{{$dv->diengiai}}</h3>
          </div>

        </div>
      </div>
      <?php $i++ ?>
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


<div class="lienket_area" id="lienket">
  <div class="container">
    <div class="row">

      <!--section title-->
      <div class="col-md-4">
        <a href="/lich-cong-tac"><img alt=" " src="http://icti-hcm.gov.vn/sites/default/files/images/lichct.jpg"></a>
      </div>
      <!--section title-->
      <div class="col-md-4">
        <a href="van-ban"><img alt=" " src="http://icti-hcm.gov.vn/sites/default/files/images/cosodulieu-vbpl.jpg"></a>
      </div>
      <!--section title-->
      <div class="col-md-4">
        <a href="/bien-dao-viet-nam"><img alt=" " src="http://icti-hcm.gov.vn/sites/default/files/images/biendao.jpg"></a>
      </div>
    </div>
  </div>
</div>

<div class="section-a">
  <div class="container">
    <div class="row">
      <div class="title">
        <h2>Dịch vụ của chúng tôi</h2>
      </div>

      @foreach ($dichvu as $dv)
        <div class="col-md-3">
          <i class="fa {{$dv->fa}}"></i>

          <div class="block-dichvu">

            <h3>{{$dv->ten}}</h3>
            <p>{{$dv->diengiai}}</p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>

<div class="section-b">
  <div class="container">
    <div class="row">
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
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
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
                  Nghiên cứu, thiết kế, xây dựng các sản phẩm và dịch vụ công nghệ thông tin, truyền thông, xuất bản và báo chí.

                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>Nghiên cứu, thiết kế, xây dựng chương trình, đề án và ứng dụng các tiến bộ khoa học, công nghệ về các lĩnh vực trên.</p>
                <p>Triển khai và phối hợp vận hành các mô hình, giải pháp công nghệ và các hoạt động nghiên cứu ứng dụng trong các lĩnh vực trên.</p>
                <p>Thiết kế xây dựng công trình công nghệ thông tin: thiết kế phần mềm và hệ thống phần mềm; thiết kế cơ sở dữ liệu và hệ thống cơ sở dữ liệu; thiết kế hệ thống máy tính (thiết kế, tạo lập trang chủ internet, thiết kế hệ thống máy tính tích hợp với phần cứng, phần mềm và với các công nghệ truyền thông).</p>
                <p>Thiết kế bo mạch điện tử, mạch tích hợp … cho ngành công nghiệp điện tử;</p>
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
</div>

<div class="section-d">
  <div class="container">
    <div class="row">
      <h2>Đội ngũ</h2>
      <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach ($doingu as $dn)
          <div class="item2">
            <img src="upload/team/{{$dn->tenhinh}}" alt="">

            <p class="name">{{$dn->name}}</p>
            <p class="chucvu">{{$dn->chucvu}}</p>
            <p class="didong">{{$dn->didong}}</p>

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
</div>


<div class="section-e">
  <div class="container">
    <div class="row">
      <h2>TẦM NHÌN, MỤC TIÊU</h2>
      <p>Nhiệm vụ trọng tâm HTICT là triển khai các dự án, hạng mục trọng điểm về CNTT của tỉnh do Sở TT-TT giao.</p>
      <p>HTICT - Làm đầu mối triển khai ứng dụng CNTT cho các Sở, Ban, Ngành, Huyện, Thị trên địa bàn tỉnh.</p>
      <p>HTICT - Hỗ trợ cho các doanh nghiệp trong và ngoài tỉnh triển khai ứng dụng CNTT.</p>
      <p>HTICT - Luôn là đơn vị tiên phong trong việc áp dụng công nghệ mới trong triển khai các ứng dụng công nghệ thông tin, chính sách nhân sự mới, hiện đại và tiên tiến.</p>
      <p>HTICT cam kết mang đến những sản phẩm và dịch vụ hoàn hảo nhất, xây dựng niềm tin và sự bền vững giữa khách hàng và chuyên viên tư vấn bởi phong cách làm việc tận tụy, chuyên nghiệp và sáng tạo.</p>
    </div>
  </div>
</div>
<div id = "sample" style = "width:100%; height:400px;"></div>

@endsection
