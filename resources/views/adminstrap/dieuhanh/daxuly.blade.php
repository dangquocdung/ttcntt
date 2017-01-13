@extends('adminstrap.dieuhanh.layout')
@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Công việc đã xử lý</h3>
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
              <th>Yêu cầu</th>
              <th></th>
            </tr>
            <?php $i=1 ?>
            @foreach ($daxuly as $ctn)
            <tr>
              <td>{{$i}}</td>
              <td>{{$ctn->user->name}}</td>
              <td>{{$ctn->taoviec->tencongviec}}</td>
              <td>{{$ctn->taoviec->thoigiantao}}</td>
              <td>{{$ctn->tiendo}}%</td>
              <td>{{$ctn->taoviec->hanxuly}}</td>
              <td>{!!$ctn->taoviec->yeucaucongviec!!}</td>
              <td>
                <button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target="#CongViec{{$ctn->id}}">Chi tiết</button>

              </td>
            </tr>
            <?php $i++; ?>
            <!-- Chitiet Cong viec -->
            <div class="modal fade" id="CongViec{{$ctn->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Chi tiết Công việc</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          @if ($ctn->taoviec->viecgap)
                            <label>Việc gấp</label>
                          @endif
                        </div>

                        <div class="form-group">
                          <p><strong>Người tạo: </strong> <span>{{$ctn->user->name}}</span></p>
                        </div>

                        <div class="form-group">
                          <p><strong>Tên công việc: </strong> <span>{{$ctn->taoviec->tencongviec}}</span></p>
                        </div>
                        <div class="form-group">
                          <p><strong>Tệp đính kèm: </strong></p>
                          <p><a href="/upload/taoviec/{{$ctn->taoviec->tepdinhkem}}"><span class="glyphicon glyphicon-paperclip"></span></a></p>
                        </div>
                        <div class="form-group">
                          <p><strong>Yêu cầu công việc: </strong>
                          <p>{!! $ctn->taoviec->yeucaucongviec !!}</p>
                        </div>
                       <div class="form-group">
                            <p><strong>Hạn xử lý:</strong> <span>{{$ctn->taoviec->hanxuly}}</span></p>
                        </div>
                        <hr>
                        <div class="form-group">
                          <p><strong>Nội dung xử lý: </strong></p>
                          <p>{!! $ctn->noidung !!}</p>
                        </div>
                        <div class="form-group">
                          <p><strong>File đính kèm: </strong> <span>{{$ctn->tepdinhkem}}</span></p>
                        </div>

                    </div>
                </div>
              </div>
            </div>

            @endforeach
        </table>
      </div>
    </div>
</div>

@endsection
