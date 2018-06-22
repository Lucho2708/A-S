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
                {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                  
                  <div class="col-6">
                    <label >Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Escriba sus nombres"required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label >Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Escriba sus Apellidos" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label>Tipo de Identidad</label>
                    <select class="form-control" name="tip_identidad" id="identidad" required>
                      <option value="">Selecciona Identidad</option>
                        <option value="Cedula Ciudadania.">Cedula Ciudadania</option>
                        <option value="Tarjeta Identidad">Tarjeta Identidad</option>
                        <option value="Cedula Extranjera.">Cedula Extranjera</option>
                        <option value="Pasaporte">Pasaporte</option>
                      </select>
                  </div>

                  <div class="col-6">
                    <label >Numero Identificación</label>
                    <input type="text" name="num_identidad" class="form-control" pattern="\s*[\d\.]*" placeholder="Escriba sus Numero Identificación x.xxx.xxx.xxx" required="" data-error="Completa este campo"><br>
            
                  </div>


                  <div class="col-6 form-line">
                    <label >Teléfono celular o fijo </label>
                    <input type="text" name="telefono" class="form-control" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d$" placeholder="Ex: xxxxxxx o xxxxxxxxxx"  required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6 form-line">
                    <label >Teléfono celular con indicativo</label>
                    <input type="text" name="telefono1" class="form-control" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$" placeholder="Ex: +57(xxx)-xxx-xxxx"  required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>


                  <div class="col-6">
                    <label>Departamento</label>
                    <select class="form-control" name="departamento" id="departamento" required="">
                      <option value="">Selecciona Ubicación</option>
                      <option>Bogota prueba</option>
                      
                    </select>
                  </div>
                  <div class="col-6">
                    <label>Ciudad</label>
                    <select class="form-control" name="ciudad" required="">
                      <option value="">Selecciona Ubicación</option>
                      <option>bogota</option>
                    </select><br>
                  </div>
                 
           
                  <div class="col-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  
                    <div class="col-6">
                    <label>Tipo de Persona</label>
                    <select class="form-control" name="tip_contrato" required>
                      <option value="">Seleccione</option>
                      <option value="contratista">Contratista</option>
                      <option value="proveedor">Proveedor</option>
                      <option value="clientes">Cliente</option>
                    </select><br>
                  </div>

                  <div class="col-6">
                    <label >Profesion</label>
                    <input type="text" class="form-control" name="profesion" placeholder="Escriba su profesion" required="" data-error="Completa este campo"> <br>
                  </div>          
                  </div>
                   {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}

                </div>
              </div>

              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection