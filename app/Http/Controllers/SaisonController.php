<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertionNoteSRequest;
use App\Metier\NoteSaison;
use App\Metier\Saison;
use App\Models\NotesSDAO;
use App\Models\SaisonDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaisonController extends Controller
{
    public function getSaisonById($id_saison){

        $saisonDAO = new SaisonDAO();
        $saison = $saisonDAO->getSaisonById($id_saison);

        $noteSaisonDAO = new NotesSDAO();
        $nbNotes = $noteSaisonDAO->countNotesSaisonById($id_saison);
        return view('descriptionSaison', compact('saison', 'nbNotes'));
    }


    public function postAddNoteS (InsertionNoteSRequest $request){

        $saisonDAO = new NotesSDAO();
        $saison = new Saison();
        $saison->setIdSaison($request->id_saison);

        $note = new NoteSaison();
        $note->setUser(Auth::user());
        $note->setSaison($saison);
        $note->setValeur($request->valeur);

        $saisonDAO->insertNotesSaison($note);

        return view('insertionOK');

    }
}
