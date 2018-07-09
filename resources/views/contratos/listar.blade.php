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
              <h3 class="card-title">VER CONTRATOS</h3>
            </div><br><br>

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
               <label class="control control--checkbox">Nombre Empresa
                  <input type="checkbox" name="nom_empresa" checked="checked"/>
                  <div class="control__indicator"></div>&nbsp;
                </label>
                
                <label class="control control--checkbox">Nit Empresa 
                  <input type="checkbox" name="nit_empresa" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                
                
                <label class="control control--checkbox">Departamento
                  <input type="checkbox" name="departamento" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>

                <div class="pull-right btn">
                <label class="control control--checkbox">Ciudad
                  <input type="checkbox" name="ciudad" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
               
                <label class="control control--checkbox">Dirección 
                  <input type="checkbox" name="direccion" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Email 
                  <input type="checkbox" name="email" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>

                <div class="pull-left btn">
                <label class="control control--checkbox">Tipo Contrato 
                  <input type="checkbox" name="tip_contrato" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;

                </label>
                <label class="control control--checkbox">Fecha_Inio 
                  <input type="checkbox" name="fecha_inicio" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                
                <label class="control control--checkbox">Fecha Final 
                  <input type="checkbox" name="fecha_final" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>
                <div class="pull-right btn">
                <label class="control control--checkbox">Estado Contrato 
                  <input type="checkbox" name="estado_contrato" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                
                <label class="control control--checkbox">Numero Cuenta 
                  <input type="checkbox" name="num_cuenta" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label>
                <label class="control control--checkbox">Valor Contrato 
                  <input type="checkbox" name="valor_contrato" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>
                <div class="pull-left btn">
                <label class="control control--checkbox">Notas
                  <input type="checkbox" name="notas" checked="checked" />
                  <div class="control__indicator"></div>&nbsp;
                </label></div>        
                </li>
                </ul>
                </div></div><br><br><br><br>



            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                    <th class="nom_empresa" style="display: table-cell;">Nombre Empresa</th>
                    <th class="nit_empresa" style="display: table-cell;">Nit Empresa </th>
                    <th class="departamento" style="display: table-cell;">Departamento</th>
                    <th class="ciudad" style="display: table-cell;">Ciudad</th>
                    <th class="direccion" style="display: table-cell;">Direccion</th>
                    <th class="email" style="display: table-cell;">Email</th>
                    <th class="tip_contrato" style="display: table-cell;">Tipo Contrato</th>
                    <th class="fecha_inicio" style="display: table-cell;">Fecha Inicio</th>
                    <th class="fecha_final" style="display: table-cell;">Fecha Final</th>
                    <th class="estado_contrato" style="display: table-cell;">Estado de Contrato</th>
                    <th class="num_cuenta" style="display: table-cell;">Numero de Cuenta</th>
                    <th class="valor_contrato" style="display: table-cell;">Valor Contrato</th>
                    <th class="notas" style="display: table-cell;">Notas </th>
                    

                </tr>
                </thead>         

               <tr>
           @foreach($contrato as $contrato)
       
         <td align="center"class="nom_empresa" style="display: table-cell;">{{$contrato->nom_empresa}}</td>
         <td align="center"class="nit_empresa" style="display: table-cell;">{{$contrato->nit_empresa}}</td> 
         <td align="center"class="departamento" style="display: table-cell;">{{$contrato->departamento}}</td>
         <td align="center"class="ciudad" style="display: table-cell;">{{$contrato->ciudad}}</td>
         <td align="center"class="direccion" style="display: table-cell;">{{$contrato->direccion}}</td>
         <td align="center"class="email" style="display: table-cell;">{{$contrato->email}}</td>
         <td align="center"class="tip_contrato" style="display: table-cell;">{{$contrato->tip_contrato}}</td>
         <td align="center"class="fecha_inicio" style="display: table-cell;">{{$contrato->fecha_inicio}}</td>
         <td align="center"class="fecha_final" style="display: table-cell;">{{$contrato->fecha_final}}</td>
         <td align="center"class="estado_contrato" style="display: table-cell;">{{$contrato->estado_contrato}}</td>
         <td align="center"class="num_cuenta" style="display: table-cell;">{{$contrato->num_cuenta}}</td>
         <td class="valor_contrato" style="display: table-cell;">{{$contrato->valor_contrato}}</td>
         <td align="center"class="notas" style="display: table-cell;">{{$contrato->notas}}</td>
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