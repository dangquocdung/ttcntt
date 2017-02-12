@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection


@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Tiện ích</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8" ng-app = "codinh" ng-controller = "codinhController">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Chuyển đổi mã vùng điện thoại cố định</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
             <label>Chọn tỉnh</label>
             <select class="form-control" ng-model = "codinh.firstName">
                <option value="0239" selected="selected">Hà Tĩnh</option>
                <option value="0238">Nghệ An</option>
                <option value="0237">Thanh Hoá</option>
                <option value="0236">Đà Nẵng</option>
                <option value="0235">Quảng Nam</option>
                <option value="0234">Thừa Thiên - Huế</option>
                <option value="0233">Quảng Trị</option>
                <option value="0232">Quảng Bình</option>
                <option value="0216">Yên Bái </option>
                <option value="0215">Điện Biên</option>
                <option value="0214">Lào Cai</option>
                <option value="0213">Lai Châu</option>
                <option value="0212">Sơn La</option>
              </select>
          </div>
          <div class="form-group">
            <label>Số máy bàn:</label>
            <input type="text" class="form-control" ng-model = "codinh.lastName" />
          </div>
          <div class="form-group">
            <p style="text-align: center; font-weight:bold">Số điện thoại mới:</p>
            <p style="text-align: center; font-weight:bold; font-size:2em; color: red">@{{codinh.fullName()}}</p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">Chuyển đổi số thuê bao di động từ 11 về 10 số</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
             <label>Đầu số</label>
             <select class="form-control" ng-model = "didong.firstName">
                <option value="033" selected="selected">0168</option>
                <option value="034">0169</option>

              </select>
          </div>
          <div class="form-group">
            <label>7 Số kế tiếp:</label>
            <input type="text" class="form-control" ng-model = "didong.lastName" />
          </div>
          <div class="form-group">
            <p style="text-align: center; font-weight:bold">Số điện thoại mới:</p>
            <p style="text-align: center; font-weight:bold; font-size:2em; color: red">@{{didong.fullName()}}</p>
          </div>
        </div>
      </div>



      <script>

         var appCoDinh = angular.module("codinh", []);

         appCoDinh.controller('codinhController', function($scope) {

            $scope.codinh = {
               firstName: "0239",
               lastName: "3123456",

               fullName: function() {
                  var studentObject;
                  studentObject = $scope.codinh;


                  return "(" + studentObject.firstName + ") " + studentObject.lastName;
               }
            };

            $scope.didong = {
               firstName: "033",
               lastName: "1234567",

               fullName: function() {
                  var studentObject;
                  studentObject = $scope.didong;


                  return studentObject.firstName + " " + studentObject.lastName;
               }
            };


         });
      </script>

    </div>
    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>

@endsection
