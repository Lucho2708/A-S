<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>A&S | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("../../dist/css/adminlte.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("../../plugins/iCheck/square/blue.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700")}}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>A&S</b> Asesorias</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Inicia sesión</b></p>

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required autofocus>
          <span class="fa fa-envelope form-control-feedback" ></span>
            @if ($errors->has('email'))
                <a class="text-danger">{{ $errors->first('email') }}</a>
            @endif
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password"  placeholder="Password" required>
          <span class="fa fa-lock form-control-feedback"></span>
           @if ($errors->has('password'))
                <a class="text-danger">{{ $errors->first('password') }}</a>
            @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Iniciar') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">{{ __('Olvidaste tu contraseña?') }}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>
</html>
