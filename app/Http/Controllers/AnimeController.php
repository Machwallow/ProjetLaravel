<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionNoteARequest;
use App\Metier\Anime;
use App\Metier\NoteAnime;
use App\Models\AnimeDAO;
use App\Models\NotesADAO;
use App\Models\SaisonDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{

    public function getLesAnime(){

        $animeDAO = new AnimeDAO();
        $lesAnime = $animeDAO->getLesAnime();

        return view("anime", compact("lesAnime"));
    }

    public function getTop5Anime(){

        $animeDAO = new AnimeDAO();
        $lesAnime = $animeDAO->getTop5Anime();

        return view("animeTop5", compact("lesAnime"));
    }

    public function getAnimeById($id_anime){

        $animeDAO = new AnimeDAO();
        $anime = $animeDAO->getAnimeById($id_anime);

        $saisonDAO = new SaisonDAO();
        $lesSaison = $saisonDAO->getLesSaisonByAnimeId($id_anime);

        $noteAnimeDAO = new NotesADAO();
        $nbNotes = $noteAnimeDAO->countNotesAnimeByAnimeId($id_anime);
        return view('descriptionAnime', compact('anime','lesSaison', 'nbNotes'));
    }

    public function postAddNoteA(InsertionNoteARequest $request){

        $animeDAO = new NotesADAO();
        $anime = new Anime();
        $anime->setIdAnime($request->id_anime);

        $note = new NoteAnime();
        $note->setUser(Auth::user());
        $note->setAnime($anime);
        $note->setValeur($request->valeur);

        $animeDAO->insertNotesAnime($note);

        return view('insertionOK');

    }

}
