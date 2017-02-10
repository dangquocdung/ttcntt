<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap">Quản trị Nội dung</a> <small> dùng để cập nhật dữ liệu lên website</small></h1>
      </div>
      <div class="col-md-2">
        @if (Auth::user() && Auth::user()->quyen > 1 )
        <div class="dropdown create">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Tạo Nội dung
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a type="button" data-toggle="modal" data-target="#addLichCongTac">Thêm Lịch công tác</a></li>
            <li class="divider"></li>
            <li><a type="button" data-toggle="modal" data-target="#addTinTuc">Thêm Tin tức - Sự kiện</a></li>
            <li class="divider"></li>
            <li><a type="button" data-toggle="modal" data-target="#addVanBan">Thêm Văn bản - Tài liệu</a></li>
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
</header>
