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
                                    <th>Nombre empresa</th>
                                    <th>nit empresa</th>
                                    <th>departamento</th>
                                    <th>ciudad</th>
                                    <th>direccion</th>
                                    <th>email</th>
                                    <th>tip_contrato</th>
                                    <th>fecha_inicio</th>
                                    <th>fecha_final</th>
                                    <th>estado_contrato</th>
                                    <th>tip_persona</th>
                                    <th>profesion</th>
                                </tr>
                                </thead>
                                <tfoot>
                               
                                </tfoot>
                                <tbody>
                                @foreach($contrato1 as $contrato1)
                                    <tr>
                                        <td>{{$contrato1->id}}</td>

                                        <td>{{$contrato1->nombres}}</td>
                                        <td>{{$contrato1->apellidos}}</td> 
                                        <td>{{$contrato1->tip_identidad}}</td>
                                        <td>{{$contrato1->num_identidad}}</td>
                                        <td>{{$contrato1->telefono}}</td>
                                        <td>{{$contrato1->telefono1}}</td>
                                        <td>{{$contrato1->email}}</td>
                                        <td>{{$contrato1->departamento}}</td>
                                        <td>{{$contrato1->ciudad}}</td>
                                        <td>{{$contrato1->direccion}}</td>
                                        <td>{{$contrato1->tip_persona}}</td>
                                        <td>{{$contrato1->profesion}}</td>
                                      

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