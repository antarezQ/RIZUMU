@extends('user/panel')

@section('content')

<div class="content-wrapper">

<!-- Content Header (Recommended) -->
    <div class="content-header">
        <div class="container-fluid pt-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Favourite Playlist</h1>
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
    <section class="content">
        <div class="row">
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-dark d-flex align-items-center justify-content-center">
                    <div class="inner img-layout">
                        <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image" class="img-fluid circle mx-auto">
                    </div>
                </div>
            </div>
            
            <div class="col text-left">
                <h1>Liked Songs</h1>
                <h3>Playlist</h3>
            </div>
        </div>

        <div class="container">
            <button class="btn btn-primary m-2">Edit playlist</button>

            <div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image"  style="max-width:15%"  class="img-fluid">
                                </div>

                                <div class="col">
                                    <h4 class="text-left"> Sial</h4>
                                </div>
                            </div>
                        </a>  
                    </li>

                    <li class="list-group-item">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image" class="img-fluid">
                                </div>
                                <div class="col">
                                    Sial
                                </div>
                            </div>
                        </a>  
                    </li>

                    <li class="list-group-item">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('lte/dist/img/song-photo.png') }}" alt="Image" class="img-fluid">
                                </div>

                                <div class="col">
                                    Sial
                                </div>
                            </div>
                        </a>  
                    </li>
                </ul>
            </div>
        </div>
    </section>


</div>

@endsection