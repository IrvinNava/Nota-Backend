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
                            <i class="icon-photo_size_select_actual"></i>
                            SLIDERS
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/sliders') }}">Sliders</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de sliders</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="{{ url('administrador/sliders/agregar') }}" class="btn btn-ma btn-sm">
                                <i class="fa fa-plus"></i> AGREGAR SLIDER
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-sliders" class="table table-striped table-hover r-0 table-fotos">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID"></th>
                                            <th data-header="VISTA PREVIA">Vista previa</th>
                                            <th data-header="TITULO">Título</th>
                                            <th data-header="ESTATUS">Estatus</td>
                                            <th data-header="ÚLTIMA ACTUALIZACIÓN"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header=""></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td data-th="ID" class="sorting_1">01</td>
                                            <td data-th="VISTA PREVIA"><img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/slider-amparoonline-1280x720-museo-amparo-puebla.png"></td>
                                            <td data-th="NOMBRE">Acerca de Amparo Online</td>
                                            <td data-th="ESTATUS"><span class="badge badge-success">Aprobado</span></td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">00:03 04/03/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ url('administrador/sliders/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="1" class="dropdown-item btn-drop-slider"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr role="row" class="odd">
                                            <td data-th="ID" class="sorting_1">02</td>
                                            <td data-th="VISTA PREVIA"><img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/slider-linea-del-tiempo-1280x720-museo-amparo-puebla.png"></td>
                                            <td data-th="NOMBRE">Línea del tiempo: 30 años</td>
                                            <td data-th="ESTATUS"><span class="badge badge-success">Aprobado</span></td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">00:03 04/03/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ url('administrador/sliders/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="1" class="dropdown-item btn-drop-slider"><i class="icon-delete mr-3"></i> ELIMINAR</a>
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
@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
<script src="<?= asset('js/panel/autores.js') ?>"></script>
</body>
</html>
