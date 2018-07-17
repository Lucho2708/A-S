@extends('layouts.app')

@section('menu')
  @include('menu')
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
            
              {!! Form::open(['route' =>  'cliente.store', 'method' => 'POST',$departamentos,$ciudad])!!}

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
                    <select class="form-control" name="tip_identidad" required>
                      <option>Selecciona Identidad</option>
                        <option name="CC" value="CC">CC</option>
                        <option name="TI" value="TI">TI</option>
                        <option name="CE" value="CE">CE</option>
                        <option name="PP" value="PP">PP</option>
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
                    <label >Teléfono celular </label>
                    <input type="text" name="telefono1" class="form-control" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d$" placeholder="Ex: +57(xxx)-xxx-xxxx"  required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>

                

                    <div class="col-6">
                    <label for="departamento">Departamento</label>
                    <select class="form-control" name="departamento" id="departamento" required>
                      <option value="">Selecciona Ubicación</option>
                      @foreach ($departamentos as $departamentos)
                      <option>{{$departamentos->departamento}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="ciudad">Ciudad</label>
                    <select class="form-control" name="ciudad" id="ciudad" required>

                      <option value="">Selecciona Ubicación</option>
                      @foreach ($ciudad as $ciudad)
                      <option>{{$ciudad->ciudad}}</option>
                      @endforeach
                    </select><br>
                  </div>
                 

                  <div class="col-6">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  
                    <div class="col-6">
                    <label>Tipo de Persona</label>
                    <select class="form-control" name="tip_persona" required>
                      <option value="">Seleccione</option>
                      <option name="contratista"value="contratista">Contratista</option>
                      <option name="proveedor"value="proveedor">Proveedores</option>
                      <option name="clientes"value="clientes">Cliente</option>
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
