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
        <ul class=" nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{Route::is('home')?'active':null}}">
              <i class="fa fa-home"></i>
              <p>
                Inicio
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{Route::is('contratos.index')?'menu-open':null ||Route::is('contratos.edit')?'active':null|| Route::is('contratos.create')?'menu-open':null }}">
            <a href="#" class="nav-link {{Route::is('contratos.index')?'active':null ||Route::is('contratos.edit')?'active':null|| Route::is('contratos.create')?'active':null }}">
              <i class="fa fa-drivers-license"></i>
              <p>
                Contratos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{route('contratos.index')}}" class="nav-link {{Route::is('contratos.index')?'active':null }} ">
                  <i class="fa fa-folder-open-o"></i>
                  <p>Ver contratos</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('contratos.create')}}" class="nav-link {{Route::is('contratos.create')?'active':null }}">
                  <i class="fa fa-wpforms"></i>
                  <p>crear contratos</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview {{Route::is('cliente.index')?'menu-open':null ||Route::is('cliente.edit')?'active':null|| Route::is('cliente.create')?'menu-open':null }}">
            <a href="#" class="nav-link {{Route::is('cliente.index')?'active':null ||Route::is('cliente.edit')?'active':null|| Route::is('cliente.create')?'active':null }}">
              <i class="fa fa-address-card"></i>
              <p>
                Clientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{route('cliente.index')}}" class="nav-link {{Route::is('cliente.index')?'active':null }}">
                  <i class="fa fa-book"></i>
                  <p>ver clientes</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('cliente.create')}}" class="nav-link {{Route::is('cliente.create')?'active':null }}">
                  <i class="fa fa-wpforms"></i>
                  <p>crear clientes</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{Route::is('proveedor.index')?'menu-open':null ||Route::is('proveedor.edit')?'active':null|| Route::is('proveedor.create')?'menu-open':null }}">
            <a href="#" class="nav-link  {{Route::is('proveedor.index')?'active':null ||Route::is('proveedor.edit')?'active':null|| Route::is('proveedor.create')?'active':null }}">
              <i class="fa fa-address-card-o"></i>
              <p>
                Proveedores
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{route('proveedor.index')}}" class="nav-link {{Route::is('proveedor.index')?'active':null }}">
                  <i class="fa fa-eye"></i>
                  <p>Ver Proveedor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('proveedor.create')}}" class="nav-link {{Route::is('proveedor.create')?'active':null }}">
                  <i class="fa fa-edit"></i>
                  <p>crear Proveedor</p>
                </a>
              </li>

            </ul>
          </li>


           <li class="nav-item has-treeview {{Route::is('garantias.index')?'menu-open':null ||Route::is('garantias.edit')?'active':null || Route::is('garantias.create')?'menu-open':null }}">
            <a href="#" class="nav-link {{Route::is('garantias.index')?'active':null ||Route::is('garantias.edit')?'active':null || Route::is('garantias.create')?'active':null }}">
              <i class="fa fa-handshake-o"></i>
              <p>
                Garantias
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('garantias.index')}}" class="nav-link {{Route::is('garantias.index')?'active':null }}">
                  <i class="fa fa-newspaper-o"></i>
                  <p>ver Garantias</p>
                </a>
              </li>
          
                
              <li class="nav-item">
                <a href="{{route('garantias.create')}}" class="nav-link {{Route::is('garantias.create')?'active':null }}">
                  <i class="fa fa-leanpub"></i>
                  <p>crear garantias</p>
                </a>
              </li>
       
            </ul>
          </li>
        </ul>



      </nav>
      <!-- /.sidebar-menu -->
