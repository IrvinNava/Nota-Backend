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
                    III. La ciudad y sus instituciones
                </h3>

                <div class="progression-studios-video-slider-excerpt" align="justify">
                    <p>Hacia finales del siglo XVI, cuando Puebla se posicionaba como una ciudad con presencia política y económica en Nueva España, la Corona autorizó la fundación de conventos como instituciones eclesiásticas que moldearon la organización social y urbana de la ciudad. Entre sus responsabilidades estaba fomentar obras de caridad para el bienestar de sus habitantes, colaborar en el cuidado de la salud, la educación y atender a grupos vulnerables.</p>
                    <p>Los cinco documentos presentados dan cuenta del papel de las instituciones religiosas en la atención tanto espiritual como material de los habitantes de Puebla. Sobresalen el hospital de Belén, la casa de niños abandonados de San Cristóbal y los colegios de San Pedro y San Juan, recintos donde se educaba a clérigos parroquiales. También se muestra una lista de pasajeros que registra el arribo de Juan de Palafox y Mendoza en 1640, desde España. A él se atribuye el fortalecimiento del proyecto urbanístico iniciado un siglo atrás; entre sus obras destacan trabajos para el bienestar de los vecinos, la fundación de la Biblioteca Palafoxiana y de los colegios de San Pedro y San Juan, así como el término de la actual catedral erigida hacia la década de 1550.</p>
                </div>

            </div>

        </div>
        <div class="col-md-6 nucleo-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3.jpg')}})">

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
                        La ciudad y sus instituciones
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
                        <a href="{{ url('exposiciones-digitales/2/nucleo/3/1') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3/portada-12.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Don Gaspar de Zúñiga y Acevedo, conde de Monterrey......</h5>
                                    <small>Año: 1596</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/3/2') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3/portada-13.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Testimonios de la fundación de la casa de niños expósitos...</h5>
                                    <small>Año: 1607</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/3/3') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3/portada-14.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Expediente de información y licencia de pasajero a Indias...</h5>
                                    <small>Año: 1640</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/3/4') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3/portada-15.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Real cédula sobre las constituciones y obligaciones de la religión bethlemitica...</h5>
                                    <small>Año: 1687</small>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="document-container">
                        <a href="{{ url('exposiciones-digitales/2/nucleo/3/5') }}">
                            <div class="col-md-6">
                                <div class="document-cover" style="background-image: url({{asset('img/exposiciones/2/nucleo-3/portada-16.jpg')}})"></div>
                            </div>
                            <div class="col-md-5">
                                <div class="document-description">
                                    <h5>Testimonio de las reales cédulas en que se manda a los curas doctrineros satisfagan la pensión anual...</h5>
                                    <small>Año: 1737</small>

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
