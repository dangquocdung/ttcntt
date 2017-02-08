@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection


@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Tiện ích tra cứu Số điện thoại</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Tra cứu số điện thoại di động sau khi chuyển từ 11 thành 10 số</h4>
        </div>
        <div class="panel-body">


          <div ng-app = "" ng-controller = "chuyensoController">
            <div class="form-group">
              <label>Số điện thoại cần chuyển</label>
              <input type="text" class="form-control" placeholder="Nhập số điện thoại cần chuyển"  autofocus="" ng-model = "name" />
            </div>

            <div class="form-group">
              <label>Số điện thoại mới: <span ng-bind = "name"></span></label>
            </div>

          </div>
          <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
          <script type="text/javascript">

          function chuyensoController($scope){
            $scope.name = 'dang quoc dung';
          }

          </script>

        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Tra cứu số điện thoại di động sau khi chuyển mã vùng</h4>
        </div>
        <div class="panel-body">



        </div>
      </div>

    </div>
    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>

@endsection
