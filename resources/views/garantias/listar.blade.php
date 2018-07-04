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
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fecha Inicio</th>
                  <th>Fecha Final</th>
                  <th>Descripción</th>
                  <th>Daños</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($cliente1 as $cliente1)
                   <td>{{$cliente1->fecha_inicio}}</td>
                   <td>{{$cliente1->fecha_final}}</td> 
                   <td>{{$cliente1->descripcion}}</td>
                   <td>{{$cliente1->daños}}</td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Fecha Inicio</th>
                  <th>Fecha Final</th>
                  <th>Descripción</th>
                  <th>Daños</th>
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