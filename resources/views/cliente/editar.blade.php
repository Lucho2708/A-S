@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Cliente</li>
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
              <br>
               <h4><button class="btn btn-primary"><a href="{{ route('cliente.index')}}"><font color="white">Listar Clientes</a></button></h4>

            
              {!! Form::open(['route' =>  'cliente.store', 'method' => 'POST'])!!} 

              
                <div class="card-body">
                <div class="row">
                  
                  <div class="col-6">
                    <label><font color="black">Nombres</font></label>
                    <input type="text" name="nombres" class="form-control" value="{{$cliente2->nombres}}" placeholder="Escriba sus nombres"required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label><font color="black">Apellidos</font></label>
                    <input type="text" name="apellidos" class="form-control" value="{{$cliente2->apellidos}}"placeholder="Escriba sus Apellidos" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label><font color="black">Tipo de Identidad</font></label>
                    <select class="form-control"  name="tip_identidad" required>
                      <option>Selecciona Identidad</option>
                        <option name="CC" @if($cliente2->tip_identidad == 'CC') selected @endif>CC</option>
                        <option name="TI" @if($cliente2->tip_identidad == 'TI') selected @endif>TI</option>
                        <option name="CE" @if($cliente2->tip_identidad == 'CE') selected @endif>CE</option>
                        <option name="PP" @if($cliente2->tip_identidad == 'PP') selected @endif>PP</option>
                      </select>
                  </div>

                  <div class="col-6">
                    <label><font color="black">Numero Identificación</font></label>
                    <input type="text" name="num_identidad" value="{{$cliente2->num_identidad}}" class="form-control" pattern="\s*[\d\.]*" placeholder="Escriba sus Numero Identificación x.xxx.xxx.xxx" required="" data-error="Completa este campo"><br>
            
                  </div>


                  <div class="col-6 form-line">
                    <label><font color="black">Teléfono celular o fijo</font></label>
                    <input type="text" name="telefono"  value="{{$cliente2->telefono}}"class="form-control" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d$" placeholder="Ex: xxxxxxx o xxxxxxxxxx"  required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6 form-line">
                    <label><font color="black">Teléfono celular</font></label>
                    <input type="text" name="telefono1" value="{{$cliente2->telefono1}}"class="form-control" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d$" placeholder="Ex: +57(xxx)-xxx-xxxx"  required="" data-error="Completa este campo" "><br>
                  </div>

                  <div class="col-6">
                    <label><font color="black">Email address</font></label>
                    <input type="email" class="form-control" value="{{$cliente2->email}}" name="email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>

                    <div class="col-6">
                    <label><font color="black">Departamento</font></label>
                    <select class="form-control" name="departamento"  required>
                      <option>{{$cliente2->departamento}}</option>
                      <option></option>

                    </select>
                  </div>
                  <div class="col-6">
                    <label for="ciudad"><font color="black">Ciudad</font></label>
                    <select class="form-control" name="ciudad" id="ciudad" required>

                      <option>{{$cliente2->ciudad}}</option>
                     
                    </select><br>
                  </div>
           
                  <div class="col-6">
                    <label><font color="black">Dirección</font></label>
                    <input type="text" class="form-control" value="{{$cliente2->direccion}}" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  
                    <div class="col-6">
                    <label><font color="black">Tipo de Persona</font></label>
                    <select class="form-control" value="{{$cliente2->tip_persona}}" name="tip_persona" required>
                      <option value="">Seleccione</option>
                      <option name="contratista"  @if($cliente2->tip_persona == 'contratista') selected @endif>Contratista</option>
                      <option name="proveedor"  @if($cliente2->tip_persona == 'proveedor') selected @endif>Proveedor</option>
                      <option name="clientes"  @if($cliente2->tip_persona == 'clientes') selected @endif>Clientes</option>
                    </select><br>
                  </div>

                  <div class="col-6">
                    <label><font color="black">Profesion</font></label>
                    <input type="text" class="form-control" value="{{$cliente2->profesion}}" name="profesion" placeholder="Escriba su profesion" required="" data-error="Completa este campo"> <br>
                  </div>          
                  </div>
                   {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}

                </div>
              </div>

              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>

@endsection