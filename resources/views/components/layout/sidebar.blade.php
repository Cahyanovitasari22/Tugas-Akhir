
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('static/images/SIMTARU.png')}}" alt="AdminLTE Logo"  style="max-width: 80%;
      height: auto;">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="" class="d-block">{{auth()->user()->username}}</a>
        </div> 
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('arsip')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Dalam Kota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('arsip2')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Luar Kota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengguna')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Administrator</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
