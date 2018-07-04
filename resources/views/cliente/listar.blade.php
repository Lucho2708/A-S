
@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

 
      
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      
      <link rel="stylesheet" type="text/css" href="css/table.css">
           



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="price-box">VER Clientes Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active ">VER PROVEEDORES Tables</li>
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
                    <div >
                        

                    </div>



                     <div class="card-body">
    
    
    
                
       <div class="row">
      
           <div class="col-sm-12 col-md-6">
   

    <div class="form-group">  <!--    Show Numbers Of Rows    -->
          <br>
          <select class  ="" name="state" id="maxRows">
             <option value="2000">Show ALL Rows</option>
             <option value="5">5</option>
             <option value="10">10</option>
             <option value="15">15</option>
             <option value="20">20</option>
             <option value="50">50</option>
             <option value="70">70</option>
             <option value="100">100</option>
            </select>
          
          </div></div>

          

      <div class="col-sm-12 col-md-6">
    

    <label>Busqueda:<input id="myInput" type="text" placeholder="Search.."></label></div></div>


 
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


<style>  /*  este estilo es para la tabla*/
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;  /*  para el color de la linea tabla*/
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even){background-color: none;}   /*  para el color de la columnas*/

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;

}
</style>

   
      


<div class="table-responsive" id="customers">

<table class="table table-striped table-class" id= "table-id" >
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


<!--    Start Pagination -->
      <div class='pagination-container' >
        <nav>
          <ul class="pagination">
           <!-- Here the JS Function Will Add the Rows -->
          </ul>
        </nav>
      </div>

</div> <!--     End of Container -->

      <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <script type="text/javascript">
          getPagination('#table-id');
          //getPagination('.table-class');
          //getPagination('table');


          
        </script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</div></div></div></div></div>

@endsection