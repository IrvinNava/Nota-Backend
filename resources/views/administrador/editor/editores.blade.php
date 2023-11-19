@include('layout.panel.header')
@include('layout.panel.topbar')
@include('layout.panel.sidebar')
<div id="wrapper">
    <div class="normalheader small-header">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="javascript:void(0)">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="">Inicio</a></li>
                        <li class="active">
                                <span>Agregar Contenido</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                        Agregar Contenido
                </h2>
            </div>
        </div>
    </div>
    <div class="content animate-panel">
        <div class="row">
            <div class="col-sm-12">
                <div class="hpanel hgray">
                    <div class="panel-body">
                        <form id="form-contenido" class="form-material">
                            <input type="hidden" name="id" id="section-id" value="section->id">
                            <input type="hidden" name="type" id="section-type" value="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row normal-row">
                                        <div class="col-md-11">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <label for="section-titulo" class="form-label">Ingresa el nombre de la sección</label>
                                                    <input id="section-titulo" name="titulo" class="form-control form-control-lg required" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group form-float">
                                                <label for="contenido-titulo" class="form-label">Idioma</label>
                                                <select id="section-locale" class="form-control">
                                                    <option value="es">ES</option>
                                                    <option value="en">EN</option>
                                                </select>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iframe">
                                        <div id="editor-contenido" class="contenido-container container show-structure"></div>
                                    </div>
                                    <div class="row normal-row">
                                        <div class="col-md-12 accordion-container">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <h4 class="panel-title">
                                                                Titulo Panel
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <h4 class="panel-title">
                                                                <div class="accordion-status success-status"><span class="fa fa-check-circle fa-2x"></span></div>
                                                                <span class="fa fa-image"></span> Cover
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <!-- Cover y thumbnail -->
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
                                                                <div class="" style="background: #F15A24; width: 100%; height: 20px; display: flex; align-items: center; justify-content: flex-end">
                                                                    <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                                    <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                                    <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                                    <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                                    <div style="background: #fff; width: 20px; height: 3px; margin-right: 10px"></div>
                                                                </div>
                                                                <div id="cover-aprox" style="background-image: url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 90px; border: 1px solid #e3e3e3; padding: 3px 10%"></div>
                                                                <div style="background: #fff; width: 100%; height: auto; border: 1px solid #e3e3e3; padding: 3px 10%">
                                                                    <p style="font-size: .6em; font-weight: bold;">Inicio / Sección</p>
                                                                    <div style="background: #c7c5c5; width: 50%; height: 4px; margin-bottom: 4px"></div>
                                                                    <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                                    <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                                    <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                                    <div style="background: #c7c5c5; width: 100%; height: 4px; margin-bottom: 4px"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Thumbnail Panel -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <h4 class="panel-title">
                                                                <div class="accordion-status success-status"><span class="fa fa-check-circle fa-2x"></span></div>
                                                                <span class="fa fa-image"></span> Thumbnail
                                                            </h4>
                                                        </a>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <!-- Thumbnail -->
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
                                                                <div style="max-width: 130px; margin-left: auto; margin-right: auto">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!--                                                <div class="panel panel-default">-->
<!--                                                    <div class="panel-heading" role="tab" id="headingThree">-->
<!--                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--                                                            <h4 class="panel-title">-->
<!--                                                                <span class="fa fa-code"></span> Metadata-->
<!--                                                                <div class="accordion-status warning-status"><span class="fa fa-exclamation-circle fa-2x"></span></div>-->
<!--                                                            </h4>-->
<!--                                                        </a>-->
<!--                                                    </div>-->
<!--                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">-->
<!--                                                        <div class="panel-body">-->
<!--                                                            <p>Algo 3</p>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress progress-xs">
                                    <div class="progress-bar card-progress-bar progress-bar-indicator hide" role="progressbar" style="width: 0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 footer-btns">
                                <a href="javascript:void(0)" id="btn-editor-agregar-texto" class="btn btn-outline-primary btn-sm">
                                    <i class="fa fa-font"></i>
                                    AÑADIR TEXTO
                                </a>
                                <a href="javascript:void(0)" id="btn-open-gallery" class="btn btn-outline-success fileinput-button btn-sm">
                                    <i class="fa fa-image"></i>
                                    AÑADIR IMAGEN
                                </a>
                                <a href="javascript:void(0)" id="btn-open-files" class="btn btn-outline-success fileinput-button btn-sm">
                                    <i class="fa fa-paperclip"></i>
                                    AÑADIR ARCHIVO
                                </a>
                                <a href="javascript:void(0)" id="btn-editor-agregar-galeria" class="btn btn-outline-success fileinput-button btn-sm">
                                    <i class="fa fa-file-image-o"></i>
                                    AÑADIR GALERÍA
                                    <input type="file" name="files[]" multiple>
                                </a>
                                <a href="javascript:void(0)" id="btn-editor-agregar-boton" class="btn btn-outline-success fileinput-button btn-sm">
                                    <i class="fa fa-plus-square"></i>
                                    AÑADIR BOTÓN
                                </a>
                                <a href="javascript:void(0)" id="btn-metadata" class="btn btn-outline-success fileinput-button btn-sm">
                                    <i class="fa fa-share-alt"></i>
                                    META-INFORMACIÓN
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
                                <span class="pull-right"><i class="fa fa-clock-o"> </i> Última modificación: </span>
                            </div>
                        </div>
                        <!-- Gallery Content -->
                        <div class="row gallery-content">
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
                        <!-- Files Content -->
                        <div class="row files-content">
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
        </div>
        <!-- Metadatos -->
        <div class="metadata-form-container">
            <div class="metadata-content-container">
                <div class="meta-header row normal-row">
                    <div class="metadata-close"></div>
                </div>
                <div class="meta-loader"></div>
                <form id="form-section-metadata">
                    <div class="row normal-row">
                        <div class="col-md-9">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="meta-titulo" class="form-label">Título de la publicación</label>
                                    <input id="section-metadata-title" name="title" class="form-control form-control-lg required" type="text" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Idioma</label>
                            <select id="section-metadata-locale" class="form-control">
                                <option value="es" selected>ES</option>
                                <option value="en">EN</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="meta-descripcion" class="form-label">Descripción</label>
                                    <textarea id="section-metadata-description" name="description" rows="3" class="metadescription "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Facebook -->
                    <div class="row normal-row">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFacebook">
                                <a class="collapsed" role="button">
                                    <h4 class="panel-title">
                                        <span class="fa fa-facebook-official fa-lg"></span> | Portada compartida en Facebook
                                    </h4>
                                </a>
                            </div>
                            <div id="" class="panel-collapse collapse in">
                                <div class="panel-body mb-0">
                                    <div class="col-md-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label for="">Medidas mínimas sugeridas: 600 x 315 | <a href="https://developers.facebook.com/docs/sharing/webmasters/images/?locale=es_ES" class="meta-link-references" target="_blank">Más información</a></label>
                                                <div id="section-metadata-facebook-generator" class="form-group">
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
                                                        <div class="vista-previa-metadata-facebook">
                                                            <img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" class="img-thumbnail">
                                                            <input type="hidden" name="fb_image" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png">
                                                        </div>
                                                    </div>
                                                    <div class="w-100 upload-controls">
                                                        <div class="btn btn-success ip-upload facebook-btn">
                                                            <i class="fa fa-cloud-upload"></i> Subir imagen<input type="file" name="file" class="ip-file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-12" style="border-left: 1px solid #c5c5c5">
                                        <div class="alert alert-warning" role="alert">
                                            <small><b>Vista previa (Aproximación)</b> | El resultado final puede variar con base a los criterios de Facebook</small>
                                        </div>
                                        <div style="clear"></div>
                                        <div class="fb-profile-container">
                                            <div class="museoamparo-profile-image"></div>
                                            <p>Perfil Visitante <br> <span>12 de diciembre de 2020</span> </p>
                                        </div>
                                        <img id="metadata-example-facebook-image" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" alt="">
                                        <div style="background: #f2f3f5; width: 100%; height: auto; border: 1px solid #dadde1; padding: 5px 8px">
                                            <p style="font-size: .6em; margin-bottom: 3px">MUSEOAMPARO.COM</p>
                                            <p id="metadata-example-facebook-title" style="font-size: .7em; font-weight: bold; color: #000; margin-bottom: 5px">Título de la publicación</p>
                                            <p id="metadata-example-facebook-description" style="font-size: .6em; color: #909090; margin-bottom: 5px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Twitter -->
                    <div class="row normal-row">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwiiter">
                                <a class="collapsed" role="button">
                                    <h4 class="panel-title">
                                        <span class="fa fa-twitter-square fa-lg"></span> | Portada compartida en Twitter
                                    </h4>
                                </a>
                            </div>
                            <div id="" class="panel-collapse collapse in">
                                <div class="panel-body mb-0">
                                    <div class="col-md-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <label for="">Medidas sugeridas: 680x356 | <a href="https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary-card-with-large-image" class="meta-link-references" target="_blank">Más información</a></label>
                                                <div id="section-metadata-twitter-generator" class="form-group">
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
                                                        <div class="vista-previa-metadata-twitter">
                                                            <img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" class="img-thumbnail">
                                                            <input type="hidden" name="tw_image" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png">
                                                        </div>
                                                    </div>
                                                    <div class="w-100 upload-controls">
                                                        <div class="btn btn-primary ip-upload twitter-btn">
                                                            <i class="fa fa-cloud-upload"></i> Subir imagen<input type="file" name="file" class="ip-file">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-12" style="border-left: 1px solid #c5c5c5;">
                                        <div class="alert alert-warning" role="alert">
                                            <small><b>Vista previa (Aproximación)</b> | El resultado final puede variar con base a los criterios de Twiiter</small>
                                        </div>
                                        <div style="clear"></div>
                                        <div class="tw-profile-container">
                                            <div class="museoamparo-profile-image"></div>
                                            <p>Perfil Visitante <span>@PerfilVisitante &middot; 10s</span> </p>
                                        </div>
                                        <img id="metadata-example-twitter-image" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" style="border-radius: 5px 5px 0 0;">
                                        <div style="background: #f2f3f5; width: 100%; height: auto; border: 1px solid #ececec; padding: 5px 8px; border-radius: 0 0 5px 5px;">
                                            <p id="metadata-example-twitter-title" style="font-size: .6em; margin-bottom: 3px; color: #000">Título de la publicación</p>
                                            <p id="metadata-example-twitter-description" style="font-size: .6em; color: #909090; margin-bottom: 5px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="meta-footer row normal-row">
                    <div class="col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 ">
                        <a href="javascript:void(0)" id="btn-actualizar-metadata-section" class="btn btn-primary btn-block fileinput-button">
                            <i class="fa fa-save"></i>&nbsp;
                            Guardar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.panel.assets')
</div>
</body>
<link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
<link href="{{ asset('css/imgpicker.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/sweet-alert.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fileupload.css') }}">
<link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.tag-editor.css') }}" />
<link href="{{ asset('css/panel/editor.css') }}" rel="stylesheet">
<link href="{{ asset('css/panel/editor.external-styles.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/sweet-alert.min.js') }}"></script>
<script src="{{ asset('js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('js/sortable.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/notyf.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/config.js') }}"></script>
<script src="{{ asset('js/jquery.caret.min.js') }}"></script>
<script src="{{ asset('js/jquery.tag-editor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.Jcrop.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.imgpicker.js') }}"></script>
<script src="{{ asset('js/notyf.min.js') }}"></script>
<script src="{{ asset('js/static/cracknd.js') }}"></script>
<script src="{{ asset('js/panel/editor.js') }}"></script>

</html>
