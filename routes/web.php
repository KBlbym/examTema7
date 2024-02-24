<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class .'@index')->name('posts.index');

Route::get('/artists', ArtistController::class .'@index')->name('artists.index');
Route::get('/artists/{artist}', ArtistController::class .'@show')->name('artists.show');
Route::get('/{artist}/albums', AlbumController::class .'@index')->name('albums.index');
Route::get('/albums/{artist}', AlbumController::class .'@show')->name('albums.show');


Route::get('/{albums}/songs', SongController::class .'@index')->name('songs.index');
//Route::get('/songs', SongController::class .'@index')->name('songs.index');
