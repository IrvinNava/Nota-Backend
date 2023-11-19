@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel.sidebar', ['position' => 1])
    @include('layout.panel.topbar', [])
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-link2"></i>
                            COLABORACIONES
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/colaboraciones') }}">Colaboraciones</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de colaboraciones</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript]:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-colaboracion">
                                <i class="fa fa-plus"></i> AGREGAR COLABORACIÓN
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-colaboraciones" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID"></th>
                                            <th data-header="NOMBRE">NOMBRE</th>
                                            <th data-header="ÚLTIMA ACTUALIZACIÓN"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header=""></th>
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

<div id="modal-agregar-colaboracion" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nueva colaboración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input-nombre-colaboracion">Nombre de la colaboración</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="input-nombre-colaboracion" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-guardar-colaboracion" class="btn btn-success btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Guardar
                </a>
            </div>
        </div>
    </div>
</div>

<div id="modal-actualizar-colaboracion" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar colaboracion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-actualizar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input-actualizar-colaboracion">Nombre de la colaboracion</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input type="hidden" id="input-actualizar-colaboracion-id" name="id" value="">
                                    <input id="input-actualizar-colaboracion" name="titulo" type="text" class="form-control required" value="Colaboración Demo">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-actualizar-colaboracion" class="btn btn-warning btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Actualizar
                </a>
            </div>
        </div>
    </div>
</div>

@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
<script src="<?= asset('js/panel/colaboraciones.js') ?>"></script>
</body>
</html>
