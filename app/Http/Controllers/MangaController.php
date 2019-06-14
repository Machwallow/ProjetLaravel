<?php

namespace App\Http\Controllers;

use App\Models\MangaDAO;
use Illuminate\Http\Request;

use DB;


class MangaController extends Controller
{
    public function getLesMangas(){

        $mangaDAO = new MangaDAO();
        $lesMangas = $mangaDAO->getLesMangas();

        return view("mangas", compact("lesMangas"));
    }
}
