<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('message.login') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('bower_components/assets_loginform/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets_loginform/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('bower_components/assets_loginform/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                {{--
                <form method="POST" action="{{ route('login') }}"> --}} {!! Form::open(array('route' => 'login', 'method' => 'POST', 'class' => 'login100-form validate-form flex-sb flex-w')) !!} @csrf
                    <span class="login100-form-title p-b-53">
                        {{ trans('message.login') }}
                    </span>
                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i> Facebook
                    </a>
                    <a href="#" class="btn-google m-b-20">
                        <img src="bower_components/assets_loginform/images/icons/icon-google.png" alt="GOOGLE"> Google
                    </a>
                    <span>{{ $errors->first('email') }}</span>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Email
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="{{ trans('message.emailval') }}">
                        <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span> @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                    </div>
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            {{ trans('message.pass') }}
                        </span>

                        <a href="#" class="txt2 bo1 m-l-5">
                            {{ trans('message.forgot') }}
                        </a>
                    </div>
                    <span>{{ $errors->first('password') }}</span>
                    <div class="wrap-input100 validate-input" data-validate="{{ trans('message.passval') }}">
                        <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                        <span class="focus-input100"></span> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                    </div>
                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            {!! Form::checkbox('remember', null) !!}
                        </span>
                        <span class="txt1">
                            {{ trans('message.remember') }}
                        </span>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
                        {!! Form::submit(trans('message.signin'), array('class' => 'login100-form-btn')) !!}
                    </div>
                    {{ Form::close() }}
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('bower_components/assets_loginform/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('bower_components/assets_loginform/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bower_components/assets_loginform/js/main.js') }}"></script>
</body>
</html>
