@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li class="active"><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/lich-cong-tac">Lịch Công tác</a></li>
  <li><a href="/van-ban">Văn bản</a></li>
  <li><a href="/tin-tuc">Tin tức</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Dịch vụ</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Dịch vụ của chúng tôi</h4>
        </div>
        <div class="panel-body">
          <div class="well">
              <h4>Tư vấn, quản lý các dự án, hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</h4>
              <p>Tư vấn lập và quản lý dự án đầu tư, tư vấn đấu thầu, giám sát thực hiện các chương trình, dự án đầu tư và hạng mục công việc về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</p>
              <p>Lập dự án xây dựng công trình về các lĩnh vực công nghệ thông tin, truyền thông, xuất bản và báo chí.</p>
              <p>Quản lý, giám sát việc xây dựng, triển khai và duy trì các hệ thống thông tin.</p>
              <p>Trực tiếp làm chủ đầu tư các dự án, hạng mục công việc trọng điểm của thành phố.</p>
              <p>Thực hiện dịch vụ tư vấn giải pháp công nghệ, thiết kế, phát triển, kiểm thử và cung cấp các sản phẩm về các lĩnh vực trên; khai thác các cơ sở dữ liệu, các hệ thống thông tin và truyền thông.</p>

            </div>
            <div class="well">
                <h4>Thiết kế & cho thuê ứng dụng CNTT trong Cải cách hành chính và Chính phủ điện tử.</h4>
                <p>Thiết kế xây dựng công trình công nghệ thông tin: thiết kế phần mềm và hệ thống phần mềm; thiết kế cơ sở dữ liệu và hệ thống cơ sở dữ liệu; thiết kế hệ thống máy tính (thiết kế, tạo lập trang chủ internet, thiết kế hệ thống máy tính tích hợp với phần cứng, phần mềm và với các công nghệ truyền thông).</p>
                <p>Nghiên cứu, thiết kế, xây dựng chương trình, đề án và ứng dụng các tiến bộ khoa học, công nghệ về các lĩnh vực trên.</p>
                <p>Triển khai, cho thuê và phối hợp vận hành các mô hình, giải pháp công nghệ và các hoạt động nghiên cứu ứng dụng trong các lĩnh vực trên.</p>
                <p>Hợp tác, phối hợp tổ chức, thực hiện các chương trình hợp tác, liên kết, chuyên đề nghiên cứu khoa học với các tổ chức, cá nhân trong và ngoài nước.</p>
                <p>Thực hiện dịch vụ thu thập, lưu trữ, xử lý và cung cấp thông tin.</p>
              </div>
            <div class="well">
              <h4>Hoạt động quản trị, vận hành cơ sở hạ tầng công nghệ thông tin và truyền thông.</h4>
              <p>Triển khai, quản trị, vận hành, giám sát, theo dõi, đề xuất kế hoạch nâng cấp, bảo trì, duy tu, bảo dưỡng, sửa chữa các cơ sở hạ tầng công nghệ thông tin, truyền thông, báo chí và xuất bản của thành phố và khu vực.</p>
              <p>Thực hiện các dịch vụ bảo mật mạng và an toàn thông tin trên các lĩnh vực công nghệ thông tin, truyền thông, báo chí và xuất bản.</p>
              <p>Thực hiện chức năng cung cấp dịch vụ chứng thực chữ ký số;</p>
              <p>Thực hiện công tác hướng dẫn, kiểm tra về thực hiện quy hoạch phân bổ kênh tần số, các hoạt động thu phát vô tuyến điện trên địa bàn thành phố, các quy định về điều kiện, kỹ thuật, điều kiện khai thác thiết bị vô tuyến điện được sử dụng có điều kiện.</p>
            </div>
            <div class="well">
              <h4>Tổ chức sự kiện.</h4>
              <p>Tổ chức thực hiện các sự kiện, hội nghị, hội thảo, họp báo, triển lãm; phổ biến, tuyên truyền chính sách của ngành, các ứng dụng công nghệ thông tin.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>

@endsection
