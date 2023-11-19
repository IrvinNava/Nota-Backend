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
                        <h4><i class="icon icon-add_box text-lime s-18"></i>&nbsp;<span>AGREGAR PLAYLIST</span></h4>
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
                                <h4 class="mb-3"><b>Datos de la playlist</b></h4>
                                <form id="form-registro">
                                    <input type="hidden" id="playlist-input-id" name="id" value="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="registro-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="playlist-input-titulo" name="titulo" type="text" class="form-control required" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Subtitulo</label>
                                                            <input id="playlist-input-subtitulo" name="subtitulo" type="text" class="form-control required" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Descripción corta</label>
                                                        <textarea name="descripcion_corta" rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Descripción larga</label>
                                                        <textarea name="descripcion_larga" rows="8" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <b>Visibilidad</b>
                                                    <div class="material-switch float-right">
                                                        <input id="playlist-swich-visibilidad" name="visibilidad" type="checkbox" value="1">
                                                        <label for="articulo-swich-visibilidad" class="bg-primary"></label>
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
                            <h6><i class="icon icon-mode_edit"></i> IMÁGENES DE LA PLAYLIST</h6>
                        </div>
                        <div class="form-container pt-3">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <i class="fa fa-file-audio-o blue-text"></i>
                                        <strong>IMAGEN PRINCIPAL</strong>
                                    </div>
                                    <div class="card-body registro-cover-uploader">
                                        <form id="form-registro-cover">
                                            <p class="mb-3"><small class="dropzone-description text-center">La imagen principal debe cumplir con las dimensiones mínimas de 1280x720 y menor a 3 MB</small></p>
                                            <div class="cover-img-container">
                                                @if(!empty($registro->cover))
                                                    <img src="{{ $registro->cover }}" data-mime="image/png">
                                                    <input type="hidden" name="cover" value="{{ $registro->cover }}">
                                                @else
                                                <div class="empty-container" style="position: relative">
                                                    <div class="layer-empty"><div class="empty-icon"></div></div>
                                                </div>
                                                @endif
                                            </div>
                                            <hr>
                                            <p class="mb-0">Cover o portada</p>
                                            <p class="mb-3"><small class="dropzone-description text-center">La portada debe cumplir con las dimensiones <b>máximas</b> de 1920x1080 y menor a 2 MB</small></p>
                                            <div class="thumbnail-img-container">
                                                @if(!empty($registro->thumbnail))
                                                    <img src="{{ $registro->thumbnail }}" data-mime="image/png">
                                                    <input type="hidden" name="thumbnail" value="{{ $registro->thumbnail }}">
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
                                                    <li>1.	Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                    <li>2.	Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
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
            <a href="javascript:void(0)" id="btn-guardar-playlist" class="btn btn-success btn-sm">
                <i class="icon icon-save"></i> GUARDAR
            </a>
        </div>
    </div>
</div>


@include('layout.panel.assets')
<link href="{{ asset('css/editorjs-wsm.css') }}" rel="stylesheet">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="{{ asset('js/panel/static/cropper.min.js') }}"></script>
<script src="{{ asset('js/panel/static/jquery-cropper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('js/he.js') }}"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="<?= asset('js/panel/playlists.js') ?>"></script>

</body>
</html>
