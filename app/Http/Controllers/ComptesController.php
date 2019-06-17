<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteUserRequest;
use Illuminate\Database\Eloquent\Model;
use App\Metier\NoteSaison;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    public function getComptes(){

        $users = User::where('isAdmin','=',0)->get();

        return view('/comptes', compact('users'));
    }

    public function postDeleteCompte(DeleteUserRequest $request){

        $user = User::find($request->id_user);
        $user->forceDelete();

        return view("suppressionOK");
    }
}
