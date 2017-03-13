@extends('adminstrap.layout')

@section('css')
  @include('adminstrap.css')
@endsection

@section('header')
  @include('adminstrap.header')
@endsection

@section('left-menu')
  @include('adminstrap.left-menu')
@endsection
@section('content')
<div class="col-md-9 col-lg-9">


  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Thông điệp khách hàng</h3>
    </div>
    <div class="panel-body">
      <div class="row">
            <div class="col-md-12">
              <form action="adminstrap/thong-diep/tim-kiem" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="input-group">
                  <input class="form-control" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Filter Pages..." name="timkiem">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Tìm</button>
                  </span>
                </div><!-- /input-group -->
              </form>
            </div>
      </div>
      <br>
      <div class="table-responsive">
          <table class="table table-striped table-hover">
            <tr>
              <th>#</th>
              <th>Ngày tháng</th>
              <th>Họ Tên</th>
              <th>Email</th>
              <th>Thông điệp</th>
              <th></th>
            </tr>
            @foreach($thongdiep as $td)
              @if (strlen(trim($td->mes)) >0 )
              <tr>
                <td>{{$td->id}}</td>
                <td>{{$td->created_at}}</td>
                <td>{{$td->ten}}</td>
                <td>{{$td->email}}</td>
                <td>{{$td->mes}}</td>
              </tr>
              @endif
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modal')
  @include('adminstrap.modal')
@endsection
