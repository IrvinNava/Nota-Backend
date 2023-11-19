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
                        <h4><i class="fa fa-users"></i>VIDEOS</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Videos</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de videos</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-video">
                                <i class="icon-plus-circle"></i>&nbsp;AGREGAR VIDEO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-videos" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID">#</th>
                                            <th data-header="VISTA PREVIA"></th>
                                            <th data-header="TÍTULO">TÍTULO</th>
                                            <th data-header="ESTATUS">ESTATUS</th>
                                            <th data-header="FECHA DE LANZAMIENTO">FECHA DE LANZAMIENTO</th>
                                            <th data-header="AUTOR(ES)">AUTOR(ES)</th>
                                            <th data-header="ÚLTIMA ACTUALIZACIÓN"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
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
<div id="modal-agregar-video" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nuevo video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="video-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="video-input-titulo">Título</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="video-input-titulo" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video-select-categorias">Categoría</label>
                                <select id="video-select-categorias" name="categoria" class="form-control" data-id="1" readonly>
                                    <option value="">- Selecciona una opción -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video-select-subcategorias">Subcategorías</label>
                                <select id="video-select-subcategorias" name="subcategorias[]" class="form-control select2" multiple>
                                    <option value="">- Selecciona una opción -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video-input-fecha_lanzamiento">Fecha de lanzamiento</label>
                                <input type="text" id="video-input-fecha_lanzamiento" name="fecha_lanzamiento" class="form-control input-datetimepicker" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="video-input-duracion">Duración</label>
                                <input type="text" id="video-input-duracion" name="duracion" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-video" class="btn btn-success btn-xs">
                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets')
<script src="{{ asset('js/panel/videos.js') }}"></script>
</body>
</html>
