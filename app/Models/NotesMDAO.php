<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Metier\NoteManga;

use DB;


class NotesMDAO extends Model
{
    public function getNotesMangaByMangaId($id_manga){

        $resNotes = DB::table('notes_m')->where('id_manga','=', $id_manga)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function getNotesMangaByUserId($id_user){

        $resNotes = DB::table('notes_m')->where('id_user','=', $id_user)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            array_push($lesNotes, $this->creerObjetMetier($note));
        }

        return $lesNotes;
    }

    public function insertNotesManga(NoteManga $noteManga){
        DB::table('notes_m')->insert([
            'id_user'=>$noteManga->getUser()->id,
            'id_manga'=>$noteManga->getManga()->getIdManga(),
            'valeur'=>$noteManga->getValeur()]);
    }

    public function countNotesMangaByMangaID($id_manga){
        return DB::table('notes_m')->where('id_manga','=', $id_manga)->count();
    }

    public function deleteNoteById($id_note){
        DB::table('notes_m')->where('id_note_manga','=',$id_note)->delete();
    }

    public function creerObjetMetier(\stdClass $objet)
    {
        $note = new NoteManga();

        $mangaDAO = new MangaDAO();

        $note->setIdNote($objet->id_note_manga);
        $note->setUser(User::find($objet->id_user));
        $note->setManga($mangaDAO->getMangaById($objet->id_manga));
        $note->setValeur($objet->valeur);

        return $note;
    }
}
