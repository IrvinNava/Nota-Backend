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
                            <i class="icon-person_pin"></i>
                            PONENTES
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/ponentes') }}">Ponentes</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de ponentes</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="{{ url('administrador/ponentes/agregar') }}" class="btn btn-ma btn-sm">
                                <i class="fa fa-plus"></i> AGREGAR PONENTE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-ponentes" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID"></th>
                                            <th data-header="NOMBRE">NOMBRE</th>
                                            <th data-header="PROFESIÓN">PROFESIÓN</th>
                                            <th data-header="ÚLTIMA ACTUALIZACIÓN"><small>ÚLTIMA<br>ACTUALIZACIÓN</small></th>
                                            <th data-header=""></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td data-th="ID" class="sorting_1">1</td>
                                            <td data-th="NOMBRE">Admin WSM</td>
                                            <td data-th="CORREO ELECTRÓNICO">Artista</td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">16:39 09/09/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ url('administrador/ponentes/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="1" class="dropdown-item btn-drop-usuario"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td data-th="ID" class="sorting_1">2</td>
                                            <td data-th="NOMBRE">Ana Vergel Saldivar </td>
                                            <td data-th="CORREO ELECTRÓNICO">Curador</td>
                                            <td data-th="ÚLTIMA ACTUALIZACIÓN">11:19 13/08/2021</td>
                                            <td data-th="">
                                                <div class="btn-group">
                                                    <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu"><a href="{{ url('administrador/ponentes/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="javascript:void(0)" data-id="2" class="dropdown-item btn-drop-usuario"><i class="icon-delete mr-3"></i> ELIMINAR</a>
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
