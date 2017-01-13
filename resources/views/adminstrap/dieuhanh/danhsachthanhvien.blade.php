@extends('adminstrap.dieuhanh.layout')
@section('content')

<!-- Latest Users -->
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Danh sách thành viên</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <tr>
          <th>Họ và Tên</th>
          <th>Chức vụ</th>
          <th>Phòng/Ban</th>
          <th>Email</th>
          <th>Số điện thoại</th>

        </tr>
        @foreach ($thanhvien as $tv)
        <tr>
          <td>{{$tv->name}}</td>
          <td>{{$tv->chucvu->chucvu}}</td>
          <td>{{$tv->phongban->tenphongban}}</td>
          <td>{{$tv->email}}</td>
          <td>{{$tv->didong}}</td>

        </tr>
        @endforeach
    </table>
  </div>
  </div>
</div>



@endsection
