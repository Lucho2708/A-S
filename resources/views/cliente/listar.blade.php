

@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')

<div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VER Cliente
                        </h2>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>tip_identidad</th>
                                    <th>num_identidad</th>
                                    <th>telefono</th>
                                    <th>telefono1</th>
                                    <th>email</th>
                                    <th>departamento</th>
                                    <th>ciudad</th>
                                    <th>direccion</th>
                                    <th>tip_persona</th>
                                    <th>profesion</th>
                                </tr>
                                </thead>
                                <tfoot>
                               
                                </tfoot>
                                <tbody>
                                
                                    <tr>

                                        @foreach($cliente as $cliente)

                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->nombres}}</td>
                                        <td>{{$cliente->apellidos}}</td> 
                                        <td>{{$cliente->tip_identidad}}</td>
                                        <td>{{$cliente->num_identidad}}</td>
                                        <td>{{$cliente->telefono}}</td>
                                        <td>{{$cliente->telefono1}}</td>
                                        <td>{{$cliente->email}}</td>
                                        <td>{{$cliente->departamento}}</td>
                                        <td>{{$cliente->ciudad}}</td>
                                        <td>{{$cliente->direccion}}</td>
                                        <td>{{$cliente->tip_persona}}</td>
                                        <td>{{$cliente->profesion}}</td>
                                     
                                      

                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->


    </div>
@endsection