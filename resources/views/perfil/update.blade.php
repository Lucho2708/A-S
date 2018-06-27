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
            <h1>Ver Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ver Pefil</li>
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
              {!! Form::open(['route' => 'perfil', 'method' => 'POST']) !!}
                {{csrf_field()}}
                <div class="card-body">
                <div class="row">

                   <div class="col-8">
                    <label>foto</label>

                  <input type="file" name="avatar"  >
                  </div><br><br>
                  
                  <div class="col-6">
                    <label >Nombres</label>
                     <input type="text" class="form-control" name="nombres" value="{{ Auth::user()->nombres}}" placeholder="Nombres" required>
                  </div>
                  <div class="col-6">
                    <label >Apellidos</label>
                     <input type="text" class="form-control" name="apellidos" value="{{ Auth::user()->apellidos}}" placeholder="Apellidos" required>

                  </div>
                  <div class="col-6">
                    <label>Email address</label>
                    <input type="text" class="form-control" name="email" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+" value="{{ Auth::user()->email}}" placeholder="email" required> 
                  </div>
                
                  <div class="col-6">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password"  value="{{ Auth::user()->password}}" placeholder="Contraseña" required>
                  </div>
                   
                  </div>
                  <br>
                   
                  {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}

                </div>
              </div>

              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
