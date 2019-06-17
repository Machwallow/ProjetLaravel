@extends('template')

@section('titrePage')
    Top 5 Anime
@endsection

@section('titreItem')
    <h1>Le Top 5 des Anime</h1>
@endsection

@section('contenu')
    <div class="container">
        @for($i=0;$i<sizeof($lesAnime);$i++)

            <div class="card mb-3" style="max-width: 650px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../img/{{ $lesAnime[$i]->getCouverture() }}" class="card-img" alt="jacket manga">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title text-danger">Numéro : {{ $i + 1 }}</h3>
                            <h6 class="text-right"> Note : {{ $lesAnime[$i]->getNoteMoy() }}/5</h6>
                            <h5 class="card-title ">{{ $lesAnime[$i]->getTitre() }}</h5>
                            <h6 class="card-title text-warning">{{ $lesAnime[$i]->getGenre()->getLibelleGenre() }}</h6>
                            <p class="card-text" >{{ $lesAnime[$i]->getDescription() }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('/anime/'.$lesAnime[$i]->getIdAnime()) }}" class="btn btn-light" style="background-color: #ffc631">Plus d'info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

@endsection
