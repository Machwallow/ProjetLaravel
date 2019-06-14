<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionGenreRequest;
use App\Models\GenreDAO;
use Illuminate\Http\Request;

use App\Metier\Genre;

class GenreController extends Controller
{
    public function getAjoutGenre(){
        return view('formAjoutGenre');
    }

    public function postAjoutGenre(InsertionGenreRequest $request){

        $monGenre = new Genre();
        $monGenre->setLibelleGenre($request->input('libGenre'));

        $monGenreDAO = new GenreDAO();
        $monGenreDAO->insertGenre($monGenre);

        return view('insertionOK');
    }
}
