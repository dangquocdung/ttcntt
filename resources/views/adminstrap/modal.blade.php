<!-- Add LichCongTac -->
<div class="modal fade" id="addLichCongTac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-lich-cong-tac" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Lịch Công Tác</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Ngày tháng</label>
              <input type="date" class="form-control" name="ngaythang" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
              <label>Nội dung</label>
              <input type="text" class="form-control" name="noidung" placeholder="Nhập nội dung công việc" required="" autofocus="">
            </div>
            <div class="form-group">
              <label>Địa điểm</label>
              <input type="text" class="form-control" name="diadiem" placeholder="Nhập địa điểm thực hiện công việc" required="">
            </div>
            <div class="form-group">
              <label>Giờ bắt đầu</label>
              <input type="time" class="form-control" name="batdau" value="batdau" required="">
            </div>
            <script type="text/javascript">
              $(function(){
                $('input[type="time"][value="batdau"]').click(function(){
                  var d = new Date(),
                      h = d.getHours(),
                      m = d.getMinutes();
                  if(h < 10) h = '0' + h;
                  if(m < 10) m = '0' + m;
                  $(this).attr({
                    'value': h + ':' + m
                  });
                });
              });
            </script>
            <div class="form-group">
              <label>Giờ kết thúc (dự kiến)</label>
              <input type="time" class="form-control" name="ketthuc" value="ketthuc" required="">
            </div>
            <script type="text/javascript">
              $(function(){
                $('input[type="time"][value="ketthuc"]').click(function(){
                  var d = new Date(),
                      h = d.getHours() + 1,
                      m = d.getMinutes();
                  if(h < 10) h = '0' + h;
                  if(m < 10) m = '0' + m;
                  $(this).attr({
                    'value': h + ':' + m
                  });
                });
              });
            </script>
            <div class="form-group">
              <label>Ghi chú</label>
              <textarea class="form-control" name="ghichu" placeholder="Nhập ghi chú"></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>

<!-- Add Tin Tuc -->
<div class="modal fade" id="addTinTuc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-tin-tuc" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Tin tức - Sự kiện</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Tiêu đề</label>
              <input type="text" class="form-control" name="tieude" placeholder="Nhập Tiêu đề" required="" autofocus="">
            </div>
            <div class="form-group">
              <label>Tóm tắt</label>
              <textarea type="text" class="form-control" name="tomtat" rows="3" placeholder="Nhập tóm tắt" required=""></textarea>
            </div>
            <div class="form-group">
                <label>Hình Ảnh</label>
                <input type="file" id="imgInp" name="hinhanh" />
                <br>
                <img id="blah" src="" width="80%" style="display:block; margin: 0 auto"/>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="noidung" id="demo" class="form-control ckeditor" rows="5"></textarea>
            </div>


            <div class="form-group">
              <label>Ghi chú</label>
              <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>

<!-- Add Cong Van -->
<div class="modal fade" id="addVanBan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/them-van-ban" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <input type="hidden" name="ngaydang" value="<?php echo date('Y-m-d'); ?>"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Thêm Công văn - Tài Liệu</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Số / Kí hiệu văn bản</label>
              <input type="text" class="form-control" name="socv" placeholder="Nhập Số / Kí hiệu văn bản" required="" autofocus="" />
            </div>
            <div class="form-group">
              <label>Trích yếu Văn bản</label>
              <input type="text" class="form-control" name="tieude" placeholder="Nhập Tiêu đề văn bản" required="" />
            </div>
            <div class="form-group">
                <label>File Văn bản</label>
                <input type="file" name="vanban" required="" />
            </div>

            <div class="form-group">
              <label>Ghi chú</label>
              <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
            </div>


          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
    </form>
    </div>
  </div>
</div>


<script>
   CKEDITOR.replace( 'noidung' );
</script>
