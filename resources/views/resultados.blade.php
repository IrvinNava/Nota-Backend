<?
    $metadata = [
        'title' => 'Búsqueda',
        'description' => '',
        'url' => url('resultados'),
        'image' => ''
    ];
?>
@include('layout.header')
<body class="archive post-type-archive post-type-archive-video_skrn logged-in elementor-default">
<div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
@include('layout.topbar')
    <div id="content-pro" class="site-content">
        <div class="width-container-pro">
            <div id="progression-studios-search-results-videos">
                <h4>Resultados para: "{{ $busqueda }}"</h4>
                <span>{{ $resultados->count() }}</span> resultados encontrados
            </div>
            <div class="progression-masonry-margins" style="margin-top:-3px; margin-left:-3px; margin-right:-3px;">
                <div class="progression-studios-video-index-list">
                    @if($resultados->count())
                        @foreach($resultados as $resultado)
                            <? $recurso = $resultado->recurso ?>
                            <div class="progression-masonry-item progression-masonry-col-3">
                                <div class="progression-masonry-padding-blog" style="padding:3px;">
                                    <div class="progression-studios-isotope-animation">
                                        <div id="post-419" class="post-419 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-movies video-genres-drama">
                                            <div class="progression-studios-video-index-container">
                                                @if($recurso !='App\Timeline')
                                                <a href="{{ $recurso->getUrl()  }}">
                                                    <div class="progression-studios-video-feaured-image">
                                                        <img width="700" height="480" src="{{ $recurso->thumbnail }}" alt="{{ $recurso->titulo }}" loading="lazy"/>
                                                    </div>
                                                    <div class="progression-video-index-content">
                                                        <div class="progression-video-index-table">
                                                            <div class="progression-video-index-vertical-align">
                                                                <h2 class="progression-video-title">{{ $recurso->titulo }}</h2>
                                                                <div class="clearfix"></div>
                                                                <ul class="video-index-meta-taxonomy ma-tags-container">
                                                                    @foreach($recurso->etiquetas->take(3) as $etiqueta)
                                                                        <li>{{ $etiqueta->nombre }}</li>
                                                                    @endforeach
                                                                </ul>
                                                                <ul class="video-index-meta-taxonomy">
                                                                    @foreach($recurso->categorias as $categoria)
                                                                        <li>{{ $categoria->nombre }}</li>
                                                                    @endforeach
                                                                </ul>
                                                                <div class="clearfix-pro"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="video-index-border-hover"></div>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <div class="no-results-container text-center">
                        <div class="layer-no-results"><div class="no-results-icon"></div></div>
                        <h3>Lo sentimos, no se han encontrado resultados para la búsqueda</h3>
                    </div>
                    @endif
                    <div class="clearfix-pro"></div>
                </div>
            </div>
            <div class="clearfix-pro"></div>
{{--            <ul class='page-numbers'>--}}
{{--               <li><span aria-current='page' class='page-numbers current'>1</span></li>--}}
{{--               <li><a class='page-numbers' href=''>2</a></li>--}}
{{--               <li><a class="next page-numbers" href=""><span>Siguiente &rsaquo;</span></a></li>--}}
{{--            </ul>--}}
{{--            <div class="clearfix-pro"></div>--}}
        </div>
    </div>
    @include('layout.footer')
    @include('layout.assets')
</div>
<div id="pro-scroll-top">Scroll to top</div>
<script type='text/javascript' id='vayvo-progression-scripts-js-after'>
    jQuery(document).ready(function ($) {
        "use strict";
        $("#configreset, #mobile-configure-rest").click(function () {
            $(".advanced-searchform-video-header, .mobile-searchform-video-header").trigger("reset");
            $(".advanced-searchform-video-header input:checked, .mobile-searchform-video-header input:checked").removeAttr("checked");
            $(".skrn-director-select2, .skrn-category-select2, .skrn-genre-select2, .skrn-duration-select2").val("").trigger("change");
            $(".skrn-director-select2 option[selected], .skrn-category-select2 option[selected], .skrn-genre-select2 option[selected], .skrn-duration-select2 option[selected]").removeAttr("selected");

            $(this).parents("form").find(".rating-range-search-skrn").val("0,5");
            var api = $(this).parents("form").find(".rating-range-search-skrn").data("asRange");
            api.set([0, 5]);
        });
    });

    jQuery(document).ready(function ($) {
        "use strict";

        /* Default Isotope Load Code */
        var $container = $(".progression-studios-video-index-list").isotope();
        $container.imagesLoaded(function () {
            $(".progression-masonry-item").addClass("opacity-progression");
            $container.isotope({
                itemSelector: ".progression-masonry-item",
                percentPosition: true,
                layoutMode: "masonry"
            });
        });


    });

</script>

</body>
</html>
