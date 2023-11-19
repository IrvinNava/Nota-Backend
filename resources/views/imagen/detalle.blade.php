<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => $galeria->titulo,
        'description' => $galeria->short_descripcion,
        'url' => $galeria->getUrl(),
        'image' => $galeria->thumbnail
    ];
?>
@include('layout.header')
<body class="video_skrn-template-default single single-video_skrn postid-125 logged-in elementor-default">
@include('layout.topbar')
<div id="post-125" class="post-125 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-season-1">
    @if (!empty($subcategoria))
        @if ($subcategoria === 'Video')
        <div id="video-page-title-pro" style="background-image:url({{ $galeria->cover }});">
            <a class="video-page-title-play-button afterglow" href="#Video-Vayvo-Single"><i class="fa fa-play"></i></a>
            @if(!empty($media))
            <div style="display:none;">
                <video id="Video-Vayvo-Single" width="960" height="540" data-youtube-id="{{ $media->basename }}">
                    <iframe width="560" height="315" src="{{ $media->url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </video>
            </div>
            @endif
        </div>
        @endif
        @if ($subcategoria === 'Imágenes')
        <!-- Empieza contenido de Imagen -->
        <div id="video-page-title-pro" style="background-color: #000">
            <p class="imglist">
                <a href="{{ $galeria->thumbnail }}" data-fancybox data-caption="&lt;b&gt;{{ $galeria->titulo }}&lt;/b&gt;&lt;br /&gt;{{ $galeria->descripcion}}">
                    <img src="{{ $galeria->cover }}">
                </a>
            </p>
        </div>
        <!-- Termina contenido de imagen -->
        @endif
    @endif
    <div class="elementor-section elementor-section-boxed">
        <div class="elementor-container elementor-column-gap-default">
            <div class="col-xs12">
                <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                    <li class="Breadcrumbs__list__item">
                        <a href="{{ url('') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item">
                        <a href="{{$playlist->getUrl()}}">
                            Playlist: {{ $playlist->titulo}}
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item">
                        <a href="{{url('/imagen')}}">
                            Imagen
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        {{ $galeria->titulo }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix-pro"></div>
    <div id="content-pro" class="site-content-video-post">
        <div class="width-container-pro">

            <div class="ma_ficha_tecnica">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td>Título</td>
                            <td>{{ $galeria->titulo }}</td>
                        </tr>
                         @if($galeria->autores->count())
                        <tr>
                            <td>Autores</td>
                            <td>
                                <span>{{ Helper::getList($galeria->autores) }}</span>
                            </td>
                        </tr>
                        @endif
                        
                        <!--<tr>
                            <td>Ubicación</td>
                            <td>
                                
                            </td>
                        </tr>-->
                        @if(!empty($galeria->referencia_id))
                        <tr>
                            <td>Colección</td>
                            <td>
                                {{ $galeria->getReferencia->nombre}}
                            </td>
                        </tr>
                        @endif
                        @if ($subcategoria === 'Video')

                            @if(!empty($galeria->fecha_lanzamiento))
                            <tr>
                                <td>Fecha de publicación</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($galeria->fecha_lanzamiento)->formatLocalized('%d de %B de %Y') }}
                                </td>
                            </tr>
                            @endif
                        
                            @if(!empty($galeria->duracion))
                            <tr>
                                <td>Duración</td>
                                <td>                          
                                    {{ $galeria->duracion }}
                                </td>
                            </tr>
                            @endif

                            @if(!empty($galeria->counter))
                            <tr>
                                <td>Reproducciones </td>
                                <td>                          
                                    {{ $galeria->counter }}
                                </td>
                            </tr>
                            @endif

                        @endif
                        @if($galeria->eventos->count())
                        <tr>
                            <td>Evento</td>
                            <td>
                                @foreach($galeria->eventos as $evento)
                                    <span><?=$evento->nombre?></span>
                                @endforeach
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td>{!! $galeria->descripcion !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i>Compartir</div>


            <!-- <div id="video-post-container">
                <h1 class="video-page-title">{{ $galeria->titulo }}</h1>
                <ul id="video-post-meta-list">
{{--                    <li id="video-post-meta-cat"><ul><li><a href="">Exposiciones</a></li></ul></li>--}}
{{--                    <li id="video-post-meta-year">2019</li>--}}
                    @if($galeria->autores->count())
                        <li id="video-post-meta-rating">
                            @foreach ($galeria->autores as $autor)
                            <span>{{ $autor->fullname }}</span>
                            @endforeach
                        </li>
                    @endif
                </ul>
                <div class="clearfix-pro"></div>
                <div id="video-post-buttons-container">
                    <form method="post" class="wishlist_user_post" action=""></form>
                    <button name="progression_add_user_wishlist" class="wishlist-button-pro hidden-element"><i class="fa fa-check"></i><i
                            class="fa fa-plus-circle"></i>Guardar
                    </button>
                    <div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i>Compartir</div>
                    <div class="clearfix-pro"></div>
                </div>
                <div id="vayvo-video-post-content">
                    {!! $galeria->descripcion !!}
                </div>
            </div>
            <div id="video-post-sidebar">
                @if(!empty($galeria->fecha_lanzamiento))
                    <div class="content-sidebar-section video-sidebar-section-release-date">
                        <h4 class="content-sidebar-sub-header">Fecha de publicación</h4>
                        <div class="content-sidebar-short-description">{{ \Carbon\Carbon::parse($galeria->fecha_lanzamiento)->formatLocalized('%d de %B de %Y') }}</div>
                    </div>
                @endif
                @if(!empty($galeria->duracion))
                    <div class="content-sidebar-section video-sidebar-section-length">
                        <h4 class="content-sidebar-sub-header">Duración</h4>
                        <div class="content-sidebar-short-description">{{ $galeria->duracion }}</div>
                    </div>
                @endif
                <div class="clearfix-pro"></div>
            </div> -->
            <div class="clearfix-pro"></div>
            <div class=" hidden-element" style="padding: 20px">
                <h3>Relacionados</h3>
                <div class="row archivos-relacionados">
                    <div class="col-sm-6 item-relacionado">
                        <div id="post-169" class="post-169 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-sci-fi video-category-featured">
                            <div class="progression-studios-video-index-container">
                                <a href="../magdalena/">
                                    <div class="progression-studios-video-feaured-image">
                                        <img width="700" height="480" src="{{ asset('img/magdalena_01.jpg') }}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="">
                                    </div>
                                    <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                <h2 class="progression-video-title">Magdalena Fernández</h2>
                                                <div class="clearfix"></div>
                                                <ul class="video-index-meta-taxonomy ma-tags-container">
                                                    <li>Charla</li>
                                                    <li>Museo Amparo</li>
                                                </ul>
                                                <ul class="video-index-meta-taxonomy">
                                                    <li><i class="fa fa-photo-video"></i>&nbsp; Imagen</li>
                                                </ul>
                                                <div class="clearfix-pro"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-index-border-hover"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item-relacionado">
                        <div id="post-169"
                             class="post-169 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-sci-fi video-category-featured">
                            <div class="progression-studios-video-index-container">
                                <a href="../detalle-podcast/">
                                    <div class="progression-studios-video-feaured-image">
                                        <img width="700" height="480" src="{{ asset('img/magdalena_00.jpg') }}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="">
                                    </div>
                                    <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                <h2 class="progression-video-title">Magdalena F. - Sala 1</h2>
                                                <div class="clearfix"></div>
                                                <ul class="video-index-meta-taxonomy ma-tags-container">
                                                    <li>Museo Amparo</li>
                                                </ul>
                                                <ul class="video-index-meta-taxonomy">
                                                    <li><i class="fa fa-headphones-alt"></i>&nbsp; Audio</li>
                                                </ul>
                                                <div class="clearfix-pro"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-index-border-hover"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 item-relacionado">
                        <div id="post-169" class="post-169 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-sci-fi video-category-featured">
                            <div class="progression-studios-video-index-container">
                                <a href="">
                                    <div class="progression-studios-video-feaured-image">
                                        <img width="700" height="480" src="{{ asset('img/festival.jpg') }}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="">
                                    </div>
                                    <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                <h2 class="progression-video-title">Festival Ternium</h2>
                                                <div class="clearfix"></div>
                                                <ul class="video-index-meta-taxonomy ma-tags-container">
                                                    <li>Magdalena F</li>
                                                    <li>Museo Amparo</li>
                                                </ul>
                                                <ul class="video-index-meta-taxonomy">
                                                    <li><i class="fa fa-book-reader"></i>&nbsp; Texto</li>
                                                </ul>
                                                <div class="clearfix-pro"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-index-border-hover"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix-pro"></div>
                </div>
                <div class="clearfix-pro"></div>
                <div class="vayvo-progression-pagination-elementor">
                    <div id="progression-load-more-manual">
                        <div id="infinite-nav-pro-b8210c7" class="infinite-nav-pro">
                            <div class="nav-previous"><a href="">Ver más<span><i class="fa fa-arrow-circle-down"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog-single-social-sharing-container">
        <div id="close-social-sharing-skrn"><span></span></div>
        <ul id="blog-single-social-sharing" class="noselect">
            <li>
                <a href="https://twitter.com/share?text=Amparo+Online+Audio&url={{ URL::current() }}" title="Twitter" class="twitter-share" target="_blank"><i class="fa fa-twitter"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir en Twitter</span></a>
            </li>
            <li>
                <a href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" title="Compartir en Facebook" class="facebook-share" target="_blank"><i class="fa fa-facebook-square"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir en Facebook</span></a>
            </li>
            <li>
                <a href="mailto:?subject=Amparo+Online+Audio&amp;body={{ URL::current() }}" title="Share on E-mail" class="mail-share"><i class="fa fa-envelope"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir por correo</span></a>
            </li>
        </ul>
        <div class="clearfix-pro"></div>
    </div>
</div>
@include('layout.footer')
@include('layout.assets')
<link rel='stylesheet' href="{{ asset('css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
</body>
</html>
