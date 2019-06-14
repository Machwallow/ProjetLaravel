@extends('template')

@section('titrePage')
    Manga
@endsection

@section('titreItem')
    <h1>Les Mangas</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-stripped">
        <thead>
            <th>Id</th>
            <th>Prix</th>
            <th>Titre</th>
            <th>Genre</th>
        </thead>
        @foreach ($lesMangas as $manga)
            <tr>
                <td>{{ $manga->getIdManga() }}</td>
                <td>{{ $manga->getPrix() }}</td>
                <td>{{ $manga->getTitre() }}</td>
                <td>{{ $manga->getGenre()->getLibelleGenre() }}</td>
            </tr>
        @endforeach
    </table>
@endsection