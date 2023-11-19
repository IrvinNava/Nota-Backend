@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel.sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left">
        <div class="content-wrapper animatedParent animateOnce p-0">
            <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
                <div class="row no-gutters">
                    <? $audio_file = ($audio->media_collection->where('type', 2)->count()) ? $audio->media_collection->where('type', 2)->first() : null; ?>
                    <div class="col-md-6 col-lg-7 relative p-0">
                        <div class="card-header white d-flex justify-content-between ">
                            <h6><i class="icon icon-mode_edit"></i> EDITAR AUDIO</h6>
                        </div>
                        <div class="form-container pt-5">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-audio-o blue-text"></i>
                                        <strong>ARCHIVO DE AUDIO</strong>
                                    </div>
                                    <div class="card-body">
                                        <form id="form-audio-file">
                                            <input type="hidden" id="audio-input-id" name="id" value="{{ $audio->id }}">
                                            <div class="audio-body-container">
                                                @if(!empty($audio_file))
                                                <audio class="wp-audio-shortcode" id="audio-125-1" preload="auto" style="width: 100%;" controls="controls">
                                                    <source type="audio/mpeg" src="{{ $audio_file->url }}">
                                                        <a href="">{{ $audio_file->url }}</a>
                                                    </audio>
                                                @else
                                                <div class="empty-container" style="position: relative">
                                                    <div class="layer-empty"><div class="empty-icon"></div></div>
                                                </div>
                                                @endif
                                                @if(!empty($audio_file))
                                                <input type="hidden" name="file" value="{{ $audio_file->basename }}">
                                                @endif
                                            </div>
                                        </form>
                                        <hr>
                                        <input type="file" id="audio-input-uploader" class="filepond" name="upload_file">
                                    </div>
                                    <div class="card-footer bg-light">
                                        @if(!empty($audio_file))
                                        <small><strong>Última actualización:</strong>&nbsp;{{ \Carbon\Carbon::parse($audio_file->updated_at)->format('H:i d/m/Y') }}</small>
                                        <br>
                                        <small><strong>Tamaño:</strong>&nbsp;{{ \App\Helpers\Helper::human_filesize($audio_file->size) }}</small>
                                        @endif
                                        <a href="javascript:void(0)" id="btn-actualizar-audio-file" class="btn btn-warning btn-xs float-right disabled" disabled>
                                            <i class="icon icon-save"></i> ACTUALIZAR ARCHIVO
                                        </a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-audio-o blue-text"></i>
                                        <strong>IMAGEN DE PORTADA</strong>
                                    </div>
                                    <div class="card-body audio-cover-uploader">
                                        <form id="form-audio-cover">
                                            <p class="mb-3"><small class="dropzone-description text-center">La portada debe cumplir con las dimensiones <b>máximas</b> de 1920x1080 y menor a 1 MB</small></p>
                                            <div class="cover-img-container">
                                                @if(!empty($audio->cover))
                                                    <img src="{{ $audio->cover }}" data-mime="image/png">
                                                    <input type="hidden" name="cover" value="{{ $audio->cover }}">
                                                @else
                                                <div class="empty-container" style="position: relative">
                                                    <div class="layer-empty"><div class="empty-icon"></div></div>
                                                </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <p>Thumbnail (Miniatura)</p>
                                            <div class="thumbnail-img-container">
                                                @if(!empty($audio->thumbnail))
                                                    <img src="{{ $audio->thumbnail }}" data-mime="image/png">
                                                    <input type="hidden" name="thumbnail" value="{{ $audio->thumbnail }}">
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

                                        <input type="file" id="audio-input-cover" class="filepond mt-3" name="upload_file" multiple>
                                        <hr>
                                        <p>
                                            <a class="btn btn-danger btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="icon-exclamation-circle"></i> <b>Importante:</b> Antes de subir una imagen
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body bg-danger text-white">
                                                <p class="card-text">La experiencia de los usuarios al acceder a un sitio web del Museo Amparo es importante para todo el ecosistema de Amparo. Por lo que antes de subir una imagen es importante asegurarse de lo siguiente:</p>
                                                <ul>
                                                    <li>1.	Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                    <li>2.	Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
                                                </ul>
                                                <p><b>¿Por qué esto es importante?</b><br>Al respetar dimensiones y pasar los recursos gráficos por un proceso de compasión ayudamos a que la carga de un sitio web suceda de manera rápida y eficiente.</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="img-preview preview-lg"></div>
                                        <div id="audio-upload-buttons-container" class="card-footer bg-light d-none">
                                            <a href="javascript:void(0)" id="btn-confirm-audio-cover" class="btn btn-success btn-xs float-right" disabled>
                                                <i class="icon icon-check-circle"></i> CONFIRMAR IMAGEN
                                            </a>
                                            <a href="javascript:void(0)" id="btn-crop-audio-cover" class="btn btn-warning btn-xs float-right" disabled>
                                                <i class="icon icon-crop"></i> CORTAR IMAGEN
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 p-0">
                        <div class="card" style="height: 88vh">
                            <div class="card-header white">
                                <i class="icon-clipboard-edit blue-text"></i>
                                <strong> INFORMACIÓN DEL AUDIO </strong>
                            </div>
                            <div class="card-body white">
                                <form id="form-audio">
                                    <input type="hidden" id="audio-input-id" name="id" value="{{ $audio->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="audio-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="audio-input-titulo" name="titulo" type="text" class="form-control required" value="{{ $audio->titulo }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="audio-input-fecha_lanzamiento">Fecha de lanzamiento</label>
                                                <input type="text" id="audio-input-fecha_lanzamiento" name="fecha_lanzamiento" class="form-control input-datetimepicker" value="{{ \Carbon\Carbon::parse($audio->fecha_lanzamiento)->format('d/m/Y') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="audio-input-duracion">Duración</label>
                                                <input type="text" id="audio-input-duracion" name="duracion" class="form-control" value="{{ $audio->duracion }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="audio-select-categorias">Categoría</label>
                                                <select name="categoria" id="audio-select-categorias" class="form-control" @if(!empty($categoria)) data-id="{{ $categoria->id }}" @endif readonly>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="audio-select-subcategorias">Subcategorías</label>
                                                <?
                                                    $subcategorias = json_encode($audio->subcategorias->map(function ($subcategoria) {
                                                        return ['id' => "$subcategoria->id"];
                                                    }));
                                                ?>
                                                <select name="subcategorias[]" id="audio-select-subcategorias" class="form-control select2" @if(!empty($categoria)) data-categoria="{{ $categoria->id }}" data-id="{{ ($subcategorias) }}" @endif multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="audio-select-autores">Autor(es)</label>
                                            <div class="d-flex justify-content-between">
                                                <?
                                                    $autores = json_encode($audio->autores->map(function ($autor) {
                                                        return ['id' => "$autor->id"];
                                                    }));
                                                ?>
                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal-autor"><i class="icon-user-plus"></i></a>
                                                <select id="audio-select-autores" name="autores[]" class="form-control select2" data-id="{{ ($autores) }}" multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="audio-select-playlist">Playlist</label>
                                                <select name="playlist" id="audio-select-playlist" class="form-control" value="{{ $audio->playlist_id }}">
                                                    <option value="">- Selecciona una opción -</option>
                                                    @foreach ($playlists as $playlist)
                                                        <option value="{{ $playlist->id }}" <?= ($playlist->id === $audio->playlist_id ) ? 'selected' : '';  ?> >{{ $playlist->titulo }}</option>
                                                    @endforeach
                                                }
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="audio-input-descripcion">Descripción</label>
                                            <textarea id="audio-input-descripcion" name="descripcion" class="form-control" rows="6">{{ $audio->descripcion }}</textarea>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label for="audio-input-etiquetas">Etiquetas</label>
                                                <input type="text" id="audio-input-etiquetas" name="tags" class="typeahead form-control" value="{{ implode(',', $audio->etiquetas->map(function ($etiqueta){ return $etiqueta->nombre; })->toArray()) }}" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <b>Visibilidad</b>
                                                    <div class="material-switch float-right">
                                                        <input id="audio-swich-visibilidad" name="visibilidad" type="checkbox" value="1" @if($audio->status) checked @endif>
                                                        <label for="audio-swich-visibilidad" class="bg-primary"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer bg-light">

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
        <small><strong>Última actualización:</strong><br>{{ \Carbon\Carbon::parse($audio->updated_at)->format('H:i d/m/Y') }}</small>
        <a href="javascript:void(0)" id="btn-actualizar-audio" class="btn btn-success float-right">
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
                        <label for="audio-input-nombre">Nombre(s)</label>
                        <input type="text" id="audio-input-nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="audio-input-apellidos">Apellidos</label>
                        <input type="text" id="audio-input-apellidos" name="apellidos" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-audio-agregar-autor" class="btn btn-success"><i class="icon-save2"></i>&nbsp;Guardar</a>
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
<script src="{{ asset('js/panel/audios.js') }}"></script>
</body>
</html>
