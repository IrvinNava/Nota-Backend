<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => 'El Museo Amparo durante '.$anio,
        'description' => 'Descubre todos los eventos sucedidos en la linea del tiempo en el año '. $anio,
        'url' => url(''),
        'image' => ''
    ];
?>
@include('layout.header')
<body class="post-template-default single single-post postid-338 single-format-standard logged-in elementor-default elementor-page elementor-page-338">
<div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
    @include('layout.topbar')
    <div class="elementor-section elementor-section-boxed">
        <div class="elementor-container elementor-column-gap-default">
            <div class="col-xs12">
                <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                    <li class="Breadcrumbs__list__item">
                        <a href="{{ url('timelineMA') }}">
                            Línea del tiempo
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                          Eventos del año:  {{$anio}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="page-title-pro" class="timelime-title-pro">
        <div id="progression-studios-page-title-container" class="ma-timeline-detail-title">
            <div class="width-container-pro">
                <h1 class="page-title">El Museo Amparo durante <br> <span>{{ $anio }}</span></h1>
                <div class="clearfix-pro"></div>
            </div>
            <div class="clearfix-pro"></div>
        </div>

    </div>
    <div id="content-pro" class="site-content-blog-post  disable-sidebar-post-progression ma-timeline-detail-container">
        @foreach($registros as $registro)
        <section class="elementor-section elementor-section-boxed">
            <div class="elementor-container elementor-column-gap-default ma-timeline-item-container">
                <<div class="">
                    <a href="<?= url('timelineMA/galeria/'.$registro->id) ?>"><img src="{{ (!empty($registro->cover)) ? $registro->cover : asset('img/museo-amparo-puebla-placeholder-black.png') }}" class="ma-timeline-image"></a>
                </div>
                <div>
                    <div class="timeline-date">
                        <? $fecha_evento = \Carbon\Carbon::parse($registro->fecha_evento)?>
                        <p>{{ $fecha_evento->day }}<br>{{ $fecha_evento->formatLocalized('%B') }}</p>
                        <p>{{ $anio }}</p>
                    </div>
                     <h2><a href="<?= url('timelineMA/galeria/'.$registro->id) ?>">{{ $registro->titulo }}</a></h2>
                    <p class="p-event">{{ \App\EventoTipo::getNombre($registro->tipo_evento_id) }}</p>
                    <p class="p-author">{{ Helper::getProfessionList($registro->autores) }}</p>
                    @if($registro->colaboraciones->count())
                        <p class="p-collaborations"><b>En colaboración con:</b></p>
                        <p class="collaboration">
                           <?= \App\Colaboracion::list($registro->colaboraciones); ?>
                        </p>
                    @endif
                    <p>
                        <?
                            $contenido = json_decode($registro->contenido);
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
                    <? $links = App\Timeline::getLinks($registro->id); ?>
                     @if($links->count())
                        <? $cont = 0; ?>
                        <div class="timeline-tags">
                            @foreach($links as $link)
                                <?  $cont += 1; 
                                    $conector = '';
                                ?>
                                @if($cont < $links->count())
                                  <? $conector = ', '; ?>
                                @endif
                                <a href="{{$link->url}}" target="_blank"> Ir a enlace relacionado {{$conector}}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
        @endforeach
        <div id="progression-studios-next-previous-post" class="ma-timeline-next-previous">
            @if($prev)
            <a href='<?= url("timeline-detalle/$prev->anio/$prev->id") ?>' id="progression-studios-previous-post" style="background-color: black;">
                <div class="progression-studios-next-center">
                    <h5><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Año anterior</h5>
                    <h3>El Museo durante {{ $prev->anio }}</h3>
                </div><!-- close .progression-studios-next-center -->
            </a>
            @endif
            @if($last)
            <a href='<?= url("timeline-detalle/$last->anio/$last->id") ?>' id="progression-studios-next-post" style="background-color: black;">
                <div class="progression-studios-next-center">
                    <h5>Siguiente año<i class="fa fa-long-arrow-right" aria-hidden="true"></i></h5>
                    <h3>El Museo durante {{ $last->anio }}</h3>
                </div><!-- close .progression-studios-next-center -->
            </a>
            @endif
            <div class="clearfix-pro"></div>
        </div>

        <div class="clearfix-pro"></div>
    </div>
@include('layout.footer')
@include('layout.assets')
<link rel='stylesheet' href="{{ asset('css/timeline.css') }}" type='text/css' media='all' />
</body>
</html>
