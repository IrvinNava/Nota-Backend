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
                        <h4><i class="icon icon-library_books"></i> Documentos fundacionales</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Inicio</a> &raquo;</li>
                    <li><a href="{{ url('administrador/exposiciones') }}">Exposiciones digitales</a> &raquo;</li>
                    <li><a href="{{ url('administrador/exposiciones/nucleos/$exposicion->id') }}">{{ $exposicion->titulo }}</a> &raquo;</li>
                    <li><a href="{{ url('administrador/exposiciones/registros/nucleos/galerias/$nucleo->id') }}">{{ $nucleo->titulo }}</a> &raquo;</li>
                    <!--<li>Documentos fundacionales</li>-->
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Galerías registradas</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-articulo">
                                <i class="icon-plus"></i> AGREGAR GALERÍA
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-exposciones-digitales" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="id">ID</th>
                                            <th data-header="thumbnail">PORTADA</th>
                                            <th data-header="titulo">TÍTULO</th>
                                            <th data-header="visibilidad">ESTATUS</th>
                                            <th data-header="updated_at"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header="acciones"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       

                                    </tbody>
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
                <h5 class="modal-title">Agregar nuevo registro a la línea de tiempo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <input id="id" name="id" class="form-control" type="hidden" value=<?= $nucleo_id ?>>
                    <input id="id_nucleo" name="id_nucleo" class="form-control" type="hidden" value=<?= $nucleo_id ?>>
                    <div class="row">
                        <!--<div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Exposición digital</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <p class="mb-0">Joyas compartidas de Administración y Gobierno Virreinal de la Puebla de los Ángeles</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Núcleo</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <p class="mb-0">Documentos fundacionales</p>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-select-fecha">Nombre de la galería</label>
                                <input id="titulo" name="titulo" type="text" class="form-control required">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-registro" class="btn btn-success btn-sm">
                <!--<a href="{{ url('administrador/exposiciones/nucleo/galeria/editar') }}" id="btn-confirmar-registro" class="btn btn-success btn-sm">-->

                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
            </div>
        </div>
    </div>
</div>

@include('layout.panel.assets')
<script src="{{ asset('js/panel/galerias.js') }}"></script>
</body>
</html>
