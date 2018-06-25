<!-- Sidebar user panel (optional) -->

      <div class="">
    
        <div class="info"><br>
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span style="color: white;" class="hidden-xs">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->nombres}} {{ Auth::user()->apellidos}}</span>
            </a>
            <ul class="dropdown-menu" style="background: white;color: black;"class="dropdown-menu" role="menu" x-placement="bottom-start">
              <!-- User image -->
              <li class="user-header" >
                <!-- para la imagen Menu --
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                 Sidebar Menu -->

                <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ Auth::user()->nombres}} {{ Auth::user()->apellidos}}<br>
                  <small>{{ Auth::user()->email}}</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a  style="background: black;color: white;"href="{{ route('perfil.create') }}" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div  class="pull-right">
                  <a style="background: black;color: white;"href="{{ route('logout') }}" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
        <br> <br> <br>



      
<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="#" class="nav-link active">
              <i class="fa fa-safari"></i>
              <p>
                Mi Perfil
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('perfil.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ver mi perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('perfil.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>Actualizar Perfil</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-safari"></i>
              <p>
                Contratos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contratos.index')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ver contratos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contratos.create')}}" class="nav-link">
                  <i class="fa fa-wpforms"></i>
                  <p>Crear Contratos</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="fa fa-safari"></i>
              <p>
                Clientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('cliente.index')}}" class="nav-link">
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
            <a href="#" class="nav-link active">
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
            <a href="#" class="nav-link active">
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
