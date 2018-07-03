
@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/tabla.css">


<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

    <style>
    
 
    

    table.rwd,table.rwd_auto {border:1px solid #ccc;width:100%;margin:0 0 50px 0}
        .rwd th,.rwd_auto th {background:#ccc;padding:5px;text-align:center;}
        .rwd td,.rwd_auto td {border-bottom:1px solid #ccc;padding:5px;text-align:center}
        .rwd tr:last-child td, .rwd_auto tr:last-child td{border:0}
        
    .rwd {width:100%;overflow:auto;}
        .rwd table.rwd_auto {width:auto;min-width:100%}
            .rwd_auto th,.rwd_auto td {white-space: nowrap;}
            
    }
    
    </style>



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="price-box">VER Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active ">Ver Cliente </li>
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


                     <div class="card-body">
    
    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">

    <div class="col-sm-12 col-md-6">
    <div class="dataTables_length" id="example1_length">

    <label>Show

 <select name="example1_length" aria-controls="example1" class="form-control form-control-sm">

    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
    </select> 

    entries</label></div></div>

    <div class="col-sm-12 col-md-6">

    <div id="example1_filter" class="dataTables_filter">

    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>


       <div class="rwd col">
        <table class="rwd_auto price-box">
            <thead>
            <tr>


            
            <th class="header">ID</th>
            <th class="header">Nombres Completos</th>
            <th class="header">Apellidos</th>
            <th class="header">tip_identidad</th>
            <th class="header">num_identidad</th>
            <th class="header">telefono</th>
            <th class="header">telefono1</th>
            <th class="header">email</th>
            <th class="header">departamento</th>
            <th class="header">ciudad</th>
            <th class="header">Direccion</th>
            <th class="header"height="">tipo de persona</th>
            <th class="header" >Profesion</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($cliente as $cliente)

         <td class="header">{{$cliente->id}}</td>
         <td class="header">{{$cliente->nombres}}</td>
         <td class="header">{{$cliente->apellidos}}</td> 
         <td class="header">{{$cliente->tip_identidad}}</td>
         <td class="header">{{$cliente->num_identidad}}</td>
         <td class="header">{{$cliente->telefono}}</td>
         <td class="header">{{$cliente->telefono1}}</td>
         <td class="header">{{$cliente->email}}</td>
         <td class="header">{{$cliente->departamento}}</td>
         <td class="header">{{$cliente->ciudad}}</td>
         <td class="header">{{$cliente->direccion}}</td>
         <td class="header">{{$cliente->tip_persona}}</td>
         <td class="header">{{$cliente->profesion}}</td>
            </tr>
               @endforeach
            
    
            </tbody>


        </table>
        
      <div class="col-sm-12 col-md-5">
        
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 21 to 30 of 57 entries</div></div>
        

         <!-- ## Paginacion de next -->
         <div class="col-sm-12 col-md-15">

        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">

        <ul class="pagination">

        <li class="paginate_button page-item previous disabled" id="example1_previous">

        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>

        <li class="paginate_button page-item active">

        <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>

        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
    </div></div>

    </div>

      


      

                        

        <!-- #END# Basic Examples -->


    </div>
@endsection