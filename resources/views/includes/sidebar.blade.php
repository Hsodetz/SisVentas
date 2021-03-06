<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('/imagenes/logoshido.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light text-success"> SisVentas </span>
  </a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
    <div class="info">
      <a href="#" class="d-block">
        @guest
        <span class="text-success"> Invitado </span>
        @else
        <div class="image">
          <img src="{{ asset('/imagenes/avatar.png') }}" class="elevation-2" alt="User Image">
          <span class="badge badge-light ml-3"> {{ Auth::user()->name }}   </span>
        </div>
        @endguest
      </a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      {{--
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fa fa-dashboard"></i>
          <p>
            Dashboard
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="./index.html" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Dashboard v1</p>
            </a>
          </li>
        </ul>
      </li>
      --}}
  
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs text-success"></i>
          <p>
            Mantenimiento
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('categorias.index') }}" class="nav-link">
              <i class="far fa-circle text-success"></i>
              <p>Categorias</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('clientes.index') }}" class="nav-link">
              <i class="far fa-circle text-success"></i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-circle text-success"></i>
              <p>Productos</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon far fa-keyboard text-primary"></i>
          <p>
            Permisos
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Ver Listado de Permisos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Crear Permisos</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users text-primary"></i>
          <p>
            Usuarios
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Ver Listado de Usuarios</p>
            </a>
          </li>
        </ul>
      </li>

    
    
      
      <li class="nav-header">MISCELLANEOUS</li>
      <li class="nav-item">
        <a href="https://adminlte.io/docs" class="nav-link">
          <i class="nav-icon fa fa-file"></i>
          <p>Documentation</p>
        </a>
      </li>
      <li class="nav-header">LABELS</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
          <p class="text">Important</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-warning"></i>
          <p>Warning</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Informational</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>