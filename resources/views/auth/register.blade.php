<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>A&S | Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>A&S</b> Asesorias</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrarme</p>

      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombres" id="name" name="name" required autofocus>
            </div>
            @if ($errors->has('name'))
                <a class="text-danger">
                    {{ $errors->first('name') }}
                </a>
            @endif
        </div>
        <div class="form-group has-feedback">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Apellidos" id="lastname" name="lastname" required autofocus>
            </div>
            @if ($errors->has('name'))
                <a class="text-danger">
                    {{ $errors->first('lastname') }}
                </a>
            @endif
        </div>

        <div class="form-group has-feedback">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-Mail" id="email" name="email" required>
            </div>
            @if ($errors->has('email'))
                <a class="text-danger">
                    {{ $errors->first('email') }}
                </a>
            @endif
        </div>
        
        <div class="form-group has-feedback">
            <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" id="password" name="password" required>
            </div>
            @if ($errors->has('password'))
                <a class="text-danger">
                    {{ $errors->first('password') }}
                </a>
            @endif
        </div>
        <div class="form-group has-feedback">
          <div class="input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Contraseña" id="password-confirm" name="password_confirmation" required>
            </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Registrar') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->

</body>
</html>


