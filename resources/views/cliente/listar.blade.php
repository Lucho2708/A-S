@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
@endsection

@section('contenido')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">VER CLIENTES</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                    <th>Nombres Completos</th>
                    <th>Apellidos Completos</th>
                    <th>Tipo de Identidad</th>
                    <th>Numero_Identidad</th>
                    <th>Teléfono</th>
                    <th>Teléfono1</th>
                    <th>Email</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Tipo de Persona</th>
                    <th>Profesión</th>
                </tr>
                </thead>
                <tbody>
               @foreach($cliente as $cliente)

               <tr align="center">

       
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
                <tfoot>
                <tr>
                    <th>Nombres Completos</th>
                    <th>Apellidos Completos</th>
                    <th>Tipo de Identidad</th>
                    <th>Numero_Identidad</th>
                    <th>Teléfono</th>
                    <th>Teléfono1</th>
                    <th>Email</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Tipo de Persona</th>
                    <th>Profesión</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>    
    
@endsection
@section('js')
<!-- Table JS -->
<script src="{{asset("plugins/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("plugins/datatables/dataTables.bootstrap4.js")}}"></script>
@endsection
@section('js-table')
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
@endsection





