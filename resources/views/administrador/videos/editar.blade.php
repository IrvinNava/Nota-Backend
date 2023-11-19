@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel.sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4><i class="icon icon-mode_edit text-lime s-18"></i>&nbsp;<span>VIDEO</span></h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-wrapper animatedParent animateOnce p-0">
            <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
                <div class="row no-gutters">
                    <? $video_file = ($video->media_collection->where('type', 2)->count()) ? $video->media_collection->where('type', 2)->first() : null; ?>
                    <div class="col-md-6 col-lg-7 relative p-0">
                        <div class="card-header white d-flex justify-content-between ">
                            <h6><i class="icon icon-mode_edit"></i> EDITAR VIDEO</h6>
                        </div>
                        <div class="form-container pt-5">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white pb-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="align-self-center">
                                                <ul class="nav nav-pills mb-3" role="tablist">
                                                    <li class="nav-item"><a class="nav-link r-20 @if(!empty($video_file) && !$video_file->external) active show @endif" id="w3--tab1" data-toggle="tab" href="#w3-tab1" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">Subir video</a></li>
                                                    <li class="nav-item"><a class="nav-link r-20 @if(!empty($video_file) && $video_file->external) active show @endif" id="w3--tab2" data-toggle="tab" href="#w3-tab2" role="tab" aria-controls="tab2" aria-selected="false">Añadir enlace video</a></li>
                                                </ul>
                                            </div>
                                            <div class="align-self-center">
                                                <h5>Video</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body no-p">
                                        <div class="tab-content">
                                            <div class="tab-pane fade @if(!empty($video_file) && !$video_file->external) active show @endif" id="w3-tab1" role="tabpanel" aria-labelledby="w3-tab1">
                                                <div class="card-body">
                                                    <form id="form-video-file">
                                                        <input type="hidden" name="id" value="{{ $video->id }}">
                                                        <input type="hidden" name="external" value="0">
                                                        <div class="video-body-container">
                                                            @if(!empty($video_file) && !$video_file->external)
                                                                <video preload="auto" style="width: 100%;" controls="controls">
                                                                    <source type="video/mp4" src="{{ $video_file->url }}">
                                                                    <a href="">{{ $video_file->url }}</a>
                                                                </video>
                                                                <input type="hidden" name="file" value="{{ $video_file->basename }}">
                                                            @endif
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <input type="file" id="video-input-uploader" class="filepond" name="upload_file">
                                                </div>
                                                <div class="card-footer bg-light">
                                                    @if(!empty($video_file) && !$video_file->external)
                                                        <small><strong>Última actualización:</strong>&nbsp;{{ \Carbon\Carbon::parse($video_file->updated_at)->format('H:i d/m/Y') }}</small>
                                                        <br>
                                                        <small><strong>Tamaño:</strong>&nbsp;{{ \App\Helpers\Helper::human_filesize($video_file->size) }}</small>
                                                    @endif
                                                    <a href="javascript:void(0)" id="btn-actualizar-video-file" class="btn btn-warning btn-xs float-right disabled" disabled>
                                                        <i class="icon icon-save"></i> ACTUALIZAR ARCHIVO
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade p-3 @if(!empty($video_file) && $video_file->external) active show @endif" id="w3-tab2" role="tabpanel" aria-labelledby="w3-tab2">
                                                <div class="card-body">
                                                    <form id="form-video-url">
                                                        <input type="hidden" name="id" value="{{ $video->id }}">
                                                        <input type="hidden" name="external" value="1">
                                                        <div class="video-body-container">
                                                            @if(!empty($video_file) && $video_file->external)
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video_file->basename }}" allowfullscreen></iframe>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="video-input-enlace">Enlace del video</label>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend"><span class="input-group-text add-on"><i class="icon-film"></i></span></div>
                                                                <input type="url" id="video-input-enlace" name="enlace" class="form-control required" @if(!empty($video_file) && $video_file->external)value="{{ $video_file->url }}" @endif>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                </div>
                                                <div class="card-footer bg-light">
                                                    @if(!empty($video_file) && $video_file->external)
                                                        <small><strong>Última actualización:</strong>&nbsp;{{ \Carbon\Carbon::parse($video_file->updated_at)->format('H:i d/m/Y') }}</small>
                                                    @endif
                                                    <a href="javascript:void(0)" id="btn-actualizar-video-link" class="btn btn-warning btn-xs float-right">
                                                        <i class="icon icon-save"></i> ACTUALIZAR ENLACE
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-video-o blue-text"></i>
                                        <strong>IMAGEN DE PORTADA</strong>
                                    </div>
                                    <div class="card-body video-cover-uploader">
                                        <form id="form-video-cover">
                                            <p class="mb-3"><small class="dropzone-description text-center">La portada debe cumplir con las dimensiones <b>máximas</b> de 1920x1080 y menor a 1 MB</small></p>
                                            <div class="cover-img-container">
                                                @if(!empty($video->cover))
                                                    <img src="{{ $video->cover }}" data-mime="image/png">
                                                    <input type="hidden" name="cover" value="{{ $video->cover }}">
                                                @else
                                                    <div class="empty-container" style="position: relative">
                                                        <div class="layer-empty"><div class="empty-icon"></div></div>
                                                    </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <p>Thumbnail (Miniatura)</p>
                                            <div class="thumbnail-img-container">
                                                @if(!empty($video->thumbnail))
                                                    <img src="{{ $video->thumbnail }}" data-mime="image/png">
                                                    <input type="hidden" name="thumbnail" value="{{ $video->thumbnail }}">
                                                @else
                                                    <div class="empty-container" style="position: relative">
                                                        <div class="layer-empty"><div class="empty-icon"></div></div>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="d-flex justify-content-between mt-3">
                                            <p class="mb-0 font-weight-bold">ACTUALIZAR PORTADA Y MINIATURA</p>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-link text-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                                                    <i class="icon-help"></i> Ayuda
                                                </button>
                                                <div class="dropdown-menu editorjs-dropdown" aria-labelledby="dropdownMenuButton">
                                                    <div class="dropdown-divider"></div>
                                                    <p>1. Haz click en la sección punteada para subir la imágen de tu computadora.</p>
                                                    <div class="dropdown-divider"></div>
                                                    <p>2. Haz click en el botón <img src="{{ asset('img/cut-button.jpg') }}"> para recortar portada y minuatira.</p>
                                                    <div class="dropdown-divider"></div>
                                                    <p>3. Para finalizar haz click en el botón <img src="{{ asset('img/success-button.jpg') }}"> para confirmar ambos recortes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="video-input-cover" class="filepond" name="upload_file" multiple>
                                        <hr>
                                        <div class="img-preview preview-lg"></div>
                                        <div id="video-upload-buttons-container" class="card-footer bg-light d-none">
                                            <a href="javascript:void(0)" id="btn-confirm-video-cover" class="btn btn-success btn-xs float-right disabled" disabled>
                                                <i class="icon icon-check-circle"></i> CONFIRMAR IMAGEN
                                            </a>
                                            <a href="javascript:void(0)" id="btn-crop-video-cover" class="btn btn-warning btn-xs float-right disabled" disabled>
                                                <i class="icon icon-crop"></i> CORTAR IMAGEN
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 p-0">
                        <div class="card card-video" style="height: 88vh">
                            <div class="card-header white">
                                <i class="icon-clipboard-edit blue-text"></i>
                                <strong> INFORMACIÓN DEL VIDEO </strong>
                            </div>
                            <div class="card-body white">
                                <form id="form-video">
                                    <input type="hidden" id="video-input-id" name="id" value="{{ $video->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="video-select-playlist">Playlist</label>
                                                <select name="playlist" id="video-select-playlist" class="form-control" value="{{ $video->playlist_id }}">
                                                    <option value="">- Selecciona una opción -</option>
                                                    @foreach ($playlists as $playlist)
                                                        <option value="{{ $playlist->id }}" <?= ($playlist->id === $video->playlist_id ) ? 'selected' : '';  ?> >{{ $playlist->titulo }}</option>
                                                    @endforeach
                                                }
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="video-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="video-input-titulo" name="titulo" type="text" class="form-control required" value="{{ $video->titulo }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="video-input-fecha_lanzamiento">Fecha de lanzamiento</label>
                                                <input type="text" id="video-input-fecha_lanzamiento" name="fecha_lanzamiento" class="form-control input-datetimepicker" value="{{ \Carbon\Carbon::parse($video->fecha_lanzamiento)->format('d/m/Y') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="video-input-duracion">Duración</label>
                                                <input type="text" id="video-input-duracion" name="duracion" class="form-control" value="{{ $video->duracion }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="video-select-categorias">Categoría</label>
                                                <select name="categoria" id="video-select-categorias" class="form-control" @if(!empty($categoria)) data-id="{{ $categoria->id }}" @endif readonly>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="video-select-subcategorias">Subcategorías</label>
                                                <?
                                                $subcategorias = json_encode($video->subcategorias->map(function ($subcategoria) {
                                                    return ['id' => "$subcategoria->id"];
                                                }));
                                                ?>
                                                <select name="subcategorias[]" id="video-select-subcategorias" class="form-control select2" @if(!empty($categoria)) data-categoria="{{ $categoria->id }}" data-id="{{ ($subcategorias) }}" @endif multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="video-select-autores">Autor(es)</label>
                                            <div class="d-flex justify-content-between">
                                                <?
                                                    $autores = json_encode($video->autores->map(function ($autor) {
                                                        return ['id' => "$autor->id"];
                                                    }));
                                                ?>
                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal-autor"><i class="icon-user-plus"></i></a>
                                                <select id="video-select-autores" name="autores[]" class="form-control select2" data-id="{{ ($autores) }}" multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label for="video-input-titulo">Nombre del Evento</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                        <select id="registro-select-tipo-evento" name="evento_id" class="form-control" @if(!empty($evento)) data-id="{{ $evento->id }}" @endif required>
                                                            <? $eventos = \App\Evento::all()?>
                                                            @foreach($eventos as $evento_item)
                                                                <option <?= ($evento->id === $evento_item->id) ? 'selected' : '' ; ?> value="{{$evento_item->id}}">{{$evento_item->nombre}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="video-input-descripcion">Descripción</label>
                                            <textarea id="video-input-descripcion" name="descripcion" class="form-control" rows="6">{{ $video->descripcion }}</textarea>
                                        </div>
                                        <div class="col-md-8 mt-3">
                                            <div class="form-group">
                                                <label for="video-input-etiquetas">Etiquetas</label>
                                                <input type="text" id="video-input-etiquetas" name="tags" class="typeahead form-control" value="{{ implode(',', $video->etiquetas->map(function ($etiqueta){ return $etiqueta->nombre; })->toArray()) }}" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <label for="video-swich-visibilidad">&nbsp;</label>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    Visibilidad
                                                    <div class="material-switch float-right">
                                                        <input class="switch" id="video-swich-visibilidad" name="visibilidad" type="checkbox" value="1" @if($video->status) checked @endif>
                                                        <label for="video-swich-visibilidad" class="bg-primary"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="editor-tools-container d-flex justify-content-center align-items-center">
<div class="save-update-content-container">
    <div class="d-flex justify-content-between">
        <small><strong>Última actualización:</strong><br>{{ \Carbon\Carbon::parse($video->updated_at)->format('H:i d/m/Y') }}</small>
        <a href="javascript:void(0)" id="btn-actualizar-video" class="btn btn-success float-right">
            <i class="icon icon-save"></i> ACTUALIZAR
        </a>
    </div>
</div>
</div>
<div id="modal-autor" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar autor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-autor-modal">
                    <div class="form-group">
                        <label for="video-input-nombre">Nombre(s)</label>
                        <input type="text" id="video-input-nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="video-input-apellidos">Apellidos</label>
                        <input type="text" id="video-input-apellidos" name="apellidos" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-video-agregar-autor" class="btn btn-success"><i class="icon-save2"></i>&nbsp;Guardar</a>
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets')
<link href="{{ asset('css/editorjs-wsm.css') }}" rel="stylesheet">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="{{ asset('js/panel/static/cropper.min.js') }}"></script>
<script src="{{ asset('js/panel/static/jquery-cropper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="{{ asset('js/panel/videos.js') }}"></script>
</body>
</html>
