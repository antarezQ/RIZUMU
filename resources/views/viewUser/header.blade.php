<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark mb-2">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="/uss/dashboard" class="nav-link">Dashboard</a> -->
        <h5 class="text-light nav-link">Enjoy your Music!</h5>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- <li class="nav-item">
        <div class="input-group">
          <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
          <div class="input-group-append">
            <button type="submit" class="btn btn-lg btn-default">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </li> -->
      
      <div class="form-inline">
        <div class="input-group border rounded" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append text-light">
                <button class="btn btn-sidebar text-light">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
      </div>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="logout" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fas fa-lock"></i>
      </a>
      </li>

    </ul>
    <form id="logout-form" action="logout" method="POST">@csrf</form>
  </nav>
  
  <!-- /.navbar -->