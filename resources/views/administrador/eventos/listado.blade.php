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
                            <i class="icon icon-event_note"></i>
                            EVENTOS
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/gestion-eventos') }}">Eventos</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de eventos</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="" class="btn btn-ma btn-sm btn-evento" data-toggle="modal" data-target="#modal-agregar-evento">
                                <i class="fa fa-plus"></i> AGREGAR EVENTO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-eventos" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID"></th>
                                            <th data-header="NOMBRE DE EVENTO">NOMBRE DE EVENTO</th>
                                            <th data-header="ÚLTIMA ACTUALIZACIÓN"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header=""></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td data-th="ID" class="sorting_1">01</td>
                                            <td data-th="NOMBRE">Programa Público: El círculo que faltaba</td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">00:03 04/03/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item" data-toggle="modal" data-target="#modal-actualizar-evento"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="1" class="dropdown-item btn-drop-evento"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr role="row" class="odd">
                                            <td data-th="ID" class="sorting_1">02</td>
                                            <td data-th="NOMBRE">Curso: La Catedral de Puebla</td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">00:03 04/03/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu">
                                                        <a href="" class="dropdown-item" data-toggle="modal" data-target="#modal-actualizar-evento"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="1" class="dropdown-item btn-drop-evento"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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

<div id="modal-agregar-evento" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nuevo evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input-nombre-evento">Nombre del evento</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="input-nombre-evento" name="nombre" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-evento" class="btn btn-success btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Guardar evento
                </a>
            </div>
        </div>
    </div>
</div>

<div id="modal-actualizar-evento" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-actualizar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input-actualizar-nombre-evento">Nombre del evento</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input type="hidden" id="input-actualizar-nombre-evento-id" name="id" value="">
                                    <input id="input-actualizar-nombre-evento" name="nombre" type="text" class="form-control required" value="Evento Demo">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-actualizar-evento" class="btn btn-warning btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Actualizar evento
                </a>
            </div>
        </div>
    </div>
</div>

@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
<script src="<?= asset('js/panel/eventos.js') ?>"></script>
</body>
</html>
