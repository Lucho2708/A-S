@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection
@section('styles')
<!-- Tables style -->
  <link rel="stylesheet" href="{{asset("plugins/datatables/dataTables.bootstrap4.css")}}">
   <!-- iCheck for checkboxes and radio inputs -->

  
 
@endsection

@section('contenido')

<style> 
input:checked {
  color: red; 
    height: 20px;
    width: 20px;
}

input {
  color: red; 
    height: 20px;
    width: 20px;
}
</style>


<p><input type="checkbox" name="fecha_inicio" checked="checked" > Fecha Inicio
  <input type="checkbox" name="fecha_final" checked="checked" > Fecha Final
  <input type="checkbox" name="descripcion" checked="checked" > Descripción
 <input type="checkbox" name="daños" checked="checked"> Daños </p>

     












    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="source/jquery-labelauty.js"></script>
    <link rel="stylesheet" type="text/css" href="source/jquery-labelauty.css">

<table>
  <tr>
    <td height="50">
     <input checked="" type="checkbox" name="fecha_inicio" checked="checked" aria-hidden="true" class="labelauty" id="labelauty-33162" style="display: none;  ">

      <label for="labelauty-33162" aria-checked="true">
        <span class="labelauty-unchecked-image"></span>
        <span class="labelauty-unchecked">Fecha Inicio</span>
        <span class="labelauty-checked-image">
          
        </span><span class="labelauty-checked">Fecha Inicio</span></label></td>

    <td height="50"> <input checked="" type="checkbox" name="fecha_final" checked="checked" aria-hidden="true" class="labelauty" id="labelauty-33163" style="display: none;">

      <label for="labelauty-33163" aria-checked="true">
        <span class="labelauty-unchecked-image"></span>
        <span class="labelauty-unchecked">Fecha Final</span>
        <span class="labelauty-checked-image">
          
        </span><span class="labelauty-checked">Fecha Final</span></label></td>

         <td height="50"> <input checked="" type="checkbox" name="descripcion" checked="checked" aria-hidden="true" class="labelauty" id="labelauty-33164" style="display: none;">

        <label for="labelauty-33164" aria-checked="true">
        <span class="labelauty-unchecked-image"></span>
        <span class="labelauty-unchecked">Descripción</span>
        <span class="labelauty-checked-image">
          
        </span><span class="labelauty-checked">Descripción</span></label></td>

         <td height="50"> <input checked="" type="checkbox" name="daños" checked="checked" aria-hidden="true" class="labelauty" id="labelauty-33165" style="display: none;">

        <label for="labelauty-33165" aria-checked="true">
        <span class="labelauty-unchecked-image"></span>
        <span class="labelauty-unchecked">Daños</span>
        <span class="labelauty-checked-image">
          
        </span><span class="labelauty-checked">Daños</span></label></td>

  </tr>

</table>
  

    <script>
      $(document).ready(function(){
        $(":checkbox").labelauty();
        $(":radio").labelauty();
      });
    </script>





<style> /* eso es  del otro boton  3 */

*,*:after,*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 50;
  margin: 50;
}

.switch {
  margin: 50px auto;
  position: relative;
}

.switch label {
  width: 100%;
  height: 100%;
  position: relative;
  display: block;
}

.switch input {
  top: 0; 
  right: 0; 
  bottom: 0; 
  left: 0;
  opacity: 0;
  z-index: 100;
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: pointer;
}


.switch.demo3 {  /* tamaño de ancho */
  width: 150px;
  height: 40px;
}

.switch.demo3 label {
  display: block;
  width: 100%;
  height: 100%;
  background: #a5a39d;
  border-radius: 40px;
  box-shadow:
      inset 0 3px 8px 1px rgba(0,0,0,0.2),
      0 1px 0 rgba(255,255,255,0.5);
}

.switch.demo3 label:after {
  content: "";
  position: absolute;
  z-index: -1;
  top: -8px; right: -8px; bottom: -8px; left: -8px;
  border-radius: inherit;
  background: #ababab;
  background: -moz-linear-gradient(#f2f2f2, #ababab);
  background: -ms-linear-gradient(#f2f2f2, #ababab);
  background: -o-linear-gradient(#f2f2f2, #ababab);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#f2f2f2), to(#ababab));
  background: -webkit-linear-gradient(#f2f2f2, #ababab);
  background: linear-gradient(#f2f2f2, #ababab);
  box-shadow: 0 0 10px rgba(0,0,0,0.3),
        0 1px 1px rgba(0,0,0,0.25);
}

.switch.demo3 label:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -18px; right: -18px; bottom: -18px; left: -18px;
  border-radius: inherit;
  background: #eee;
  background: -moz-linear-gradient(#e5e7e6, #eee);
  background: -ms-linear-gradient(#e5e7e6, #eee);
  background: -o-linear-gradient(#e5e7e6, #eee);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#e5e7e6), to(#eee));
  background: -webkit-linear-gradient(#e5e7e6, #eee);
  background: linear-gradient(#e5e7e6, #eee);
  box-shadow:
      0 1px 0 rgba(255,255,255,0.5);
  -webkit-filter: blur(1px);
  -moz-filter: blur(1px);
  -ms-filter: blur(1px);
  -o-filter: blur(1px);
  filter: blur(1px);
}

.switch.demo3 label i {
  display: block;
  height: 100%;
  width: 60%;
  border-radius: inherit;
  background: silver;
  position: absolute;
  z-index: 2;
  right: 40%;
  top: 0;
  background: #b2ac9e;
  background: -moz-linear-gradient(#f7f2f6, #b2ac9e);
  background: -ms-linear-gradient(#f7f2f6, #b2ac9e);
  background: -o-linear-gradient(#f7f2f6, #b2ac9e);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#f7f2f6), to(#b2ac9e));
  background: -webkit-linear-gradient(#f7f2f6, #b2ac9e);
  background: linear-gradient(#f7f2f6, #b2ac9e);
  box-shadow:
      inset 0 1px 0 white,
      0 0 8px rgba(0,0,0,0.3),
      0 5px 5px rgba(0,0,0,0.2);
}

.switch.demo3 label i:after {
  content: "";
  position: absolute;
  left: 15%;
  top: 25%;
  width: 70%;
  height: 50%;
  background: #d2cbc3;
  background: -moz-linear-gradient(#cbc7bc, #d2cbc3);
  background: -ms-linear-gradient(#cbc7bc, #d2cbc3);
  background: -o-linear-gradient(#cbc7bc, #d2cbc3);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#cbc7bc), to(#d2cbc3));
  background: -webkit-linear-gradient(#cbc7bc, #d2cbc3);
  background: linear-gradient(#cbc7bc, #d2cbc3);
  border-radius: inherit;
}

.switch.demo3 label i:before {
  content: "off";
  text-transform: uppercase;
  font-style: normal;
  font-weight: bold;
  color: rgba(0,0,0,0.4);
  text-shadow: 0 1px 0 #bcb8ae, 0 -1px 0 #97958e;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 24px;
  position: absolute;
  top: 50%;
  margin-top: -12px;
  right: -50%;
}

.switch.demo3 input:checked ~ label {
  background: #9abb82;
}

.switch.demo3 input:checked ~ label i {
  right: -1%;
}

.switch.demo3 input:checked ~ label i:before {
  content: "on";
  right: 115%;
  color: #82a06a;
  text-shadow: 
    0 1px 0 #afcb9b,
    0 -1px 0 #6b8659;
}
</style>

<table>
  <tr>

    <td>
<div class="switch demo3">
  <input type="checkbox" name="fecha_inicio" checked="checked">
  <label><i></i>
  </label>
<font color="blue">&nbsp;&nbsp;&nbsp;Fecha Inicio</font>
</div>

</td>


<td>

<div class="switch demo3">
  <input type="checkbox" name="fecha_final" checked>
  <label><i></i>
  </label>
  <font color="blue">&nbsp;&nbsp;&nbsp;Fecha Final</font>
</div>
</td>
</tr>
</table> 
<!-- hasta aca van lo de boton on -->



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




