@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
   <link rel="stylesheet" href="{{asset("css/estilo.css")}}">
    <!-- This is what you need --
      
    <script src="sweetalert/dist/sweetalert.js"></script>


    <link rel="stylesheet" href="dist/sweetalert.css">
        <script src="sweetalert/dist/sweetalert.min.js"></script>
    .......................-->
     

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
     
     <script>
  

      </script>

@endsection

@section('contenido')
 

    <!-- Main content -->

    <!-- Main content --

<input type="button"value="Alerta Basica" onclick="swal('por favor confirme su ingreso por medio de su correo electronico');">


    <- Main content -->

    
    <!-- Main content -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">VER CLIENTES</h3>
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
               <label class="control control--checkbox">Nombres
                  <input type="checkbox" name="nombres" checked="checked"/>
                  <div class="control__indicator"></div>&nbsp;
                </label>
                
                <label class="control control--checkbox">Apellidos 
                  <input type="checkbox" name="apellidos" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>
                
                <div class="pull-right btn">
                <label class="control control--checkbox">Tipo Identidad
                  <input type="checkbox" name="tip_identidad" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Numero Identidad
                  <input type="checkbox" name="num_identidad" checked="checked" />
                  <div class="control__indicator"></div>
                </label></div>
                <div class="pull-right btn">
                <label class="control control--checkbox">Teléfono 
                  <input type="checkbox" name="telefono" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Teléfono1 
                  <input type="checkbox" name="telefono1" checked="checked" />
                  <div class="control__indicator"></div>
                </label></div>
                <div class="pull-left btn">
                <label class="control control--checkbox">Email 
                  <input type="checkbox" name="email" checked="checked" />
                  <div class="control__indicator"></div>

                </label>
                <label class="control control--checkbox">Departamento 
                  <input type="checkbox" name="departamento" checked="checked" />
                  <div class="control__indicator"></div>
                </label></div>
                <div class="pull-right btn">
                <label class="control control--checkbox">Ciudad 
                  <input type="checkbox" name="ciudad" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Dirección 
                  <input type="checkbox" name="direccion" checked="checked" />
                  <div class="control__indicator"></div>
                </label></div>
                <div class="pull-left btn">
                <label class="control control--checkbox">Tipo Persona 
                  <input type="checkbox" name="tip_persona" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Profesión 
                  <input type="checkbox" name="profesion" checked="checked" />
                  <div class="control__indicator"></div>
                </label></div>      
                </li>
                </ul>
                </div></div><br><br><br><br>





             <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr align="center">
                    <th align="center">Editar</th>

                    <th class="nombres" style="display: table-cell;">Nombres Completos</th>
                    <th class="apellidos" style="display: table-cell;">Apellidos Completos</th>
                    <th class="tip_identidad" style="display: table-cell;">Tipo de Identidad</th>
                    <th class="num_identidad" style="display: table-cell;">Numero Identidad</th>
                    <th class="telefono" style="display: table-cell;">Teléfono</th>
                    <th class="telefono1" style="display: table-cell;">Teléfono1</th>
                    <th class="email" style="display: table-cell;">Email</th>
                    <th class="departamento" style="display: table-cell;">Departamento</th>
                    <th class="ciudad" style="display: table-cell;">Ciudad</th>
                    <th class="direccion" style="display: table-cell;">Dirección</th>
                    <th class="tip_persona" style="display: table-cell;">Tipo de Persona</th>
                    <th class="profesion" style="display: table-cell;">Profesión</th>
                     <th>Eliminar</th>
                </tr>
                </thead>
               
               <tr align="center">
               @foreach($cliente as $cliente)

            
          <td align="center"><a href="{{ route('cliente.edit',$cliente->id)}}" class="btn btn-info">editar</a>
                  </td>
         <td align="center"class="nombres" style="display: table-cell;">{{$cliente->nombres}}</td>
         <td align="center"class="apellidos" style="display: table-cell;">{{$cliente->apellidos}}</td> 
         <td align="center"class="tip_identidad" style="display: table-cell;">{{$cliente->tip_identidad}}</td>
         <td align="center"class="num_identidad" style="display: table-cell;">{{$cliente->num_identidad}}</td>
         <td align="center"class="telefono" style="display: table-cell;">{{$cliente->telefono}}</td>
         <td align="center"class="telefono1" style="display: table-cell;">{{$cliente->telefono1}}</td>
         <td align="center"class="email" style="display: table-cell;">{{$cliente->email}}</td>
         <td align="center"class="departamento" style="display: table-cell;">{{$cliente->departamento}}</td>
         <td align="center"class="ciudad" style="display: table-cell;">{{$cliente->ciudad}}</td>
         <td align="center"class="direccion" style="display: table-cell;">{{$cliente->direccion}}</td>
         <td align="center"class="tip_persona" style="display: table-cell;">{{$cliente->tip_persona}}</td>
         <td align="center"class="profesion" style="display: table-cell;">{{$cliente->profesion}}</td>
         <td align="center">
                     
                    <form action="{{ route('cliente.destroy',$cliente->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form></td>
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





