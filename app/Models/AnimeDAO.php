<?php

namespace App\Models;

use App\Metier\Genre;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Anime;
use DB;

class AnimeDAO extends DAO
{
    public function getLesAnime(){

        $resAnime = Db::table('anime')->get();

        $lesAnime = array();

        foreach($resAnime as $anime){
            $id_anime = $anime->id_anime;
            $lesAnime[$id_anime] = $this->creerObjetMetier($anime);
        }

        return $lesAnime;
    }

    public function getAnimeById($id_anime){

        $resAnime = DB::table('anime')->where('id_anime', '=', $id_anime)->first();

        return $this->creerObjetMetier($resAnime);
    }

    public function getLesAnimeByGenre($id_genre){

        $resManga = DB::table('anime')->where('id_genre','=', $id_genre)->get();

        $lesManga = array();

        foreach($resManga as $manga){
            $id_manga = $manga->id_manga;
            $lesManga[$id_manga] = $this->creerObjetMetier($manga);
        }

        return $lesManga;

    }


    public function getTop5Anime(){

        $resAnime = Db::table('anime')->orderBy('note_moy','desc')->take(5)->get();

        $lesAnime = array();

        foreach($resAnime as $anime){
            array_push($lesAnime, $this->creerObjetMetier($anime));
        }
        return $lesAnime;

    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $unAnime = new Anime();

        $mangaDAO = new MangaDAO();
        $genreDAO = new GenreDAO();

        $unAnime->setIdAnime($objet->id_anime);
        $unAnime->setTitre($objet->titre);
        $unAnime->setCouverture($objet->couverture);
        $unAnime->setDescription($objet->description);
        $unAnime->setNbSaisons($objet->nb_saisons);
        $unAnime->setNbEpisodes($objet->nb_episodes);
        $unAnime->setManga($mangaDAO->getMangaById($objet->id_manga));
        $unAnime->setGenre($genreDAO->getGenreById($objet->id_genre));
        $unAnime->setNoteMoy($objet->note_moy);

        return $unAnime;
    }
}
