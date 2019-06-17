<?php

namespace App\Http\Controllers;

use App\Models\AnimeDAO;
use App\Models\SaisonDAO;
use Illuminate\Http\Request;

class AnimeController extends Controller
{

    public function getLesAnime(){

        $animeDAO = new AnimeDAO();
        $lesAnime = $animeDAO->getLesAnime();

        return view("anime", compact("lesAnime"));
    }

    public function getAnimeById($id_anime){

        $animeDAO = new AnimeDAO();
        $anime = $animeDAO->getAnimeById($id_anime);

        $saisonDAO = new SaisonDAO();
        $lesSaison = $saisonDAO->getLesSaisonByAnimeId($id_anime);
        return view('anime', compact('anime','lesSaison'));
    }

}
