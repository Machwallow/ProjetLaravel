<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 17:09
 */

namespace App\Metier;


class Anime
{
    private $id_anime;
    private $titre;
    private $nb_saisons;
    private $nb_episodes;
    private $description;
    private $couverture;
    private $note_moy;
    private $genre;
    private $manga;


    /**
     * @return mixed
     */
    public function getIdAnime()
    {
        return $this->id_anime;
    }

    /**
     * @return mixed
     */
    public function setIdAnime($id_anime)
    {
        $this->id_anime = $id_anime;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getNbSaisons()
    {
        return $this->nb_saisons;
    }

    /**
     * @param mixed $nb_saisons
     */
    public function setNbSaisons($nb_saisons): void
    {
        $this->nb_saisons = $nb_saisons;
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
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getManga()
    {
        return $this->manga;
    }

    /**
     * @param mixed $manga
     */
    public function setManga($manga): void
    {
        $this->manga = $manga;
    }



}