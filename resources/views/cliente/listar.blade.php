@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

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
    @csrf

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
              
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection