@extends('user/panel')

@section('content')

<div class="container-fluid">
        <div class="fixed-bottom bg-dark text-white p-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="song-info">
                    <div class="song-title">Now Playing</div>
                    <div class="song-artist">Nadin Amizah/div>
                </div>
                <div class="controls">
                    <form method="post" action="/previous">
                        @csrf
                        <button type="submit" class="btn btn-light">Previous</button>
                    </form>
                    <form method="post" action="/play">
                        @csrf
                        <button type="submit" class="btn btn-light">Play/Pause</button>
                    </form>
                    <form method="post" action="/next">
                        @csrf
                        <button type="submit" class="btn btn-light">Next</button>
                    </form>
                </div>
            </div>
        </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var playPauseButton = document.getElementById('playPauseButton');
        var bottomBar = document.getElementById('bottomBar');

        playPauseButton.addEventListener('click', function () {
            // Toggle visibility of the bottom bar
            bottomBar.classList.toggle('d-none');
        });
    });
</script>


@endsection