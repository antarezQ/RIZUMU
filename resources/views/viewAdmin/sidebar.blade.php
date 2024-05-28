<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/user/dashboard" class="brand-link">
      <img src="{{ asset('lte/dist/img/rizumu-logo.png') }}" alt="RIZUMU Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <h3><span class="brand-text font-weight-bolder pl-2">RIZUMU</span></h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://assets.tokko.io/20897c89-8f04-4606-9590-fe5d5d919c01/store/images/be9bc5d9-962d-4440-878d-668619b8300d" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/home" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($class=='home'){echo "menu-open";} ?>">
            <a href="/admin/home" class="nav-link <?php if($subclass=='home'){echo "active";} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($class=='song'){echo "menu-open";} ?>">
            <a href="{{route('admin.song')}}" class="nav-link <?php if($subclass=='song'){echo "active";} ?>">
              <i class="nav-icon fas fa-music"></i>
              <p>
                Songs
              </p>
            </a>
          </li>
              
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>