<!-- Tao Cong viec -->
<div class="modal fade" id="addGhiChu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/so-tay-ca-nhan/them-ghi-chu" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tạo Ghi chú</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Tiêu đề</label>
              <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề ghi chú" required="" autofocus="" />
            </div>

            <div class="form-group">
              <label>Địa điểm</label>
              <input type="text" class="form-control" name="diadiem" placeholder="Địa điểm"/>
            </div>

            <div class="form-group">
              <label>Nội dung</label>
              <textarea class="form-control" name="noidung" rows="5"required></textarea>
            </div>

            <div class="form-group">
                <label>Tệp đính kèm</label>
                <input type="file" name="tepdinhkem"/>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>


    </form>
    </div>
  </div>
</div>

<script>
   CKEDITOR.replace( 'noidung' );
</script>
