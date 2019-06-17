@extends('template')

@section('titrePage')
    Manga
@endsection

@section('titreItem')
    <h1>Les Mangas</h1>
@endsection

@section('contenu')
    <div class="container">
        <!-- Card deck -->
        <div class="card-deck">
        @foreach ($lesMangas as $manga)
            <div class="col-sm-3">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top img-fluid" src="img/{{ $manga->getCouverture() }}" alt="Card image cap">
                        <a href="{{ url('/mangas')}}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">{{ $manga->getTitre() }}</h4>
                        <!--SubTitle-->
                        <h6 class="card-title text-warning">{{ $manga->getGenre()->getLibelleGenre() }}</h6>
                        <!--Text-->
                        <p class="card-text" style="overflow: hidden">{{ $manga->getDescription() }}</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="{{ url('/mangas/'.$manga->getIdManga()) }}" class="btn btn-light" style="background-color: #ffc631">Plus d'info</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection