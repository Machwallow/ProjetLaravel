<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Metier\NoteManga;

use DB;


class NotesMDAO extends Model
{
    public function getNotesMangaByMangaId($id_manga){

        $resNotes = DB::table('notes_manga')->where('id_manga','=', $id_manga)->get();

        $lesNotes = array();

        foreach($resNotes as $note){
            $id_note_manga = $note->id_note_manga;
            $lesNotes[$id_note_manga] = $this->creerObjetMetier($note);
        }

        return $lesNotes;
    }

    public function insertNotesManga(NoteManga $noteManga){
        DB::table('notes_manga')->insert([
            'id_user'=>$noteManga->getUser()->id,
            'id_manga'=>$noteManga->getManga()->getIdManga(),
            'valeur'=>$noteManga->getValeur()]);
    }

    public function countNotesMangaByMangaID($id_manga){
        return DB::table('notes_manga')->where('id_manga','=', $id_manga)->count();
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
