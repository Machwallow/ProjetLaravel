<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Saison;

use DB;


class SaisonDAO extends Model
{
    public function getLesSaison(){

        $saisons = DB::table('saison')->get();

        $lesSaison = array();

        foreach($saisons as $saison){
            $id_saison = $saison->id_saison;
            $lesSaison[$id_saison] = $this->creerObjetMetier($saison);
        }

        return $lesSaison;
    }

    public function getLesSaisonByAnimeId($id_anime){

        $saisons = DB::table('sais')->where('id_anime','=', $id_anime)->get();

        $lesSaison = array();

        foreach($saisons as $saison){
            array_push($lesSaison, $this->creerObjetMetier($saison));
        }

        return $lesSaison;
    }

    public function getSaisonById($id_saison){

        $saison = DB::table('sais')->where('id_saison','=', $id_saison)->first();

        return $this->creerObjetMetier($saison);

    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $animeDAO = new AnimeDAO();

        $saison = new Saison();


        $saison->setIdSaison($objet->id_saison);
        $saison->setPrix($objet->prix);
        $saison->setDescription($objet->description);
        $saison->setNoteMoy($objet->note_moy);
        $saison->setNumSaison($objet->num_saison);
        $saison->setNbEpisodes($objet->nb_episodes);
        $saison->setCouverture($objet->couverture);

        $saison->setAnime($animeDAO->getAnimeById($objet->id_anime));

        return $saison;
    }
}
