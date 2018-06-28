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
                               
                                    <tr>

                                        <td> <div class="col-6">
                                        <label>Fecha Inicio</label>
                                        <input type="text" class="form-control" name="fecha_inicio"  value="{{ Auth::Garantia()->fecha_inicio}}" placeholder="Fecha inicio"required="" data-error="Completa este campo">
                                         </div></td>


                                        <td><div class="col-6">
                                        <div class="col-6">
                                        <label>Fecha Final</label>
                                      <input type="text" class="form-control" name="fecha_final" value="{{ Auth::Garantia()->fecha_final}}" placeholder="Fecha final"required="" data-error="Completa este campo"><br>
                                        </div></td>

                                        <td><div class="col-6">
                                        <label >Descripcion</label>
                                        <input type="text" name="descripcion" class="form-control" value="{{ Auth::Garantia()->descripcion}}" placeholder="Descripcion" required="" data-error="Completa este campo">
                                      </div></td> 
                                       
                                        <td><div class="col-6">
                                        <label >Daños</label>
                                        <input type="text" name="daños" class="form-control" placeholder="Daños empresa"  value="{{ Auth::Garantia()->daños}}"required="" data-error="Completa este campo"><br>
                                      </div></td>
                                      
                                    </tr>
                              
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