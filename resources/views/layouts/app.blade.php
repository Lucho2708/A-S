<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("plugins/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
  @yield('styles')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("plugins/iCheck/flat/blue.css")}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset("plugins/morris/morris.css")}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset("plugins/datepicker/datepicker3.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker-bs3.css")}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700")}}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav  class="main-header navbar navbar-expand bg-primary elevation-2 navbar-light border-bottom  ">
    <!-- Left navbar links -->
    <ul  class="navbar-nav">
      <li  class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li style="border-radius: 8px;" class="nav-item d-none d-sm-inline-block">
        <a  href="{{route('home')}}" class="nav-link">Home</a>
      </li>
    </ul>


  
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container para cambiar el color a la barra nav delm menu -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-black elevation-2 ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-primary elevation-2">
      <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
    <font color="white">A&S</font></a>
    
    

    <!-- Sidebar -->
    <div class="sidebar">
      
      @yield('menu')
      
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('sweet::alert')
    @yield('contenido')
   {!! Html::script('js/dropdown.js')!!}

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer bg-primary elevation-2">
    <strong>Copyright &copy; 2018-2024 <a href="{{route('home')}}"> &nbsp;&nbsp;A&S ASESORIAS SAS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("https://code.jquery.com/ui/1.12.1/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- Morris.js charts -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js")}}"></script>
<script src="{{asset("plugins/morris/morris.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("plugins/sparkline/jquery.sparkline.min.js")}}"></script>
<!-- jvectormap -->
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("plugins/knob/jquery.knob.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js")}}"></script>
<script src="{{asset("plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- datepicker -->
<script src="{{asset("plugins/datepicker/bootstrap-datepicker.js")}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- Slimscroll -->
<script src="{{asset("plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("plugins/fastclick/fastclick.js")}}"></script>
@yield('js')
<!-- AdminLTE App -->
<script src="{{asset("dist/js/adminlte.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("dist/js/pages/dashboard.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("dist/js/demo.js")}}"></script>


<!-- AdminLTE for demo purposes -->

@yield('js-table')
</body>
</html>
