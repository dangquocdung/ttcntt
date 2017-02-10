<div class="col-md-3">


  <div class="list-group">
    <a href="adminstrap" class="list-group-item active main-color-bg">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Cập nhật thông tin
    </a>
    <a href="/adminstrap/lich-cong-tac" class="bg-danger list-group-item1"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lịch công tác <span class="badge">{{$lct1}}</span></a>
    <a href="/adminstrap/tin-tuc" class="bg-success list-group-item1"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tin tức đã đăng <span class="badge">{{$tt1}}</span></a>
    <a href="/adminstrap/van-ban" class="bg-info list-group-item1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Công văn đã đăng <span class="badge">{{$cv1}}</span></a>
  </div>

  <div class="well">
    <h4>Tỉ lệ đầu việc</h4>
    <div class="progress">
      <?php
       if ($slct>0){
         $i = ($lct1/$slct)*100;

       }else{
         $i = 0;
       }
       ?>
      <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
          {{$i}}%
      </div>
    </div>
    <h4>Tỉ lệ đăng tin </h4>
    <div class="progress">
      <?php
       if ($stt>0){
         $i = ($tt1/$stt)*100;

       }else{
         $i = 0;
       }
       ?>
      <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
            {{$i}}%
      </div>
    </div>

    <h4>Tỉ lệ đăng công văn </h4>
    <div class="progress">
      <?php
       if ($scv>0){
         $i = ($cv1/$scv)*100;

       }else{
         $i = 0;
       }
      ?>
      <div class="progress-bar" role="progressbar" aria-valuenow="{{$i}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$i}}%;">
            {{$i}}%
      </div>
    </div>
  </div>
</div>
