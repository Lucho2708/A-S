@extends('home')

@section('menu')
  @include('adminlte.menu')
@endsection

@section('contenido')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Contrato</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Contrato</li>
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
              <form role="form">
                <div class="card-body">
                <div class="row">
                  
                  <div class="col-6">
                    <label class="h5">Nombre Empresa</label>
                    <input type="text" name="nom_empresa" class="form-control" placeholder="Nombre empresa" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label class="h5">Nit Empresa</label>
                    <input type="text" class="form-control" name="nit_empresa" placeholder="Nit empresa" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label class="h5">Departamento</label>
                    <input type="text" class="form-control" name="departamento" placeholder="Departamento" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label class="h5">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label class="h5">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="" data-error="Completa este campo">
                  </div>
                  <div class="col-6">
                    <label class="h5">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="" data-error="Completa este campo"><br>
                  </div>
                    <div class="col-6">
                    <label class="h5">Tipo de Contrato</label>
                    <select class="form-control" name="tip_contrato" required="" data-error="Completa este campo">
                      <option>None</option>
                      <option>Cliente</option>
                      <option>Proveedor</option>
                      <option>Contratista</option>
                    </select><br>
                  </div>
                    <div class="col-6">
                    <label class="h5">Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha inicio"required="" data-error="Completa este campo">
                  </div>
                    <div class="col-6">
                    <label class="h5">Fecha Terminacion</label>
                    <input type="date" class="form-control" name="fecha_final" placeholder="Fecha final"required="" data-error="Completa este campo"><br>
                  </div>
                  <div class="col-6">
                    <label class="h5">Estado Contratato</label>
                    <select class="form-control" name="estado_contrato" required="" data-error="Completa este campo">
                      <option>None</option>
                      <option>Inicio</option>
                      <option>Progreso</option>
                      <option>Cerrado</option>
                    </select>
                  </div>

                  <div class="col-6">
                    <label class="h5">Acuerdo Pago</label>
                     <select class="form-control" name="acuerdo_pago" required="" data-error="Completa este campo">
                      <option>None</option>
                      <option>Tarjeta debido</option>
                      <option>Tarjeta Credito</option>
                      <option>Contado</option>
                    </select><br>

                  </div>

                  <div class="col-6">
                    <label class="h5">Numero de Cuenta</label>
                    <input id="c" type="text" class="form-control" name="num_cuenta" placeholder="Numero de cuenta"required="" data-error="Completa este campo"onkeyUp="return ValNumero(this);" maxlength="80"(event)><br>
                  </div>
                  <div class="col-6">
                    <label class="h5">Valor Contrato</label>
                    <input id="v" type="text" class="form-control" name="valor_contrato" placeholder="Valor contrato"required="" data-error="Completa este campo"onkeyUp="return ValNumero(this);" maxlength="80"(event)"><br>
                     
 
                  <div class="col-12">
                    <label class="h5">Notas</label>
                    <textarea class="form-control" name="notas" rows="8" placeholder="Anotaciones ..."required="" data-error="Completa este campo"></textarea><br>

                     <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right  disabled" style="pointer-events: all; cursor: pointer;">Submit</button>
                  </div>
                </div>
              </div>
<script language="javascript" type="text/javascript">
    
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
</script>


<script>
String.prototype.reverse=function(){return this.split('').reverse().join('');};
 
function numberblog(e){
function f(){
this.value=this.value.reverse().replace(/[^0-9.$]/g,'').replace(/\.(?=\d*[.] [.]\d*)/g,'').reverse();
 
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
numberblog(document.getElementById("v"))
</script>

 <!-- /.Para colocar lo de numero de cuenta-->

<script>
String.prototype.reverse=function(){return this.split('').reverse().join('');};
 
function numberblog(e){
function f(){
this.value=this.value.reverse().replace(/[^0-9-]/g,'').replace(/\.(?=\d*[.] [.]\d*)/g,'').reverse();
 
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
              </form>
                <!-- /.card-body --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection