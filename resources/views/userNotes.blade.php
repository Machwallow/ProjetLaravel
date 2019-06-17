@extends('template')

@section('titrePage')
    Vos notes
@endsection

@section('titreItem')
    <h1>Vos notes</h1>
@endsection

@section('contenu')

    <div class="container">
        <h5 style="color:#ffc107">Mangas :</h5>
        <table class="table table-bordered table-stripped">
            <thead>
                <th style="width: 5%;">ID M</th>
                <th style="width: 60%;">Titre</th>
                <th style="width: 5%;">Votre note</th>
                <th style="width: 5%;">Supprimer</th>
            </thead>
            @foreach ($notesM as $note)
                <tr>
                    <td style="width: 5%;">{{ $note->getManga()->getIdManga() }}</td>
                    <td style="width: 60%;">{{ $note->getManga()->getTitre() }}</td>
                    <td style="width: 5%;">{{ $note->getValeur() }}</td>
                    <td style="width: 5%;">
                        {!! Form::open(['url' => 'deleteNoteM']) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                        {{ Form::hidden('id_note', $note->getIdNote()) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="container">
        <h5 style="color:#ffc107">Anime :</h5>
        <table class="table table-bordered table-stripped">
            <thead>
            <th style="width: 5%;">ID A</th>
            <th style="width: 60%;">Titre</th>
            <th style="width: 5%;">Votre note</th>
            <th style="width: 5%;">Supprimer</th>
            </thead>
            @foreach ($notesA as $note)
                <tr>
                    <td style="width: 5%;">{{ $note->getAnime()->getIdAnime() }}</td>
                    <td style="width: 60%;">{{ $note->getAnime()->getTitre() }}</td>
                    <td style="width: 5%;">{{ $note->getValeur() }}</td>
                    <td style="width: 5%;">
                        {!! Form::open(['url' => 'deleteNoteA']) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                        {{ Form::hidden('id_note', $note->getIdNote()) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="container">
        <h5 style="color:#ffc107">Saisons :</h5>
        <table class="table table-bordered table-stripped">
            <thead>
            <th style="width: 5%;">ID S</th>
            <th style="width: 60%;">Anime</th>
            <th style="width: 5%;">N° Saison</th>
            <th style="width: 5%;">Votre note</th>
            <th style="width: 5%;">Supprimer</th>
            </thead>
            @foreach ($notesS as $note)
                <tr>
                    <td style="width: 5%;">{{ $note->getSaison()->getIdSaison() }}</td>
                    <td style="width: 60%;">{{ $note->getSaison()->getAnime()->getTitre() }}</td>
                    <td style="width: 5%;">{{ $note->getSaison()->getNumSaison() }}</td>
                    <td style="width: 5%;">{{ $note->getValeur() }}</td>
                    <td style="width: 5%;">
                        {!! Form::open(['url' => 'deleteNoteS']) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                        {{ Form::hidden('id_note', $note->getIdNote()) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection