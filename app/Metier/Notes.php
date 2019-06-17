<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 15/06/2019
 * Time: 17:10
 */

namespace App\Metier;


class Notes
{
    private $id_note;
    private $user;
    private $valeur;

    /**
     * @return mixed
     */
    public function getIdNote()
    {
        return $this->id_note;
    }

    /**
     * @param mixed $id_note
     */
    public function setIdNote($id_note): void
    {
        $this->id_note = $id_note;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur): void
    {
        $this->valeur = $valeur;
    }


}