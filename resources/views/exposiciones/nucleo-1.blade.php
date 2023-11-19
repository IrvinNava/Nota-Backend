<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => '',
        'description' => '',
        'url' => '',
        'image' => ''
    ];
?>
@include('layout.header')
<body class="video_skrn-template-default single single-video_skrn postid-125 logged-in elementor-default">
@include('layout.topbar')
<div id="post-125" class="post-125 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-season-1">


    <div class="ma-row">
        <div class="col-md-6">

            <div class="nucleo-cover-description">

                <h6 class="m-0">Puebla virreinal: 21 joyas documentales </h6>

                <h3 class="progression-vayvo-progression-slider-title my-4">
                    I. Documentos fundacionales de Puebla
                </h3>

                <div class="progression-studios-video-slider-excerpt" align="justify">
                    <p>El 16 de abril de 1531 es tradicionalmente aceptado como el día en que colonos castellanos se asentaron en el valle de Cuetlaxcoapan y fundaron Puebla de los Ángeles. Hoy se reconoce a los franciscanos, a la Segunda Audiencia y al obispo de Tlaxcala, fray Julián Garcés, como actores determinantes para el establecimiento de la nueva urbe, que en 1532 fue elevada al grado de “ciudad”.</p>
                    <p>La reina Isabel de Portugal le dio el nombre de “Ciudad de los Ángeles” y seis años más tarde, le concedió un escudo de armas, hecho que consolidó el nacimiento oficial de Puebla.</p>
                    <p>Los documentos del presente núcleo son claves para reconstruir la fundación de Puebla. La mayoría de ellos fueron expedidos por los soberanos castellanos y provienen de la primera mitad del siglo XVI, ya que fue una de las primeras ciudades novohispanas que vieron la luz.</p>
                    <p>El documento más antiguo que aquí se incluye expresa el rango de Garcés como "obispo Carolense" con su sede en Tlaxcala. Puebla fue conocida inicialmente como "Ciudad de los Ángeles" y desde 1543 fue sede del Obispado de Tlaxcala, hasta 1904 cuando cambió su estatuto a “Arquidiócesis de Puebla".</p>
                </div>

            </div>

        </div>
        <div class="col-md-6 nucleo-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1.jpg')}})">

        </div>
    </div>



    <div class="elementor-section elementor-section-boxed mt-5">
        <div class="elementor-container elementor-column-gap-default">
            <div class="col-xs12">
                <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                    <li class="Breadcrumbs__list__item">
                        <a href="{{ url('') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item">
                        <a href="{{url('exposiciones-digitales/')}}">
                            Exposiciones digitales
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item">
                        <a href="{{url('exposiciones-digitales/2')}}">
                            Puebla virreinal: 21 joyas documentales
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Documentos fundacionales de Puebla
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix-pro"></div>
    <div id="content-pro" class="site-content-video-post">
        <div class="width-container-pro pt-3">

            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/1/1') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/documento-1.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Testimonio suscrito por el notario apostólico Cristóbal Peregrina...</h5>
                                    <small>Año: 1526</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/1/2') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/documento-2.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Real cédula concediendo el título de Ciudad de Puebla...</h5>
                                    <small>Año: 1532</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/1/3') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/documento-3.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Real provisión otorgando escudo de armas a la Ciudad de los Ángeles</h5>
                                    <small>Año: 1538</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/1/4') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/documento-4.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Conveniencia de poblar Puebla de los Ángeles</h5>
                                    <small>Año: 1533</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/1/5') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/documento-5.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Real provisión signada por el rey Felipe II...</h5>
                                    <small>Año: 1576</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@include('layout.assets')
<link rel="stylesheet" href="{{ asset('css/exposiciones.css') }}" />
<link rel='stylesheet' href="{{ asset('css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
</body>
</html>
