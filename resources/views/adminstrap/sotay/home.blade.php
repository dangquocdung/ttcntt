@extends('adminstrap.layout')

@section('css')
  @include('adminstrap.css')
@endsection

@section('header')
  @include('adminstrap.sotay.header')
@endsection

@section('content')

<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Danh sách ghi chú</h3>
  </div>

  <!-- Latest Users -->

  <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <tr>
          <th>Tiêu đề</th>
          <th>Địa điểm</th>
          <th>Thời gian tạo</th>
          <th>Thời gian sửa</th>
          <th></th>
        </tr>

        @foreach ($ghichu as $gc)
          <tr>
            <td data-toggle="collapse" data-parent="#accordion" href="#noiDung{{$gc->id}}"><span class="caret"></span> <strong>{{$gc->tieude}}</strong></td>
            <td>{{$gc->diadiem}}</td>
            <td>{{$gc->created_at}}</td>
            <td>{{$gc->updated_at}}</td>
            <td>
              <form action="adminstrap/so-tay-ca-nhan/xoa-ghi-chu/{{$gc->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ghichu{{$gc->id}}">Edit</button>
                  <button onclick="return confirm('Bạn muốn xóa user này?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>

          <tr id="noiDung{{$gc->id}}" class="info panel-collapse collapse">
              <td colspan="5">{!! $gc->noidung !!}</td>
          </tr>
        @endforeach



    </table>
  </div>

</div>
@endsection

@section('modal')
  @include('adminstrap.sotay.modal')
@endsection
