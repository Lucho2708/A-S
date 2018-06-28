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
                            VER PROVEEDOR
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
                                @foreach($cliente1 as $Cliente1)
                                    <tr>
                                        <td>{{$Cliente1->id}}</td>

                                        <td>{{$Cliente1->nombres}}</td>
                                        <td>{{$Cliente1->apellidos}}</td> 
                                        <td>{{$Cliente1->tip_identidad}}</td>
                                        <td>{{$Cliente1->num_identidad}}</td>
                                        <td>{{$Cliente1->telefono}}</td>
                                        <td>{{$Cliente1->telefono1}}</td>
                                        <td>{{$Cliente1->email}}</td>
                                        <td>{{$Cliente1->departamento}}</td>
                                        <td>{{$Cliente1->ciudad}}</td>
                                        <td>{{$Cliente1->direccion}}</td>
                                        <td>{{$Cliente1->tip_persona}}</td>
                                        <td>{{$Cliente1->profesion}}</td>
                                      

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