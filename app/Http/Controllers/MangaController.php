<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionNoteMRequest;
use App\Metier\Manga;
use App\Metier\NoteManga;
use App\Models\MangaDAO;
use App\Models\NotesADAO;
use App\Models\NotesMDAO;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


use DB;
use Illuminate\Support\Facades\Auth;


class MangaController extends Controller
{
    public function getLesMangas(){

        $mangaDAO = new MangaDAO();
        $lesMangas = $mangaDAO->getLesMangas();

        return view("mangas", compact("lesMangas"));
    }

    public function getTop5Mangas(){

        $mangaDAO = new MangaDAO();
        $lesMangas = $mangaDAO->getTop5Mangas();

        return view("mangasTop5", compact("lesMangas"));
    }

    public function getMangaById($id_manga){

        $mangaDAO = new MangaDAO();
        $manga = $mangaDAO->getMangaById($id_manga);

        $noteMangaDAO = new NotesMDAO();
        $nbNotes = $noteMangaDAO->countNotesMangaByMangaID($id_manga);

        return view("descriptionManga", compact('manga','nbNotes'));

    }

    public function postAddNoteM(InsertionNoteMRequest $request){

        $mangaDAO = new NotesMDAO();
        $manga = new Manga();
        $manga->setIdManga($request->id_manga);

        $note = new NoteManga();
        $note->setUser(Auth::user());
        $note->setManga($manga);
        $note->setValeur($request->valeur);

        $mangaDAO->insertNotesManga($note);

        return view('insertionOK');

    }
}
