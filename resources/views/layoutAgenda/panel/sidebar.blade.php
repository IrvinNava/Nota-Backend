<?
    $user = Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser();
?>
<aside class="main-sidebar fixed offcanvas shadow gray-background" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="mt-3 mb-3 div-logo">
            <img src="{{ asset('img/logo_amparo_digital_light.svg') }}" alt="" class="img-logotipo">
        </div>
        <div class="relative">
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image mr-2">
                        <div class="avatar">
                            <span class="avatar-letter avatar-letter-e circle"></span>
                        </div>
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ $user->first_name . ' ' . $user->last_name }}</h6>
                        <a href="{{ url('login/logout') }}" class="text-default"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="">
                    <i class="icon icon icon-home s-18"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li><a href="{{ url('administrador/usuarios') }}"><i class="icon icon-organization-4 s-18"></i>Usuarios</a></li>

            <li class="treeview ">
                <a href="javascript:void(0)">
                    <i class="icon icon-view_list s-18"></i>&nbsp;<span>Catálogos</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ url('administrador/ponentes') }}"><i class="icon icon-person_pin s-18"></i>Ponentes</a></li>
                <li><a href="{{ url('administrador/eventos') }}"><i class="icon icon-event_note s-18"></i>Tipos de eventos</a></li>
                <li><a href="{{ url('administrador/colaboraciones') }}"><i class="icon icon-link2 s-18"></i>Colaboraciones</a></li>
                <li><a href="{{ url('administrador/playlists') }}"><i class="icon icon-playlist_play s-18"></i>Playlists</a></li>
                </ul>
            </li>


            <li class="treeview ">
                <a href="javascript:void(0)">
                    <i class="icon icon-archive text-lime s-18"></i>&nbsp;<span>Contenido</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('administrador/audios') }}"><i class="icon icon-library_music s-18"></i>Audios</a></li>
                    <li><a href="{{ url('administrador/textos') }}"><i class="icon icon-library_books s-18"></i>Textos</a></li>
                    <li><a href="{{ url('administrador/videos') }}"><i class="icon icon-video_library s-18"></i>Videos</a></li>
                    <li><a href="{{ url('administrador/transmisiones') }}"><i class="icon icon-wifi_tethering s-18"></i>En vivo</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="javascript:void(0)">
                    <i class="icon icon-apps text-lime s-18"></i>&nbsp;<span>Ajustes Inicio</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ url('administrador/sliders') }}"><i class="icon icon-photo_size_select_actual s-18"></i>Slider Principal</a></li>
                    <li><a href="{{ url('administrador/ajustes-inicio') }}"><i class="icon icon-library_books s-18"></i>Contenido</a></li>
                </ul>
            </li>

            <li><a href="{{ url('administrador/gestion-eventos') }}"><i class="icon icon-event_note s-18"></i>Eventos</a></li>
            <li><a href="{{ url('administrador/30anios') }}"><i class="icon icon-photo_library s-18"></i>Fotos 30 Años</a></li>
            <li><a href="{{ url('administrador/timeline') }}"><i class="icon icon-timeline s-18"></i>Línea del tiempo</a></li>
            <li><a href="{{ url('administrador/tematicas') }}"><i class="icon icon-timeline s-18"></i>Temáticas de Líneas del tiempo</a></li>
            <li><a href="{{ url('administrador/exposiciones') }}"><i class="icon icon-library_books s-18"></i>Exposiciones digitales</a></li>
        </ul>
    </section>
</aside>
