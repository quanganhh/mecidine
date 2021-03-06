@extends('master')
@section('content')
<section>
    {{-- @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
    </div>
    @endif --}}
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}
        </div>
     @endif
     @if(Session::has('loginSuccess'))
        <div class="alert alert-success">{{Session::get('loginSuccess')}}
        </div>
     @endif
     @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}
        </div>
     @endif
    <div class="container">
      <div class="row pages-content">
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err )
                <ul><li>{{$err}}</li></ul><br/>
                @endforeach
            </div>
        @endif
          <div class="col-lg-12 col-md-12 col-sm-12 left-slider-bar">
              <ol class="breadcrumb">
                  <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                  <li class="active">{{ __('message.info')}}</li>
              </ol>
              <form action="{{ route('postSignin') }}" method="post" >
                @csrf
                <div class="panel panel-success page-register">
                  <!-- Default panel contents -->
                  <div class="panel-heading"><h3>{{ __('message.accountlogin') }}</h3></div>
                  <div class="panel-body">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="clearfix">
                          <div class="form-group">
                            <label for="account">{{ __('message.userL')}}</label>
                            <input type="text" class="form-control" id="account" name="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('message.pass')}}</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                        </div>              
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> {{ __('message.autologin')}} 
                          </label>
                          <div class="hihi">
                          <p>
                            <a href="{{ route('register') }}">
                              {{ __('message.register') }}
                            </a>
                          </p>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">{{ __('message.signin')}}</button>
                      <div class="checkbox">
                        <p class="help-block"><a href="">
                          <i class="glyphicon glyphicon-question-sign"></i> {{ __('message.forgot')}}</a>
                        </p>
                    </div>                
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 pull-right">
                <div class="box-login-label clearfix">
                    <div class="box-login-level">
                        <div class="clearfix">
                            <p>{{ __('message.loginfacebook') }}</p>
                            <div class="logo-social">
                                <a href="/user/sso?service=facebook" class="logo-fb"></a>
                                <a href="/user/sso?service=google_oauth" class="logo-google"></a>
                            </div>
                        </div>
                        <div class="clearfix">
                            Bạn là thành viên nhưng quên mật khẩu? Hãy yêu cầu hệ thống <a href="#">gửi lại mật khẩu mới.</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
</form>
</div>
</div>
</div>
</section>
@endsection