@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
 
@endsection

@section('contenido')



<p><input type="checkbox" name="fecha_inicio" checked="checked" > Fecha Inicio
  <input type="checkbox" name="fecha_final" checked="checked" > Fecha Final
  <input type="checkbox" name="descripcion"checked="checked" > Descripción
 <input type="checkbox" name="daños" checked="checked"> Daños </p>

 



 <link rel="stylesheet" href="css/styles.css">
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
                  <th class="fecha_inicio" style="display: table-cell;">Fecha Inicio</th>
                  <th class="fecha_final" style="display: table-cell;">Fecha Final</th>
                  <th class="descripcion" style="display: table-cell;">Descripción</th>
                  <th class="daños" style="display: table-cell;">Daños</th>
                </tr>
                </thead>
               
                <tr>
                  @foreach($cliente1 as $cliente1)
                    <td class="fecha_inicio" style="display: table-cell;">{{$cliente1->fecha_inicio}}</td>
                   <td class="fecha_final" style="display: table-cell;">{{$cliente1->fecha_final}}</td> 
                   <td class="descripcion" style="display: table-cell;">{{$cliente1->descripcion}}</td>
                   <td class="daños" style="display: table-cell;">{{$cliente1->daños}}</td>
                </tr>
                  @endforeach
                </tbody>
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$("input:checkbox:not(:checked)").each(function() {
    var column = "table ." + $(this).attr("name");
    $(column).hide();
});

$("input:checkbox").click(function(){
    var column = "table ." + $(this).attr("name");
    $(column).toggle();
});
//# sourceURL=pen.js
</script>
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

