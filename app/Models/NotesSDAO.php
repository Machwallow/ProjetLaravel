<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Metier\NoteSaison;
use Illuminate\Foundation\Auth\User;


use DB;


class NotesSDAO extends Model
{
    public function getNotesSaisonBySaisonId($id_saison){

        $resNotes = DB::table('notes_s')->where('id_saison','=', $id_saison)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function getNotesSaisonByUserId($id_user){

        $resNotes = DB::table('notes_s')->where('id_user','=', $id_user)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function insertNotesSaison(NoteSaison $noteSaison){
        DB::table('notes_s')->insert([
            'id_user'=>$noteSaison->getUser()->id,
            'id_saison'=>$noteSaison->getSaison()->getIdSaison(),
            'valeur'=>$noteSaison->getValeur()]);
    }

    public function countNotesSaisonById($id_saison){
        return DB::table('notes_s')->where('id_saison','=', $id_saison)->count();
    }

    public function deleteNoteById($id_note){
        DB::table('notes_s')->where('id_note_saison','=',$id_note)->delete();
    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $note = new NoteSaison();

        $saisonDAO = new SaisonDAO();

        $note->setIdNote($objet->id_note_saison);
        $note->setUser(User::find($objet->id_user));
        $note->setSaison($saisonDAO->getSaisonById($objet->id_saison));
        $note->setValeur($objet->valeur);

        return $note;
    }
}
