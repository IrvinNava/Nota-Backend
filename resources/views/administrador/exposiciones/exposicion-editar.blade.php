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
                        <h4><i class="icon icon-library_books text-lime s-18"></i>&nbsp;<span>EDITAR EXPOSICIÓN</span></h4>
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
                                <h4 class="mb-3"><b>Datos de la exposición</b></h4>
                                <form id="form-registro">
                                    <input type="hidden" id="registro-input-id" name="id" value="<?= $exposicionDigital->id ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="registro-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="exposicion-input-titulo" name="titulo" type="text" class="form-control required" value="<?= $exposicionDigital->titulo ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!--<div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="texto-select-fecha-evento">Fecha del</label>
                                                        <input id="texto-select-fecha-evento" name="fecha_evento" type="text" class="form-control input-datetimepicker" value="28/02/2023">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="texto-select-fecha-evento">Fecha al </label>
                                                        <input id="texto-select-fecha-evento" name="fecha_evento" type="text" class="form-control input-datetimepicker" value="28/02/2023">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

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

                                        <div class="col-md-12">
                                            <hr>
                                            <label for="registro-input-titulo">Logos</label>
                                            <div class="gallery-container">
                                                <div class="row">
                                                     @if($galeria->count())
                                                        @foreach($galeria as $imagen)
                                                            <div class="col-md-3 mb-4"> <a class="btn btn-sm btn-danger btn-drop-timeline-media" data-id="{{$imagen->id}}" data-id-galeria="{{$imagen->id}}" href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><img src="{{$imagen->url}}" data-mime="{{$imagen->mime}}"></div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <hr>

                                            <input type="file" id="registro-input-gallery" class="filepond mt-3" name="upload_file" multiple data-max-file-size="1MB">

                                            <hr>
                                            <p>
                                                <a class="btn btn-warning btn-sm text-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="icon-exclamation-circle"></i> <b>Importante:</b> Antes de subir una imagen
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body bg-danger text-white">
                                                    <p class="card-text">La experiencia de los usuarios al acceder a un sitio web del Museo Amparo es importante para todo el ecosistema de Amparo. Por lo que antes de subir una imagen es importante asegurarse de lo siguiente:</p>
                                                    <ul>
                                                        <li>1.  Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                        <li>2.  Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
                                                    </ul>
                                                    <p><b>¿Por qué esto es importante?</b><br>Al respetar dimensiones y pasar los recursos gráficos por un proceso de compasión ayudamos a que la carga de un sitio web suceda de manera rápida y eficiente.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <b>Visibilidad</b>
                                                    <div class="material-switch float-right">
                                                        <input id="exposicion-swich-visibilidad" name="visibilidad" type="checkbox" value="<?= $exposicionDigital->visibilidad ?>" @if($exposicionDigital->visibilidad) checked @endif >
                                                        <label id="label-exposicion-swich-visibilidad" for="exposicion-swich-visibilidad" class="bg-primary"></label>
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
                        <div class="form-container pt-3">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-audio-o blue-text"></i>
                                        <strong>IMAGEN DE PORTADA</strong>
                                    </div>
                                    <div class="card-body registro-cover-uploader">
                                        <form id="form-registro-cover">
                                            <p class="mb-3"><small class="dropzone-description text-center">La portada debe cumplir con las dimensiones <b>máximas</b> de 1920x1080 y menor a 1 MB</small></p>
                                            <div class="cover-img-container">
                                                @if(!empty($exposicionDigital->cover))
                                                    <img src="{{ $exposicionDigital->cover }}" data-mime="image/png">
                                                    <input type="hidden" name="cover" value="{{ $exposicionDigital->cover }}">
                                                @else
                                                <div class="empty-container" style="position: relative">
                                                    <div class="layer-empty"><div class="empty-icon"></div></div>
                                                </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <p>Thumbnail (Miniatura)</p>
                                            <div class="thumbnail-img-container">
                                                @if(!empty($exposicionDigital->thumbnail))
                                                    <img src="{{ $exposicionDigital->thumbnail }}" data-mime="image/png">
                                                    <input type="hidden" name="thumbnail" value="{{ $exposicionDigital->thumbnail }}">
                                                @else
                                                <div class="empty-container" style="position: relative">
                                                    <div class="layer-empty"><div class="empty-icon"></div></div>
                                                </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <div id="registro-upload-buttons-container" class="registro-upload-buttons-container card-footer d-none">
                                                <a href="javascript:void(0)" id="btn-crop-registro-cover" class="btn btn-primary" style="background-color:#F15A24" disabled>
                                                    <i class="icon icon-crop"></i>PASO 1 - AJUSTAR FOTOGRAFÍA
                                                </a>
                                            </div>
                                            <div id="" class="card-footer registro-upload-buttons-container d-none" >
                                                <a href="javascript:void(0)" id="btn-confirm-registro-cover" class="btn btn-primary" style="background-color:#F15A24" disabled>
                                                    <i class="icon icon-check-circle"></i>PASO 2. CONFIRMAR IMAGEN
                                                </a>
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

                                        <input type="file" id="registro-input-cover" class="filepond mt-3" name="upload_file" multiple>
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
                                                    <li>1.  Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                    <li>2.  Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
                                                </ul>
                                                <p><b>¿Por qué esto es importante?</b><br>Al respetar dimensiones y pasar los recursos gráficos por un proceso de compasión ayudamos a que la carga de un sitio web suceda de manera rápida y eficiente.</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="img-preview preview-lg"></div>
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
    <div class="save-update-content-container">
        <div class="d-flex justify-content-between">
            <small><strong>Última actualización:</strong><br><?= $exposicionDigital->updated_at ?></small>
            <a href="javascript:void(0)" id="btn-actualizar-exposicion-digital" class="btn btn-success float-right" data-id="<?= $exposicionDigital->id ?>">
                <i class="icon icon-save"></i> ACTUALIZAR
            </a>
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

<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

<script>
    let contenido =  @if(!empty($exposicionDigital->descripcion)) JSON.parse('{!! $exposicionDigital->descripcion !!}') @else [] @endif;
    if(typeof contenido != "undefined"){
        contenido.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            contenido.blocks[i].data.text = he.decode(content);
        });
    }
</script>
<script src="{{ asset('js/panel/exposiciones-digitales.js') }}"></script>
</body>
</html>
