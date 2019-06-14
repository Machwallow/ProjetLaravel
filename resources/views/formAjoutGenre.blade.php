@extends('template')

@section('titrePage')
    Ajouter un genre
@endsection

@section('titreItem')
    <h1>Ajouter un genre</h1>
@endsection

@section('contenu')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="card">
            <div class="card-header">Créer un genre</div>
            <div class="card-body">
                {!! Form::open(['url' => 'saisieGenre']) !!}
                <div class="form-group {!! $errors->has('libGenre') ? 'has-error' : '' !!}">
                    {!! Form::text('libGenre', null, ['class' => 'form-control', 'placeholder' => 'Libellé du genre']) !!}
                    {!! $errors->first('libGenre', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <p></p>
@endsection