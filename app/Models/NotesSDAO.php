<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Metier\NoteSaison;
use Illuminate\Foundation\Auth\User;


use DB;


class NotesSDAO extends Model
{
    public function getNotesSaisonBySaisonId($id_saison){

        $resNotes = DB::table('notes_saison')->where('id_saison','=', $id_saison)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            $id_note_saison = $note->id_note_saison;
            $lesNotes[$id_note_saison] = $this->creerObjetMetier($note);
        }

        return $lesNotes;
    }

    public function insertNotesSaison(NoteSaison $noteSaison){
        DB::table('notes_saison')->insert([
            'id_user'=>$noteSaison->getUser()->id,
            'id_saison'=>$noteSaison->getSaison()->getIdSaison(),
            'valeur'=>$noteSaison->getValeur()]);
    }

    public function countNotesSaisonBySaisonID($id_saison){
        return DB::table('notes_saison')->where('id_saison','=', $id_saison)->count();
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
