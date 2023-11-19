@include('layout.panel.header', ['titulo' => 'Agregar usuario'])
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel./sidebar', ['position' => 1])
    @include('layout.panel.topbar', [])
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="fa fa-pencil"></i>
                            EDITAR TRANSMISIÓN
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador') }}">Inicio</a> &raquo;</li>
                    <li><a href="{{ url('administrador/transmisiones') }}"> Transmisiones</a> &raquo;</li>
                    <li>Editar transmisión</li>
                </ul>
                <hr/>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-8">

                    <div class="card">
                        <div class="card-header white">
                            <i class="icon icon-wifi_tethering s-18"></i>
                            <strong>EDITAR TRANSIMISIÓN EN VIVO</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="form-transmision">
                                        <div class="form-group col-md-12">
                                            <label for="transmision-titulo" class="col-form-label">Título</label>
                                            <input type="text"  name="" class="form-control" placeholder="Los cuerpos del desierto | Rometti Costales y Jorge Pavéz Ojeda">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="transmision-titulo" class="col-form-label">Evento</label>
                                            <input type="text"  name="" class="form-control" value="ROMETTI COSTALES Y JORGE PAVÉZ OJEDA">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="transmision-descripcion" class="col-form-label">Descripción</label>
                                            <textarea class="form-control " rows="6">Los cuerpos del desierto título tomado del texto de Jorge Pavéz Ojeda, plantea cómo la excavación y la extracción o desplazamiento de cuerpos y de objetos permiten desplegar u ocultar otro tipo de narrativas, llevando a cabo un análisis de cómo este tipo de hallazgos arqueológicos pueden ser instrumentalizados con otros fines específicos. Por su parte, Víctor Costales, del dúo Rometti Costales, habla sobre el contexto de Chile, su posición geográfica y su relevancia histórica contemporánea tanto en la historia de Latinoamérica como en la global.</textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="accordion" id="accordionTransmision">
                                                <div class="card">
                                                    <div class="card-header" id="headingYoutube">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseYoutube" aria-expanded="true" aria-controls="collapseYoutube">
                                                                <i class="icon icon-youtube"></i> Transmisión desde YouTube
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseYoutube" class="collapse" aria-labelledby="headingYoutube" data-parent="#accordionTransmision">
                                                        <div class="card-body">
                                                            <div class="form-group col-md-12">
                                                                <label for="youtube-url-input" class="col-form-label">Enlace del video en vivo</label>
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend"><span class="input-group-text add-on"><i class="icon icon-youtube-play"></i></span></div>
                                                                    <input id="youtube-url-input" type="url" name="enlace" class="form-control required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingFacebook">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseFacebook" aria-expanded="false" aria-controls="collapseFacebook">
                                                                <i class="icon icon-facebook-square"></i> Transmisión desde Facebook
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseFacebook" class="collapse show" aria-labelledby="headingFacebook" data-parent="#accordionTransmision">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between mt-3">
                                                                <div>
                                                                    <label for="facebook-code-input" class="col-form-label p-0">Código para incrustar</label><br>
                                                                    <small>Recuerda que el código comienza normalmente con "&lsaquo;iframe src..." </small>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-link text-dark btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                                                                        <i class="icon-help"></i> Ayuda con editor
                                                                    </button>
                                                                    <div class="dropdown-menu editorjs-dropdown" aria-labelledby="dropdownMenuButton" style="min-width: 370px;">
                                                                        <p class="mx-2">1. Dirígete al video que quieres compartir en el perfil de MA en Facebook y haz click sobre los tres puntos al final. <img src="{{ asset('img/ma-video-capture-1.jpg') }}"></p>
                                                                        <div class="dropdown-divider"></div>
                                                                        <p class="mx-2">2. De las opciones que ves en el submenú, selecciona "Insertar" <img src="{{ asset('img/ma-video-capture-2.jpg') }}" alt=""></p>
                                                                        <div class="dropdown-divider"></div>
                                                                        <p class="mx-2">3. Da click en el botón "Copiar código". Es importante dejar la casilla desactivada. <img src="{{ asset('img/ma-video-capture-3.jpg') }}"></p>
                                                                        <div class="dropdown-divider"></div>
                                                                        <p class="mx-2">4. Pega el código en el campo solicitado.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <textarea id="facebook-code-input" class="form-control" rows="5"><iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FMuseoAmparo.Puebla%2Fvideos%2F1466226680241548%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="list-group-item">
                                                Mostrar
                                                <div class="material-switch float-right">
                                                    <input id="btn-switch-transimision-visibilidad" name="visibilidad" type="checkbox" value="1" checked>
                                                    <label for="btn-switch-transimision-visibilidad" class="bg-success"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <p class="float-left"><small><b>Última actualización:</b> 17:34 06/12/2020</small></p>
                            <a href="#" id="btn-guardar-usuario" class="btn btn-warning float-right">
                                <i class="icon-save"></i>
                                ACTUALIZAR TRANSMISIÓN
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
<script src="<?= asset('js/panel/transmisiones.js') ?>"></script>
</body>
</html>
