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
                            <i class="fa fa-users"></i>
                            USUARIOS
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/usuarios') }}">Usuarios</a> &raquo;</li>
                    <li>Listado</li>
                </ul>
                <hr/>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4>Listado de usuarios</h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="{{ url('administrador/usuarios/agregar') }}" class="btn btn-ma btn-sm">
                                <i class="fa fa-plus"></i> AGREGAR USUARIO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table-usuarios" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="ID"></th>
                                            <th data-header="NOMBRE">NOMBRE</th>
                                            <th data-header="CORREO ELECTRÓNICO">CORREO ELECTRÓNICO</th>
                                            <th data-header="TIPO">TIPO</th>
                                            <th data-header="ÚLTIMO INICIO DE SESIÓN"><small>ÚLTIMO INICIO<br>DE SESIÓN</small></th>
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
@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
</body>
</html>
