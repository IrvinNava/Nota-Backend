<?
use App\Helpers\Helper;
$metadata = [
    'title' => 'El Museo Amparo ',
    'description' => '',
    'url' => url(''),
    'image' => ''
];
?>
@include('layout.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="post-template-default single single-post postid-338 single-format-standard logged-in elementor-default elementor-page elementor-page-338">
    <div class="ma-loading"><div></div></div>
    <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
        @include('layout.topbar')
        <div id="page-title-pro">
            <div id="progression-studios-page-title-container">

                <div class="clearfix-pro"></div>
            </div>
            <div id="page-title-overlay-image" style="background-image:url({{ (!empty($evento->cover)) ? $evento->cover : asset('img/cover-terra.png') }})"></div>
        </div>
        <div class="elementor-section elementor-section-boxed">
            <div class="elementor-container elementor-column-gap-default">
                <div class="col-xs12">
                    <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                        <li class="Breadcrumbs__list__item">
                            <a href="{{ url('timeline') }}">
                                Línea del tiempo
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item is-current">
                            <a href="{{ url('timeline/'.\Carbon\Carbon::parse($evento->fecha_evento)->format('Y').'/'.$evento->anio_id) }}">
                               {{ $evento->titulo }}
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item is-current">
                            Galería
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="" class="site-content-blog-post  disable-sidebar-post-progression ma-timeline-detail-container mb-5">
            <div class="container">

                <div class="width-container-pro">
                    <h1 class="page-title">{{ $evento->titulo }}</h1>
                </div>

                <div class="ma_ficha_tecnica row">
                    <div class="col-md-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>{{ $evento->titulo }}</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha de publicación</b></td>
                                    <td>{{ \Carbon\Carbon::parse($evento->fecha_evento)->format('d-m-Y') }}</td>
                                </tr>
                                @if($evento->autores)
                                <tr>
                                    <td></td>
                                    <td><span>{{ Helper::getProfessionList($evento->autores) }}</span></td>
                                </tr>
                                @endif
                                @if($evento->colaboraciones->count())
                                <tr>
                                    <td><b>Colaboración</b></td>
                                    <td><?= \App\Colaboracion::list($evento->colaboraciones); ?></td>
                                </tr>
                                @endif
                                <tr>
                                    @if($links->count())
                                    <td><b>Vínculo</b></td>
                                    <td>
                                        @foreach($links as $link)
                                            <a href="{{$link->url}}" class="text-link"><i class="fas fa-external-link-alt"></i> Ir al enlace</a>
                                        @endforeach
                                    </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table>
                            <tbody>
                                <!-- <tr colspan="2"><td></td></tr> -->
                                <tr>
                                    <td colspan="2"><p>
                                    <?
                                        $contenido = json_decode($evento->contenido);
                                        $blocks = (isset($contenido->blocks)) ? $contenido->blocks : '';
                                    ?>
                                        @if($blocks)
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
                                        @endif
                    </p>
                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="description-container">
                    <?
                            $contenidoGaleria = json_decode($evento->contenido_galeria);
                            $bloques = (isset($contenidoGaleria->blocks)) ? $contenidoGaleria->blocks : '';
                        ?>
                                        @if($bloques)
                                            @foreach ($bloques as $block)
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
                                        @endif
                    </p>
                </div>

                <div class="mosaicos" data-page="1" style="margin-bottom: 30px">
                    <h2 class="progression-vayvo-progression-slider-title mb-0">Galería</h2>
                    <div class="mt-4">
                        @if($galeria)
                            @foreach ($galeria as $imagen)
                            <div class="col-md-3 mb-4">
                                <a href="{{ $imagen->url }}" data-fancybox="gallery-1" style="display: block;">
                                    <div class="gallery-item-thumbnail" style="background-image: url({{ $imagen->url }});">
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="clearfix-pro"></div>
            </div>

            <div class="clearfix-pro"></div>
        </div>
        @include('layout.footer')
        @include('layout.assets')


        <link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel='stylesheet' href="{{ asset('css/timeline.css') }}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
        <script type='text/javascript' src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

        <script src="{{ asset('js/mosaicos.js') }}"></script>

        <script type="text/javascript">

            function resizeGridItem(item) {
                grid = document.getElementsByClassName("grid")[0];
                rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
                rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
                rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
                item.style.gridRowEnd = "span " + rowSpan;
            }

            function resizeAllGridItems() {
                allItems = document.getElementsByClassName("item");
                for (x = 0; x < allItems.length; x++) {
                    resizeGridItem(allItems[x]);
                }
            }

            function resizeInstance(instance) {
                item = instance.elements[0];
                resizeGridItem(item);
            }

            window.onload = resizeAllGridItems();
            window.addEventListener("resize", resizeAllGridItems);

            allItems = document.getElementsByClassName("item");
            for (x = 0; x < allItems.length; x++) {
                imagesLoaded(allItems[x], resizeInstance);
            }

            $(function (){

                resizeAllGridItems();

                setTimeout( function(){
                    $(".ma-loading").remove();
                },500);
            });

        </script>
    </body>
    </html>
