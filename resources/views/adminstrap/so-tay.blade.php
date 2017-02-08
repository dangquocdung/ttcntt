@extends('adminstrap.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Sổ tay cá nhân (Notepad)</h3>
  </div>

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Mục lục</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <th>Thời gian</th>
            <th>Địa điểm</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>

            <th></th>
          </tr>
        
      </table>
    </div>
    </div>
  </div>
@endsection
