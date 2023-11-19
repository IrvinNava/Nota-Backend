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
                        <h4><i class="icon icon-mode_edit text-lime s-18"></i>&nbsp;<span>EDITAR SLIDER</span></h4>
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
                                <h4 class="mb-3"><b>Datos del slider</b></h4>
                                <form id="form-registro">
                                    <input type="hidden" id="slider-input-id" name="id" value="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="registro-input-titulo">Título</label>
                                                <div class="input-group mb-2 custom-select-2-container">
                                                    <input id="slider-input-titulo" name="titulo" type="text" class="form-control required" value="Línea del tiempo: 30 años">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Subtitulo</label>
                                                            <input id="slider-input-subtitulo" name="subtitulo" type="text" class="form-control required" value="El Amparo eres tú, 30 aniversario">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="slider-fecha-inicio">Fecha Inicio</label>
                                                        <input id="slider-fecha-inicio" name="fecha_inicio" type="text" class="form-control input-datetimepicker" value="25/10/2021">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="slider-fecha-fin">Fecha Fin</label>
                                                        <input id="slider-fecha-fin" name="fecha_fin" type="text" class="form-control input-datetimepicker" value="25/10/2021">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Descripción corta</label>
                                                        <textarea name="name" rows="4" class="form-control">Desde su inauguración en 1991, el Museo Amparo ha sido un punto de encuentro en el Centro Histórico de Puebla para compartir diálogos, experiencias y aproximaciones al arte en México.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Descripción larga</label>
                                                        <textarea name="name" rows="8" class="form-control">Amparo Online es un archivo digital que contiene múltiples documentos derivados de nuestras colecciones, exposiciones y programas públicos, que abarcan desde el arte prehispánico y virreinal hasta el contemporáneo. En este micrositio se comparten selecciones temáticas de estos materiales −audios, videos, textos, fotografías−, que se irán incrementando periódicamente. De esta manera, es posible consultar y activar en un solo sitio contenidos antes disponibles en distintas plataformas. El objetivo principal de este espacio es difundir nuestro acervo documental desde nuevas perspectivas, así como proporcionar herramientas para estudiantes y públicos interesados en las diferentes líneas temáticas, lo cual les permitirá explorar e interactuar con los contenidos de manera más dinámica.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="texto-select-subcategorias">Link</label>
                                                        <input id="slider-input-link" name="link" type="text" class="form-control required" value="Un link bárbaro">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <b>Visibilidad</b>
                                                    <div class="material-switch float-right">
                                                        <input id="slider-swich-visibilidad" name="visibilidad" type="checkbox" value="1" checked>
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
                            <h6><i class="icon icon-mode_edit"></i> EDITAR IMÁGENES DEL SLIDER</h6>
                        </div>
                        <div class="form-container pt-5">
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
                                            <p>Thumbnail (Miniatura)</p>
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
            <small><strong>Última actualización:</strong><br>13:34 18/02/2021</small>
            <a href="javascript:void(0)" id="btn-actualizar-slider" class="btn btn-success float-right btn-sm">
                <i class="icon icon-save"></i> ACTUALIZAR
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



</body>
</html>
