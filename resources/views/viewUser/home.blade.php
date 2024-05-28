@extends('user/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Recommended) -->
    <div class="content-header">
        <div class="container-fluid pt-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Recommended</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- Add breadcrumb items if needed -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="/user/playbar" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Bertaut</h5>
                          <p class="text-left text-info">Nadin Amizah</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>


                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/rz-fb.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="#" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Luka</h5>
                          <p class="text-left text-info">Rizky Febian</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/mahalini.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="#" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Sial</h5>
                          <p class="text-left text-info">Mahalini</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="#" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Sorai</h5>
                          <p class="text-left text-info">Nadin Amizah</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/mahalini.jpeg') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="#" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Sisa Rasa</h5>
                          <p class="text-left text-info">Mahalini</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-lg-2 col-6">
                  <!-- small box -->
                  <div class="small-box bg-dark">
                    <div class="inner">
                        <img src="{{ asset('lte/dist/img/rz-fb.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <a href="#" class="small-box-footer pl-2">
                      <div class="row">
                        <div class="col">
                          <h5 class="text-left m-0">Terlukis Indah</h5>
                          <p class="text-left text-info">Rizky Febian</p>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-play-circle p-2 rounded-circle fa-2x"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- Add more similar blocks for each song -->

            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->

    <!-- Content Header (Recommended) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Top 5 Songs by Artist</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- Add breadcrumb items if needed -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row p-3">
      <div class="col-md-4">
          <div class="card card-widget widget-user-2">
              <div class="widget-user-header bg-dark">
                  <div class="widget-user-image">
                      <img class="img-circle elevation-2" src="{{ asset('lte/dist/img/song-photo.png') }}" alt="User Avatar">
                  </div>
                  <h3 class="widget-user-username">Nadin Amizah</h3>
                  <h5 class="widget-user-desc">Artist</h5>
              </div>
              <div class="card-footer p-0">
                  <ul class="nav flex-column">
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Rayuan Perempuan Gila <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Semua Aku Dirayakan <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Bertaut <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Sorai <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Amin Paling Serius <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card card-widget widget-user-2">
              <div class="widget-user-header bg-dark">
                  <div class="widget-user-image">
                      <img class="img-circle img-fluid elevation-2" src="{{ asset('lte/dist/img/rz-fb.jpg') }}" alt="User Avatar">
                  </div>
                  <h3 class="widget-user-username">Rizky Febian</h3>
                  <h5 class="widget-user-desc">Artist</h5>
              </div>
              <div class="card-footer p-0">
                  <ul class="nav flex-column">
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Hingga Tua Bersama <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Terlukis Indah <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Seperti Kisah <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Luka <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Tak Ingin Pisah Lagi <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="card card-widget widget-user-2">
              <div class="widget-user-header bg-dark">
                  <div class="widget-user-image">
                      <img class="img-circle elevation-2" src="{{ asset('lte/dist/img/mahalini.jpeg') }}" alt="User Avatar">
                  </div>
                  <h3 class="widget-user-username">Mahalini</h3>
                  <h5 class="widget-user-desc">Artist</h5>
              </div>
              <div class="card-footer p-0">
                  <ul class="nav flex-column">
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Sial <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Bohongi Hati <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Sisa Rasa <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Melawan Restu <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-dark">
                              Kisah Sempurna <i class="float-right far fa-play-circle"></i></span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
