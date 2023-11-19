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
                        <h4><i class="icon icon-photo_library text-lime s-18"></i>&nbsp;<span>Galería</span></h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-wrapper animatedParent animateOnce p-0">
            <div class="tab-pane animated fadeInUpShort show active go" id="v-pills-1">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-8 p-0">
                        <div class="card">
                            <div class="card-body white">
                                <h4 class="mb-3"><b>Datos de la galería</b></h4>
                                <form id="form-registro">
                                    <input type="hidden" id="registro-input-id" name="id" value="{{$evento->id}}">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="registro-input-titulo">Descripción</label>
                                            <div class="d-flex justify-content-between">
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
                                            <label for="registro-input-titulo">Galería</label>
                                            <div class="gallery-container">
                                                <div class="row">
                                                     @if($galeria->count())
                                                        @foreach($galeria as $imagen)
                                                            <div class="col-md-3 mb-4"> <a class="btn btn-sm btn-danger btn-drop-timeline-media" data-id="{{$imagen->id}}" data-id-galeria="{{$evento->id}}" href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><img src="{{$imagen->url}}" data-mime="{{$imagen->mime}}"></div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <hr>











                                            <input type="file" id="registro-input-gallery" class="filepond mt-3" name="upload_file" multiple>








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
                                                        <li>1.	Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                        <li>2.	Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
                                                    </ul>
                                                    <p><b>¿Por qué esto es importante?</b><br>Al respetar dimensiones y pasar los recursos gráficos por un proceso de compasión ayudamos a que la carga de un sitio web suceda de manera rápida y eficiente.</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 relative p-0">
                        <div class="form-container">
                            <div class="form-structure-container">
                                <div class="card mb-3">
                                    <div class="card-header white">
                                        <h4 class="mb-3"><b>Datos del tema en la línea del tiempo</b></h4>
                                    </div>
                                    <div class="card-body registro-cover-uploader">
                                        <div class="d-flex justify-content-between mt-3">
                                        </div>
                                            <p>Estás agregando una galería al tema:</p>
                                            <p class="mb-0 font-weight-bold">{{ $evento->titulo }}</p>
                                            <img src="{{ $evento->thumbnail }}" data-mime="image/png">
                                            <hr>
                                            <div class="save-update-content-containe">
                                                <div class="d-flex justify-content-between">
                                                    <small><strong>Última actualización:</strong><br>{{ $evento->updated_at }}</small>
                                                    <a href="javascript:void(0)" id="btn-actualizar-registro-timeline" class="btn btn-success float-right">
                                                        <i class="icon icon-save"></i> ACTUALIZAR
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
</div>

@include('layout.panel.assets')
<link href="{{ asset('css/editorjs-wsm.css') }}" rel="stylesheet">
<script src="{{ asset('js/editorjs-wsm.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="{{ asset('js/he.js') }}"></script>
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

<!-- Filepond -->

<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>

<!-- Editor -->
<script>
    let contenido =  @if(!empty($evento->contenido_galeria)) JSON.parse('{!! $evento->contenido_galeria !!}') @else [] @endif;
    if(typeof contenido != "undefined"){
        contenido.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            contenido.blocks[i].data.text = he.decode(content);
        });
    }
</script>

<script type="text/javascript">

</script>
<script src="{{ asset('js/panel/timelinegaleria.js') }}"></script>
</body>
</html>
