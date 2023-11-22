<?php
use Illuminate\Support\Facades\Route;

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
        return view('LoginController@talent');
    })->name('index');;

    Route::get('/resultados', 'DefaultController@busqueda');

    Route::get('transmision', function () {
        return view('envivo/transmision');
    })->name('transmision');

    Route::get('/404', function () {
        return view('404');
    })->name('404');

    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::get('/login', 'LoginControllerPanel@index');
    Route::post('/login/verify', 'LoginController@verify');
    Route::get('/login/logout', 'LoginController@logout');

    Route::get('/amparo-online', 'DefaultController@amparoOnline');
    Route::get('/aniversario', function () {
        return view('momentos');
    })->name('aniversario');

   /* Route::get('/30anios', function () {
        return view('30anios');
    })->name('mosaico');*/

    Route::get('/playlist/{id}/{titulo}', 'PlaylistController@detalle');
    Route::get('/playlists', 'DefaultController@playlists');

    
    Route::get('/en-vivo', function () {
        return view('envivo/listado');
    })->name('envivo.listado');

    Route::get('/en-vivo/detalle', function () {
        return view('envivo/detalle');
    })->name('envivo.detalle');

    //Rutas confirmadas NotaInclusión

    Route::get('/auth', 'LoginController@index');
    Route::post('/auth/verify', 'LoginController@verify');
    Route::get('/auth/logout', 'LoginController@logout');

    Route::get('/home', 'LoginController@home');

    Route::get('/speakers', 'LoginController@speakers');
    Route::get('/add-speaker', 'LoginController@addSpeaker');
    Route::post('/save-speaker', 'LoginController@saveSpeaker');
    Route::get('/update-speaker', 'LoginController@updateSpeaker');
    Route::get('/speakerDetail/{id}/{name}', 'LoginController@speakerDetail');
    Route::post('speaker/drop', 'LoginController@dropSpeaker');
    Route::get('/speaker/{id}/{name}', 'LoginController@speaker');


    Route::get('/proposals', 'LoginController@proposals');
    Route::get('/add-proposal', 'LoginController@addProposal');
    Route::post('/save-proposal', 'LoginController@saveProposal');
    Route::get('/update-proposal', 'LoginController@updateProposal');
    Route::get('/proposal-edit/{id}', 'LoginController@proposalEdit');
    Route::get('/proposal-details/{id}', 'LoginController@proposal');
    Route::post('proposal/drop', 'LoginController@dropProposal');

    Route::get('talent', 'LoginController@talent');
    Route::get('talent/{arregloCategorias}', 'LoginController@talentByCat');

    Route::get('image/upload','ImageUploadController@fileCreate');
    Route::post('image/upload/store','ImageUploadController@fileStore');
    Route::post('image/delete','ImageUploadController@fileDestroy');

