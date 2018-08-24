<?php
use App\Galeria;
use App\videos;
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
    $imagenes = Galeria::all()->toArray();
    $videos   = videos::all()->toArray();
    return view('welcome', compact('imagenes'), compact('videos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info',  'HomeController@info')->name('info');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('picture', 'GaleriaController');

Route::resource('video', 'VideosController');
