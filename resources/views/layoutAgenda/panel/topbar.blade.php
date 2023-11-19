<?
    $user = Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser();
?>
<div class="has-sidebar-left">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text" placeholder="Escribe algo...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar ma-background">
            <div class="relative">
                <a href="#" id="menuToggle" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown custom-dropdown messages-menu d-none">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="icon-message"></i>
                            <!--<span class="badge badge-success badge-mini rounded-circle"></span>-->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="menu pl-2 pr-2"></ul>
                            </li>
                            <li class="footer s-12 p-2 text-center"><a href="#">Ver todos los mensajes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown custom-dropdown notifications-menu">
                        <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-notifications "></i>
                            <span class="notificaciones-counter badge badge-danger badge-mini rounded-circle"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="header notificaciones-header">No tienes ninguna notificación</li>
                            <li>
                                <ul class="menu notificaciones-list">
                                </ul>
                            </li>
                            <li class="footer p-2 text-center"><a href="{{ url('administrador/notificaciones') }}">Ver todo</a></li>
                        </ul>
                    </li>
                    <li class="d-none">
                        <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                           aria-controls="navbarToggleExternalContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <i class=" icon-search3 "></i>
                        </a>
                    </li>
                    <li class="dropdown custom-dropdown user user-menu topbar-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <span class="avatar-letter avatar-letter-{{ strtolower($user->first_name[0]) }} circle"></span>
                            <i class="icon-more_vert "></i>
                        </a>
                        <div class="dropdown-menu p-4 dropdown-menu-right">
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="{{ url('login/logout') }}">
                                        <i class="icon-sign-out indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Cerrar sesión</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
