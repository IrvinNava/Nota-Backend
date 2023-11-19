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
                        <h4><i class="icon icon-burst_mode"></i> Puebla virreinal: 21 joyas documentales</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="">Inicio</a> &raquo;</li>
                    <li><a href="{{ url('administrador/exposiciones') }}">Exposiciones digitales</a> &raquo;</li>
                    <li><?= $exposicion->titulo ?></li>
                </ul>
            </div>
            <div class="card no-b">
                <div class="card-header white">
                    <div class="row">
                        <div class="col-md-9 col-xs-12"><h4><?= $exposicion->titulo ?></h4></div>
                        <div class="col-md-3 col-xs-12 card-tools">
                            <a href="javascript:void(0)" class="btn btn-ma btn-sm" data-toggle="modal" data-target="#modal-agregar-articulo">
                                <i class="icon-plus"></i> AGREGAR NÚCLEO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <input id="id" name="id" class="form-control" type="hidden" value=<?= $exposicion->id ?>>
                                <table id="table-nucleos-exposciones-digitales" class="table table-striped table-hover r-0">
                                    <thead>
                                        <tr class="no-b">
                                            <th data-header="id">ID</th>
                                            <th data-header="thumbnail">PORTADA</th>
                                            <th data-header="titulo">TÍTULO</th>
                                            <th data-header="visibilidad">ESTATUS</th>
                                            <th data-header="updated_at">FECHA</th>
                                            <th data-header="acciones"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--<tr>
                                            <td>1</td>
                                            <td><img src="{{asset('img/exposiciones/2/nucleo-1.jpg')}}" height="55"></td>
                                            <td><a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}">I. Documentos fundacionales de Puebla</a></td>
                                            <td><span class="badge badge-success">Visible</span></td>
                                            <td>20/02/2023</td>
                                            <td>12:36 22/02/2023</td>
                                            <td data-th="acciones">
                                                <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="{{ url('administrador/exposiciones/nucleo/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}" class="dropdown-item"><i class="icon-book mr-3"></i> GALERÍAS</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="304" class="dropdown-item btn-drop-nucleo"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{asset('img/exposiciones/2/nucleo-2.jpg')}}" height="55"></td>
                                            <td><a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}">II. El nacimiento de una urbe</a></td>
                                            <td><span class="badge badge-success">Visible</span></td>
                                            <td>20/02/2023</td>
                                            <td>12:36 22/02/2023</td>
                                            <td data-th="acciones">
                                                <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="{{ url('administrador/exposiciones/nucleo/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}" class="dropdown-item"><i class="icon-book mr-3"></i> GALERÍAS</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="304" class="dropdown-item btn-drop-nucleo"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{asset('img/exposiciones/2/nucleo-3.jpg')}}" height="55"></td>
                                            <td><a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}">III. La ciudad y sus instituciones</a></td>
                                            <td><span class="badge badge-success">Visible</span></td>
                                            <td>20/02/2023</td>
                                            <td>12:36 22/02/2023</td>
                                            <td data-th="acciones">
                                                <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="{{ url('administrador/exposiciones/nucleo/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}" class="dropdown-item"><i class="icon-book mr-3"></i> GALERÍAS</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="304" class="dropdown-item btn-drop-nucleo"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{asset('img/exposiciones/2/nucleo-4.jpg')}}" height="55"></td>
                                            <td><a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}">IV. Puebla en la era borbónica</a></td>
                                            <td><span class="badge badge-success">Visible</span></td>
                                            <td>20/02/2023</td>
                                            <td>12:36 22/02/2023</td>
                                            <td data-th="acciones">
                                                <a href="javascript:void(0)" class="btn btn-ma-actions btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                <div class="dropdown-menu"><a href="{{ url('administrador/exposiciones/nucleo/editar') }}" class="dropdown-item"><i class="icon-pencil mr-3"></i> EDITAR</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{ url('administrador/exposiciones/registros/nucleos/galerias') }}" class="dropdown-item"><i class="icon-book mr-3"></i> GALERÍAS</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" data-id="304" class="dropdown-item btn-drop-nucleo"><i class="icon-delete mr-3"></i> ELIMINAR</a>
                                                </div>
                                            </td>
                                        </tr>-->
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
                <h5 class="modal-title">Agregar núcleo a la exposición</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registro-modal-agregar">
                    <input id="id_exposicion" name="id_exposicion" class="form-control" type="hidden" value=<?= $exposicion->id ?>>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Exposición digital</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <p class="mb-0"><?= $exposicion->titulo ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="registro-input-titulo">Título del núcleo</label>
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="nucleo-titulo-input" name="titulo" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</a>
                <a href="javascript:void(0)" id="btn-confirmar-nucleo" class="btn btn-success btn-sm">
                    <i class="icon-check-circle"></i>&nbsp;Guardar y continuar
                </a>
            </div>
        </div>
    </div>
</div>

@include('layout.panel.assets')
<script src="{{ asset('js/panel/nucleos.js') }}"></script>
</body>
</html>
