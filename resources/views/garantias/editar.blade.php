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
            <h1>Modificar Garantias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modificar Garantias</li>
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
              <br>

              <h4><button class="btn btn-primary"><a href="{{ route('garantias.index')}}"><font color="white">Listar Garantias</a></button></h4>


                {!! Form::open(['route' => 'garantias.store', 'method' => 'POST']) !!}
                
                <div class="card-body">
                <div class="row">
                
                    <div class="col-6">
                    <label><font color="black">Fecha Inicio</font></label>
                    <input type="date" class="form-control" name="fecha_inicio" value="{{$garantia1->fecha_inicio}}" placeholder="Fecha inicio"required="" data-error="Completa este campo">
                  </div>
                    <div class="col-6">
                    <label><font color="black">Fecha Final</font></label>
                    <input type="date" class="form-control" name="fecha_final" value="{{$garantia1->fecha_final}}" placeholder="Fecha final"required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label><font color="black">Descripción</font></label>
                    <input type="text" name="descripcion" class="form-control" value="{{$garantia1->descripcion}}" placeholder="Descripcion" required="" data-error="Completa este campo">
                  </div>

                  <div class="col-6">
                    <label><font color="black">Daños</font></label>
                    <input type="text" name="daños" class="form-control" value="{{$garantia1->daños}}"  placeholder="Daños empresa" required="" data-error="Completa este campo"><br>
                  </div>


                     {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}
                  </div>
                </div>
              </div>
                    
              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
