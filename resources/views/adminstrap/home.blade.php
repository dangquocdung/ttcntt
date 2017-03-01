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
      <h3 class="panel-title">5 Lịch công tác mới nhất</h3>
    </div>

    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày tháng</th>
            <th>Người đăng</th>
            <th>Nội dung</th>
            <th>Địa điểm</th>
            <th>Bắt đầu</th>
            <th>Kết thúc</th>
            <th>Ghi chú</th>
          </tr>
          @foreach($lichcongtacall as $lct)
          <tr>
            <td>{{$lct->ngaythang}}</td>
            <td>{{$lct->user->name}}</td>
            <td>{!!$lct->noidung!!}</td>
            <td>{{$lct->diadiem}}</td>
            <td>{{$lct->batdau}}</td>
            <td>{{$lct->ketthuc}}</td>
            <td>{!!$lct->ghichu!!}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">5 Tin nội bộ mới nhất</h3>
    </div>

    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày đăng</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Tóm tắt</th>
            <th>Ghi chú</th>
          </tr>
          @foreach($tintucall as $tt)
          <tr>
            <td>{{$tt->ngaydang}}</td>
            <td>{{$tt->tieude}}</td>
            <td><img src="upload/tintuc/{{$tt->urlhinh}}" height="30px"></td>
            <td>{{$tt->tomtat}}</td>
            <td>{{$tt->ghichu}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading main-color-bg">
      <h3 class="panel-title">5 Văn bản mới nhất</h3>
    </div>

    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Ngày đăng</th>
            <th>Số / Kí hiệu</th>
            <th>Tiêu đề</th>
            <th>Văn bản</th>
            <th>Ghi chú</th>
          </tr>
          @foreach($vanbanall as $vb)
          <tr>
            <td>{{$vb->ngaydang}}</td>
            <td>{{$vb->socv}}</td>
            <td>{{$vb->tieude}}</td>
            <td style="text-align: center;"><a href="/upload/vanban/pdf/{{$vb->vanban}}" target="_blank"><span class="glyphicon glyphicon-file"></span></a></td>
            <td>{{$vb->ghichu}}</td>
          </tr>
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
