@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" role="form" method="POST" action="login" class="well">
              {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Địa chỉ email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                  </div>

                  <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                  </div>
                  <button type="submit" class="btn btn-default btn-block">Đăng nhập</button>
                  <a class="btn btn-link" href="{{ url('/password/reset') }}">
                      Quên mật khẩu?
                  </a>

              </form>
          </div>
        </div>
      </div>
  @endsection
