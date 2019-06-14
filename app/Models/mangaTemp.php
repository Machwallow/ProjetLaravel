<?php

namespace App\Models;

use App\Metier\Manga;
use Illuminate\Database\Eloquent\Model;

use DB;

class mangaTemp
{
    public function getLesMangas(){

        $mangas = DB::table('manga')->get();

        return $mangas;
    }
}