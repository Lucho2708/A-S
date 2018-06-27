

@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')


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
            
              {!! Form::open(['route' =>  'cliente.store', 'method' => 'POST'])!!} 

              {{csrf_field()}}
                <div class="card-body">
                <div class="row">
                	<h2>

                	 <div class="col-6">
                	 	<a href="{{route('cliente.create')}}" class="btn btn-primary">nuevo</a>
                	 	
                  </div>
                  </h2> 

                  @foreach($Cliente_contratistas as $Cliente_contratistas)
                  <table>
                  	<tr>
                  	<td>nombres</td>
                  	<td>Apellidos</td>	
                  	
                  	</tr>

                  	<tr>
                  		<td>{{$Cliente_contratistas->nombres}}</td>
                  		<td>{{$Cliente_contratistas->apellidos}}</td>

                  	</tr>


                  </table>


                  @endforeach
                  

                
                </div>
              </div>


              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
@endsection