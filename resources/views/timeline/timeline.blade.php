<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => 'Timeline',
        'description' => 'Descubre todas los eventos sucedidos en la linea del tiempo',
        'url' => url(''),
        'image' => ''
    ];
?>
@include('layout.header')
<body class="">

    @include('layout.topbar')

    <!-- close #progression-studios-header-position -->
    <div id="content-pro" class="site-content">

        <div class="page">
            <div class="views">
                @foreach($registros as $registro)
                <div class="view view--1">
                    <div class="view__inner">
                        <section class="elementor-section elementor-section-boxed">
                            <div class="elementor-container elementor-column-gap-default ma-timeline-item-container">
                                <div class="timeline-general-title">
                                    <h2><a href="{{ url('timeline-detalle/'.\Carbon\Carbon::parse($registro->fecha_evento)->format('Y').'/'.$registro->anio_id) }}">{{ $registro->titulo }}</a></h2>

                                    <!-- <p>{{ \Carbon\Carbon::parse($registro->fecha_evento)->format('d-m-Y') }}</p> -->
                                    <img src="{{ (!empty($registro->cover)) ? $registro->cover : asset('img/museo-amparo-puebla-placeholder-black.png') }}" class="ma-timeline-image">

                                </div>
                                <div>
                                    <div class="timeline-date">
                                        <? $fecha_evento = \Carbon\Carbon::parse($registro->fecha_evento)?>
                                        <p>{{ $fecha_evento->day }}<br>{{ $fecha_evento->formatLocalized('%B') }}</p>
                                        <p>{{ $fecha_evento->year }}</p>
                                    </div>

                                    <p class="p-event">{{ \App\EventoTipo::getNombre($registro->tipo_evento_id) }}</p>
                                    <p class="p-author">{{ Helper::getProfessionList($registro->autores) }}</p>
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
                                    @if($registro->colaboraciones->count())
                                        <p class="p-collaborations"><b>En colaboración con:</b></p>
                                        <p class="collaboration">
                                           <?= \App\Colaboracion::list($registro->colaboraciones); ?>
                                        </p>
                                    @endif
                                    <a href="{{ url('timeline-detalle/'.\Carbon\Carbon::parse($registro->fecha_evento)->format('Y').'/'.$registro->anio_id) }}" class="explore-link"><b>Explorar toda la información del año: {{ \Carbon\Carbon::parse($registro->fecha_evento)->format('Y') }} </b><i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="timeline__wrapper">
                <div class="timeline">
                    <ul class="timeline__list">
                        @foreach($registros as $registro)
                        <? $activeClass = ($activo < 1) ? 'timeline__item--active' : ''; ?>
                        <li class="timeline__item {{ $activeClass }}"><a class="timeline__link" href="#">
                            <div class="timeline__item__point"></div></a>
                            <div class="timeline__item__content"><img class="timeline__item__thumb" src="{{ (!empty($registro->thumbnail)) ? $registro->thumbnail : asset('img/museo-amparo-puebla-thumbnail-black.png') }}"/>
                                <div class="timeline__item__shadow"></div>
                            </div><div class="timeline__item__year">{{ \Carbon\Carbon::parse($registro->fecha_evento)->format('Y') }}</div>
                        </li>
                        <? $activo = 1; ?>
                        @endforeach
                    </ul>
                    <!-- <div class="timeline__path">
                        <div class="timeline__path__triangle timeline__path__triangle--moving"></div>
                        <div class="timeline__path__triangle timeline__path__triangle--static-1"></div>
                        <div class="timeline__path__triangle timeline__path__triangle--static-2"></div>
                        <div class="timeline__path__triangle timeline__path__triangle--static-3"></div>
                    </div> -->
                </div>
            </div>
        </div>

        @include('layout.footer')
        @include('layout.assets')

        <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
        <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

        <link rel='stylesheet' href="{{ asset('css/timeline.css') }}" type='text/css' media='all' />
        <script type='text/javascript' src="{{ asset('js/timeline.js') }}"></script>
    </div>
    <!-- close #boxed-layout-pro -->
    <div id="pro-scroll-top">Scroll to top</div>


</body>
</html>
