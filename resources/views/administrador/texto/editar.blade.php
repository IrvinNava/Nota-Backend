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
                        <h4><i class="icon icon-document text-lime s-18"></i>&nbsp;<span>EDITAR TEXTO</span></h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-wrapper animatedParent animateOnce p-0">
            <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-7 p-0">
                        <div class="card">
                            <div class="card-body white">
                                <h4 class="mb-3"><b>Datos del texto</b></h4>
                                <form id="form-texto">
                                    <input type="hidden" id="texto-input-id" name="id" value="{{ $texto->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="texto-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="texto-input-titulo" name="titulo" type="text" class="form-control required" value="{{ $texto->titulo }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="texto-select-categorias">Categoría</label>
                                                <select name="categoria" id="texto-select-categorias" class="form-control" @if(!empty($categoria)) data-id="{{ $categoria->id }}" @endif readonly>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="texto-select-subcategorias">Subcategorías</label>
                                                <?
                                                    $subcategorias = json_encode($texto->subcategorias->map(function ($subcategoria) {
                                                        return ['id' => "$subcategoria->id"];
                                                    }));
                                                ?>
                                                <select name="subcategorias[]" id="texto-select-subcategorias" class="form-control select2" @if(!empty($categoria)) data-categoria="{{ $categoria->id }}" data-id="{{ ($subcategorias) }}" @endif multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="texto-select-playlist">Playlist</label>
                                                <select name="playlist" id="texto-select-playlist" class="form-control" value="{{ $texto->playlist_id }}">
                                                    <option value="">- Selecciona una opción -</option>
                                                    @foreach ($playlists as $playlist)
                                                        <option value="{{ $playlist->id }}" <?= ($playlist->id === $texto->playlist_id ) ? 'selected' : '';  ?> >{{ $playlist->titulo }}</option>
                                                    @endforeach
                                                }
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="texto-select-autores">Autor(es)</label>
                                            <div class="d-flex justify-content-between">
                                                <?
                                                    $autores = json_encode($texto->autores->map(function ($autor) {
                                                        return ['id' => "$autor->id"];
                                                    }));
                                                ?>
                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal-autor"><i class="icon-user-plus"></i></a>
                                                <select id="texto-select-autores" name="autores[]" class="form-control select2" data-id="{{ ($autores) }}" multiple>
                                                    <option value="">- Selecciona una opción -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">Utiliza el siguiente editor para agregar contenido a la publicación</p>
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                                                        <i class="icon-help"></i> Ayuda con editor
                                                    </button>
                                                    <div class="dropdown-menu editorjs-dropdown" aria-labelledby="dropdownMenuButton">
                                                        <p><small>Comienza haciendo click en cualquier lugar de la sección gris.</small></p>
                                                        <div class="dropdown-divider"></div>
                                                        <p>1. Utiliza el elemento <img src="{{ asset('img/editor-plus.jpg') }}">.</p>
                                                        <div class="dropdown-divider"></div>
                                                        <p>2. Verás más herramientas. Utilízalas para enrriquecer el contenido</p>
                                                        <img src="{{ asset('img/editor-tools.jpg') }}" alt="">
                                                        <div class="dropdown-divider"></div>
                                                        <p>3. Utiliza el elemento <img src="{{ asset('img/editor-dots.jpg') }}"> para eliminar contenido o cambiar su orden.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div id="editorjs"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label for="texto-input-etiquetas">Etiquetas</label>
                                                <input type="text" id="texto-input-etiquetas" name="tags" class="typeahead form-control" value="{{ implode(',', $texto->etiquetas->map(function ($etiqueta){ return $etiqueta->nombre; })->toArray()) }}" style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <b>Visibilidad</b>
                                                    <div class="material-switch float-right">
                                                        <input id="texto-swich-visibilidad" name="visibilidad" type="checkbox" value="1" @if($texto->status) checked @endif>
                                                        <label for="texto-swich-visibilidad" class="bg-primary"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 relative p-0">
                        <div class="card-header white d-flex justify-content-between ">
                            <h6><i class="icon icon-mode_edit"></i> EDITAR TEXTO</h6>
                        </div>
                        <div class="form-container pt-5">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-texto-o blue-text"></i>
                                        <strong>IMAGEN DE PORTADA</strong>
                                    </div>
                                    <div class="card-body texto-cover-uploader">
                                        <form id="form-texto-cover">
                                            <p class="mb-3"><small class="dropzone-description text-center">La portada debe cumplir con las dimensiones <b>máximas</b> de 1920x1080 y menor a 1 MB</small></p>
                                            <div class="cover-img-container">
                                                @if(!empty($texto->cover))
                                                    <img src="{{ $texto->cover }}" data-mime="image/png">
                                                    <input type="hidden" name="cover" value="{{ $texto->cover }}">
                                                @else
                                                    <div class="empty-container" style="position: relative">
                                                        <div class="layer-empty"><div class="empty-icon"></div></div>
                                                    </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <p>Thumbnail (Miniatura)</p>
                                            <div class="thumbnail-img-container">
                                                @if(!empty($texto->cover))
                                                    <img src="{{ $texto->thumbnail }}" data-mime="image/png">
                                                    <input type="hidden" name="thumbnail" value="{{ $texto->thumbnail }}">
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
                                        <input type="file" id="texto-input-cover" class="filepond mt-3" name="upload_file" multiple>
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
                                        <div id="texto-upload-buttons-container" class="card-footer bg-light d-none">
                                            <a href="javascript:void(0)" id="btn-confirm-texto-cover" class="btn btn-success btn-xs float-right" disabled>
                                                <i class="icon icon-check-circle"></i> CONFIRMAR IMAGEN
                                            </a>
                                            <a href="javascript:void(0)" id="btn-crop-texto-cover" class="btn btn-warning btn-xs float-right" disabled>
                                                <i class="icon icon-crop"></i> CORTAR IMAGEN
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="editor-tools-container d-flex justify-content-center align-items-center">
    <a id="preview-content-button" href="javascript:void(0);" class="btn structure-button" data-toggle="tooltip"  title="Ver estructura"><i id="preview-icon" class="icon-eye s-18"></i></a>
    <div class="save-update-content-container">
        <div class="d-flex justify-content-between">
            <small><strong>Última actualización:</strong><br>{{ \Carbon\Carbon::parse($texto->updated_at)->format('H:i d/m/Y') }}</small>
            <a href="javascript:void(0)" id="btn-actualizar-texto" class="btn btn-success float-right">
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
                        <label for="texto-input-nombre">Nombre(s)</label>
                        <input type="text" id="texto-input-nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="texto-input-apellidos">Apellidos</label>
                        <input type="text" id="texto-input-apellidos" name="apellidos" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-texto-agregar-autor" class="btn btn-success"><i class="icon-save2"></i>&nbsp;Guardar</a>
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets')
<link href="{{ asset('css/editorjs-wsm.css') }}" rel="stylesheet">
<script src="{{ asset('js/editorjs-wsm.js') }}"></script>
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="{{ asset('js/panel/static/cropper.min.js') }}"></script>
<script src="{{ asset('js/panel/static/jquery-cropper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('js/he.js') }}"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-paragraph-with-alignment@1.1.0"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-button@1.0.1"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script>
    let contenido =  @if(!empty($texto->contenido_markup)) JSON.parse('{!! $texto->contenido_markup !!}') @else [] @endif;
    if(typeof contenido != "undefined"){
        contenido.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            contenido.blocks[i].data.text = he.decode(content);
        });
    }
</script>
<script src="{{ asset('js/panel/textos.js') }}"></script>
</body>
</html>
