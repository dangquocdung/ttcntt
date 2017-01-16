@extends('flayout.index')



@section('title')
  <title>Trung tâm CNTT & TT tỉnh Hà Tĩnh</title>
@endsection

@section('content')
<div class="title-bar">
  <div class="container">
    <h1>Điểm báo</h1>
  </div>
</div>

<div class="main">
<div class="container">

  <div class="row">
      <div class="col-md-8">
        <div class="VivaTimeline">
          <dl>
            <?php $i=1 ?>
            @foreach ($diembao as $db)
              @if ( $i%2 == 1)
                <dd class="pos-left clearfix">
              @else
                <dd class="pos-right clearfix">
              @endif

                    <div class="circ"></div>
                    <div class="time">{{ Carbon\Carbon::parse($db->pubDate)->format('d-m-Y H:m:s') }}</div>
                    <div class="events">
                        <div class="events-header">
                          <a href="{{$db->link}}" target="_blank">{{$db->title}}</a>

                        </div>
                        <div class="events-body">
                            <div class="row">
                              @if (strlen(trim($db->media))>0)
                                <div class="col-md-6 pull-left">
                                    <a class="fancybox" href="{{$db->media}}">
                                      <img class="events-object img-responsive img-rounded" src="{{$db->media}}" />
                                    </a>
                                </div>
                              @endif

                                <div class="events-desc">
                                  {!! $db->description !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </dd>
                <?php $i++ ?>
            @endforeach

            {!! $diembao->render() !!}

          </dl>
        </div>
      </div>

      <div class="col-md-4">
        @include('flayout.sidebar')
      </div>
  </div>
</div>
</div>
@endsection
