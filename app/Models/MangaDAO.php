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

    public function getTop5Mangas(){

        $resManga = DB::table('manga')->orderBy('note_moy','DESC')->take(5)->get();

        $lesManga = array();

        foreach($resManga as $manga){
            array_push($lesManga, $this->creerObjetMetier($manga));
        }

        return $lesManga;

    }

    public function getMangaById($id_manga){

        $manga = DB::table('manga')->where('id_manga','=', $id_manga)->first();

        return $this->creerObjetMetier($manga);

    }

    public function getLesMangaByGenre($id_genre){

        $resManga = DB::table('manga')->where('id_genre','=', $id_genre)->get();

        $lesManga = array();

        foreach($resManga as $manga){
            $id_manga = $manga->id_manga;
            $lesManga[$id_manga] = $this->creerObjetMetier($manga);
        }

        return $lesManga;

    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $manga = new Manga();
        $manga->setIdManga($objet->id_manga);
        $manga->setPrix($objet->prix);
        $manga->setTitre($objet->titre);
        $manga->setCouverture($objet->couverture);
        $manga->setDescription($objet->description);
        $manga->setNoteMoy($objet->note_moy);

        $genreDAO = new GenreDAO();

        $manga->setGenre($genreDAO->getGenreById($objet->id_genre));

        return $manga;
    }
}
