@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
    <link rel="stylesheet" href="{{asset("css/estilo.css")}}">
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.css")}}">
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


@endsection

@section('contenido')

          
            <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> LISTA GARANTIAS</h3>
            </div>

             <br>
        

            <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary">
                  <img src="../dist/img/herrmamienta-160x160.png" class="brand-image img-circle elevation-3"alt="User Image">
              </button>
              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </button>
                

            <div id="header">
            
         
            
            <ul class="dropdown-menu" style="background: white;color: black; border-radius: 10px; ">
            
             <li class="footer">

              <div class="pull-left btn" >
               <label class="control control--checkbox">Fecha Inicio
                  <input  type="checkbox" name="fecha_inicio" checked="checked"/>
                  <div class="control__indicator"></div>&nbsp;
                </label>
              </div>
               <div class="pull-right btn">
                <label class="control control--checkbox">Fecha Final
                  <input type="checkbox" name="fecha_final" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
              </div><br>
                 <div class="pull-left btn">
                <label class="control control--checkbox">Descripción
                  <input type="checkbox" name="descripcion" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
              </div>
                <div class="pull-right btn">
                <label class="control control--checkbox">Daños Final
                  <input type="checkbox" name="daños" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                  
                </div>
              </li>
            </ul>

              </div></div><br><br>    
              
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




