@extends('adminstrap.dieuhanh.layout')
@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Công việc đang xử lý</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
              <th>TT</th>
              <th>Người tạo</th>
              <th>Chủ đề</th>
              <th>Ngày tạo</th>
              <th>Tiến độ</th>
              <th>Hạn xử lý</th>

              <th></th>
            </tr>
            <?php $i=1 ?>
            @foreach ($dangxuly as $ctn)
            <tr>
              <td>{{$i}}</td>
              <td>{{$ctn->user->name}}</td>
              <td>{{$ctn->taoviec->tencongviec}}</td>
              <td>{{$ctn->taoviec->thoigiantao}}</td>
              <td>{{$ctn->tiendo}}%</td>
              <td>{{$ctn->taoviec->hanxuly}}</td>

              <td>
                <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#CongViec{{$ctn->id}}">Cập nhật tiến độ</button>

              </td>
            </tr>
            <?php $i++; ?>
            <!-- Chitiet Cong viec -->
            <div class="modal fade" id="CongViec{{$ctn->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form action="adminstrap/dieu-hanh-cong-viec/dang-xu-ly/{{$ctn->id}}" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cập nhật tiến độ</h4>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                          <label>Nội dung xử lý:</label>
                          <textarea class="form-control" name="noiDungXuLy" rows="5" placeholder="Nhập yêu cầu công việc" required>{{$ctn->noidung}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Tiến độ xử lý</label>
                            <div class="form-group">

                              <?php

                                for ($i=10; $i <110 ; $i=$i+10) {
                              ?>
                                    <label class="radio-inline"><input type="radio" name="tienDoXuLy" value="{{$i}}"
                                      <?php
                                      if ($i==$ctn->tiendo){
                                        echo "checked";
                                      }
                                       ?>

                                      >{{$i}}%</label>
                              <?php
                                }

                               ?>



                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tệp đính kèm <span class="glyphicon glyphicon-paperclip"></span></label>
                            <input type="file" name="tepDinhKem"/>
                            <a href="/upload/taoviec/xuly/{{$ctn->tepdinhkem}}">{{$ctn->tepdinhkem}}</a>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                      </div>

                </form>
                </div>
              </div>
            </div>

            @endforeach
        </table>
      </div>
    </div>
</div>

@endsection
