<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="adminstrap/dieu-hanh-cong-viec">Sổ tay cá nhân</a> <small>Notepad</small></h1>
      </div>
      <div class="col-md-2">
        @if (Auth::user() && Auth::user()->quyen > 1 )
        <div class="dropdown create">
          <button class="btn btn-success" data-toggle="modal" data-target="#addGhiChu">
            Tạo Ghi Chú
          </button>

        </div>
        @endif
      </div>
    </div>
  </div>
</header>
