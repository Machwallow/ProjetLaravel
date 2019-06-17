<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mangas
Route::get('/mangas', 'MangaController@getLesMangas');

Route::get('/mangas/{id}','MangaController@getMangaById')->where('id', '[0-9]+');

Route::get('/mangas/top5', 'MangaController@getTop5Mangas');

Route::post('/ajoutNoteM', 'MangaController@postAddNoteM');


//anime
Route::get('/anime', 'AnimeController@getLesAnime');

Route::get('/anime/{id}','AnimeController@getAnimeById')->where('id', '[0-9]+');

Route::get('/anime/top5', 'AnimeController@getTop5Anime');

Route::post('/ajoutNoteA', 'AnimeController@postAddNoteA');


//saison

Route::get('saison/{id}','SaisonController@getSaisonById')->where('id','[0-9]+');

Route::post('/ajoutNoteS', 'SaisonController@postAddNoteS');


//notes

Route::get('/vosNotes','NotesController@getNotesUser');

Route::post('/deleteNoteM', 'NotesController@DeleteNoteM');

Route::post('/deleteNoteA', 'NotesController@DeleteNoteA');

Route::post('/deleteNoteS', 'NotesController@DeleteNoteS');


//comptes

Route::get('/comptes', 'ComptesController@getComptes');

Route::post('/deleteCompte', 'ComptesController@postDeleteCompte');


