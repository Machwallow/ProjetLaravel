@extends('template')

@section('titrePage')
    Anime
@endsection

@section('titreItem')
    <h1>Les Anime</h1>
@endsection

@section('contenu')
    <div class="container">
        <!-- Card deck -->
        <div class="card-deck">
            @foreach ($lesAnime as $anime)
                <div class="col-sm-3">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top img-fluid" src="img/{{ $anime->getCouverture() }}" alt="Card image cap">
                            <a href="{{ url('/anime')}}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">{{ $anime->getTitre() }}</h4>
                            <!--SubTitle-->
                            <h6 class="card-title text-warning">{{ $anime->getGenre()->getLibelleGenre() }}</h6>
                            <!--Text-->
                            <p class="card-text" style="overflow: hidden">{{ $anime->getDescription() }}</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-light" style="background-color: #ffc631">Plus d'info</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection