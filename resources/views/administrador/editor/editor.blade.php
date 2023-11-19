@include('layout.panel.header')
<div id="app">
    @include('layout.panel.sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-format_color_text"></i>
                            TEXTOS
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content animate-panel hpanel">

            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ route('textos.listado') }}">Textos</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>

            <form id="form-contenido" class="">
                <input type="hidden" name="id" id="section-id" value="section->id">
                <input type="hidden" name="type" id="section-type" value="">
                <div class="card">
                    <div class="card-body">
                        <div class="row normal-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Ingresa el título de la publicación</label>
                                    <input name="titulo" class="form-control required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row normal-row">
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="section-etiquetas" class="form-label">Etiquetas</label>
                                        <textarea id="section-etiquetas" name="etiquetas" class="form-control required" placeholder="Ingresa las etiquetas separadas por coma (,)"></textarea>
                                    </div>
                                    <small>Utilice coma (,) para separar entre etiquetas.</small>
                                </div>
                            </div>
                        </div>
                        <div class="iframe mt-2">
                            <div id="editor-contenido" class="contenido-container container show-structure"></div>
                        </div>
                        <div class="row normal-row">
                            <div class="col-md-12 accordion-container">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <h4 class="panel-title card-title m-0">
                                                    <div class="accordion-status warning-status"><span class="fa fa-exclamation-circle"></span></div>
                                                    <span class="fa fa-image"></span> Cover
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body card-body">
                                                <!-- Cover y thumbnail -->
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <label for=""><div class="accordion-step">1.</div> Cover</label>
                                                                <div id="section-cover-generator" class="form-group">
                                                                    <div class="w-100 ">
                                                                        <div class="alert ip-alert"></div>
                                                                        <div class="ip-info">Con la ayuda del puntero seleccione la región que aparecerá como vista previa. Al finalizar de click en "Guardar imagen"</div>
                                                                        <div class="ip-preview"></div>
                                                                        <br>
                                                                        <button class="btn btn-success ip-save"><i class="fa fa-floppy-o"></i> Guardar imagen</button>
                                                                        <div class="ip-progress">
                                                                            <div class="text">Subiendo</div>
                                                                            <div class="progress m-t-xs full progress-striped active"><div class="progress-bar progress-bar-success"></div></div>
                                                                        </div>
                                                                        <div class="vista-previa-cover ">
                                                                            <img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" class="img-thumbnail img-responsive">
                                                                            <input type="hidden" name="cover" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png">
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-100 upload-controls">
                                                                        <div class="btn btn-success ip-upload">
                                                                            <i class="fa fa-cloud-upload"></i> Subir imagen<input type="file" name="file" class="ip-file">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #c5c5c5">
                                                        <label>Vista previa <small>(Aproximación)</small></label>
                                                        <div style="clear"></div>
                                                        <label style="margin-top: 15px"><div class="accordion-step">1.</div> Cover</label>
                                                        <!-- <div class="" style="background: #F15A24; width: 100%; height: 20px; display: flex; align-items: center; justify-content: flex-end">
                                                            <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                            <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                            <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                            <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                            <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                        </div> -->
                                                        <!-- <div id="cover-aprox" style="background-image: url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 90px; border: 1px solid #e3e3e3; padding: 3px 10%"></div> -->
                                                        <!-- <div style="background: #fff; width: 100%; height: auto; border: 1px solid #e3e3e3; padding: 3px 10%">
                                                            <p style="font-size: .6em; font-weight: bold;">Inicio / Sección</p>
                                                            <div style="background: #c7c5c5; width: 50%; height: 4px; margin-bottom: 4px"></div>
                                                            <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                            <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                            <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                            <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Panel -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <h4 class="panel-title card-title m-0">
                                                    <div class="accordion-status warning-status"><span class="fa fa-exclamation-circle"></span></div>
                                                    <span class="fa fa-image"></span> Thumbnail
                                                </h4>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body card-body">
                                                <!-- Thumbnail -->
                                                <div class="row">
                                                    <div class="col-md-8" id="accordion-thumbnail-form" style="opacity: .5">
                                                        <div class="col-md-4">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <label for=""><div class="accordion-step">2.</div>  Thumbnail</label>
                                                                    <div id="section-thumbnail-generator" class="form-group">
                                                                        <div class="w-100">
                                                                            <div class="alert ip-alert"></div>
                                                                            <div class="ip-info">Con la ayuda del puntero seleccione la región que aparecerá como vista previa. Al finalizar de click en "Guardar vista previa"</div>
                                                                            <div id="preview-thumbnail" class="ip-preview"></div>
                                                                            <br>
                                                                            <button class="btn btn-success ip-save"><i class="fa fa-floppy-o"></i> Guardar imagen</button>
                                                                            <div class="ip-progress">
                                                                                <div class="text">Subiendo</div>
                                                                                <div class="progress m-t-xs full progress-striped active"><div class="progress-bar progress-bar-success"></div></div>
                                                                            </div>
                                                                            <div class="vista-previa-thumbnail row">
                                                                                <div class="col-sm-12">
                                                                                    <img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/thumbnail-placeholder.png" class="img-thumbnail img-responsive">
                                                                                    <input type="hidden" name="thumbnail" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/thumbnail-placeholder.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="w-100 upload-controls">
                                                                            <a class="col-sm-12 btn btn-info ip-edit"><i class="fa fa-image"></i> Generar thumbnail</a>
                                                                            <div style="clear: both; width: 100%; height: 1px"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="border-left: 1px solid #c5c5c5">
                                                        <label>Vista previa <small>(Aproximación)</small></label>
                                                        <div style="clear"></div>
                                                        <label for=""><div class="accordion-step">2.</div> Thumbnail</label>
                                                        <!-- <div style="max-width: 130px; margin-left: auto; margin-right: auto">
                                                            <div id="thumbnail-aprox" style="background-image: url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/thumbnail-placeholder.png'); background-repeat: no-repeat; background-position: center; background-size: cover; width: 100%; height: 130px; border: 1px solid #e3e3e3; padding: 3px 10%">
                                                            </div>
                                                            <div class="" style="background: #F15A24; width: 100%; height: 20px; display: flex; align-items: center; justify-content: flex-start">
                                                                <div style="background: #fff; width: 80%; height: 3px; margin-left: 10px"></div>
                                                            </div>
                                                            <div style="background: #fff; width: 100%; height: auto; border: 1px solid #e3e3e3; padding: 3px 10%">
                                                                <div style="background: #c7c5c5; width: 50%; height: 4px; margin-top: 5px"></div>
                                                                <div style="background: #F15A24; width: 80%; height: 4px; margin-top: 5px"></div>
                                                                <div style="background: #000; width: 100%; height: 4px; margin-top: 5px"></div>
                                                                <div style="background: #000; width: 100%; height: 4px; margin-top: 5px"></div>
                                                                <div style="background: #000; width: 100%; height: 4px; margin-top: 5px; margin-bottom: 10px"></div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                               <!-- <div class="panel panel-default">-->
<!--                                                    <div class="panel-heading" role="tab" id="headingThree">-->
<!--                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--                                                            <h4 class="panel-title card-title">-->
<!--                                                                <span class="fa fa-code"></span> Metadata-->
<!--                                                                <div class="accordion-status warning-status"><span class="fa fa-exclamation-circle fa-2x"></span></div>-->
<!--                                                            </h4>-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">-->
<!--                                                        <div class="panel-body card-body">-->
<!--                                                            <p>Algo 3</p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="panel-footer card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress progress-xs">
                                    <div class="progress-bar card-progress-bar progress-bar-indicator hide" role="progressbar" style="width: 0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 footer-btns">
                                <a href="javascript:void(0)" id="btn-editor-agregar-texto" class="btn btn-outline-secondary btn-sm">
                                    <i class="icon-format_color_text"></i>
                                    AÑADIR TEXTO
                                </a>
                                <a href="javascript:void(0)" id="btn-open-gallery" class="btn btn-outline-secondary fileinput-button btn-sm">
                                    <i class="icon-photo2"></i>
                                    AÑADIR IMAGEN
                                </a>
                                <a href="javascript:void(0)" id="btn-open-files" class="btn btn-outline-secondary fileinput-button btn-sm">
                                    <i class="icon-attach_file"></i>
                                    AÑADIR ARCHIVO
                                </a>
                                <a href="javascript:void(0)" id="btn-editor-agregar-galeria" class="btn btn-outline-secondary fileinput-button btn-sm">
                                    <i class="icon-photo_library"></i>
                                    AÑADIR GALERÍA
                                    <input type="file" name="files[]" multiple>
                                </a>
                                <a href="javascript:void(0)" id="btn-editor-agregar-boton" class="btn btn-outline-secondary fileinput-button btn-sm">
                                    <i class="icon-radio_button_checked"></i>
                                    AÑADIR BOTÓN
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0)" id="btn-guardar-contenido" class="btn btn-primary btn-block fileinput-button">
                                    <i class="fa fa-save"></i>&nbsp;
                                    GUARDAR
                                </a>
                                <a href="javascript:void(0)" id="cancel-resources" class="btn btn-primary btn-block fileinput-button hidden">
                                    <i class="fa fa-close"></i>
                                    CERRAR
                                </a>
                                <!-- Algo -->
                            </div>
                            <div class="col-md-12 footer-btns" style="margin-top: 5px">
                                <div class="switch-container">
                                    <span>Ver estructura: </span> <div id="switch-structure" class="switch active-switch"><span></span></div>
                                </div>
                                <!-- <div class="switch-container">
                                <span>Versión movil: </span> <div id="switch-mobile" class="switch"><span></span></div>
                                </div> -->
                                <div class="switch-container">
                                    <span>Oculto</span> <div id="switch-visibility" class="switch" data-visibilidad=""><span></span></div> <span>Visible</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="pull-right"><i class="fa fa-clock-o"> </i> Última modificación: 13/10/2020 13:44</span>
                            </div>
                        </div>
                        <!-- Gallery Content -->
                        <div class="gallery-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Agregar imagen</h4>
                                    <form id="editor-imagenes-dropzone" action="" class="dropzone dz-clickable">
                                        <div class="dz-default dz-message">
                                            <span>Arrastre archivos a aquí para subirlos.</span>
                                        </div>
                                    </form>
                                    <a href="javascript:void(0)" id="btn-editor-agregar-imagen" class="btn btn-primary btn-block fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        AGREGAR IMAGEN
                                        <input type="file" name="files[]" multiple>
                                    </a>
                                </div>
                                <div class="col-md-8 gallery-list-container">
                                    <h4>Imágenes almacenadas <div class="gallery-loader" style="display: none"></div></h4>
                                    <input id="section-busqueda-imagenes" type="text" class="form-control gallery-input-search" placeholder="Teclea algo para buscar...">
                                    <div class="row editor-gallery-items"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Files Content -->
                        <div class="files-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Agregar archivo</h4>
                                    <form id="editor-imagenes-dropzone" action="" class="dropzone dz-clickable">
                                        <div class="dz-default dz-message">
                                            <span>Arrastre archivos a aquí para subirlos.</span>
                                        </div>
                                    </form>
                                    <a href="javascript:void(0)" id="btn-editor-agregar-archivo" class="btn btn-primary btn-block fileinput-button">
                                        <i class="fa fa-paperclip"></i>
                                        AÑADIR ARCHIVO
                                        <input type="file" name="files[]" multiple>
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <h4>Archivos almacenados <div class="gallery-loader"></div></h4>
                                    <input id="section-busqueda-archivos" type="text" class="form-control files-input-search" placeholder="Teclea algo para buscar...">
                                    <div class="row editor-files-items"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@include('layout.panel.assets')
<!-- <link href="{{ asset('css/panel/editor/ma-panel-style.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/panel/editor/imgpicker.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/panel/editor/sweet-alert.css') }}">
<link rel="stylesheet" href="{{ asset('css/panel/editor/jquery.fileupload.css') }}">
<link rel="stylesheet" href="{{ asset('css/panel/editor/notyf.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/panel/editor/jquery.tag-editor.css') }}" />
<link href="{{ asset('css/panel/editor/editor.css') }}" rel="stylesheet">
<link href="{{ asset('css/panel/editor/editor.extra-styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/panel/editor/editor.external-styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/panel/editor/helper.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/panel/editor/font-awesome.css') }}" />

<script src="{{ asset('js/panel/editor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/panel/editor/sweet-alert.min.js') }}"></script>
<script src="{{ asset('js/panel/editor/jquery.fileupload.js') }}"></script>
<script src="{{ asset('js/panel/editor/sortable.js') }}"></script>
<script src="{{ asset('js/panel/editor/toastr.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/config.js') }}"></script>
<script src="{{ asset('js/panel/editor/jquery.caret.min.js') }}"></script>
<script src="{{ asset('js/panel/editor/jquery.tag-editor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/panel/editor/jquery.Jcrop.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/panel/editor/jquery.imgpicker.min.js') }}"></script>
<script src="{{ asset('js/panel/editor/notyf.min.js') }}"></script>
<script src="{{ asset('js/panel/editor/editor.js') }}"></script>

</body>
</html>
