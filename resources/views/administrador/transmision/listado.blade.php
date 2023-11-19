@include('layout.panel.header', ['titulo' => 'Editar Transmisión'])
<div id="app">
    @include('layout.panel./sidebar', ['position' => 1])
    @include('layout.panel.topbar', [])
    <div class="page has-sidebar-left">
        <header class="ma-background relative ">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4><i class="fa fa-wifi"></i> TRANSMISIONES</h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador') }}">Inicio</a> &raquo;</li>
                    <li>Transmisiones</li>
                </ul>
                <hr/>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header white">
                            <i class="fa fa-video"></i>
                            <strong>LISTADO DE TRANSMISIONES</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabla-transmisiones" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Título</th>
                                            <th>Estatus</th>
                                            <th><small>Fecha de<br>subida</small></th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td data-th="" class="sorting_1">1</td>
                                            <td data-th=""><img src="https://img.youtube.com/vi/https://www.youtube.com/embed/hxoRLRgmFlk/hqdefault.jpg"></td>
                                            <td data-th="">Los cuerpos del desierto | Rometti Costales y Jorge Pavéz Ojeda</td>
                                            <td data-th=""><span class="badge badge-secondary r-20">Transmitido</span></td>
                                            <td data-th="">1:04:39 29/07/2020</td>
                                            <td data-th="">
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary btn-xs dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCIONES</a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{ url('administrador/transmisiones/editar') }}"><i class="fa fa-pencil-alt"></i> Editar transmisión</a>
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
                <div class="col-md-4">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="shadow p-4 bg-danger text-white">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h2>Nombre de la Transmisión</h2>
                                        <span class="badge badge-danger btn-lg"><span class="blink"><i class="icon icon-circle mr-2"></i>Transmisión en vivo</span></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 s-12 justify-content-between">
                                    <div class="list-group-item text-dark transmision-switch">
                                        Mostrar
                                        <div class="material-switch float-right ml-2 mt-1">
                                            <input id="btn-switch-transimision-visibilidad" name="visibilidad" type="checkbox" value="1" data-id="" checked>
                                            <label for="btn-switch-transimision-visibilidad" class="bg-success"></label>
                                        </div>
                                    </div>
                                    <a href="" target="_blank" class="btn btn-sm btn-outline-danger  btn-danger">
                                        <i class="fa fa-external-link-alt mr-1 s-14"></i> <strong>VER</strong>
                                    </a>
                                    <a href="" class="btn btn-sm  btn-danger">
                                        <i class="fa fa-pencil-alt mr-1 s-14"></i> <strong>EDITAR</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header white">
                                    <i class="fa fa-wifi"></i>
                                    <strong>AGREGAR TRANSIMISIÓN EN VIVO</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form id="form-transmision">
                                                <div class="form-group col-md-12">
                                                    <label for="transmision-titulo" class="col-form-label">Título</label>
                                                    <input type="text"  name="" class="form-control" placeholder="Ingresa el nombre de la transmisión">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="transmision-titulo" class="col-form-label">Evento</label>
                                                    <input type="text"  name="" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="transmision-descripcion" class="col-form-label">Descripción</label>
                                                    <textarea class="form-control " rows="3"></textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="accordion" id="accordionTransmision">
                                                        <div class="card">
                                                            <div class="card-header" id="headingYoutube">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#collapseYoutube" aria-expanded="true" aria-controls="collapseYoutube">
                                                                        <i class="icon icon-youtube"></i> Transmisión desde YouTube
                                                                    </button>
                                                                </h2>
                                                            </div>

                                                            <div id="collapseYoutube" class="collapse" aria-labelledby="headingYoutube" data-parent="#accordionTransmision">
                                                                <div class="card-body">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="transmision-url" class="col-form-label">Enlace del video en vivo</label>
                                                                        <div class="input-group mb-2">
                                                                            <div class="input-group-prepend"><span class="input-group-text add-on"><i class="icon icon-youtube-play"></i></span></div>
                                                                            <input id="youtube-url-input" type="url" name="enlace" class="form-control required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header" id="headingFacebook">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left text-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseFacebook" aria-expanded="false" aria-controls="collapseFacebook">
                                                                        <i class="icon icon-facebook-square"></i> Transmisión desde Facebook
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseFacebook" class="collapse" aria-labelledby="headingFacebook" data-parent="#accordionTransmision">
                                                                <div class="card-body">
                                                                    <label for="transmision-descripcion" class="col-form-label">Código para incrustar</label>
                                                                    <textarea id="facebook-code-input" class="form-control " rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-light">
                                    <a href="#" id="btn-guardar-usuario" class="btn btn-success float-right">
                                        <i class="icon-save"></i>
                                        AGREGAR TRASMISIÓN
                                    </a>
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
<link href="https://cdn.datatables.net/rowreorder/1.0.0/css/rowReorder.dataTables.min.css" type="text/css" rel="stylesheet">
<script src="//cdn.datatables.net/rowreorder/1.1.1/js/dataTables.rowReorder.min.js"></script>
<script src="<?= asset('js/panel/transmisiones.js') ?>"></script>
</body>
</html>
