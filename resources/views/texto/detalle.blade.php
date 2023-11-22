<?  
use App\Helpers\Helper;
    $metadata = [
        'title' => $texto->titulo,
        'description' => $texto->short_descripcion,
        'url' => $texto->getUrl(),
        'image' => $texto->thumbnail
    ];
?>
@include('layout.header')
<body class="post-template-default single single-post postid-338 single-format-standard logged-in elementor-default elementor-page elementor-page-338">
<div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
    @include('layout.topbar')
    <div id="page-title-pro">
        <div id="progression-studios-page-title-container">

            <div class="clearfix-pro"></div>
        </div>
        <div id="page-title-overlay-image" style="background-image:url({{ $texto->cover  }})"></div>
    </div>

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
                        <a href="{{url('/texto')}}">
                            Texto
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        {{ $texto->titulo }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="content-pro" class="site-content-blog-post  disable-sidebar-post-progression">
        <div class="width-container-pro ">

            <div class="width-container-pro">
                <h1 class="page-title">{{ $texto->titulo }}</h1>
                <ul class="progression-single-post-meta">
                    <li class="blog-meta-author-display">
                         @if($texto->autores->count())
                            <span>{{ Helper::getList($texto->autores) }}</span>
                        @endif
                    </li>
                    <li class="blog-category-date-list"><a href="">{{ \Carbon\Carbon::parse($texto->created_at)->formatLocalized('%d de %B de %Y') }}</a></li>
                    <li class="blog-single-category-display"><a href="" rel="category tag"></a><a href="" rel="category tag"></a></li>
                </ul>
                <br>
                <div class="">
                    <a href="javascript:void(0);" onclick="window.print()" style="color: #000"><i class="fa fa-print"></i></a>
                </div>
                <div class="clearfix-pro"></div>
            </div>

            <div id="main-container-pro">
                <?
                    $contenido = json_decode($texto->contenido_markup);
                    $blocks = $contenido->blocks;
                ?>
                @foreach ($blocks as $block)
                    @switch ($block->type)
                        @case('paragraph')
                            <div class="row">
                                <div class="editor-item col-md-12 col-xs-12">
                                    <div class="editor-item-content">
                                        <p>{!! html_entity_decode($block->data->text) !!}</p>
                                    </div>
                                </div>
                            </div>
                            @break

                        @case('header')
                            <div class="row">
                                <div class="editor-item col-md-12 col-xs-12">
                                    <div class="editor-item-content" style="text-align: center;">
                                        <h{{ $block->data->level }}>{!! $block->data->text !!}</h{{ $block->data->level }}>
                                    </div>
                                </div>
                            </div>
                            @break

                        @case('image')
                            <div class="row">
                                <div class="editor-item col-md-12 col-xs-12">
                                    <div class="editor-item-content">
                                        <a href="{{ $block->data->file->url }}" class="image-zoom" data-id="315" data-fancybox="zoom-images-315">
                                            <img src="{{ $block->data->file->url }}" alt="{{ $block->data->caption }}" title="{{ $block->data->caption }}" class="img-fluid">
                                        </a>
                                        @if(!empty($block->data->caption))
                                        <p style="text-align: right;"><span style="color:#999999;"><span style="font-size:12px;"><em>{{ $block->data->caption }}</em></span></span><br></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @break

                        @case('AnyButton')
                            <div class="row">
                                <div class="editor-item col-md-12 col-xs-12">
                                    <div class="editor-item-content">
                                        <a href="{{ $block->data->link }}" class="btn btn-element btn-block text-center" target="_blank">
                                            {{ html_entity_decode($block->data->text) }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @break

                        @case('quote')
                            <div class="row">
                                <div class="editor-item col-md-12 col-xs-12">
                                    <div class="editor-item-content">
                                        <blockquote>
                                            {!! html_entity_decode($block->data->text) !!}
                                        </blockquote>
                                        <p style="text-align: right;">
                                            <span style="color:#999999;">
                                                <span style="font-size:12px;">
                                                    <em>{!! html_entity_decode($block->data->caption) !!}</em>
                                                </span>
                                            </span>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @break
                    @endswitch
                @endforeach
            </div>
            <div class="clearfix-pro"></div>
        </div>
        <div id="progression-studios-next-previous-post" class="hidden-element">
            <a href="" id="progression-studios-previous-post"
               style="background-image:url({{ asset('img/noticia_3.jpg') }})">
                <div class="progression-studios-next-center">
                    <h5><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Artículo Anterior</h5>
                    <h3>Radar Cultural</h3>
                </div>
            </a>
            <div class="clearfix-pro"></div>
        </div>
        <div id="comments" class="comments-area hidden-element">
            <div id="progression-studios-comments-background">
                <div class="width-container-pro">
                    <div class="progression-single-width-container">
                        <div class="fb-comments" colorscheme="dark" data-href="https://museoamparo.com/actividades/detalle/2414/artistas-creando-en-casa-3" data-numposts="5" data-width="100%" data-lazy="true"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-element" style="padding: 20px">
            <div class="container">
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
        <div class="clearfix-pro"></div>
    </div>
@include('layout.footer')
@include('layout.assets')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>
