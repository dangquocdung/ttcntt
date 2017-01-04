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
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Tóm tắt</th>

            <th></th>
          </tr>
          @foreach($tintuc as $tt)
          <tr>
            <td>{{$tt->ngaydang}}</td>
            <td>{{$tt->tieude}}</td>
            <td><img src="upload/tintuc/{{$tt->urlhinh}}" height="30px"></td>
            <td>{{$tt->tomtat}}</td>

            <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
