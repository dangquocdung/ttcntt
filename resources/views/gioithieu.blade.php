@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('menu-active')
  <li><a href="/">Trang chủ</a></li>
  <li class="active"><a href="/gioi-thieu">Giới thiệu</a></li>
  <li><a href="/nang-luc">Năng lực</a></li>
  <li><a href="/dich-vu">Dịch vụ</a></li>
  <li><a href="/tin-tuc">Tin tức - Sự kiện</a></li>
  <li><a href="/lien-he">Liên hệ</a></li>
@endsection

@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Giới thiệu</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Giới thiệu</h4>
        </div>
        <div class="panel-body">

            <p>Trung tâm Công nghệ thông tin và Truyền thông Hà Tĩnh (HaTinh Information Communication Technology Center - HTIICTC) được thành lập theo Quyết định số Số: 1889/QĐ-UBND Hà Tĩnh, ngày 12 tháng 7 năm 2007 của UBND tỉnh Hà Tĩnh với chức năng giúp Sở Thông tin và Truyền thông triển khai các hoạt động sự nghiệp về công nghệ thông tin, bưu chính, viễn thông hỗ trợ cho nhiệm vụ quản lý nhà nước của Sở.</p>
            <h3>NHIỆM VỤ CỤ THỂ</h3>
            <p>1. Xây dựng các chương trình dự án về ứng dụng công nghệ thông tin trên địa bàn; các chương trình, dự án về bưu chính, viễn thông công ích được giao; các chương trình, kế hoạch, quy hoạch về hoạt động sự nghệp bưu chính, viễn thông và công nghệ thông tin và các nhiệm vụ khác hỗ trợ cho công tác quản lý nhà nước của Sở trên địa bàn toàn tỉnh, trình cấp có thẩm quyền phê duyệt và tổ chức thực hiện.</p>
            <p>2. Xây dựng, quản trị kỹ thuật, cập nhật nội dung, duy trì hoạt động trang thông tin điện tử của tỉnh và tổ chức nâng cấp thành Cổng thông tin điện tử và duy trì hoạt động theo quyết định của UBND tỉnh.</p>
            <p>3. Nghiên cứu, triển khai các đề tài khoa học chuyên ngành; nghiên cứu, ứng dụng và tổ chức sản xuất các phần mềm ứng dụng trên các lĩnh vực; tạo lập, hình thành và phát triển công nghiệp sản xuất phần mềm; công nghiệp nội dung, từng bước hình thành thị trường bưu chính, viễn thông và công nghệ thông tin, đáp ứng nhu cầu phát triển kinh tế xã hội của tỉnh.</p>
            <p>4. Tổ chức, thực hiện nhiệm vụ đào tạo nguồn nhân lực về bưu chính, viễn thông và công nghệ thông tin trên địa bàn tỉnh; thiết kế, lưu trữ, duy trì bảo đảm an toàn mạng trang thông tin điện tử cho các tổ chức, cá nhân theo yêu cầu; thực hiện nhiệm vụ bảo mật, an toàn thông tin cho hệ thống mạng chuyên dụng của cơ quan Đảng, Nhà nước trên địa bàn.</p>
            <p>5. Thực hiện nhiệm vụ thông tin khoa học công nghệ chuyên ngành về bưu chính, viễn thông và công nghệ thông tin.</p>
            <p>6. Thực hiện nhiệm vụ về tư vấn, thiết kế, sản xuất, lắp đặt, sửa chữa, bảo trì mạng, máy tính, các thiết bị điện tử, viễn thông và các dịch vụ khác về bưu chính, viễn thông, công nghệ thông tin.</p>
            <p>7. Thực hiện hợp tác, liên kết và chuyển giao công nghệ trong các lĩnh vực thuộc thẩm quyền và các vấn đề được ủy quyền của Giám đốc Sở, UBND tỉnh.</p>
            <p>8. Tham gia thẩm định kỹ thuật, thực hiện đo - kiểm tra các công trình, dự án bưu chính, viễn thông, công nghệ thông tin trên địa bàn khi có yêu cầu; thực hiện chứng thực chữ ký điện tử.</p>
            <p>9. Thực hiện chế độ báo cáo định kỳ và đột xuất về thực hiện nhiệm vụ được giao với Sở Bưu chính, Viễn thông.</p>
            <p>10. Quản lý tổ chức, nhân sự, tài chính và tài sản của trung tâm theo đúng quy định của pháp luật và phân cấp của UBND tỉnh.</p>
            <p>11. Thực hiện các nhiệm vụ khác theo sự phân công của UBND tỉnh, Giám đốc Sở Thông tin và Truyền thông.</p>

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
