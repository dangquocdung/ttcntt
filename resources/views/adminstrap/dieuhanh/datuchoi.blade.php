@extends('adminstrap.layout')

@section('css')
  @include('adminstrap.dieuhanh.css')
@endsection


@section('header')
  @include('adminstrap.dieuhanh.header')
@endsection

@section('left-menu')
  @include('adminstrap.dieuhanh.left-menu')
@endsection

@section('content')

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Công việc đã từ chối</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
            <tr>
              <th>TT</th>
              <th>Người tạo</th>
              <th>Chủ đề</th>
              <th>Ngày tạo</th>
              <th>Hạn xử lý</th>
              <th>Yêu cầu</th>
              <th></th>
            </tr>
            <?php $i=1 ?>
            @foreach ($datuchoi as $ctn)
            <tr>
              <td>{{$i}}</td>
              <td>{{$ctn->user->name}}</td>
              <td>{{$ctn->taoviec->tencongviec}}</td>
              <td>{{$ctn->taoviec->thoigiantao}}</td>
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


@section('modal')
  @include('adminstrap.dieuhanh.modal')
@endsection
