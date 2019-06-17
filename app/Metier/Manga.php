<?php


namespace App\Metier;


class Manga
{
    private $id_manga;
    private $prix;
    private $titre;
    private $description;
    private $couverture;
    private $genre;
    private $note_moy;

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

    public function getIdManga()
    {
        return $this->id_manga;
    }

    public function setIdManga($id_manga)
    {
        $this->id_manga = $id_manga;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getCouverture()
    {
        return $this->couverture;
    }

    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

}