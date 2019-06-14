<?php

namespace App\Models;

use App\Metier\Manga;
use Illuminate\Database\Eloquent\Model;

use DB;

class MangaDAO extends DAO
{
    public function getLesMangas(){

        $mangas = DB::table('manga')->get();

        $lesMangas = array();

        foreach($mangas as $manga){
            $id_manga = $manga->id_manga;
            $lesMangas[$id_manga] = $this->creerObjetMetier($manga);
        }

        return $lesMangas;
    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $manga = new Manga();
        $manga->setIdManga($objet->id_manga);
        $manga->setPrix($objet->prix);
        $manga->setTitre($objet->titre);
        $manga->setCouverture($objet->couverture);

        $genreDAO = new GenreDAO();

        $manga->setGenre($genreDAO->getGenreById($objet->id_genre));

        return $manga;
    }
}
