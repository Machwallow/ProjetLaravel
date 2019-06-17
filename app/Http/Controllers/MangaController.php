<?php

namespace App\Http\Controllers;

use App\Models\MangaDAO;
use App\Models\NotesADAO;
use Illuminate\Http\Request;

use DB;


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
}
