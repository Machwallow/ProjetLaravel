<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 20:18
 */

namespace App\Metier;


class NoteAnime extends Notes
{
    private $anime;

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



}