<?php

namespace App\Models;

use App\Metier\NoteAnime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use DB;

class NotesADAO extends DAO
{
    public function getNotesAnimeByAnimeId($id_anime){

        $resNotes = DB::table('notes_a')->where('id_anime','=', $id_anime)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function getNotesAnimeByUserId($id_user){

        $resNotes = DB::table('notes_a')->where('id_user','=', $id_user)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function insertNotesAnime(NoteAnime $noteAnime){
        DB::table('notes_a')->insert([
                                        'id_user'=>$noteAnime->getUser()->id,
                                        'id_anime'=>$noteAnime->getAnime()->getIdAnime(),
                                        'valeur'=>$noteAnime->getValeur()]);
    }

    public function countNotesAnimeByAnimeID($id_anime){
        return DB::table('notes_a')->where('id_anime','=', $id_anime)->count();
    }

    public function deleteNoteById($id_note){
        DB::table('notes_a')->where('id_note_anime','=',$id_note)->delete();
    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $note = new NoteAnime();

        $animeDAO = new AnimeDAO();

        $note->setIdNote($objet->id_note_anime);
        $note->setUser(User::find($objet->id_user));
        $note->setAnime($animeDAO->getAnimeById($objet->id_anime));
        $note->setValeur($objet->valeur);

        return $note;
    }
}
