@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li><a href="/gioi-thieu">Giới thiệu</a></li>
  <li class="active"><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/lich-cong-tac">Lịch Công tác</a></li>
  <li><a href="/van-ban">Văn bản</a></li>
  <li><a href="/tin-tuc">Tin tức</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Năng Lực</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Năng lực của chúng tôi</h4>
        </div>
        <div class="panel-body">

          <div class="well">
              <h4>NĂNG LỰC TƯ VẤN LẬP DỰ ÁN & QUẢN LÝ DỰ ÁN</h4>
              <p>(Theo Nghị định 102/2009/NĐ-CP ngày 06 tháng 11 năm 2009 của Chính phủ về quản lý ứng dụng công nghệ thông tin sử dụng nguồn vốn ngân sách nhà nước)</p>
              <p>Hiện nay, Trung tâm CNTT-TT tỉnh Hà Tĩnh có đủ năng lực tư vấn lập và quản lý dự án đầu tư ứng dụng CNTT như sau:</p>
              <p>- Phạm vi hoạt động: cấp độ 2, dự án nhóm C.</p>
              <p>- Có 07 người có trình độ đại học chuyên ngành công nghệ thông tin, đại học chuyên ngành kinh tế, tài chính phù hợp với yêu cầu của dự án; trong đó có 01 người có đủ điều kiện làm Chủ trì thiết kế sơ bộ Cấp độ 2.</p>

          </div>

          <div class="well">
              <h4>NĂNG LỰC TƯ VẤN GIÁM SÁT</h4>
              <p>(Theo Nghị định 102/2009/NĐ-CP ngày 06 tháng 11 năm 2009 của Chính phủ về quản lý ứng dụng công nghệ thông tin sử dụng nguồn vốn ngân sách nhà nước)</p>
              <p>Hiện nay, Trung tâm CNTT-TT tỉnh Hà Tĩnh có đủ năng lực tư vấn giám sát đầu tư ứng dụng CNTT.</p>
              <p>Nhân sự tham giá có trình độ đại học chuyên ngành công nghệ thông tin, đã được bồi dưỡng về nghiệp vụ quản lý, đầu tư ứng dụng công nghệ thông tin (thuộc bộ môn giám sát thi công).</p>
          </div>

          <div class="well">
              <h4>NĂNG LỰC TƯ VẤN ĐẤU THẦU</h4>
              <p>(Căn cứ Nghị định số 85/2009/NĐ-CP ngày 15/10/2009 của Chính phủ hướng dẫn thi hành Luật Đấu thầu và đánh giá hồ sơ dự thầu xây dựng theo Luật Xây dựng).</p>

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
