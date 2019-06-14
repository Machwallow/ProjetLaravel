<?php

namespace App\Models;

use App\Metier\Genre;
use Illuminate\Database\Eloquent\Model;

use DB;

class GenreDAO extends DAO
{

    public function getGenreById($idGenre){

        $monGenre = DB::table('genre')->where('id_genre', '=', $idGenre)->first();
        $genre = $this->creerObjetMetier($monGenre);

        return $genre;

    }

    public function insertGenre(Genre $genre){
        DB::table('genre')->insert(['lib_genre'=>$genre->getLibelleGenre()]);
    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $genre = new Genre();
        $genre->setIdGenre($objet->id_genre);
        $genre->setLibelleGenre($objet->lib_genre);

        return $genre;
    }

}
