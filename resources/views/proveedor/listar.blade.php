@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')



<link rel="stylesheet" type="text/css" href="css/table.css">



<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="price-box">VER PROVEEDORES Tables</h1>
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
    
    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">

    


    <div class="col-sm-12 col-md-12">

    

    <label>Search:<input id="myInput" type="text" placeholder="Search.."></label></div></div></div>





    
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




<br><br>

               
                  <div class="table-responsive">
                    <table id="customers" class="paginated">
                     <thead>
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
                       </thead>
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

 
      <br>

       
    </div></div></div></div></div></div>



<script type="text/javascript">
  
$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 10;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertBefore($table).find('span.page-number:first').addClass('active');
});

</script>


        <!-- #END# Basic Examples -->


  
@endsection