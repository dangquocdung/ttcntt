<!-- Tao Cong viec -->
<div class="modal fade" id="addCongViec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/dieu-hanh-cong-viec/them-cong-viec" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tạo Công việc</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Tên công việc</label>
              <input type="text" class="form-control" name="tenCongViec" placeholder="Nhập tên công việc" required="" autofocus="" />
            </div>

            <div class="form-group">
              <label>Giao việc cho</label>
                <select id="chkveg" name="thucHien[]" multiple="multiple" required>
                @if (Auth::user()->chucvu_id < 3)
                  @foreach ($thanhvien as $tv)
                    <option value="{{$tv->id}}" selected="">{{$tv->name}}</option>
                  @endforeach

                @elseif(Auth::user()->chucvu_id == 3)
                  @foreach ($thanhvien as $tv)
                    @if ($tv->phongban_id == Auth::user()->phongban_id)
                      <option value="{{$tv->id}}" selected="">{{$tv->name}}</option>
                    @endif
                  @endforeach
                @else
                  <option value="{{Auth::user()->id}}" selected="" disabled="">{{Auth::user()->name}}</option>
                @endif
                </select>


            </div>
            <div class="form-group">
                <label>Tệp đính kèm <span class="glyphicon glyphicon-paperclip"></span></label>
                <input type="file" name="tepDinhKem"/>
            </div>

            <div class="form-group">
              <label>Yêu cầu công việc</label>
              <textarea class="form-control" name="yeuCauCongViec" rows="5" placeholder="Nhập yêu cầu công việc" required></textarea>
            </div>

            <div class="form-group">
                <label>Việc gấp</label>
                <select name="viecGap" class="form-control">
                  <option value="0" selected="">Không gấp</option>
                  <option value="1">Gấp</option>
                </select>
            </div>

            <div class="form-group">
                <label>Hạn xử lý</label>
                <input type="date" name="hanXuLy" required="" class="form-control"/>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Thêm Việc</button>
          </div>

          <script type="text/javascript">

            $(function() {

                $('#chkveg').multiselect({

                    includeSelectAllOption: true
                });



            });

          </script>
    </form>
    </div>
  </div>
</div>

<!-- Tao Cong van -->
<div class="modal fade" id="addCongVan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="adminstrap/dieu-hanh-cong-viec/tao-cong-van" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tạo Công Văn</h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Nơi phát hành</label>
              <input type="text" class="form-control" value="{{ Auth::user()->phongban->donvi->tendonvi}}" disabled="" />
            </div>

            <div class="form-group">
              <label>Ngày ban hành</label>
              <input type="date" class="form-control" name="ngaybanhanhvb" required=""/>
            </div>

            <div class="form-group">
                <label>Loại văn bản</label>
                <select name="loaivb_id" class="form-control">
                  @foreach ($loaivb as $lvb)
                  <option value="{{$lvb->id}}">{{$lvb->tenloaivb}}</option>
                  @endforeach

                </select>
            </div>

            <div class="form-group">
              <label>Số/KH văn bản</label>
              <input type="text" class="form-control" name="sovb" placeholder="Nhập số, kí hiệu văn bản" required="" />
            </div>

            <div class="form-group">
              <label>Trích yếu văn bản</label>
              <input type="text" class="form-control" name="trichyeuvb" placeholder="Nhập trích yếu văn bản" required="" />
            </div>

            <div class="form-group">
                <label>Người kí</label>
                <select name="nguoikivb_id" class="form-control" required="">
                  <option value="1">Nguyen Van A</option>
                  <option value="2">Nguyen Van B</option>
                </select>
            </div>

            <div class="form-group">
                <label>Độ khẩn</label>
                <select name="dokhanvb" class="form-control">
                  <option value="0" selected="">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tệp văn bản <span class="glyphicon glyphicon-paperclip"></span></label>
                <input type="file" name="tepvanban" required=""/>
            </div>


          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Gởi</button>
          </div>


    </form>
    </div>
  </div>
</div>

<script>
   CKEDITOR.replace( 'yeuCauCongViec' );
</script>
