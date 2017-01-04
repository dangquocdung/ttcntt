@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Lịch công tác của {{ Auth::user()->name }}</h3>
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
            <th>Ngày tháng</th>
            <th>Nội dung</th>
            <th>Địa điểm</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Ghi chú</th>
            <th></th>
          </tr>
          @foreach($lichcongtac as $lct)
          <tr>
            <td>{{$lct->ngaythang}}</td>
            <td>{{$lct->noidung}}</td>
            <td>{{$lct->diadiem}}</td>
            <td>{{$lct->batdau}}</td>
            <td>{{$lct->ketthuc}}</td>
            <td>{{$lct->ghichu}}</td>
            <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
