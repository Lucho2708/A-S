

@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')


<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">



    <style>
   
    table.width200,table.rwd_auto {border:1px solid #ccc;width:100%;margin:0 0 50px 0}
        .width200 th,.rwd_auto th {background:#ccc;padding:5px;text-align:center;}
        .width200 td,.rwd_auto td {border-bottom:1px solid #ccc;padding:5px;text-align:center}
        .width200 tr:last-child td, .rwd_auto tr:last-child td{border:0}
        
    .rwd {width:100%;overflow:auto;}
        .rwd table.rwd_auto {width:auto;min-width:100%}
            .rwd_auto th,.rwd_auto td {white-space: nowrap;}
            
    @media only screen and (max-width: 760px), (min-width: 768px) and (max-width: 1024px)  
    {
    
        table.width200, .width200 thead, .width200 tbody, .width200 th, .width200 td, .width200 tr { display: block; }
        
        .width200 thead tr { position: absolute;top: -9999px;left: -9999px; }
        
        .width200 tr { border: 1px solid #ccc; }
        
        .width200 td { border: none;border-bottom: 1px solid #ccc; position: relative;padding-left: 50%;text-align:left }
        
        .width200 td:before {  position: absolute; top: 6px; left: 6px; width: 45%; padding-right: 10px; white-space: nowrap;}

        .width200 td:nth-of-type(1):before { content: "ID"; }
        .width200 td:nth-of-type(2):before { content: "Nombres completos"; }
        .width200 td:nth-of-type(3):before { content: "Apellidos"; }
        .width200 td:nth-of-type(4):before { content: "tip_identidad"; }
        .width200 td:nth-of-type(5):before { content: "num_identidad"; }
        .width200 td:nth-of-type(6):before { content: "telefono"; }
        .width200 td:nth-of-type(7):before { content: "telefono1"; }
        .width200 td:nth-of-type(8):before { content: "email"; }
        .width200 td:nth-of-type(9):before { content: "departamento"; }
        .width200 td:nth-of-type(10):before { content: "ciudad"; }
        .width200 td:nth-of-type(11):before { content: "Direccion"; }
        .width200 td:nth-of-type(12):before { content: "tipo de persona"; }
        .width200 td:nth-of-type(13):before { content: "Profesion"; }
        
        .descarto {display:none;}
        .fontsize {font-size:10px}
    }
    
    /* Smartphones (portrait and landscape) ----------- */
    @media only screen and (min-width : 320px) and (max-width : 480px) 
    {
        body { width: 320px; }
        .descarto {display:none;}
    }
    
    /* iPads (portrait and landscape) ----------- */
    @media only screen and (min-width: 768px) and (max-width: 1024px) 
    {
        body { width: 495px; }
        .descarto {display:none;}
        .fontsize {font-size:10px}
    }
    
    </style>



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VER CLIENTES Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">VER CLIENTES Tables</li>
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


       <div class="rwd">
        <table class="rwd_auto">
            <thead>
            <tr>


            
            <th>ID</th>
            <th>Nombres Completos</th>
            <th>Apellidos</th>
            <th>tip_identidad</th>
            <th>num_identidad</th>
            <th>telefono</th>
            <th>telefono1</th>
            <th>email</th>
            <th>departamento</th>
            <th>ciudad</th>
            <th>Direccion</th>
            <th>tipo de persona</th>
             <th >Profesion</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($cliente as $cliente)

         <td>{{$cliente->id}}</td>
         <td>{{$cliente->nombres}}</td>
         <td>{{$cliente->apellidos}}</td> 
         <td>{{$cliente->tip_identidad}}</td>
         <td>{{$cliente->num_identidad}}</td>
         <td>{{$cliente->telefono}}</td>
         <td>{{$cliente->telefono1}}</td>
         <td>{{$cliente->email}}</td>
         <td>{{$cliente->departamento}}</td>
         <td>{{$cliente->ciudad}}</td>
         <td>{{$cliente->direccion}}</td>
         <td>{{$cliente->tip_persona}}</td>
         <td>{{$cliente->profesion}}</td>
            </tr>
               @endforeach
            
    
            </tbody>
        </table>
    </div>

      
      
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
</div>
</div></div></div></div>

        <!-- #END# Basic Examples -->


    </div>
@endsection