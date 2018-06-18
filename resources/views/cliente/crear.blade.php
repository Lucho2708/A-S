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
            <h1>Crear Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Cliente Proveedor</li>
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
                <h3 class="card-title">Clientes</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(['route' => 'cliente.store', 'method' => 'POST']) !!}
                <div class="card-body">
                <div class="row">
                  
                  <div class="col-6">
                    <label >Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Escriba sus nombres" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label >Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Escriba sus Apellidos" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label>Tipo de Identidad</label>
                    <select class="form-control" name="tip_identidad" id="identidad">
                      <option>Selecciona Identidad</option>
                        <option value="cc.">Cedula Ciudadania</option>
                        <option value="ti">Tarjeta Identidad</option>
                        <option value="ce.">Cedula Extranjera</option>
                        <option value="oasaporte">Pasaporte</option>
                      </select>
                  </div>

                  <div class="col-6">
                    <label >Numero Identificación</label>
                    <input type="text" id="textValidReg" name="num_identidad" class="form-control" placeholder="Escriba sus Numero Identificación" required="" data-error="Completa este campo"><br>
            
                  </div>


                  <div class="col-6">
                    <label >Teléfono</label>
                    <input type="number" name="telefono" class="form-control" placeholder="Escriba su teléfono" required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>


                  <div class="col-6">
                    <label>Departamento</label>
                    <select class="form-control" name="departamento" id="departamento">
                      <option>Selecciona Ubicación</option>
                      
                    </select>
                  </div>
                  <div class="col-6">
                    <label>Ciudad</label>
                    <select class="form-control" name="ciudad">
                      <option>Selecciona Ubicación</option>
                    </select><br>
                  </div>
                 
           
                  <div class="col-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  
                    <div class="col-6">
                    <label>Tipo de Persona</label>
                    <select class="form-control" name="tip_contrato" required="" data-error="Completa este campo">
                      <option>None</option>
                      <option>--</option>
                      <option>--</option>
                      <option>--</option>
                    </select><br>
                  </div>

                  <div class="col-6">
                    <label >Profesion</label>
                    <input type="text" class="form-control" name="profesion" placeholder="Escriba su profesion" required="" data-error="Completa este campo">
                  </div>
                 
                     {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                  
                  </div>
                </div>
              </div>

                <!-- /.Para colocar lo de Valor de dinero


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


<- /.Para colocar lo de numero de cuenta-->

                     

              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection