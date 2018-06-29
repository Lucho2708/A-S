@extends('layouts.app')

@section('menu')
  @include('menu')
@endsection

@section('contenido')


<link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


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

    <div class="card-body">
    
    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
    <div class="row">

    <div class="col-sm-12 col-md-6">
    <div class="dataTables_length" id="example1_length">

    <label>Show

 <select name="example1_length" aria-controls="example1" class="form-control form-control-sm">

    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
    </select> 

    entries</label></div></div>

    <div class="col-sm-12 col-md-6">

    <div id="example1_filter" class="dataTables_filter">

    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>

    <div class="row">

    <div class="col-sm-12">


    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                
                <thead>
                <tr role="row">

                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 164px;">id</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 212px;">fecha_inicio</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 188px;">fecha_final(s)</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 139px;">descripcion</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 97px;">daños</th></tr>
                </thead>
                <tbody>
                

                @foreach($cliente1 as $Cliente1)

                <tr>
                  <td>{{$Cliente1->id}}</td>

                  <td>{{$Cliente1->fecha_inicio}}</td>
                  <td>{{$Cliente1->fecha_final}}</td> 
                  <td>{{$Cliente1->descripcion}}</td>
                  <td>{{$Cliente1->daños}}</td>


                </tr>
                @endforeach
                 </tbody>


                 </table>
        
    
 <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<div class="col-sm-12 col-md-5">
        
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 21 to 30 of 57 entries</div></div>
        

         <!-- ## Paginacion de next -->
         <div class="col-sm-12 col-md-12">

        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">

        <ul class="pagination">

        <li class="paginate_button page-item previous disabled" id="example1_previous">

        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>

        <li class="paginate_button page-item active">

        <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>

        <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>

        <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
    </div></div>

                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
          </div>
      </div>
</div>



        <!-- #END# Basic Examples -->


    
@endsection