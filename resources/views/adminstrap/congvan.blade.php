@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tin tức đã đăng của {{ Auth::user()->name }}</h3>
  </div>
  <div class="panel-body">
    <div class="row">
          <div class="col-md-12">
              <input class="form-control" type="text" placeholder="Filter Pages...">
          </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày đăng</th>
            <th>Số / Kí hiệu</th>
            <th>Tiêu đề</th>
            <th>Văn bản</th>
            <th>Ghi chú</th>

            <th></th>
          </tr>
          @foreach($congvan as $cv)
          <tr>
            <td>{{$cv->ngaydang}}</td>
            <td>{{$cv->socv}}</td>
            <td>{{$cv->tieude}}</td>
            <td style="text-align: center;"><a href="/upload/vanban/pdf/{{$cv->vanban}}" target="_blank"><span class="glyphicon glyphicon-file"></span></a></td>
            <td>{{$cv->ghichu}}</td>

            <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
