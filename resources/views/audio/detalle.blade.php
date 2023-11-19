<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => $audio->titulo,
        'description' => $audio->short_descripcion,
        'url' => $audio->getUrl(),
        'image' => $audio->thumbnail
    ];
?>
@include('layout.header')
<body class="video_skrn-template-default single single-video_skrn postid-125 logged-in elementor-default">
@include('layout.topbar')
<div id="post-125" class="post-125 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-season-1">
    @if(!empty($media))
    <div id="video-page-title-pro" style="background-image:url('{{ $audio->cover }}');" class="video-embedded-media-height-post">
        <div id="vayvo-single-video-embed">
            <!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
            <audio class="wp-audio-shortcode" id="audio-125-1" preload="auto" style="width: 100%;" controls="controls">
                <source type="audio/mpeg" src="{{ $media->url }}"/>
                <a href="">{{ $media->url }}</a>
            </audio>
        </div>
        <!-- <div id="video-page-title-gradient-base"></div> -->
    </div>
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
                        <a href="{{url('/audio')}}">
                            Audio
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        {{ $audio->titulo }}
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
                            <td>{{ $audio->titulo }}</td>
                        </tr>
                        <tr>
                            <td>Autores</td>
                            <td>
                                @if($audio->autores->count())
                                <span>{{ Helper::getList($audio->autores) }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha de publicación</td>
                            <td>
                                @if(!empty($audio->fecha_lanzamiento))
                                {{ \Carbon\Carbon::parse($audio->fecha_lanzamiento)->formatLocalized('%d de %B de %Y') }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Duración</td>
                            <td>
                                @if(!empty($audio->duracion))
                                {{ $audio->duracion }}
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td>{!! $audio->descripcion !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i>Compartir</div>

            <!-- <div id="video-post-container">
                <h1 class="video-page-title">{{ $audio->titulo }}</h1>
                <ul id="video-post-meta-list">
{{--                    <li id="video-post-meta-cat"><ul><li><a href="">Exposiciones</a></li></ul></li>--}}
{{--                    <li id="video-post-meta-year">2019</li>--}}
                    @if($audio->autores->count())
                        <li id="video-post-meta-rating">
                            @foreach ($audio->autores as $autor)
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
                    {!! $audio->descripcion !!}
                </div>
            </div>
            <div id="video-post-sidebar">
                @if(!empty($audio->fecha_lanzamiento))
                <div class="content-sidebar-section video-sidebar-section-release-date">
                    <h4 class="content-sidebar-sub-header">Fecha de publicación</h4>
                    <div class="content-sidebar-short-description">{{ \Carbon\Carbon::parse($audio->fecha_lanzamiento)->formatLocalized('%d de %B de %Y') }}</div>
                </div>
                @endif
                @if(!empty($audio->duracion))
                <div class="content-sidebar-section video-sidebar-section-length">
                    <h4 class="content-sidebar-sub-header">Duración</h4>
                    <div class="content-sidebar-short-description">{{ $audio->duracion }}</div>
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
</body>
</html>
