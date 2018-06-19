@extends('home')

@section('menu')
  @include('adminlte.menu')
@endsection
@section('contenido')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Contrato</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Contrato</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Contratos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(['route' =>  'contratos.store', 'method' => 'POST',$departamentos,$ciudad]) !!}
                <div class="card-body">
                <div class="row">
                  
                  <div class="col-6">
                    <label >Nombre Empresa</label>
                    <input type="text" name="nom_empresa" class="form-control" placeholder="Nombre empresa" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label>Nit Empresa</label>
                    <input type="text" class="form-control" pattern="\s*[\d\-]*" name="nit_empresa" placeholder="Nit empresa" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label>Departamento</label>
                    <select class="form-control" name="departamento" id="departamento" required>
                      <option value="">Selecciona Ubicación</option>
                      @foreach ($departamentos as $departamentos)
                      <option value="" >{{$departamentos->departamento}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-6">
                    <label>Ciudad</label>
                    <select class="form-control" name="ciudad" required>
                      <option value="">Selecciona Ubicación</option>
                      @foreach ($ciudad as $ciudad)
                      <option value="">{{$ciudad->ciudad}}</option>

                      @endforeach
                    </select><br>
                  </div>
           
                  <div class="col-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>
                    <div class="col-6">
                    <label>Tipo de Contrato</label>
                    <select id="tip_contrato" class="form-control" name="tip_contrato" required>
                      <option value>Seleccione</option>
                      <option value="cliente">Cliente</option>
                      <option value="proveedor">Proveedor</option>
                      <option value="contratista">Contratista</option>
                    </select><br>
                  </div>
                    <div class="col-6">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha inicio"required="" data-error="Completa este campo">
                  </div>
                    <div class="col-6">
                    <label>Fecha Terminacion</label>
                    <input type="date" class="form-control" name="fecha_final" placeholder="Fecha final"required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label >Estado Contratato</label>
                    <select class="form-control" name="estado_contrato" required>
                      <option value>Seleccione</option>
                      <option value="inicio">Inicio</option>
                      <option value="progreso">Progreso</option>
                      <option value="cerrado">Cerrado</option>
                    </select>
                  </div>

                  <div class="col-6">
                    <label class="h5">Acuerdo Pago</label>
                     <select class="form-control" name="acuerdo_pago" required>
                      <option value>Seleccione</option>
                      <option value="td">Tarjeta debido</option>
                      <option value="tc">Tarjeta Credito</option>
                      <option value="c">Contado</option>
                    </select><br>

                  </div>

                   <div class="col-6">
                  <label>Numero de Cuenta</label>
                    <input  type="text" class="form-control" name="num_cuenta" placeholder="Escriba su numero de cuenta" 
                     pattern="\s*[\d\-]*" required="" data-error="Completa este campo" required=""><br>
                    
                  </div>

                  <div class="col-6">
                    <label>Valor Contrato</label>
                      <input  type="text" class="form-control" name="valor_contrato" onchange="concatenar(this);" onkeyup="format(this)" onchange="format(this)" placeholder="Valor contrato Ej 700000"required="" data-error="Completa este campo""><br>
                     
                     
 
                  <div class="col-12">
                    <label class="h5">Notas</label>
                    <textarea class="form-control" name="notas" rows="8" placeholder="Anotaciones ..."required="" data-error="Completa este campo"></textarea><br>

                     {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                  </div>
                </div>
              </div>
                      <script type="text/javascript">
                        
                      function concatenar(input){
                        inputNum = input.value;
                        input.value = '$' + inputNum;
                       
                      }
                     function format(input)
                        {
                        var num = input.value.replace(/\./g,'');
                        if(!isNaN(num)){
                        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        num = num.split('').reverse().join('').replace(/^[\.]/,'');
                        input.value = num;
                        }
                          
                        else{ alert('Solo se permiten numeros');
                        input.value = input.value.replace(/[^\d\.]*/g,'');
                        }
                        }
                      </script>

               
              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection