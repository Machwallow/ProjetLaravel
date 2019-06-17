<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 17:10
 */

namespace App\Metier;


class Saison
{
    private $id_saison;
    private $anime;
    private $description;
    private $prix;
    private $note_moy;
    private $num_saison;
    private $nb_episodes;
    private $couverture;

    /**
     * @return mixed
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * @param mixed $couverture
     */
    public function setCouverture($couverture): void
    {
        $this->couverture = $couverture;
    }

    /**
     * @return mixed
     */
    public function getIdSaison()
    {
        return $this->id_saison;
    }

    /**
     * @param mixed $id_saison
     */
    public function setIdSaison($id_saison): void
    {
        $this->id_saison = $id_saison;
    }

    /**
     * @return mixed
     */
    public function getAnime()
    {
        return $this->anime;
    }

    /**
     * @param mixed $anime
     */
    public function setAnime($anime): void
    {
        $this->anime = $anime;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getNoteMoy()
    {
        return $this->note_moy;
    }

    /**
     * @param mixed $note_moy
     */
    public function setNoteMoy($note_moy): void
    {
        $this->note_moy = $note_moy;
    }

    /**
     * @return mixed
     */
    public function getNumSaison()
    {
        return $this->num_saison;
    }

    /**
     * @param mixed $num_saison
     */
    public function setNumSaison($num_saison): void
    {
        $this->num_saison = $num_saison;
    }

    /**
     * @return mixed
     */
    public function getNbEpisodes()
    {
        return $this->nb_episodes;
    }

    /**
     * @param mixed $nb_episodes
     */
    public function setNbEpisodes($nb_episodes): void
    {
        $this->nb_episodes = $nb_episodes;
    }


}