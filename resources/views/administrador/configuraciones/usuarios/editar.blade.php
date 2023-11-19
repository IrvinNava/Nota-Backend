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
                            <i class="fa fa-user-plus"></i>
                            EDITAR USUARIO
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador/usuarios') }}">Usuarios</a> &raquo;</li>
                    <li>Editar usuario</li>
                </ul>
                <hr/>
            </div>
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="card">
                        <div class="card-body pt-0 white">
                            <form id="form-usuario" class="">
                                <input type="hidden" name="id" value="{{ $usuario->id }}">
                                <div class="row mt-3">
                                    <div class="col-md-7">
                                        <div class="body">
                                            <h4 class="mb-3">Información del usuario</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="">Nombre del usuario</label>
                                                            <input type="text" id="usuario-nombre" name="nombre" class="form-control required" placeholder="Ingresa el nombre del usuario" value="{{ $usuario->first_name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="">Correo electrónico</label>
                                                            <input type="text" id="usuario-email" name="email" class="form-control required" placeholder="Ingrese el correo electrónico" value="{{ $usuario->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="">Contraseña</label>
                                                            <input type="password" id="usuario-password" name="password" class="form-control required" placeholder="Ingresa la contraseña">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label for="">Repetir contraseña</label>
                                                            <input type="password" id="usuario-password-repeat" name="password_repeat" class="form-control required" placeholder="Vuelva a ingresar la contraseña">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <h4 class="mb-3">Roles</h4>
                                        <ul class="list-group">
                                            @foreach ($roles as $role)
                                                <? $usuario_login = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::findUserById($usuario->id) ?>
                                                <li class="list-group-item">
                                                    {{ $role->name }}
                                                    <div class="material-switch float-right">
                                                        <input id="usuarios-role-{{ $role->id }}" name="roles[]" type="checkbox" value="{{ $role->slug }}" @if($usuario_login->inRole($role->slug)) checked @endif/>
                                                        <label for="usuarios-role-{{ $role->id }}" class="bg-primary"></label>
                                                    </div>
                                                </li>
                                            @endforeach;
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="#" id="btn-actualizar-usuario" class="btn btn-warning float-right">
                                <i class="fa fa-save"></i>
                                ACTUALIZAR USUARIO
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
</body>
</html>
