@include('layout.panel.header', ['titulo' => 'Editar ponente'])
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
                            <i class="icon-person"></i>
                            EDITAR PONENTE
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/ponentes') }}">Ponentes</a> &raquo;</li>
                    <li>Editar ponente</li>
                </ul>
                <hr/>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body pt-0 white">
                            <form id="form-actualizar-ponente" class="">
                                <input type="hidden" id="registro-input-id" name="id" value="{{ $ponente->id }}">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="body">
                                            <h4 class="mb-3">Información del ponente</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="ponente-nombre">Nombre</label>
                                                            <input type="text" id="ponente-nombre" name="nombre" class="form-control required" placeholder="Ingresa el nombre del ponente" value="{{ $ponente->nombre }}">

                                                            <label for="ponente-nombre">Apellidos</label>
                                                            <input type="text" id="ponente-apellidos" name="apellidos" class="form-control required" placeholder="Ingresa el apellido del ponente" value="{{ $ponente->apellidos }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="ponente-profesion">Profesión</label>
                                                            <select id="ponente-profesion" class="custom-select" name="tipo_id">
                                                                <option value="">- Selecciona una opción -</option>
                                                                @foreach ($tipos as $tipo ):
                                                                    <option value="{{$tipo->id}}" <?= ($ponente->tipo_id === $tipo->id) ? 'selected' : '' ; ?>>{{ $tipo->titulo }}</option>
                                                                @endforeach
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
                            <a href="#" id="btn-actualizar-ponente" class="btn btn-success float-right">
                                <i class="fa fa-save"></i>
                                ACTUALIZAR PONENTE
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
