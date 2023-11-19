<?php

namespace App\Http\Controllers;

use App\Anios;
use App\Audio;
use App\AudioMedia;
use App\Autor;
use App\AutoresTipos;
use App\Categoria;
use App\Colaboracion;
use App\Evento;
use App\EventoTipo;
use App\ExposicionesDigitales;
use App\ExposicionesDigitalesMedia;
use App\Galeria;
use App\Galerias;
use App\GaleriaMedia;
use App\Media;
use App\Role;
use App\Tag;
use App\Texto;
use App\User;
use App\MosaicoRegistro;
use App\MosaicoMedia;
use App\MosaicoMediaCollection;
use App\Nucleos;
use App\NucleosExposicionesDigitalesMedia;
use App\NucleosMedia;
use App\Playlist;
use App\Referencia;
use App\Timeline;
use App\TimelineMedia;
use App\TimelineLinks;
use Carbon\Carbon;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use shweshi\OpenGraph\OpenGraph;
use Yajra\DataTables\Facades\DataTables;

class AdministradorController extends Controller
{
    public function index(){
        return redirect('administrador/audios');
    }

    public function usuarios(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.configuraciones.usuarios.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function transmisiones(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.transmision.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function editarTransmision(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.transmision.editar');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function notificaciones(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.notificaciones');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function aniversario(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.30anios');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function timeline(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.timeline.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function timelineEditar($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $anios = Anios::get();
                $tipos_eventos = EventoTipo::get();
                $registro = Timeline::where('id', $id)->get();
                $links = Timeline::getLinks($id);
                if($registro->count()){
                    $registro = $registro->first();
                    return View('administrador.timeline.editar', compact('anios', 'tipos_eventos', 'registro', 'links'));
                }
                else
                    return redirect('administrador/timeline');
            }
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getUsuarios(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $usuarios = User::query()->with('roles');
                return DataTables::eloquent($usuarios)
                    ->setTransformer(function($usuario){
                        $roles = $usuario->roles->map(function ($role){ return "<span class=\"badge badge-pill badge-light\">$role->name</span>"; })->toArray();
                        $button = '<div class="btn-group"><a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a><div class="dropdown-menu"><a href="' . url("administrador/usuarios/editar/$usuario->id") . '" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a><div class="dropdown-divider"></div><a href="javascript:void(0)" data-id="' . $usuario->id . '" class="dropdown-item btn-drop-usuario"><i class="icon-delete mr-3"></i> ELIMINAR</a></div></div>';
                        return [
                            'id' => (int)$usuario->id,
                            'nombre' => $usuario->first_name . ' ' . $usuario->last_name,
                            'email' => $usuario->email,
                            'roles' => implode(',', $roles),
                            'last_login' => Carbon::parse($usuario->last_login)->format('H:i d/m/Y'),
                            'updated_at' => Carbon::parse($usuario->updated_at)->format('H:i d/m/Y'),
                            'acciones' => $button
                        ];
                    })->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function agregarUsuario(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $roles = Role::orderBy('name')->get();
                return View('administrador.configuraciones.usuarios.agregar', compact('roles'));
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function addUsuario(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    if(!User::where('email', $request->input('email'))->count()){
                        $credentials = ['email' => $request->input('email'),
                            'password'  => $request->input('password_repeat'),
                            'first_name' => $request->input('nombre')];
                        $usuario = Sentinel::registerAndActivate($credentials);
                        $usuario->first_name = $request->input('nombre');
                        $usuario->email = $request->input('email');
                        $usuario->save();
                        $user = Sentinel::findById($usuario->id);
                        $t_roles = count($request->input('roles'));
                        for ($i = 0; $i < $t_roles; $i++){
                            $role = Sentinel::findRoleBySlug($request->input('roles')[$i]);
                            $role->users()->attach($user);
                        }
                        $response = ['status' => true, 'message' => 'Se ha guardado satisfactoriamente la información del usuario'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, el correo electrónico ingresado ya se encuentra en uso'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarUsuario($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $usuario = User::where('id', (int)$id)->get();
                if($usuario->count()){
                    $usuario = $usuario->first();
                    $roles = Role::orderBy('name')->get();
                    return View('administrador.configuraciones.usuarios.editar', compact('roles', 'usuario'));
                } else
                    return redirect('administrador/usuarios');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateUsuario(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $id = (int)$request->input('id');
                    $email = $request->input('email');
                    $nombre = $request->input('nombre');
                    $password_repeat = $request->input('password_repeat');

                    $usuario = User::where('id', $id)->get();
                    if($usuario->count()){
                        if(!User::where('email', $email)->where('id', '<>', $id)->count()){
                            $usuario = $usuario->first();
                            if(!empty($password_repeat))
                                Sentinel::update(Sentinel::findById($usuario->id), ['email' => $email, 'password' => $password_repeat]);
                            $usuario->first_name = $nombre;
                            $usuario->email = $email;
                            $usuario->save();
                            $roles = Role::All();
                            foreach ($roles as $role){
                                $rol = Sentinel::findRoleByName($role->name);
                                $rol->users()->detach($usuario);
                            }
                            $t_roles = count($_POST['roles']);
                            for ($i = 0; $i < $t_roles; $i++){
                                $role = Sentinel::findRoleBySlug($_POST['roles'][$i]);
                                $role->users()->attach($usuario);
                            }
                            $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente la información del usuario'];
                        } else
                            $response = ['status' => false, 'message' => 'Lo sentimos, el correo electrónico ingresado ya se encuentra en uso'];
                    } else
                        $response = ['status' => false, 'message' => 'No se ha encontrado el usuario seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropUsuario(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $usuario = User::where('id', (int)$request->input('id'))->get();
                    if($usuario->count()){
                        $usuario = $usuario->first();
                        $usuario->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el usuario'];
                    } else
                        $response = ['status' => false, 'message' => 'No se ha encontrado el usuario seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function audios(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.audio.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getAudios(Request $request){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $audios = Audio::query()->with('autores');
                return DataTables::eloquent($audios)
                    ->filterColumn('autores', function ($query, $keyword) {
                        $query->whereHas('autores', function ($q) use($keyword){
                            $q->whereRaw('(nombre LIKE ? OR apellidos LIKE ?)', ["%$keyword%", "%$keyword%"]);
                        });
                    })
                    ->setTransformer(function($audio){
                        $autores = $audio->autores->map(function ($autor){ return "<span class=\"badge badge-pill badge-light\">$autor->fullname</span>"; })->toArray();
                        $button = '<div class="btn-group"><a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a><div class="dropdown-menu"><a href="' . url("administrador/audios/editar/$audio->id") . '" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a><div class="dropdown-divider"></div><a href="javascript:void(0)" data-id="' . $audio->id . '" class="dropdown-item btn-drop-audio"><i class="icon-delete mr-3"></i> ELIMINAR</a></div></div>';
                        return [
                            'id' => (int)$audio->id,
                            'thumbnail' => "<img src=\"$audio->thumbnail\" class=\"img-thumbnail\">",
                            'titulo' => $audio->titulo,
                            'fecha_lanzamiento' => Carbon::parse($audio->fecha_lanzamiento)->format('d/m/Y'),
                            'autores' => implode(' ', $autores),
                            'status' => ($audio->status) ? '<span class="badge badge-success">Publicado</span>' : '<span class="badge badge-dark">No publicado</span>',
                            'updated_at' => Carbon::parse($audio->updated_at)->format('H:i d/m/Y'),
                            'acciones' => $button
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addAudio(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    try {
                        $newAudio = new Audio();
                        $newAudio->titulo = $request->input('titulo');
                        $newAudio->fecha_lanzamiento = Carbon::parse(str_replace('/', '-', $request->input('fecha_lanzamiento')));
                        $newAudio->duracion = $request->input('duracion');
                        $newAudio->tipo_contenido = 2;
                        $newAudio->status = 0;
                        $newAudio->save();
                        $newAudio->categorias()->sync([(int)$request->input('categoria')]);
                        $subcategorias = [];
                        foreach ($request->input('subcategorias') as $subcategoria)
                            $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                        $newAudio->subcategorias()->sync($subcategorias);
                        $response = ['status' => true, 'message' => 'Se ha registrado la información básica del audio, a continuación podrás complementar su información', 'data' => $newAudio->id];
                    } catch (\Exception $exception){
                        $response = ['status' => false, 'message' => $exception->getMessage()];
                    }
                    return json_encode($response);
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarAudio($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')) {
                $audio = Audio::where('id', (int)$id)->get();
                if($audio->count()){
                    $audio = $audio->first();
                    $categoria = ($audio->categorias->count()) ? $audio->categorias->first() : null;
                    $playlists = Playlist::all();
                    return View('administrador.audio.editar', ['audio' => $audio, 'categoria' => $categoria, 'playlists' => $playlists]);
                } else
                    return redirect('administrador/audios');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateAudio(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $audio = Audio::where('id', (int)$request->input('id'))->get();
                    if($audio->count()){
                        $audio = $audio->first();
                        $audio->titulo = $request->input('titulo');
                        $audio->descripcion = $request->input('descripcion');
                        $audio->fecha_lanzamiento = Carbon::parse(str_replace('/', '-', $request->input('fecha_lanzamiento')));
                        $audio->duracion = $request->input('duracion');
                        $audio->cover = $request->input('cover');
                        $audio->thumbnail = $request->input('thumbnail');
                        $audio->playlist_id = (int)$request->input('playlist');
                        $audio->status = $request->input('visibilidad');
                        $audio->save();

                        $tags = [];
                        $etiquetas = explode(',', $request->input('tags'));
                        foreach ($etiquetas as $etiqueta){
                            $newTag = Tag::sync($etiqueta);
                            if($newTag !== false)
                                $tags[] = $newTag;
                        }
                        $audio->etiquetas()->sync($tags);
                        $autores = [];
                        foreach ($request->input('autores') as $autor)
                            $autores[] = (int)$autor;
                        $audio->autores()->sync($autores);
                        $subcategorias = [];
                        foreach ($request->input('subcategorias') as $subcategoria)
                            $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                        $audio->subcategorias()->sync($subcategorias);
                        $audio->indexar();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el audio satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el audio seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateAudioFile(Request $request){
        if(Sentinel::check()) {
            $user = Sentinel::getUser();
            if ($user->hasAnyAccess(['admin'])) {
                try {
                    $audio = Audio::where('id', (int)$request->input('id'))->get();
                    if($audio->count()){
                        $audio = $audio->first();
                        $path = 'uploads/';
                        $fullpath = $path . $request->input('file');
                        if(Storage::disk('public')->exists($fullpath)){
                            $audio->media_collection()->delete();
                            $newAudioFile = new AudioMedia();
                            $newAudioFile->basename = $request->input('file');
                            $newAudioFile->path = $path;
                            $newAudioFile->type = 2;
                            $newAudioFile->size = Storage::disk('public')->size($fullpath);
                            $newAudioFile->mime = Storage::disk('public')->mimeType($fullpath);
                            $newAudioFile->url = url('storage/uploads/' . $request->input('file'));
                            $newAudioFile->status = 1;
                            $newAudioFile->save();
                            $audios[] = ['audio_id' => $audio->id, 'media_id' => $newAudioFile->id];
                            $audio->media_collection()->sync($audios);
                            $response = ['status' => true, 'message' => 'Se ha actualizado el archivo de audio de manera satisfactoria'];
                        } else
                            $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el archivo de audio'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el audio seleccionado'];
                } catch (\Exception $exception){
                    $response = ['status' => false, 'message' => $exception->getMessage()];
                }
            } else
                $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
        } else
            $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        return json_encode($response);
    }

    public function dropAudio(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $audio = Audio::where('id', (int)$request->input('id'))->get();
                    if($audio->count()){
                        $audio = $audio->first();
                        $audio->delete();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el audio satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el audio seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function videos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.videos.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getVideos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $galerias = Galeria::query()->with('autores');
                return DataTables::eloquent($galerias)
                    ->filterColumn('autores', function ($query, $keyword) {
                        $query->whereHas('autores', function ($q) use($keyword){
                            $q->whereRaw('(nombre LIKE ? OR apellidos LIKE ?)', ["%$keyword%", "%$keyword%"]);
                        });
                    })
                    ->setTransformer(function($video){
                        $autores = $video->autores->map(function ($autor){ return "<span class=\"badge badge-pill badge-light\">$autor->fullname</span>"; })->toArray();
                        $button = '<div class="btn-group"><a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a><div class="dropdown-menu"><a href="' . url("administrador/videos/editar/$video->id") . '" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a><div class="dropdown-divider"></div><a href="javascript:void(0)" data-id="' . $video->id . '" class="dropdown-item btn-drop-video"><i class="icon-delete mr-3"></i> ELIMINAR</a></div></div>';
                        return [
                            'id' => (int)$video->id,
                            'thumbnail' => "<img src=\"$video->thumbnail\" class=\"img-thumbnail\">",
                            'titulo' => $video->titulo,
                            'fecha_lanzamiento' => Carbon::parse($video->fecha_lanzamiento)->format('d/m/Y'),
                            'autores' => implode(' ', $autores),
                            'status' => ($video->status) ? '<span class="badge badge-success">Publicado</span>' : '<span class="badge badge-dark">No publicado</span>',
                            'updated_at' => Carbon::parse($video->updated_at)->format('H:i d/m/Y'),
                            'acciones' => $button
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addVideo(Request $request){
        if(Sentinel::check()) {
            $user = Sentinel::getUser();
            if ($user->hasAnyAccess(['admin'])) {
                try {
                    $newVideo = new Galeria();
                    $newVideo->titulo = $request->input('titulo');
                    $newVideo->fecha_lanzamiento = Carbon::parse(str_replace('/', '-', $request->input('fecha_lanzamiento')));
                    $newVideo->duracion = $request->input('duracion');
                    $newVideo->tipo_contenido = 3;
                    $newVideo->status = 0;
                    $newVideo->save();
                    $newVideo->categorias()->sync([(int)$request->input('categoria')]);
                    $subcategorias = [];
                    foreach ($request->input('subcategorias') as $subcategoria)
                        $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                    $newVideo->subcategorias()->sync($subcategorias);
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica del video, a continuación podrás complementar su información', 'data' => $newVideo->id];
                } catch (\Exception $exception){
                    $response = ['status' => false, 'message' => $exception->getMessage()];
                }
            } else
                $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
        } else
            $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        return json_encode($response);
    }

    public function editarVideo($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')) {
                $video = Galeria::where('id', (int)$id)->get();
                if($video->count()){
                    $video = $video->first();
                    $categoria = ($video->categorias->count()) ? $video->categorias->first() : null;
                    $evento = ($video->eventos->count()) ? $video->eventos->first() : null;
                     $playlists = Playlist::all();
                    return View('administrador.videos.editar', ['video' => $video, 'categoria' => $categoria, 'evento' => $evento, 'playlists' => $playlists]);
                } else
                    return redirect('administrador/videos');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateVideo(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $video = Galeria::where('id', (int)$request->input('id'))->get();
                    if($video->count()){
                        $video = $video->first();
                        $video->titulo = $request->input('titulo');
                        $video->fecha_lanzamiento = Carbon::parse(str_replace('/', '-', $request->input('fecha_lanzamiento')));
                        $video->duracion = $request->input('duracion');
                        $video->cover = $request->input('cover');
                        $video->thumbnail = $request->input('thumbnail');
                        $video->descripcion = $request->input('descripcion');
                        $video->status = (int)$request->input('visibilidad');
                        $video->playlist_id = (int)$request->input('playlist');
                        $video->save();
                        $tags = [];
                        $etiquetas = explode(',', $request->input('tags'));
                        foreach ($etiquetas as $etiqueta)
                            $tags[] = Tag::sync($etiqueta);
                        $video->etiquetas()->sync($tags);
                        $autores = [];
                        foreach ($request->input('autores') as $autor)
                            $autores[] = (int)$autor;
                        $video->autores()->sync($autores);
                        $subcategorias = [];
                        foreach ($request->input('subcategorias') as $subcategoria)
                            $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                        $video->subcategorias()->sync($subcategorias);
                        $eventos = [];
                        $eventos[0] = ['evento_id' => (int)$request->input('evento_id')];
                        $video->eventos()->sync($eventos);

                        $video->indexar();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el video satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el video seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateVideoFile(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $video = Galeria::where('id', (int)$request->input('id'))->get();
                    if($video->count()){
                        $video = $video->first();
                        $path = 'uploads/';
                        $fullpath = $path . $request->input('file');
                        if(Storage::disk('public')->exists($fullpath)){
                            $video->media_collection()->delete();
                            $newVideoFile = new GaleriaMedia();
                            $newVideoFile->basename = $request->input('file');
                            $newVideoFile->path = $path;
                            $newVideoFile->type = 2;
                            $newVideoFile->size = Storage::disk('public')->size($fullpath);
                            $newVideoFile->mime = Storage::disk('public')->mimeType($fullpath);
                            $newVideoFile->url = url('storage/uploads/' . $request->input('file'));
                            $newVideoFile->status = 1;
                            $newVideoFile->save();
                            $videos[] = ['galeria_id' => $video->id, 'media_id' => $newVideoFile->id];
                            $video->media_collection()->sync($videos);
                            $response = ['status' => true, 'message' => 'Se ha actualizado el archivo de video de manera satisfactoria'];
                        } else
                            $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el archivo de video'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el video seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateVideoLink(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $video = Galeria::where('id', (int)$request->input('id'))->get();
                    if($video->count()){
                        $video = $video->first();
                        $video->media_collection()->delete();
                        $newVideoFile = new GaleriaMedia();
                        $newVideoFile->basename = $request->input('code');
                        $newVideoFile->path =  $request->input('enlace');
                        $newVideoFile->url = $request->input('enlace');
                        $newVideoFile->size = 0;
                        $newVideoFile->type = 2;
                        $newVideoFile->status = 1;
                        $newVideoFile->external = 1;
                        $newVideoFile->save();
                        $videos[] = ['galeria_id' => $video->id, 'media_id' => $newVideoFile->id];
                        $video->media_collection()->sync($videos);
                        $response = ['status' => true, 'message' => 'Se ha actualizado el archivo de video de manera satisfactoria'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el video seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropVideo(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $video = Galeria::where('id', (int)$request->input('id'))->get();
                    if($video->count()){
                        $video = $video->first();
                        $video->delete();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el video satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el audio seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function textos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.texto.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getTextos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $textos = Texto::query()->with('autores');
                return DataTables::eloquent($textos)
                    ->filterColumn('autores', function ($query, $keyword) {
                        $query->whereHas('autores', function ($q) use($keyword){
                            $q->whereRaw('(nombre LIKE ? OR apellidos LIKE ?)', ["%$keyword%", "%$keyword%"]);
                        });
                    })
                    ->setTransformer(function($texto){
                        $autores = $texto->autores->map(function ($autor){ return "<span class=\"badge badge-pill badge-light\">$autor->fullname</span>"; })->toArray();
                        $button = '<div class="btn-group"><a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a><div class="dropdown-menu"><a href="' . url("administrador/textos/editar/$texto->id") . '" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a><div class="dropdown-divider"></div><a href="javascript:void(0)" data-id="' . $texto->id . '" class="dropdown-item btn-drop-texto"><i class="icon-delete mr-3"></i> ELIMINAR</a></div></div>';
                        return [
                            'id' => (int)$texto->id,
                            'thumbnail' => "<img src=\"$texto->thumbnail\" class=\"img-thumbnail\">",
                            'titulo' => $texto->titulo,
                            'autores' => implode(' ', $autores),
                            'status' => ($texto->status) ? '<span class="badge badge-success">Publicado</span>' : '<span class="badge badge-dark">No publicado</span>',
                            'updated_at' => Carbon::parse($texto->updated_at)->format('H:i d/m/Y'),
                            'acciones' => $button
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addTexto(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newTexto = new Texto();
                    $newTexto->titulo = $request->input('titulo');
                    $newTexto->status = 0;
                    $newTexto->save();
                    $newTexto->categorias()->sync([(int)$request->input('categoria')]);
                    $subcategorias = [];
                    foreach ($request->input('subcategorias') as $subcategoria)
                        $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                    $newTexto->subcategorias()->sync($subcategorias);
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica del texto, a continuación podrás complementar su información', 'data' => $newTexto->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarTexto($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $texto = Texto::where('id', (int)$id)->get();
                if($texto->count()){
                    $texto = $texto->first();
                    $categoria = ($texto->categorias->count()) ? $texto->categorias->first() : null;
                    $playlists = Playlist::all();
                    return View('administrador.texto.editar', compact('texto', 'categoria', 'playlists'));
                } else
                    return redirect('administrador/textos');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateTexto(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $texto = Texto::where('id', (int)$request->input('id'))->get();
                    if($texto->count()){
                        $texto = $texto->first();
                        $texto->cover = $request->input('cover');
                        $texto->thumbnail = $request->input('thumbnail');
                        //$texto->contenido = $request->input('contenido');
                        $texto->playlist_id = $request->input('playlist');
                        $texto->contenido_markup = $request->input('contenido_markup');
                        $audio->status = $request->input('visibilidad');
                        $texto->save();
                        $tags = [];
                        $etiquetas = explode(',', $request->input('tags'));
                        foreach ($etiquetas as $etiqueta)
                            $tags[] = Tag::sync($etiqueta);
                        $texto->etiquetas()->sync($tags);
                        $autores = [];
                        foreach ($request->input('autores') as $autor)
                            $autores[] = (int)$autor;
                        $texto->autores()->sync($autores);
                        $subcategorias = [];
                        foreach ($request->input('subcategorias') as $subcategoria)
                            $subcategorias[$subcategoria] = ['categoria_id' => (int)$request->input('categoria')];
                        $texto->subcategorias()->sync($subcategorias);
                        $texto->indexar();
                        $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente el texto'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el texto seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropTexto(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $texto = Texto::where('id', (int)$request->input('id'))->get();
                    if($texto->count()){
                        $texto = $texto->first();
                        $texto->delete();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el texto satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el texto seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function getMosaicos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $mosaicos = MosaicoRegistro::query()->with('media_collection');
                return DataTables::eloquent($mosaicos)
                    ->setTransformer(function($mosaico){
                        $button = '';
                        $mosaico_completo = $mosaico->media_collection->first();
                        $mosaico_cuadrado = $mosaico->media_collection->last();
                        return [
                            'id' => (int)$mosaico->id,
                            'thumbnail' => '<img src="'.$mosaico_cuadrado["url"].'">',
                            'nombre' => $mosaico->nombre_visitante,
                            'detalle' => $mosaico->detalle_visita,
                            'status' => ($mosaico->status) ? '<span class="badge badge-success">Aprobado</span>' : '<span class="badge badge-dark">No Aprobado</span>',
                            'creado' => Carbon::parse($mosaico->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions feed-modal bbtn-xs" data-toggle="modal" data-target="#fotoModal" data-id="'.$mosaico->id.'" data-nombre-visitante="'.$mosaico->nombre_visitante.'" data-edad-visitante="'.$mosaico->edad_visitante.'" data-ciudad-residencia="'.$mosaico->ciudad_residencia.'"  data-fecha-visita="'.Carbon::parse($mosaico->fecha_visita)->format('d/m/Y').'" data-nombre-visitante="'.$mosaico->nombre_visitante.'" data-nombre-visitante="'.$mosaico->nombre_visitante.'" data-detalle-visita="'.$mosaico->detalle_visita.'" data-detalle-volviste="'.$mosaico->detalle_volviste.'" data-evento-visita="'.$mosaico->evento_visita.'" data-motivo-visita="'.$mosaico->motivo_visita.'" data-nombre-fotografo="'.$mosaico->nombre_fotografo.'"
                            data-volverias="'.$mosaico->volverias.'"
                            data-recomendarias="'.$mosaico->recomendarias.'"
                            data-mosaico-completo="'.$mosaico_completo["url"].'"><i class="icon-folder-open s-18"></i></a>',
                            'eliminar' => '<a href="javascript:void(0)" class="btn btn-ma-actions bbtn-xs btn-drop-mosaico btn-ma-delete" data-id="'.$mosaico->id.'"><i class="icon-trash s-18"></i></a>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function updateMosaico(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $mosaico = MosaicoRegistro::where('id', (int)$request->input('id'))->get();
                    if($mosaico->count()){
                        $mosaico = $mosaico->first();
                        $mosaico->status = (int)$request->input('status');
                        $mosaico->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente el estado del mosaico'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el mosaico seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropMosaico(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $mosaico = MosaicoRegistro::where('id', (int)$request->input('id'))->get();
                    if($mosaico->count()){
                        $mosaico = $mosaico->first();
                        $mosaico->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el mosaico satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el mosaico seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }


    public function uploadFile(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('upload_file')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . uniqid() . ".$extension";
                    $path = 'storage/uploads/';

                    switch ($extension) {
                        case 'jpg':
                        case 'png':
                            $manager = new ImageManager(['driver' => 'imagick']);
                            $uploadPath = $path . $fileNameToStore;
                            $manager->make(file_get_contents($request->file('upload_file')))->save(public_path($uploadPath));
                            break;

                        default:
                            $request->file('upload_file')->storeAs('uploads', $fileNameToStore);
                            $uploadPath = $path . $fileNameToStore;
                            break;
                    }

                    $newMedia = new Media();
                    $newMedia->object_type = $request->input('object_type');
                    $newMedia->object_id = $request->input('object_id');
                    $newMedia->basename = $fileNameToStore;
                    $newMedia->path = $path;
                    $newMedia->media_type = 2;
                    $newMedia->url = url(Storage::url($uploadPath));
                    $newMedia->size = Storage::disk('public')->size('uploads/' . $fileNameToStore);
                    $newMedia->mime = Storage::disk('public')->mimeType('uploads/' . $fileNameToStore);
                    $newMedia->status = 1;
                    $newMedia->save();

                    $data = [
                        'basename' => $newMedia->basename,
                        'url' => $newMedia->url,
                        'size' => $newMedia->size,
                        'mime_type' => $newMedia->mime,
                        'id' => $newMedia->id
                    ];

                    $response = ($request->input('uploader') === 'editorjs') ? ['success' => 1, 'file' => $data] : ['status' => true, 'data' => $data];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function uploadMosaico(Request $request){

        $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('upload_file')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . uniqid() . ".$extension";
        $path = 'storage/uploads/';

        switch ($extension) {
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'JPG':
            case 'JPEG':
            case 'PNG':
                $manager = new ImageManager(['driver' => 'imagick']);
                $uploadPath = $path . $fileNameToStore;
                $manager->make(file_get_contents($request->file('upload_file')))->save(public_path($uploadPath));
            break;

            default:
                $response = ['status' => false, 'message' => 'Lo sentimos, el formato no es válido'];
            break;
        }

        $newMedia = new MosaicoMedia();
        $newMedia->basename = $fileNameToStore;
        $newMedia->path = $path;
        $newMedia->type = 1;
        $newMedia->url = url(Storage::url($uploadPath));
        $newMedia->size = Storage::disk('public')->size('uploads/' . $fileNameToStore);
        $newMedia->mime = Storage::disk('public')->mimeType('uploads/' . $fileNameToStore);
        $newMedia->status = 0;
        $newMedia->save();

        $data = [
            'basename' => $newMedia->basename,
            'url' => $newMedia->url,
            'size' => $newMedia->size,
            'mime_type' => $newMedia->mime,
            'id' => $newMedia->id
        ];

        $response = ['status' => true, 'data' => $data];
        return json_encode($response);
    }

    public function addAutor(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newAutor = new Autor();
                    $newAutor->nombre = $request->input('nombre');
                    $newAutor->apellidos = $request->input('apellidos');
                    $newAutor->status = 1;
                    $newAutor->save();
                    $response = ['status' => true, 'message' => 'Se ha creado el autor de manera satisfactoria'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function getOptions($modulo, Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $data = [];

                    switch ($modulo){
                        case 'autores':
                            $autores = Autor::orderBy('nombre', 'ASC')->where('status', 1)->get();
                            foreach ($autores as $autor)
                                $data[] = ['id' => $autor->id, 'nombre' => $autor->fullname];
                            break;

                        case 'categorias':
                            $categorias = Categoria::where('status', 1)->orderBy('nombre')->get();
                            foreach ($categorias as $categoria)
                                $data[] = ['id' => $categoria->id, 'nombre' => $categoria->nombre];
                            break;

                        case 'tags':
                            $query = (isset($_GET['query'])) ? $_GET['query'] : null;
                            $etiquetas = Tag::where('status', 1);
                            if(!empty($query))
                                $etiquetas->where('nombre', 'LIKE', "%$query%");
                            $etiquetas = $etiquetas->orderBy('nombre', 'ASC')->get();
                            foreach ($etiquetas as $etiqueta)
                                $data[] = ['id' => $etiqueta->id, 'nombre' => $etiqueta->nombre];
                            break;

                        case 'subcategorias':
                            $id = $request->input('id');
                            $categoria = Categoria::where('id', (int)$id)->get();
                            if($categoria->count()){
                                $categoria = $categoria->first();
                                foreach ($categoria->subcategorias as $subcategoria)
                                    $data[] = ['id' => $subcategoria->id, 'nombre' => $subcategoria->nombre];
                            }
                            break;

                        case 'colaboraciones':
                            $colaboraciones = Colaboracion::orderBy('titulo', 'ASC')->get();
                            foreach ($colaboraciones as $colaboracion)
                                $data[] = ['id' => $colaboracion->id, 'nombre' => $colaboracion->titulo];
                            break;
                    }

                    $response = [
                        'status' => (count($data)) ? true : false,
                        'data' => $data
                    ];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function fetchMetadata(){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $url = (isset($_GET['url'])) ? $_GET['url'] : null;
                    if(!empty($url)){
                        $reader = new OpenGraph();
                        $data = $reader->fetch($url);
                        $response = [
                            'success' => 1,
                            'meta' => [
                                'title' => $data['title'],
                                'description' => $data['description'],
                                'image' => ['url' => $data['image']]
                            ]
                        ];
                    } else
                        $response = ['success' => 0];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['success' => 0, 'meta' => [], 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function getRegistrosTimeline(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $timeline = Timeline::query()->orderBy('id','DESC')->with('autores');;
                return DataTables::eloquent($timeline)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'cover' => "<img src=\"$elemento->cover\" class=\"img-cover\">",
                            'titulo' => $elemento->titulo,
                            'status' => ($elemento->status) ? '<span class="badge badge-success">Visible</span>' : '<span class="badge badge-dark">No visible</span>',
                            'fecha'=> Carbon::parse($elemento->fecha_evento)->format('d/m/Y'),
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a><div class="dropdown-menu"><a href="'. url("administrador/timeline/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a> <div class="dropdown-divider"></div><a href="'. url("administrador/timeline/galeria/$elemento->id") .'" class="dropdown-item"><i class="icon-book mr-3"></i> GALERIA</a><div class="dropdown-divider"></div><a href="javascript:void(0)" data-id="'.$elemento->id.'" class="dropdown-item btn-drop-registro"><i class="icon-delete mr-3"></i> ELIMINAR</a></div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addRegistroTimeline(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newTimeline = new Timeline();
                    $newTimeline->titulo = $request->input('titulo');
                    $newTimeline->fecha_evento = Carbon::parse(str_replace('/', '-', $request->input('fecha_evento')));
                    $newTimeline->anio_id = $request->input('anio_id');
                    $newTimeline->tipo_evento_id = $request->input('tipo_evento_id');
                    $newTimeline->status = 0;
                    $newTimeline->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica del registro, a continuación podrás complementar su información', 'data' => $newTimeline->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateRegistroTimeline(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Timeline::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->titulo = $request->input('titulo');
                        $registro->fecha_evento = Carbon::parse(str_replace('/', '-', $request->input('fecha_evento')));
                        $registro->contenido = $request->input('contenido_markup');
                        $registro->anio_id = $request->input('anio_id');
                        $registro->status = 1;//$request->input('visibilidad');
                        $registro->cover = $request->input('cover');
                        $registro->thumbnail = $request->input('thumbnail');
                        $registro->slug =  Str::slug($request->input('titulo'));
                        $registro->tipo_evento_id = $request->input('referencia');
                        $registro->save();

                       if($request->input('links')){
                            $links = $request->input('links');
                            foreach ($links as $link){
                                $newLink = new TimelineLinks();
                                $newLink->timeline_id = (int)$request->input('id');
                                $newLink->url= $link;
                                $newLink->save();
                            }
                        }

                        if($request->input('tags')){
                            $tags = [];
                            $etiquetas = explode(',', $request->input('tags'));
                            foreach ($etiquetas as $etiqueta){
                                $newTag = Tag::sync($etiqueta);
                                if($newTag !== false)
                                    $tags[] = $newTag;
                            }
                            $registro->etiquetas()->sync($tags);
                        }
                        if($request->input('autores') ){
                            $autores = [];
                            foreach ($request->input('autores') as $autor)
                                $autores[] = (int)$autor;
                            $registro->autores()->sync($autores);
                        }

                        if($request->input('colaboraciones') ){
                            $colaboraciones = [];
                            foreach ($request->input('colaboraciones') as $colaboracion)
                                $colaboraciones[] = (int)$colaboracion;
                            $registro->colaboraciones()->sync($colaboraciones);
                        }

                        $registro->indexar();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropRegistroTimeline(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $timeline = Timeline::where('id', (int)$request->input('id'))->get();
                    if($timeline->count()){
                        $timeline = $timeline->first();
                        $timeline->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el registro del timeline satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function ponentes(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.catalogos.ponentes.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getRegistrosPonentes(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $ponentes = Autor::query()->orderBy('id','DESC');
                return DataTables::eloquent($ponentes)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'nombre' => $elemento->nombre.' '.$elemento->apellidos,
                            'profesion' => AutoresTipos::getNombre($elemento->tipo_id),
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a> <div class="dropdown-menu"><a href="'. url("administrador/ponentes/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a> <div class="dropdown-divider"></div> <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-ponente"><i class="icon-delete mr-3"></i> ELIMINAR</a> </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function agregarPonente(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $roles = Role::orderBy('name')->get();
                return View('administrador.catalogos.ponentes.agregar');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function addRegistroPonente(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newPonente = new Autor();
                    $newPonente->nombre = $request->input('nombre');
                    $newPonente->apellidos = $request->input('apellidos');
                    $newPonente->tipo_id = $request->input('tipo_id');
                    $newPonente->genero = $request->input('genero');
                    $newPonente->status = 1;
                    $newPonente->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado al ponente', 'data' => $newPonente->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarPonente($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $ponente = Autor::where('id', (int)$id)->get();
                if($ponente->count()){
                    $ponente = $ponente->first();
                    $tipos = AutoresTipos::where('status', 1)->get();
                    return View('administrador.catalogos.ponentes.editar', compact('ponente', 'tipos'));
                } else
                    return redirect('administrador/ponentes');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateRegistroPonente(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Autor::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->nombre = $request->input('nombre');
                        $registro->apellidos = $request->input('apellidos');
                        $registro->tipo_id = $request->input('tipo_id');
                        $registro->genero = $request->input('genero');
                        $registro->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

     public function dropRegistroPonente(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $ponente = Autor::where('id', (int)$request->input('id'))->get();
                    if($ponente->count()){
                        $ponente = $ponente->first();
                        $ponente->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el ponente satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }


    public function eventos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $roles = Role::orderBy('name')->get();
                return View('administrador.catalogos.eventos.listado');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getRegistrosEventos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $tiposEventos = EventoTipo::query()->orderBy('id','DESC');
                return DataTables::eloquent($tiposEventos)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'nombre' => $elemento->nombre,
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a> <div class="dropdown-menu"><a href="javascript:void(0)" class="dropdown-item btn-editar-tipo-evento" data-toggle="modal" data-target="#modal-actualizar-tipo-evento" data-nombre="'.$elemento->nombre.'" data-id="'.$elemento->id.'"><i class="icon-pencil mr-3" ></i> EDITAR</a> <div class="dropdown-divider"></div> <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-tipo-evento"><i class="icon-delete mr-3"></i> ELIMINAR</a> </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addRegistroEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newTipoEvento = new EventoTipo();
                    $newTipoEvento->nombre = $request->input('nombre');
                    $newTipoEvento->status = 1;
                    $newTipoEvento->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado el tipo de Evento', 'data' => $newTipoEvento->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateRegistroEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = EventoTipo::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->nombre = $request->input('nombre');
                        $registro->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropRegistroEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = EventoTipo::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el tipo de evento satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function colaboraciones(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $roles = Role::orderBy('name')->get();
                return View('administrador.catalogos.colaboraciones.listado');
            } else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getRegistrosColaboraciones(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $colaboraciones = Colaboracion::query()->orderBy('id','DESC');
                return DataTables::eloquent($colaboraciones)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'titulo' => $elemento->titulo,
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a> <div class="dropdown-menu"> <a href="javascript:void(0)" class="dropdown-item btn-editar-colaboracion" data-toggle="modal" data-target="#modal-actualizar-colaboracion" data-nombre="'.$elemento->titulo.'" data-id="'.$elemento->id.'"><i class="icon-pencil mr-3"></i> EDITAR</a> <div class="dropdown-divider"></div> <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-colaboracion"><i class="icon-delete mr-3"></i> ELIMINAR</a> </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addRegistroColaboracion(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newColaboracion = new Colaboracion();
                    $newColaboracion->titulo = $request->input('titulo');
                    $newColaboracion->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la colaboración', 'data' => $newColaboracion->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateRegistroColaboracion(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Colaboracion::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->titulo = $request->input('titulo');
                        $registro->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

     public function dropRegistroColaboracion(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Colaboracion::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado la colaboración satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropLink(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = TimelineLinks::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el link satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }
        public function sliders(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.sliders.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function agregarSlider(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.sliders.agregar');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function editarSlider(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.sliders.editar');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function ajustesInicio(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.home.ajustes');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function playlists(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.playlists.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getRegistrosPlaylists(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $playlist = Playlist::query()->orderBy('id','DESC');
                return DataTables::eloquent($playlist)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'thumbnail' => "<img src=\"$elemento->thumbnail\" class=\"img-cover\">",
                            'titulo' => $elemento->titulo,
                            'descripcion_corta' => $elemento->descripcion_corta,
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' =>'<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a> <div class="dropdown-menu"> <a href="'. url("administrador/playlist/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a> <div class="dropdown-divider"></div> <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-playlist"><i class="icon-delete mr-3"></i> ELIMINAR</a> </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function agregarPlaylist(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.playlists.agregar');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function addRegistroPlaylist(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $newPlaylist = new Playlist();
                    $newPlaylist->titulo = $request->input('titulo');
                    $newPlaylist->subtitulo = $request->input('subtitulo');
                    $newPlaylist->descripcion_corta = $request->input('descripcion_corta');
                    $newPlaylist->descripcion_larga = $request->input('descripcion_larga');
                    $newPlaylist->cover = $request->input('cover');
                    $newPlaylist->thumbnail = $request->input('thumbnail');
                    $newPlaylist->status = 1;
                    $newPlaylist->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la playlist', 'data' => $newPlaylist->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarPlaylist($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $playlist = Playlist::where('id', (int)$id)->get();
                if($playlist->count()){
                    $playlist = $playlist->first();
                    return View('administrador.playlists.editar', compact('playlist'));
                }else
                return redirect('administrador/playlists');
            }
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateRegistroPlaylist(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Playlist::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->slug =  Str::slug($request->input('titulo'));
                        $registro->titulo = $request->input('titulo');
                        $registro->subtitulo = $request->input('subtitulo');
                        $registro->descripcion_corta = $request->input('descripcion_corta');
                        $registro->descripcion_larga = $request->input('descripcion_larga');
                        $registro->cover = $request->input('cover');
                        $registro->thumbnail = $request->input('thumbnail');
                        $registro->orden = 0;
                        $registro->status = $request->input('status');
                        $registro->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropRegistroPlaylist(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Playlist::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado la playlist satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function gestionEventos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                return View('administrador.eventos.listado');
            } else
                return redirect('');
        } else
            return redirect('login');
    }
    public function getEventos(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $tiposEventos = Evento::query()->orderBy('id','DESC');
                return DataTables::eloquent($tiposEventos)
                    ->setTransformer(function($elemento){
                        return [
                            'id' => (int)$elemento->id,
                            'nombre' => $elemento->nombre,
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' => '<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a> <div class="dropdown-menu"><a href="javascript:void(0)" class="dropdown-item btn-editar-evento" data-toggle="modal" data-target="#modal-actualizar-evento" data-nombre="'.$elemento->nombre.'" data-id="'.$elemento->id.'"><i class="icon-pencil mr-3" ></i> EDITAR</a> <div class="dropdown-divider"></div> <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-evento"><i class="icon-delete mr-3"></i> ELIMINAR</a> </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function addEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $evento = new Evento();
                    $evento->nombre = $request->input('nombre');
                    $evento->status = 1;
                    $evento->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado el Evento', 'data' => $evento->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Evento::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->nombre = $request->input('nombre');
                        $registro->save();
                        $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropEvento(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Evento::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el evento satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function tematicas(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.tematicas.listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }



    public function timelineDetalleGaleria($id) {
        if (Sentinel::check()){
            $galeria = [];
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $evento = Timeline::where('id', $id)->get();
                if ($evento->count()){
                    $evento = $evento->first();
                    $galeria = TimelineMedia::where('timeline_id', $id)->get();
                }
                return View('administrador.timeline.galeria', compact('evento', 'galeria'));
            }
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateGaleria(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Timeline::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->contenido_galeria = $request->input('contenido_markup');
                        $registro->save();
                       $response = ['status' => true, 'message' => 'Se ha actualizado el registro satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function uploadFileGaleria(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('upload_file')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . uniqid() . ".$extension";
                    $path = 'storage/uploads/';

                    switch ($extension) {
                        case 'jpg':
                        case 'png':
                            $manager = new ImageManager(['driver' => 'imagick']);
                            $uploadPath = $path . $fileNameToStore;
                            $manager->make(file_get_contents($request->file('upload_file')))->save(public_path($uploadPath));
                            break;

                        default:
                            $request->file('upload_file')->storeAs('uploads', $fileNameToStore);
                            $uploadPath = $path . $fileNameToStore;
                            break;
                    }

                    $newMedia = new TimelineMedia();
                    $newMedia->timeline_id = $request->input('object_id');
                    $newMedia->basename = $fileNameToStore;
                    $newMedia->path = $path;
                    $newMedia->url = url(Storage::url($uploadPath));
                    $newMedia->size = Storage::disk('public')->size('uploads/' . $fileNameToStore);
                    $newMedia->mime = Storage::disk('public')->mimeType('uploads/' . $fileNameToStore);
                    $newMedia->status = 1;
                    $newMedia->save();

                    $data = [
                        'basename' => $newMedia->basename,
                        'url' => $newMedia->url,
                        'size' => $newMedia->size,
                        'mime_type' => $newMedia->mime,
                        'id' => $newMedia->id,
                        'id_galeria' => $newMedia->timeline_id
                    ];

                    $response = ($request->input('uploader') === 'editorjs') ? ['success' => 1, 'file' => $data] : ['status' => true, 'data' => $data];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function uploadFileExposicionGaleria(Request $request){
        try {
            
                //if ($user->hasAnyAccess(['admin'])) {
                    $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('upload_file')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . uniqid() . ".$extension";
                    $path = 'storage/uploads/';

                    switch ($extension) {
                        case 'jpg':
                        case 'png':
                            $manager = new ImageManager(['driver' => 'imagick']);
                            $uploadPath = $path . $fileNameToStore;
                            $manager->make(file_get_contents($request->file('upload_file')))->save(public_path($uploadPath));
                            break;

                        default:
                            $request->file('upload_file')->storeAs('uploads', $fileNameToStore);
                            $uploadPath = $path . $fileNameToStore;
                            break;
                    }

                    $newMedia = new ExposicionesDigitalesMedia();
                    $newMedia->exposicion_digital_id = $request->input('object_id');
                    $newMedia->basename = $fileNameToStore;
                    $newMedia->path = $path;
                    $newMedia->url = url(Storage::url($uploadPath));
                    $newMedia->size = Storage::disk('public')->size('uploads/' . $fileNameToStore);
                    $newMedia->mime = Storage::disk('public')->mimeType('uploads/' . $fileNameToStore);
                    $newMedia->status = 1;
                    $newMedia->save();

                    $data = [
                        'basename' => $newMedia->basename,
                        'url' => $newMedia->url,
                        'size' => $newMedia->size,
                        'mime_type' => $newMedia->mime,
                        'id' => $newMedia->id,
                        'id_galeria' => $newMedia->timeline_id
                    ];

                    $response = ($request->input('uploader') === 'editorjs') ? ['success' => 1, 'file' => $data] : ['status' => true, 'data' => $data];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropTimelineMedia(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = TimelineMedia::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el link satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function exposiciones(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.exposiciones.exposiciones-listado');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function nucleos($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                $exposicion = ExposicionesDigitales::where('id', $id)->get();
                if($exposicion->count()){
                    $exposicion = $exposicion->first();
                   return View('administrador.exposiciones.nucleos-listado', compact('id', 'exposicion')); 
                }
                
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function galerias($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $nucleo_id = $id;
                
                $nucleo = Nucleos::where('id', (int)$id)->get()->first();
                $exposicion = ExposicionesDigitales::where('id', $nucleo->id_exposicion)->get()->first();
                return View('administrador.exposiciones.galerias-listado', compact('nucleo_id', 'nucleo', 'exposicion'));
            }
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function exposicionEditar(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.exposiciones.exposicion-editar');
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function nucleoEditar(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin'))
                return View('administrador.exposiciones.nucleo-editar', compact('galeria'));
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function galeriaEditar($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $exposicionDigital = Galerias::where('id', (int)$id)->get(); 
                if($exposicionDigital->count()){
                    $exposicionDigital = $exposicionDigital->first();
                    return View('administrador.exposiciones.galeria-editar', compact('exposicionDigital'));
                }
            }
            else
                return redirect('');
        } else
            return redirect('login');
    }

    public function getExposicionesDigitales(){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){  
                $exposicion = ExposicionesDigitales::query()->orderBy('id','DESC');
                    return DataTables::eloquent($exposicion)
                    ->setTransformer(function($elemento){
                        $claseVisibilidad = ($elemento->visibilidad) ? 'badge-success' : 'badge-secondary';
                        $labelVisibilidad = ($elemento->visibilidad) ? 'Visible' : 'No visible';
                        return [
                            'id' => (int)$elemento->id,
                            'thumbnail' => "<img src=\"$elemento->thumbnail\" class=\"img-cover\">",
                            'titulo' => $elemento->titulo,
                            'visibilidad' => '<td><span class="badge '.$claseVisibilidad.'">'.$labelVisibilidad.'</span></td>',
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' =>'<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="'. url("administrador/exposiciones/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="'. url('administrador/exposiciones/nucleos/'.$elemento->id.'') .'"  class="dropdown-item"><i class="icon-book mr-3"></i> NUCLEOS</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-exposicion"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function editarExposicion($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            $exposicionDigital = ExposicionesDigitales::where('id', (int)$id)->get();
                if($exposicionDigital->count()){
                    $exposicionDigital = $exposicionDigital->first();
                    $galeria = ExposicionesDigitalesMedia::where('exposicion_digital_id', (int)$id)->get();
                    return View('administrador.exposiciones.exposicion-editar', compact('exposicionDigital', 'galeria'));
                }else
                return redirect('administrador/exposiciones');
        } else
            return redirect('login');
    }

    public function addExposicionDigital(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = new  ExposicionesDigitales();
                        $registro->titulo = $request->input('titulo');
                        $registro->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica de la Exposición Digital, a continuación podrás complementar su información', 'data' => $registro->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateExposicionDigital(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = ExposicionesDigitales::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->titulo = $request->input('titulo');
                        $registro->descripcion = $request->input('descripcion');
                        $registro->cover = $request->input('cover');
                        $registro->thumbnail = $request->input('thumbnail');
                        $registro->visibilidad = $request->input('visibilidad');
                        $registro->save();
                        
                        $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente la exposición digital'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado la exposición digital seleccionada'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropExposicion(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = ExposicionesDigitales::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado la exposicion digital satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editarCreditos($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){
                $exposicionDigital = ExposicionesDigitales::where('id', (int)$id)->get();
                if($exposicionDigital->count()){
                    $exposicionDigital = $exposicionDigital->first();
                    return View('administrador.exposiciones.creditos-editar', compact('exposicionDigital'));
                }
                else
                        return redirect('administrador/exposiciones');
            }else
                return redirect('');
        } else
            return redirect('login');
    }

    public function updateCreditosExposicionDigital(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = ExposicionesDigitales::where('id', $_POST['id'])->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->creditos = $_POST['creditos'];
                        $registro->save();
                        
                        $response = ['status' => true, 'message' => 'Se han actualizado satisfactoriamente los créditos de la exposición digital'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado la exposición digital seleccionada'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    // Nucleos

    public function getNucleoExposicionesDigitales($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){  
                $exposicion = Nucleos::query()->where('id_exposicion',$id)->orderBy('id','DESC');
                    return DataTables::eloquent($exposicion)
                    ->setTransformer(function($elemento){
                        $claseVisibilidad = ($elemento->visibilidad) ? 'badge-success' : 'badge-secondary';
                        $labelVisibilidad = ($elemento->visibilidad) ? 'Visible' : 'No visible';
                        return [
                            'id' => (int)$elemento->id,
                            'thumbnail' => "<img src=\"$elemento->thumbnail\" class=\"img-cover\">",
                            'titulo' => $elemento->titulo,
                            'visibilidad' => '<td><span class="badge '.$claseVisibilidad.'">'.$labelVisibilidad.'</span></td>',
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' =>'<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="'. url("administrador/nucleo/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="'. url('administrador/exposiciones/registros/nucleos/galerias/'.$elemento->id) .'"  class="dropdown-item"><i class="icon-book mr-3"></i> GALERIAS </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-exposicion"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function editarNucleoExposicion($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            $exposicionDigital = Nucleos::where('id', (int)$id)->get();
                if($exposicionDigital->count()){
                    $exposicionDigital = $exposicionDigital->first();
                    $galeria = NucleosExposicionesDigitalesMedia::where('nucleo_exposicion_digital_id', (int)$id)->get();
                    return View('administrador.exposiciones.nucleo-editar', compact('exposicionDigital', 'galeria'));
                }else
                return redirect('administrador/exposiciones');
        } else
            return redirect('login');
    }

    public function addNucleoExposicionDigital(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = new  Nucleos();
                        $registro->id_exposicion = $request->input('id_exposicion');
                        $registro->titulo = $request->input('titulo');
                        $registro->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica del Núcleo, a continuación podrás complementar su información', 'data' => $registro->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateNucleoExposicionDigital(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Nucleos::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->titulo = $request->input('titulo');
                        $registro->descripcion = $request->input('descripcion');
                        $registro->cover = $request->input('cover');
                        $registro->thumbnail = $request->input('thumbnail');
                        $registro->visibilidad = $request->input('visibilidad');
                        $registro->save();
                        
                        $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente el núcleo'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado ´el núcleo seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropNucleoExposicion(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Nucleos::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el núcleo satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionado'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }



    // Fin Nucleos

    // Galerias

    public function getGalerias($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            if($user->hasAccess('admin')){  
                $exposicion = Galerias::query()->where('id_nucleo',$id)->orderBy('id','DESC');
                    return DataTables::eloquent($exposicion)
                    ->setTransformer(function($elemento){
                        $claseVisibilidad = ($elemento->visibilidad) ? 'badge-success' : 'badge-secondary';
                        $labelVisibilidad = ($elemento->visibilidad) ? 'Visible' : 'No visible';
                        return [
                            'id' => (int)$elemento->id,
                            'thumbnail' => "<img src=\"$elemento->thumbnail\" class=\"img-cover\">",
                            'titulo' => $elemento->titulo,
                            'visibilidad' => '<td><span class="badge '.$claseVisibilidad.'">'.$labelVisibilidad.'</span></td>',
                            'updated_at' => Carbon::parse($elemento->updated_at)->format('H:i d/m/Y'),
                            'acciones' =>'<a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="'. url("administrador/exposiciones/nucleo/galeria/editar/$elemento->id") .'" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="'.(int)$elemento->id.'" class="dropdown-item btn-drop-exposicion"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>'
                        ];
                    })
                    ->make(true);
            } else
                return json_encode(['status' => false, 'message' => 'Lo sentimos, no cuentas con los privilegios para realizar esta acción']);
        } else
            return json_encode(['status' => false, 'message' => 'Debes iniciar sesión para continuar']);
    }

    public function editarGalerias($id){
        if (Sentinel::check()){
            $user = Sentinel::getUser();
            $exposicionDigital = Galerias::where('id', (int)$id)->get();
                if($exposicionDigital->count()){
                    $exposicionDigital = $exposicionDigital->first();
                    return View('administrador.exposiciones.nucleo-editar', compact('exposicionDigital'));
                }else
                return redirect('administrador/exposiciones');
        } else
            return redirect('login');
    }

    public function addGalerias(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = new  Galerias();
                        $registro->id_nucleo = $request->input('id_nucleo');
                        $registro->titulo = $request->input('titulo');
                        $registro->save();
                    $response = ['status' => true, 'message' => 'Se ha registrado la información básica del Núcleo, a continuación podrás complementar su información', 'data' => $registro->id];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function updateGalerias(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Galerias::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->titulo = $request->input('titulo');
                        $registro->descripcion = $request->input('descripcion');
                        $registro->anio = $request->input('anio');
                        $registro->especificaciones = $request->input('especificaciones');
                        $registro->soporte = $request->input('soporte');
                        $registro->medidas = $request->input('medidas');
                        $registro->ubicacion = $request->input('ubicacion');
                        $registro->archivo = $request->input('archivo');
                        $registro->cover = $request->input('cover');
                        $registro->thumbnail = $request->input('cover');
                        $registro->visibilidad = $request->input('visibilidad');
                        $registro->save();
                        
                        $response = ['status' => true, 'message' => 'Se ha actualizado satisfactoriamente la galería'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado la galería seleccionada'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function dropGalerias(Request $request){
        try {
            if(Sentinel::check()) {
                $user = Sentinel::getUser();
                if ($user->hasAnyAccess(['admin'])) {
                    $registro = Galerias::where('id', (int)$request->input('id'))->get();
                    if($registro->count()){
                        $registro = $registro->first();
                        $registro->delete();
                        $response = ['status' => true, 'message' => 'Se ha eliminado el núcleo satisfactoriamente'];
                    } else
                        $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el registro seleccionada'];
                } else
                    $response = ['status' => false, 'message' => 'Lo sentimos, no cuentas con los permisos para realizar esta acción'];
            } else
                $response = ['status' => false, 'message' => 'Es necesario que inicies sesión'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return json_encode($response);
    }



    // Fin Nucleos


}
