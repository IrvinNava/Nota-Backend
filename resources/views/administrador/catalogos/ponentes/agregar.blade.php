@include('layout.panel.header', ['titulo' => 'Agregar ponente'])
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
                            <i class="icon-person_add"></i>
                            AGREGAR PONENTE
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/ponentes') }}">Ponentes</a> &raquo;</li>
                    <li>Agregar ponente</li>
                </ul>
                <hr/>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body pt-0 white">
                            <form id="form-ponente" class="">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="body">
                                            <h4 class="mb-3">Información del ponente</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="ponente-nombre">Nombre</label>
                                                            <input type="text" id="ponente-nombre" name="nombre" class="form-control required" placeholder="Ingresa el nombre del ponente">

                                                            <label for="ponente-nombre">Apellidos</label>
                                                            <input type="text" id="ponente-apellidos" name="apellidos" class="form-control required" placeholder="Ingresa el apellido del ponente">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="ponente-profesion">Profesión</label>
                                                            <select id="ponente-profesion" class="custom-select" name="tipo_id">
                                                                <option value="0">- Selecciona una opción -</option>
                                                                <option value="1">Artista</option>
                                                                <option value="2">Curador</option>
                                                                <option value="3">Autor</option>
                                                                <option value="4">Ponente</option>
                                                                <option value="5">Coordinación académica</option>
                                                                <option value="6">Participante</option>
                                                                <option value="7">Tallerista</option>
                                                                <option value="8">Fotografía</option>
                                                                <option value="9">Edición</option>
                                                                <option value="10">Moderador</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="#" id="btn-agregar-ponente" class="btn btn-success float-right">
                                <i class="fa fa-save"></i>
                                GUARDAR PONENTE
                            </a>
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
