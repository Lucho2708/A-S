<!-- Sidebar user panel (optional) -->

 
  

        <div class="info main-sidebar sidebar-dark-primary elevation-4"><br>
            <div>
              <center>
            <img src="../dist/img/user2-160x160.jpg" class="brand-image img-circle elevation-3"alt="User Image">
          </center>
            </div>

           
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span style="color: white;" ><font size="4">{{ Auth::user()->nombres}} {{ Auth::user()->apellidos}}</font></span>
            </a>
          </li>
         

            <ul class="dropdown-menu " style="background: white;color: black; border-radius: 8px;">
              <!-- User image -->
             
              <!-- Menu Body -->
             
              <!-- Menu Footer-->

             <li class="user-footer ">
              <div class="pull-left ">
                  <a style="background: gray;color: white;border-radius: 8px;"href="{{ route('perfil') }}" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div  class="pull-right">
                  <a style="background: gray;color: white;border-radius: 8px;"href="{{ route('logout') }}" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
        <br> <br> <br><br>



      
<!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class=" main-sidebar sidebar-dark-primary elevation-4 nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Inicio
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active bg-primary elevation-2">
              <i class="fa fa-safari"></i>
              <p>
                Contratos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
            
            <ul class="nav nav-treeview  "id="main-nav">
              <li class="nav-item ">
                <a  href="{{route('contratos.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ver contratos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contratos.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p> &nbsp;Crear Contratos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active bg-primary elevation-2">
              <i class="fa fa-safari"></i>
              <p>
                Clientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{route('cliente.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ver clientes</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('cliente.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>crear clientes</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active bg-primary elevation-2">
              <i class="fa fa-safari"></i>
              <p>
                Proveedores
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('proveedor.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ver Proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('proveedor.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>crear Proveedor</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link active bg-primary elevation-2">
              <i class="fa fa-safari"></i>
              <p>
                Garantias
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('garantias.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ver Garantias</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('garantias.edit')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>editar garantias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('garantias.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>crear garantias</p>
                </a>
              </li>
       
            </ul>
          </li>
        </ul>



      </nav>
      <!-- /.sidebar-menu -->
