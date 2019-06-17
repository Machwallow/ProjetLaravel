@extends('template')

@section('titrePage')
    Top 5 Manga
@endsection

@section('titreItem')
    <h1>Le Top 5 des Mangas</h1>
@endsection

@section('contenu')
    <div class="container">
            @for($i=0;$i<sizeof($lesMangas);$i++)

                <div class="card mb-3" style="max-width: 650px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../img/{{ $lesMangas[$i]->getCouverture() }}" class="card-img" alt="jacket manga">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-danger">Numéro : {{ $i + 1 }}</h3>
                                <h6 class="text-right"> Note : {{ $lesMangas[$i]->getNoteMoy() }}/5</h6>
                                <h5 class="card-title ">{{ $lesMangas[$i]->getTitre() }}</h5>
                                <h6 class="card-title text-warning">{{ $lesMangas[$i]->getGenre()->getLibelleGenre() }}</h6>
                                <p class="card-text" >{{ $lesMangas[$i]->getDescription() }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('/mangas/'.$lesMangas[$i]->getIdManga()) }}" class="btn btn-light" style="background-color: #ffc631">Plus d'info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

@endsection
<!--

!-->