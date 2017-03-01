@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('content')

<div class="title-bar">
  <div class="container">
    <h1>Biển, Đảo Việt Nam</h1>
  </div>
</div>

<div class="main">
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="biendao">
        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/m-nz3bh2S3c?list=PLLsBxGJhjWcZvdtZQTtLWeGmU8KzyW8YQ" frameborder="0" allowfullscreen></iframe>
      </div>

    </div>


    <div class="col-md-4">
      @include('flayout.sidebar')
    </div>
  </div>
</div>
</div>
@endsection
