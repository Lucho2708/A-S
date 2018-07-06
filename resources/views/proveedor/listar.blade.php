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
    <!-- Main content -->
   
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">VER PROVEEDORES</h3>
            </div>
            <!-- /.card-header -->

            <div class="container">
 
               
                <label class="control control--checkbox">Nombres
                  <input type="checkbox" name="nombres" checked="checked"/>
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Apellidos 
                  <input type="checkbox" name="apellidos" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Tipo Identidad
                  <input type="checkbox" name="tip_identidad" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Numero Identidad
                  <input type="checkbox" name="num_identidad" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Teléfono 
                  <input type="checkbox" name="telefono" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Teléfono1 
                  <input type="checkbox" name="telefono1" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Email 
                  <input type="checkbox" name="email" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Departamento 
                  <input type="checkbox" name="departamento" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Ciudad 
                  <input type="checkbox" name="ciudad" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Dirección 
                  <input type="checkbox" name="direccion" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Tipo Persona 
                  <input type="checkbox" name="tip_persona" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Profesión 
                  <input type="checkbox" name="profesion" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
            </div>
             
            





            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr align="center">
                    <th class="nombres" style="display: table-cell;">Nombres Completos</th>
                    <th class="apellidos" style="display: table-cell;">Apellidos Completos</th>
                    <th class="tip_identidad" style="display: table-cell;">Tipo de Identidad</th>
                    <th class="num_identidad" style="display: table-cell;">Numero_Identidad</th>
                    <th class="telefono" style="display: table-cell;">Teléfono</th>
                    <th class="telefono1" style="display: table-cell;">Teléfono1</th>
                    <th class="email" style="display: table-cell;">Email</th>
                    <th class="departamento" style="display: table-cell;">Departamento</th>
                    <th class="ciudad" style="display: table-cell;">Ciudad</th>
                    <th class="direccion" style="display: table-cell;">Dirección</th>
                    <th class="tip_persona" style="display: table-cell;">Tipo de Persona</th>
                    <th class="profesion" style="display: table-cell;">Profesión</th>
                </tr>
                </thead>
               
               <tr align="center">
               @foreach($cliente as $cliente)

            
         <td class="nombres" style="display: table-cell;">{{$cliente->nombres}}</td>
         <td class="apellidos" style="display: table-cell;">{{$cliente->apellidos}}</td> 
         <td class="tip_identidad" style="display: table-cell;">{{$cliente->tip_identidad}}</td>
         <td class="num_identidad" style="display: table-cell;">{{$cliente->num_identidad}}</td>
         <td class="telefono" style="display: table-cell;">{{$cliente->telefono}}</td>
         <td class="telefono1" style="display: table-cell;">{{$cliente->telefono1}}</td>
         <td class="email" style="display: table-cell;">{{$cliente->email}}</td>
         <td class="departamento" style="display: table-cell;">{{$cliente->departamento}}</td>
         <td class="ciudad" style="display: table-cell;">{{$cliente->ciudad}}</td>
         <td class="direccion" style="display: table-cell;">{{$cliente->direccion}}</td>
         <td class="tip_persona" style="display: table-cell;">{{$cliente->tip_persona}}</td>
         <td class="profesion" style="display: table-cell;">{{$cliente->profesion}}</td>
            </tr>
               @endforeach
               
                
                </script>
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





