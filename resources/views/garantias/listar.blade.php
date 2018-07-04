@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')


<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


<div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VER GARANTIAS
                        </h2>
                    </div>

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script> /*  este estilo es para la  busqueda*/
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="price-box">VER CLIENTE </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active ">VER CLIENTE </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        

                    </div>



     
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                   
                    <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div></div>

                  <div class="col-sm-12 col-md-6"><div id="example1_filter"  class="dataTables_filter">


                   <label>Search:<input id="myInput" type="text" placeholder="Search.."></label></div></div></div>

                  


                      <div class="row">

                  <div class="table-responsive">

                        <div class="col-sm-12">

                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <tr>
                  <th>ID</th>
                    <th>fecha_inicio</th>
                    <th>fecha_final</th>
                    <th>descripcion</th>
                    <th>daños</th>
                    



                  </tr>
                </thead>

            <tbody id="myTable">
                <tr>
                @foreach($cliente1 as $cliente1)

         <td>{{$cliente1->id}}</td>
         <td>{{$cliente1->fecha_inicio}}</td>
         <td>{{$cliente1->fecha_final}}</td> 
         <td>{{$cliente1->descripcion}}</td>
         <td>{{$cliente1->daños}}</td>
         
            </tr>
               @endforeach
    
  </tbody>
</table>



    
@endsection