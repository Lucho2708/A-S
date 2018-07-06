@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("css/estilo.css")}}">
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
@endsection

@section('contenido')
  
             
          
            <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> LISTA GARANTIAS</h3>
            </div>
         

              <div class="container">
 
               
                <label class="control control--checkbox">Fecha Inicio
                  <input type="checkbox" name="fecha_inicio" checked="checked"/>
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Fecha Final
                  <input type="checkbox" name="fecha_final" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Descripción
                  <input type="checkbox" name="descripcion" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Daños Final
                  <input type="checkbox" name="daños" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
             
            </div>

                
  
              
              
            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th class="fecha_inicio" style="display: table-cell;">Fecha Inicio</th>
                  <th class="fecha_final" style="display: table-cell;">Fecha Final</th>
                  <th class="descripcion" style="display: table-cell;">Descripción</th>
                  <th class="daños" style="display: table-cell;">Daños</th>
                </tr>
                </thead>
               
                <tr>
                  @foreach($cliente1 as $cliente1)
                    <td  align="center" class="fecha_inicio" style="display: table-cell;">{{$cliente1->fecha_inicio}}</td>
                   <td  align="center"  class="fecha_final" style="display: table-cell;">{{$cliente1->fecha_final}}</td> 
                   <td  align="center"  class="descripcion" style="display: table-cell;">{{$cliente1->descripcion}}</td>
                   <td  align="center"  class="daños" style="display: table-cell;">{{$cliente1->daños}}</td>
                </tr>
                  @endforeach
                
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




