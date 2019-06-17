<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteNoteARequest;
use App\Http\Requests\DeleteNoteMRequest;
use App\Http\Requests\DeleteNoteSRequest;
use App\Models\NotesADAO;
use App\Models\NotesMDAO;
use App\Models\NotesSDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function getNotesUser(){


        $id_user = Auth::user()->id;

        $notesMDAO = new NotesMDAO();
        $notesSDAO = new NotesSDAO();
        $notesADAO = new NotesADAO();


        $notesM = $notesMDAO->getNotesMangaByMangaId($id_user);
        $notesS = $notesSDAO->getNotesSaisonByUserId($id_user);
        $notesA = $notesADAO->getNotesAnimeByUserId($id_user);

        return view('userNotes',compact('notesM','notesS','notesA'));
    }

    public function deleteNoteM(DeleteNoteMRequest $request){
        $noteMDAO = new NotesMDAO();

        $noteMDAO->deleteNoteById($request->id_note);

        return view('suppressionOK');
    }

    public function deleteNoteA(DeleteNoteARequest $request){
        $noteADAO = new NotesADAO();

        $noteADAO->deleteNoteById($request->id_note);

        return view('suppressionOK');
    }

    public function deleteNoteS(DeleteNoteSRequest $request){
        $noteSDAO = new NotesSDAO();

        $noteSDAO->deleteNoteById($request->id_note);

        return view('suppressionOK');
    }
}
