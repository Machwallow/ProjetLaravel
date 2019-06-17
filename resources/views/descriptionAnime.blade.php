@extends('template')

@section('titrePage')
    Details
@endsection

@section('titreItem')
    <h1>Détails</h1>
@endsection

@section('contenu')
    <div class="container">
        <div class="card mb-3" style="max-width: 650px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../img/{{ $anime->getCouverture() }}" class="card-img" alt="jacket manga">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $anime->getTitre() }}</h5>
                        <h6 class="text-right"> Note : {{ $anime->getNoteMoy() }}/5 ({{ $nbNotes }})</h6>
                        <h6 class="card-title text-warning">{{ $anime->getGenre()->getLibelleGenre() }}</h6>
                        <p class="card-text" >{{ $anime->getDescription() }}</p>
                        <h6>Saisons disponibles :</h6>
                        <ul>
                            @foreach($lesSaison as $saison)
                                <li><a href="{{ url('saison/'.$saison->getIdSaison()) }}">Saison n° {{ $saison->getNumSaison() }}</a></li>
                            @endforeach
                        </ul>
                        @auth
                            {!! Form::open(['url' => 'ajoutNoteA']) !!}
                            <div class="form-group">
                                <div class="col-md-8">
                                    <div class="form-group row {!! $errors->has('valeur') ? 'has-error' : '' !!}">
                                        <div class="col-md-5">
                                            {!! Form::number('valeur','2,5',['class' => 'form-control','placeholder'=>'Note', 'step'=>'0.5', 'max'=>'5', 'min'=>'0']) !!}
                                            {!! $errors->first('valeur', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        <div class="col-md-5">
                                            {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                                        </div>
                                    </div>
                                    {{ Form::hidden('id_anime', $anime->getIdAnime()) }}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        @else
                            <small>Veuillez vous <a href="{{ route('login') }}">connecter</a> pour mettre une note</small>
                        @endauth
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/anime') }}" class="btn btn-light" style="background-color: #6c757d;">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection