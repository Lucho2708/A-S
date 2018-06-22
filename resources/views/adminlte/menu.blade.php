<!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->nombres}}</a>

      </div>
    </div><div class="info">
      <a href="{{ route('logout') }}" class="d-block">Salir</a>
    </div>
<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
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
