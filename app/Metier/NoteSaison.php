<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 20:17
 */

namespace App\Metier;


class NoteSaison extends Notes
{
    private $saison;

    /**
     * @return mixed
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * @param mixed $saison
     */
    public function setSaison($saison): void
    {
        $this->saison = $saison;
    }



}