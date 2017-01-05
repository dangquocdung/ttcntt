@extends('adminstrap.dieuhanh.layout')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Tổng quan công việc</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 10</h2>
        <h4>Đã hoàn thành</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 15</h2>
        <h4>Chưa hoàn thành</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 20</h2>
        <h4>Sắp hết hạn</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="well dash-box">
        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 25</h2>
        <h4>Chưa tiếp nhận</h4>
      </div>
    </div>
  </div>
  </div>

  <!-- Latest Users -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Danh sách công việc</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr>
            <td></td>
            <th>Người tạo</th>
            <th>Người chuyển</th>
            <th>Chủ đề</th>
            <th>Ngày tạo</th>
            <th>Hạn xử lý</th>
            <th>Tiến độ</th>
            <th>Trao đổi</th>
            <th>Ghi chú</th>
          </tr>

          <tr>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </td>
            <td>Nguyễn Văn A</td>
            <td>Nguyễn Văn B</td>
            <td>Dữ liệu test</td>
            <td>04/01/2017</td>
            <td>10/01/2017</td>
            <td>50%</td>
            <td><i class="fa fa-comments-o" aria-hidden="true"></i></td>
            <td>123/KH</td>
          </tr>
          <tr>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </td>
            <td>Nguyễn Văn A</td>
            <td>Nguyễn Văn B</td>
            <td>Dữ liệu test</td>
            <td>04/01/2017</td>
            <td>10/01/2017</td>
            <td>50%</td>
            <td><i class="fa fa-comments-o" aria-hidden="true"></i></td>
            <td>123/KH</td>
          </tr>
          <tr>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </td>
            <td>Nguyễn Văn A</td>
            <td>Nguyễn Văn B</td>
            <td>Dữ liệu test</td>
            <td>04/01/2017</td>
            <td>10/01/2017</td>
            <td>50%</td>
            <td><i class="fa fa-comments-o" aria-hidden="true"></i></td>
            <td>123/KH</td>
          </tr>
      </table>
    </div>
    </div>
  </div>

@endsection
