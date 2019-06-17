@extends('template')

@section('titrePage')
    Les comptes
@endsection

@section('titreItem')
    <h1>Les comptes</h1>
@endsection

@section('contenu')

    <div class="container">
        <h5 style="color:#ffc107">Comptes :</h5>
        <table class="table table-bordered table-stripped">
            <thead>
            <th style="width: 5%;">ID C</th>
            <th style="width: 20%;">Nom</th>
            <th style="width: 30%;">Email</th>
            <th style="width: 5%">isAdmin</th>
            <th style="width: 5%;">Supprimer</th>
            </thead>
            @foreach ($users as $user)
                <tr>
                    <td style="width: 5%;">{{ $user->id }}</td>
                    <td style="width: 20%;">{{ $user->name }}</td>
                    <td style="width: 30%;">{{ $user->email }}</td>
                    <td style="width: 5%;">{{ $user->isAdmin }}</td>
                    <td style="width: 5%;">
                        {!! Form::open(['url' => 'deleteCompte']) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                        {{ Form::hidden('id_user', $user->id) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection