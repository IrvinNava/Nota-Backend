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
                        <h4><i class="icon icon-timeline"></i> Publicaciones | Línea del tiempo</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Eventos Timeline</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de eventos</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-articulo">
                                <i class="icon-plus"></i> AGREGAR REGISTRO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-timeline-articulos" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="id">ID</th>
                                            <th data-header="cover">VISTA PREVIA</th>
                                            <th data-header="titulo">TÍTULO</th>
                                            <th data-header="estatus">ESTATUS</th>
                                            <th data-header="fecha">FECHA</th>
                                            <th data-header="actualizacion"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar nuevo registro a la línea de tiempo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Título del registro</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="registro-input-titulo" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="registro-select-fecha">Fecha en la línea de tiempo</label>
                                <input id="registro-input-fecha" name="fecha_evento" type="text" class="form-control input-datetimepicker required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="registro-select-anio">Año</label>
                                <select id="registro-select-anio" name="anio_id" class="form-control" required>
                                    <option value="">- Seleccionar opcion -</option>
                                    <? $anios = \App\Anios::all()?>
                                    @foreach($anios as $anio)
                                        <option value="{{$anio->id}}">{{$anio->anio}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-select-tipo-evento">Tipo de Evento</label>
                                <select id="registro-select-tipo-evento" name="tipo_evento_id" class="form-control" required>
                                    <option value="">- Seleccionar opcion -</option>
                                    <? $tiposEventos = \App\EventoTipo::all()?>
                                    @foreach($tiposEventos as $evento)
                                        <option value="{{$evento->id}}">{{$evento->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-registro" class="btn btn-success btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
            </div>
        </div>
    </div>
</div>

@include('layout.panel.assets')
<script src="{{ asset('js/panel/timeline.js') }}"></script>
</body>
</html>
