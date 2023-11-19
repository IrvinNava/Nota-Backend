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
                        <h4><i class="icon icon-format_color_text"></i>TEXTOS</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Textos</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de textos</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-texto">
                                <i class="icon-plus"></i> AGREGAR TEXTO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-textos" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID">#</th>
                                            <th data-header="VISTA PREVIA"></th>
                                            <th data-header="TÍTULO">TÍTULO</th>
                                            <th data-header="ESTATUS">ESTATUS</th>
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
<div id="modal-agregar-texto" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nuevo texto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="texto-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="texto-input-titulo">Título</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="texto-input-titulo" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="texto-select-categorias">Categoría</label>
                                <select id="texto-select-categorias" name="categoria" class="form-control" data-id="3" readonly>
                                    <option value="">- Selecciona una opción -</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="texto-select-subcategorias">Subcategorías</label>
                                <select id="texto-select-subcategorias" name="subcategorias[]" class="form-control select2" multiple>
                                    <option value="">- Selecciona una opción -</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-xs" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-texto" class="btn btn-success btn-xs">
                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets')
<script src="{{ asset('js/panel/textos.js') }}"></script>
</body>
</html>
