@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel.sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4><i class="icon icon-library_books"></i> Exposiciones digitales</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Inicio</a> &raquo;</li>
                    <li>Exposiciones digitales</li>
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Exposiciones registradas</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm btn-success" data-toggle="modal" data-target="#modal-agregar-articulo">
                                <i class="icon-plus"></i> AGREGAR EXPOSICIÓN
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-exposiciones" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID">#</th>
                                            <th data-header="THUMBNAIL"></th>
                                            <th data-header="TITULO">TITULO</th>
                                            <th data-header="VISIBILIDAD">VISIBILIDAD</th>
                                            <th data-header="UPDATED"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header=""></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-agregar-articulo" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nueva exposición digital</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Título de la exposición</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="exposicion-input-titulo" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <div class="form-group">
                                <label for="registro-select-fecha">Fecha del</label>
                                <input id="exposicion-fecha-inicio" name="fecha_inicio" type="text" class="form-control input-datetimepicker required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="registro-select-fecha">Fecha al</label>
                                <input id="exposicion-fecha-fin" name="fecha_fin" type="text" class="form-control input-datetimepicker required">
                            </div>
                        </div>-->
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-exposicion" class="btn btn-success btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
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
<script src="{{ asset('js/panel/exposiciones-digitales.js') }}"></script>
</body>
</html>
