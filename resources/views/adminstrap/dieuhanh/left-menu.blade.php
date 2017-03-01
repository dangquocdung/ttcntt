<div class="col-md-3">


<div class="list-group">
  <a  class="list-group-item active main-color-bg" href="/adminstrap/dieu-hanh-cong-viec">
    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Theo dõi công việc đã tạo
  </a>
</div>


<div class="list-group">
  <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#congViec">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Điều hành công việc cá nhân
  </a>
  <div id="congViec" class="panel-collapse collapse in">
    <a class="bg-info list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/cho-tiep-nhan">
      <span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Chờ tiếp nhận <span class="badge">{{$tcvcncxl}}</span>
    </a>

    <a class="bg-success list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongViec">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Tất cả <span class="caret"></span><span class="badge">{{$tcvcn}}</span>
    </a>

    <div id="tatCaCongViec" class="panel-collapse collapse in">


      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
      </a>

    </div>

    <a class="bg-danger list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/sap-het-han">
      <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Sắp hết hạn <span class="badge">0</span>
    </a>

    <a class="bg-warning list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/da-tu-choi">
      <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã từ chối <span class="badge">{{$tcvcndtc}}</span>
    </a>

  </div>

  <script type="text/javascript">
    $('.collapse').on('shown.bs.collapse', function(){
      $(this).parent().find(".glyphicon-chevron-right").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
      }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".glyphicon-chevron-down").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
    });
  </script>

</div>



<div class="list-group">
  <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#congVan">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Gởi nhận công văn
  </a>

  <div id="congVan" class="panel-collapse collapse">
    <a class="bg-warning list-group-item1" data-toggle="modal" data-target="#addCongVan">
      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Tạo công văn</span>
    </a>

    <a class="bg-danger list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongVanDen">
      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Công văn đến <span class="caret"></span><span class="badge">0</span>
    </a>
    <div id="tatCaCongVanDen" class="panel-collapse collapse">


      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
      </a>

    </div>




    <a class="bg-success list-group-item1" data-toggle="collapse" data-parent="#accordion" href="#tatCaCongVanDi">
      <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Công văn đi <span class="caret"></span><span class="badge">2</span>
    </a>

    <div id="tatCaCongVanDi" class="panel-collapse collapse">


      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/dang-xu-ly">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Đang xử lý <span class="badge">{{$tcvcndxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-xu-ly">
        <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Đã xử lý <span class="badge">{{$tcvcnxl}}</span>
      </a>
      <a class="list-group-item" href="/adminstrap/dieu-hanh-cong-viec/da-qua-han">
        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đã quá hạn <span class="badge">0</span>
      </a>

    </div>

  </div>
</div>

<div class="list-group">
  <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#nhanSu">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Quản lý nhân sự
  </a>
  <div id="nhanSu" class="panel-collapse collapse in">
    <a class="bg-info list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/danh-sach-thanh-vien">
      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Danh sách thành viên <span class="badge">{{count($thanhvien)}}</span>
    </a>
    <a class="bg-warning list-group-item1" href="/adminstrap/dieu-hanh-cong-viec/danh-sach-thanh-vien">
      <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Xếp loại nhân viên
    </a>
  </div>
</div>

<div class="list-group">
  <a  class="list-group-item active main-color-bg" data-toggle="collapse" data-parent="#accordion" href="#tienIch">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tiện ích
  </a>
  <div id="tienIch" class="panel-collapse collapse">
    <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lịch làm việc <span class="badge">0</span></a>
    <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Đăng kí xe <span class="badge">2</span></a>
    <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Phòng họp <span class="badge">0</span></a>
    <a class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Theo dõi ra/vào <span class="badge">2</span></a>

  </div>
</div>
</div>
