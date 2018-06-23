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
              {!! Form::open(['route' => 'cliente.store', 'method' => 'POST']) !!}
                <div class="card-body">
                <div class="row">
                
                    <div class="col-6">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha inicio"required="" data-error="Completa este campo">
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
                  </div>


                     {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                  </div>
                </div>
              </div>
                      <script type="text/javascript">
                        
                      function concatenar(input){
                        inputNum = input.value;
                        input.value = '$' + inputNum;
                       
                      }
                     function format(input)
                        {
                        var num = input.value.replace(/\./g,'');
                        if(!isNaN(num)){
                        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        num = num.split('').reverse().join('').replace(/^[\.]/,'');
                        input.value = num;
                        }
                          
                        else{ alert('Solo se permiten numeros');
                        input.value = input.value.replace(/[^\d\.]*/g,'');
                        }
                        }
                      </script>



                 <!-- /.Para colocar lo de numero de cuenta-->

                               
                <script language="javascript" type="text/javascript">
                    
                    function Solo_Numerico(variable){
                        Numero=parseInt(variable);
                        if (isNaN(Numero)){
                            return "";
                        }
                        return Numero;
                    }
                    function ValNumero(Control){
                        Control.value=Solo_Numerico(Control.value);
                    }
                </script>

                <script>
                String.prototype.reverse=function(){return this.split('').reverse().join('');};
                 
                function numberblog(e){
                function f(){
                this.value=this.value.reverse().replace('^(([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+$').replace('^(([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+$').reverse();
                 
                }
                e.onkeyup=f
                e.onkeydown=f
                e.onkeypress=f
                e.onmousedown=f
                e.onmouseup=f
                e.onclick=f
                e.onchange=f
                e.onblur=f
                }
            
                </script>

                <script type="text/javascript"> 
                numberblog(document.getElementById("c"))
                </script>
              {!! Form::close() !!}
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection