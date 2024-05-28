<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/user/dashboard" class="brand-link">
      <img src="{{ asset('lte/dist/img/rizumu-logo.png') }}" alt="RIZUMU Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <h3><span class="brand-text font-weight-bolder pl-2">RIZUMU</span></h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <h5 class="m-1 pt-3 font-weigth-bold text-info">Discover</h5>

          <li class="nav-item">
            <a href="/user/home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <h5 class="m-1 pt-3 font-weigth-bold text-info">Library</h5>

          <li class="nav-item">
            <a href="/user/favourite" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Favourite
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="user/home" class="nav-link">
              <i class="nav-icon fas fa-music"></i>
              <p>
                Playlist
              </p>
            </a>
          </li>

          <h5 class="m-1 pt-3 font-weigth-bold text-info">More</h5>

          <li class="nav-item">
            <a href="user/home" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Account
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>