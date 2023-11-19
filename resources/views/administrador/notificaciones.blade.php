@include('layout.panel.header', ['titulo' => 'Agregar usuario'])
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel./sidebar', ['position' => 1])
    @include('layout.panel.topbar', [])
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-notifications "></i>
                            NOTIFICACIONES
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador') }}">Inicio</a> &raquo;</li>
                    <li>Notificaciones</li>
                </ul>
            </div>
            <div class="ro">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="elements-container p-0">
                                <div class="row m-0">
                                    <div class="col-md-3">
                                        <div class="sticky-top sticky-container p-0 pt-3 border-right-0">
                                            <div class="list-group">
                                                <a href="" class="list-group-item list-group-item-action">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="my-0">Sin leer</h6>
                                                        <span class="badge badge-pill badge-warning orange">3</span>
                                                    </div>
                                                </a>
                                                <a href="" class="list-group-item list-group-item-action">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="my-0">Leídas</h6>
                                                        <span class="badge badge-pill badge-info">20</span>
                                                    </div>
                                                </a>
                                                <a href="" class="list-group-item list-group-item-action">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="my-0">Recibidas</h6>
                                                        <span class="badge badge-pill badge-info">23</span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-9 pt-3">

                                        <!-- Módulo -->
                                        <div class="card border-light">
                                            <div class="card-header">
                                                <i class="fa fa-clock"></i>&nbsp; Tema Demo 1
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="badge badge-warning orange r-20"><i class="icon icon-warning3 s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 1</p></td>
                                                            <td>Hoy <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-success r-20"><i class="icon icon-plus s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 2</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-danger r-20"><i class="icon icon-trash s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 3</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Módulo -->
                                        <div class="card border-light">
                                            <div class="card-header">
                                                <i class="fa fa-clock"></i>&nbsp; Tema Demo 2
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="badge badge-warning orange r-20"><i class="icon icon-warning3 s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 1</p></td>
                                                            <td>Hoy <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-success r-20"><i class="icon icon-plus s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 2</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-danger r-20"><i class="icon icon-trash s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 3</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Módulo -->
                                        <div class="card border-light">
                                            <div class="card-header">
                                                <i class="fa fa-clock"></i>&nbsp; Tema Demo 3
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="table table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="badge badge-warning orange r-20"><i class="icon icon-warning3 s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 1</p></td>
                                                            <td>Hoy <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-success r-20"><i class="icon icon-plus s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 2</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="badge badge-danger r-20"><i class="icon icon-trash s-14"></i></span></td>
                                                            <td><p class="m-0">Nombre tarea demo 3</p></td>
                                                            <td>19/10/2020 <small>12:00 pm</small> </td>
                                                            <td> <a href="javascript:void(0);" class="text-secondary"><i class="fa fa-thumbs-up"></i></a> </td>
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
            </div>
        </div>
    </div>
</div>
@include('layout.panel.assets', [])
<script src="<?= asset('js/panel/administrador.js') ?>"></script>
<script src="<?= asset('js/panel/transmisiones.js') ?>"></script>
</body>
</html>
