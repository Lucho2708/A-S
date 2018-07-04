
@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')



    

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
                    <th>Nombres completos</th>
                    <th>Apellidos</th>
                    <th>Tipo de identidad</th>
                    <th>Numero_identidad</th>
                    <th>Teléfono</th>
                    <th>Teléfono1</th>
                    <th>Email</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Tipo de persona</th>
                    <th>Profesión</th>
                  



                  </tr>
                </thead>

            <tbody id="myTable">
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

      
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
      

                        

        <!-- #END# Basic Examples -->


    </div>
@endsection