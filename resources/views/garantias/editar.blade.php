@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Garantias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Garantias</li>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::open(['route' => 'garantias.update', 'method' => 'PUT']) !!}
                <div class="card-body">
                <div class="row">
                	
                
                    <div class="col-6">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" value="{{$cliente1->nombres}}" name="fecha_inicio" placeholder="Fecha inicio"required="" data-error="Completa este campo">
                  </div>
                    <div class="col-6">
                    <label>Fecha Final</label>
                    <input type="date" class="form-control" name="fecha_final" placeholder="Fecha final"required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label >Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required="" data-error="Completa este campo">
                  </div>

                  <div class="col-6">
                    <label >Daños</label>
                    <input type="text" name="daños" class="form-control" placeholder="Daños empresa" required="" data-error="Completa este campo"><br>
                 


                     {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                  </div>
                </div>
              </div>
                    
              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection