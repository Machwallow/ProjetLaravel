<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 20:17
 */

namespace App\Metier;


class NoteManga extends Notes
{
    private $manga;

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