<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => 'Escudo de la ciudad de Puebla de los Ángeles',
        'description' => '',
        'url' => '',
        'image' => ''
    ];
?>
@include('layout.header')
<body class="video_skrn-template-default single single-video_skrn postid-125 logged-in elementor-default">
@include('layout.topbar')
<div id="post-125" class="post-125 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-season-1 print-layout relative">

    <img src="https://museoamparo.com/img/static/ma_symbol.png" class="absolute ma_symbol" width="100">
    <img src="https://museoamparo.com/img/static/ma_lateral_symbol.png" class="absolute ma_lateral_symbol" width="100">

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
                        <a href="{{url('exposiciones-digitales/2')}}">
                            Puebla virreinal: 21 joyas documentales
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item">
                        <a href="{{url('exposiciones-digitales/2/nucleo/1')}}">
                            Documentos fundacionales de Puebla
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Conveniencia de poblar Puebla de los Ángeles
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix-pro"></div>
    <div id="content-pro" class="site-content-video-post">

        <div class="width-container-pro pt-3">
            <h6 class="m-0">Puebla virreinal: 21 joyas documentales</h6>

            <h3 class="progression-vayvo-progression-slider-title my-4">
                I. Documentos fundacionales de Puebla
            </h3>
        </div>

        <div class="width-container-pro pt-3">

            <div class="ma-row">
                <div class="col-md-6 text-center">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0001.jpg')}}">
                        <img src="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0001.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="ma_ficha_tecnica">
                        <div class="col-md-10 col-md-offset-1 p-0">
                            <!-- <h2><b></b></h2> -->
                            <table>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>Conveniencia de poblar Puebla de los Ángeles</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha</b></td>
                                    <td>
                                        <span>1533</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Ubicación</b></td>
                                    <td>
                                        PATRONATO,21,N.4,R.1
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Archivo</b></td>
                                    <td>
                                        Archivo General de Indias Sevilla, España
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="border: 0;">
                                        <a href="" class="Actions__item__btn text-dark print-btn" title="Imprimir detalle">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <div class="exhibition-description-p" align="justify">
                                <p>Entre las principales motivaciones para la fundación de Puebla se encuentra la preocupación de los franciscanos por separar la población indígena de la castellana, la intención de Garcés por edificar una capital diocesana y el interés de la Segunda Audiencia en impulsar un asentamiento castellano cerca de Tlaxcala. De acuerdo con el presente documento, resguardado en el Archivo General de Indias, el valle de Cuetlaxcoapan reunía las condiciones idóneas para alojar a los colonos castellanos.</p>
                                <p>Algunas bondades enlistadas fueron que dicho valle estaba regado por aguas de ríos –Atoyac y San Francisco– y lagunas –San Baltazar o Alchichica–, contaba con abundantes campos para los cultivos y la ganadería. Cerca de él pasaban los antiguos caminos a Veracruz y la Ciudad de México, facilitando así la movilidad de personas y mercancías.</p>
                                <p>Para fomentar el poblamiento de la zona se repartieron solares y fanegadas (terrenos agrícolas) a los primeros vecinos de Puebla.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>

        <div class="width-container-pro">
            <h3 class="progression-vayvo-progression-slider-title my-4">Imágenes</h3>

            <div class="row exposition-gallery-container">
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0002.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0002.jpg')}});"></div>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0003.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0003.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0004.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0004.jpg')}});"></div>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0005.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0005.jpg')}});"></div>
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0006.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0006.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0007.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0007.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0008.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0008.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0009.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0009.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0010.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0010.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0011.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0011.jpg')}});"></div>
                    </a>
                </div>
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0012.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/4/AGI_PAT_0021_0012.jpg')}});"></div>
                    </a>
                </div>
            </div>

            <div class="clearfix"></div>

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
<link rel="stylesheet" href="{{ asset('css/exposiciones.css') }}" />
<link rel="stylesheet" href="{{ asset('css/print-styles.css') }}" />
<link rel='stylesheet' href="{{ asset('css/jquery.fancybox.min.css') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/exhibitions.js') }}"></script>

</body>
</html>
