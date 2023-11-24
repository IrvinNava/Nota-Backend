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

    Route::get('imagen', 'ImagenController@index');
    Route::get('imagen/{id}/{titulo}', 'ImagenController@detalle');
    Route::get('audio', 'AudioController@index');
    Route::get('audio/{id}/{titulo}', 'AudioController@detalle');
    Route::get('texto', 'TextoController@index');
    Route::get('texto/{id}/{titulo}', 'TextoController@detalle');

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



    Route::get('administrador','AdministradorController@index');
    Route::get('administrador/usuarios', 'AdministradorController@usuarios');
    Route::post('administrador/get-usuarios', 'AdministradorController@getUsuarios');
    Route::get('administrador/usuarios/agregar','AdministradorController@agregarUsuario');
    Route::post('administrador/add-usuario', 'AdministradorController@addUsuario');
    Route::get('administrador/usuarios/editar/{id}','AdministradorController@editarUsuario');
    Route::post('administrador/update-usuario', 'AdministradorController@updateUsuario');
    Route::post('administrador/drop-usuario', 'AdministradorController@dropUsuario');

    Route::get('administrador/ponentes', 'AdministradorController@ponentes');
    Route::get('administrador/ponentes/agregar','AdministradorController@agregarPonente');
    Route::get('administrador/ponentes/editar/{id}','AdministradorController@editarPonente');
    Route::post('administrador/get-registros-ponentes', 'AdministradorController@getRegistrosPonentes');
    Route::post('administrador/add-registro-ponente', 'AdministradorController@addRegistroPonente');
    Route::post('administrador/update-registro-ponente', 'AdministradorController@updateRegistroPonente');
    Route::post('administrador/drop-registro-ponente', 'AdministradorController@dropRegistroPonente');

    Route::get('administrador/eventos', 'AdministradorController@eventos');
    Route::post('administrador/get-registros-eventos', 'AdministradorController@getRegistrosEventos');
    Route::post('administrador/add-registro-evento', 'AdministradorController@addRegistroEvento');
    Route::post('administrador/update-registro-evento', 'AdministradorController@updateRegistroEvento');
    Route::post('administrador/drop-registro-evento', 'AdministradorController@dropRegistroEvento');

    Route::get('administrador/gestion-eventos', 'AdministradorController@gestionEventos');
    Route::post('administrador/get-eventos', 'AdministradorController@getEventos');
    Route::post('administrador/add-evento', 'AdministradorController@addEvento');
    Route::post('administrador/update-evento', 'AdministradorController@updateEvento');
    Route::post('administrador/drop-evento', 'AdministradorController@dropEvento');

    Route::get('administrador/sliders', 'AdministradorController@sliders');
    Route::get('administrador/sliders/agregar', 'AdministradorController@agregarSlider');
    Route::get('administrador/sliders/editar', 'AdministradorController@editarSlider');
    Route::get('administrador/ajustes-inicio', 'AdministradorController@ajustesInicio');

    Route::get('administrador/playlists', 'AdministradorController@playlists');
    Route::get('administrador/playlists/agregar', 'AdministradorController@agregarPlaylist');
    Route::post('administrador/get-registros-playlist', 'AdministradorController@getRegistrosPlaylists');
    Route::post('administrador/add-registro-playlist', 'AdministradorController@addRegistroPlaylist');
    Route::get('administrador/playlist/editar/{id}', 'AdministradorController@editarPlaylist');
    Route::post('administrador/update-registro-playlist', 'AdministradorController@updateRegistroPlaylist');
    Route::post('administrador/drop-registro-playlist', 'AdministradorController@dropRegistroPlaylist');


    Route::get('administrador/colaboraciones', 'AdministradorController@colaboraciones');
    Route::post('administrador/get-registros-colaboraciones', 'AdministradorController@getRegistrosColaboraciones');
    Route::post('administrador/add-registro-colaboracion', 'AdministradorController@addRegistroColaboracion');
    Route::post('administrador/update-registro-colaboracion', 'AdministradorController@updateRegistroColaboracion');
    Route::post('administrador/drop-registro-colaboracion', 'AdministradorController@dropRegistroColaboracion');

    Route::get('administrador/videos','AdministradorController@videos');
    Route::post('administrador/get-videos', 'AdministradorController@getVideos');
    Route::post('administrador/add-video', 'AdministradorController@addVideo');
    Route::get('administrador/videos/editar/{id}','AdministradorController@editarVideo');
    Route::post('administrador/update-video', 'AdministradorController@updateVideo');
    Route::post('administrador/update-video-file', 'AdministradorController@updateVideoFile');
    Route::post('administrador/update-video-link', 'AdministradorController@updateVideoLink');
    Route::post('administrador/drop-video', 'AdministradorController@dropVideo');
    Route::get('administrador/audios', 'AdministradorController@audios');
    Route::post('administrador/api/get-audios', 'AdministradorController@getAudios');
    Route::post('administrador/add-audio', 'AdministradorController@addAudio');
    Route::get('administrador/audios/editar/{id}', 'AdministradorController@editarAudio');
    Route::post('administrador/update-audio', 'AdministradorController@updateAudio');
    Route::post('administrador/update-audio-file', 'AdministradorController@updateAudioFile');
    Route::post('administrador/drop-audio', 'AdministradorController@dropAudio');
    Route::post('administrador/add-autor', 'AdministradorController@addAutor');

    Route::get('administrador/textos', 'AdministradorController@textos');
    Route::post('administrador/api/get-textos', 'AdministradorController@getTextos');
    Route::post('administrador/add-texto', 'AdministradorController@addTexto');
    Route::get('administrador/textos/agregar', 'AdministradorController@agregarTexto');
    Route::get('administrador/textos/editar/{id}', 'AdministradorController@editarTexto');
    Route::post('administrador/update-texto', 'AdministradorController@updateTexto');
    Route::post('administrador/drop-texto', 'AdministradorController@dropTexto');

    Route::get('administrador/api/fetch-metadata', 'AdministradorController@fetchMetadata');
    Route::post('administrador/api/upload-file', 'AdministradorController@uploadFile');
    Route::post('administrador/api/upload-file-galeria', 'AdministradorController@uploadFileGaleria');
    Route::post('administrador/api/upload-file-exposicion-galeria', 'AdministradorController@uploadFileExposicionGaleria');
    
    Route::post('administrador/api/upload-mosaico', 'AdministradorController@uploadMosaico');
    Route::post('administrador/api/get-mosaicos', 'AdministradorController@getMosaicos');
    Route::post('administrador/update-mosaico', 'AdministradorController@updateMosaico');
    Route::post('administrador/drop-mosaico', 'AdministradorController@dropMosaico');

    Route::match(['get', 'post'], 'administrador/api/get-options/{modulo}', 'AdministradorController@getOptions');

    Route::get('administrador/transmisiones', 'AdministradorController@transmisiones');
    Route::get('administrador/transmisiones/editar', 'AdministradorController@editarTransmision');

    Route::get('administrador/notificaciones', 'AdministradorController@notificaciones');
    Route::get('administrador/30anios', 'AdministradorController@aniversario');

    Route::post('administrador/get-registros-timeline', 'AdministradorController@getRegistrosTimeline');
    Route::get('administrador/timeline', 'AdministradorController@timeline');
    Route::post('administrador/add-registro-timeline', 'AdministradorController@addRegistroTimeline');
    Route::post('administrador/update-registro-timeline', 'AdministradorController@updateRegistroTimeline');
    Route::post('administrador/drop-registro-timeline', 'AdministradorController@dropRegistroTimeline');
    Route::get('administrador/timeline/editar/{id}', 'AdministradorController@timelineEditar');
    Route::post('administrador/drop-link', 'AdministradorController@dropLink');

    Route::get('timelineMA', 'TimelineController@timeline');
    Route::get('timeline-detalle/{anio}/{id}', 'TimelineController@timelineDetalle');

    Route::get('timelineMA/galeria/{id}', 'TimelineController@timelineGaleria');

    Route::get('timelineMA-detalle-evento/', 'TimelineController@timelineDetalleEvento');

    Route::get('administrador/timeline/galeria/{id}', 'AdministradorController@timelineDetalleGaleria');
    Route::post('administrador/update-galeria', 'AdministradorController@updateGaleria');
    Route::post('administrador/drop-timeline-media', 'AdministradorController@dropTimelineMedia');


    Route::get('administrador/tematicas', 'AdministradorController@tematicas');

    Route::get('/amparo-online', 'DefaultController@amparoOnline');
    Route::get('/mosaicos', 'MosaicoController@index');
    Route::post('mosaico/add', 'MosaicoController@addMosaico');
    Route::get('/aniversario', function () {
        return view('momentos');
    })->name('aniversario');

   /* Route::get('/30anios', function () {
        return view('30anios');
    })->name('mosaico');*/

    Route::get('/playlist/{id}/{titulo}', 'PlaylistController@detalle');
    Route::get('/playlists', 'DefaultController@playlists');

    Route::get('/exposicion', function () {
        return view('exposicion-detalle');
    })->name('exposicion');

    Route::get('/exposicion/la-catedral-de-puebla-sus-testigos-y-testimonios', function () {
        return view('exposicion-la-catedral-detalle');
    })->name('exposicion-la-catedral');

    Route::get('/exposicion/manuel-felguerez', function () {
        return view('exposicion-manuel-felguerez-detalle');
    })->name('manuel-felguerez');

    Route::get('/en-vivo', function () {
        return view('envivo/listado');
    })->name('envivo.listado');

    Route::get('/en-vivo/detalle', function () {
        return view('envivo/detalle');
    })->name('envivo.detalle');

    Route::get('exposiciones-digitales', 'ExposicionesDigitalesController@index');
    Route::get('exposiciones-digitales/1', 'ExposicionesDigitalesController@nucleosListado');
    Route::get('exposiciones-digitales/1/documentos-fundacionales', 'ExposicionesDigitalesController@documentosFundacionales');
    Route::get('exposiciones-digitales/1/documentos-fundacionales/1', 'ExposicionesDigitalesController@nucleoDetalle');

    Route::get('exposiciones-digitales/2', 'ExposicionesDigitalesController@exposicion');
    Route::get('exposiciones-digitales/2/creditos', 'ExposicionesDigitalesController@creditos');
    Route::get('exposiciones-digitales/2/nucleo/1', 'ExposicionesDigitalesController@nucleoUno');
    Route::get('exposiciones-digitales/2/nucleo/2', 'ExposicionesDigitalesController@nucleoDos');
    Route::get('exposiciones-digitales/2/nucleo/3', 'ExposicionesDigitalesController@nucleoTres');
    Route::get('exposiciones-digitales/2/nucleo/4', 'ExposicionesDigitalesController@nucleoCuatro');

    Route::get('exposiciones-digitales/2/nucleo/1/1', 'ExposicionesDigitalesController@nucleoUnoDetalleUno');
    Route::get('exposiciones-digitales/2/nucleo/1/2', 'ExposicionesDigitalesController@nucleoUnoDetalleDos');
    Route::get('exposiciones-digitales/2/nucleo/1/3', 'ExposicionesDigitalesController@nucleoUnoDetalleTres');
    Route::get('exposiciones-digitales/2/nucleo/1/4', 'ExposicionesDigitalesController@nucleoUnoDetalleCuatro');
    Route::get('exposiciones-digitales/2/nucleo/1/5', 'ExposicionesDigitalesController@nucleoUnoDetalleCinco');

    Route::get('exposiciones-digitales/2/nucleo/2/1', 'ExposicionesDigitalesController@nucleoDosDetalleUno');
    Route::get('exposiciones-digitales/2/nucleo/2/2', 'ExposicionesDigitalesController@nucleoDosDetalleDos');
    Route::get('exposiciones-digitales/2/nucleo/2/3', 'ExposicionesDigitalesController@nucleoDosDetalleTres');
    Route::get('exposiciones-digitales/2/nucleo/2/4', 'ExposicionesDigitalesController@nucleoDosDetalleCuatro');
    Route::get('exposiciones-digitales/2/nucleo/2/5', 'ExposicionesDigitalesController@nucleoDosDetalleCinco');
    Route::get('exposiciones-digitales/2/nucleo/2/6', 'ExposicionesDigitalesController@nucleoDosDetalleSex');

    Route::get('exposiciones-digitales/2/nucleo/3/1', 'ExposicionesDigitalesController@nucleoTresDetalleUno');
    Route::get('exposiciones-digitales/2/nucleo/3/2', 'ExposicionesDigitalesController@nucleoTresDetalleDos');
    Route::get('exposiciones-digitales/2/nucleo/3/3', 'ExposicionesDigitalesController@nucleoTresDetalleTres');
    Route::get('exposiciones-digitales/2/nucleo/3/4', 'ExposicionesDigitalesController@nucleoTresDetalleCuatro');
    Route::get('exposiciones-digitales/2/nucleo/3/5', 'ExposicionesDigitalesController@nucleoTresDetalleCinco');

    Route::get('exposiciones-digitales/2/nucleo/4/1', 'ExposicionesDigitalesController@nucleoCuatroDetalleUno');
    Route::get('exposiciones-digitales/2/nucleo/4/2', 'ExposicionesDigitalesController@nucleoCuatroDetalleDos');
    Route::get('exposiciones-digitales/2/nucleo/4/3', 'ExposicionesDigitalesController@nucleoCuatroDetalleTres');
    Route::get('exposiciones-digitales/2/nucleo/4/4', 'ExposicionesDigitalesController@nucleoCuatroDetalleCuatro');
    Route::get('exposiciones-digitales/2/nucleo/4/5', 'ExposicionesDigitalesController@nucleoCuatroDetalleCinco');


    Route::get('administrador/exposiciones', 'AdministradorController@exposiciones');
    Route::get('administrador/exposiciones/nucleos/{id}', 'AdministradorController@nucleos');
    Route::get('administrador/exposiciones/registros/nucleos/galerias/{id}', 'AdministradorController@galerias');


    Route::post('administrador/nucleos/get/{id}', 'AdministradorController@getNucleoExposicionesDigitales');
    Route::post('administrador/add-nucleo', 'AdministradorController@addNucleoExposicionDigital');
    Route::get('administrador/nucleos/agregar', 'AdministradorController@agregarNucleoExposicion');
    Route::get('administrador/nucleo/editar/{id}', 'AdministradorController@editarNucleoExposicion');
    Route::post('administrador/update-nucleo', 'AdministradorController@updateNucleoExposicionDigital');
    Route::post('administrador/drop-nucleo', 'AdministradorController@dropNucleoExposicion');


    Route::post('administrador/galerias/get/{id}', 'AdministradorController@getGalerias');
    Route::post('administrador/add-galeria', 'AdministradorController@addGalerias');
    Route::get('administrador/galerias/agregar', 'AdministradorController@agregarGalerias');
    Route::get('administrador/galerias/editar/{id}', 'AdministradorController@editarGalerias');
    Route::post('administrador/update-galeria', 'AdministradorController@updateGalerias');
    Route::post('administrador/drop-galeria', 'AdministradorController@dropGalerias');


    Route::get('administrador/exposiciones/editar', 'AdministradorController@exposicionEditar');
    Route::get('administrador/exposiciones/nucleo/editar/{id}', 'AdministradorController@nucleoEditar');
    Route::get('administrador/exposiciones/nucleo/galeria/editar/{id}', 'AdministradorController@galeriaEditar');


    Route::post('administrador/exposiciones/get-exposiciones', 'AdministradorController@getExposicionesDigitales');
    Route::post('administrador/add-exposicion', 'AdministradorController@addExposicionDigital');
    Route::get('administrador/exposiciones/agregar', 'AdministradorController@agregarExposicion');
    Route::get('administrador/exposiciones/editar/{id}', 'AdministradorController@editarExposicion');
    Route::post('administrador/update-exposicion', 'AdministradorController@updateExposicionDigital');
    Route::post('administrador/drop-exposicion', 'AdministradorController@dropExposicion');

    Route::get('administrador/exposiciones/creditos/{id}', 'AdministradorController@editarCreditos');
    Route::post('administrador/update-creditos', 'AdministradorController@updateCreditosExposicionDigital');

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

    // Experiences
    Route::get('/experiences', 'ExperiencesController@experiences');
    Route::get('/add-experience', 'ExperiencesController@addExperience');
    Route::get('/experienceDetail', 'ExperiencesController@updateExperience');

    // Collections
    Route::get('/collections', 'CollectionsController@collections');
    Route::get('/add-collection', 'CollectionsController@addcollection');
    Route::get('/collectionDetail', 'CollectionsController@updateCollection');

