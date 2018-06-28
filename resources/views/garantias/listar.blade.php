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
                            VER GARANTIAS
                        </h2>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>fecha_inicio</th>
                                    <th>fecha_final</th>
                                    <th>descripcion</th>
                                    <th>daños</th>
                                    
                                </tr>
                                </thead>
                                <tfoot>
                               
                                </tfoot>
                                <tbody>
                                @foreach($cliente1 as $cliente1)
                                    <tr>
                                        <td>{{$cliente1->id}}</td>

                                        <td>{{$cliente1->fecha_inicio}}</td>
                                        <td>{{$cliente1->fecha_final}}</td> 
                                        <td>{{$cliente1->descripcion}}</td>
                                        <td>{{$cliente1->daños}}</td>
                                      

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