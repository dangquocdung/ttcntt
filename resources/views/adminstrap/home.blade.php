@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tổng quan trang web</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$stv}}</h2>
        <h4>Thành viên</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{$slct}}</h2>
        <h4>Lịch công tác</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> {{$stt}}</h2>
        <h4>Tin tức</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{$scv}}</h2>
        <h4>Công văn</h4>
      </div>
    </div>
  </div>
  </div>

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Danh sách thành viên</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <th>Họ và Tên</th>
            <th>Chức vụ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th></th>
          </tr>
          @foreach ($thanhvien as $tv)
          <tr>
            <td>{{$tv->name}}</td>
            <td>{{$tv->chucvu->chucvu}}</td>
            <td>{{$tv->email}}</td>
            <td>{{$tv->didong}}</td>
            <td>
              @if (Auth::user())



                <form action="adminstrap/delete-user/{{$tv->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                  @if ( Auth::user()->id==$tv->id )
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#user{{$tv->id}}">Edit</button>
                    <button onclick="return confirm('Bạn muốn xóa user này?')" type="submit" class="btn btn-danger">Delete</button>
                  @elseif ( Auth::user()->quyen == 5)
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#user{{$tv->id}}">Edit</button>
                    <button onclick="return confirm('Bạn muốn xóa user này?')" type="submit" class="btn btn-danger">Delete</button>

                  @endif
                </form>

                <!-- Chitiet Cong viec -->
                <div class="modal fade" id="user{{$tv->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="adminstrap/edit-user/{{$tv->id}}" method="POST" enctype="multipart/form-data">
                          <input type="hidden" name="_method" value="PUT">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Thông tin người dùng</h4>
                          </div>
                          <div class="modal-body">

                            <div class="form-group">
                              <label>Họ và Tên:</label>
                              <input type="text" class="form-control" name="hovaten" value="{{$tv->name}}" required>
                            </div>

                            <div class="form-group">
                              <label>Email:</label>
                              <input type="text" class="form-control" name="email" value="{{$tv->email}}" disabled="">
                            </div>

                            <div class="form-group">
                              <label>Điện thoại:</label>
                              <input type="text" class="form-control" name="dienthoai" value="{{$tv->dienthoail}}">
                            </div>

                            <div class="form-group">
                              <label>Di động:</label>
                              <input type="text" class="form-control" name="didong" value="{{$tv->didong}}" required>
                            </div>

                            @if ( Auth::user()->quyen == 5)

                              <div class="form-group">
                                <label>Phòng Ban:</label>
                                <select name="phongban" class="form-control">

                                  @foreach ($phongban as $pb)
                                    @if ($tv->phongban_id==$pb->id)
                                      <option value="{{$pb->id}}" selected="">{{$pb->tenphongban}}</option>
                                    @else
                                      <option value="{{$pb->id}}">{{$pb->tenphongban}}</option>
                                    @endif

                                  @endforeach


                                </select>

                              </div>

                              <div class="form-group">
                                <label>Chức vụ:</label>
                                <select name="chucvu" class="form-control">
                                  @foreach ($chucvu as $chuc)
                                    @if ($tv->chucvu_id==$chuc->id)
                                      <option value="{{$chuc->id}}" selected="">{{$chuc->chucvu}}</option>
                                    @else
                                      <option value="{{$chuc->id}}">{{$chuc->chucvu}}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Level:</label>
                                <select name="level" class="form-control">
                                  @foreach ($level as $lv)
                                    @if ($tv->quyen==$lv->id)
                                      <option value="{{$lv->id}}" selected="">{{$lv->level}}</option>
                                    @else
                                      <option value="{{$lv->id}}">{{$lv->level}}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div>
                            @else

                                <input type="hidden" name="phongban" value="{{$tv->phongban_id}}">
                                <input type="hidden" name="chucvu" value="{{$tv->chucvu_id}}">
                                <input type="hidden" name="level" value="{{$tv->quyen}}">

                            @endif

                            <div class="form-group">
                                <label>Tệp đính kèm <span class="glyphicon glyphicon-paperclip"></span></label>
                                <input type="file" name="hinhanh"/>
                                <a href="/upload/team/{{$tv->tenhinh}}">{{$tv->tenhinh}}</a>
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

              @endif
          </td>
          </tr>
          @endforeach
      </table>
    </div>
    </div>
  </div>
@endsection
