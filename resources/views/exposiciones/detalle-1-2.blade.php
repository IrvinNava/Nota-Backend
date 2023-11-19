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
                        Real cédula concediendo el título de Ciudad de Puebla de los Ángeles...
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
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/2/AGI_MEX_1088_0001.jpg')}}">
                        <img src="{{asset('img/exposiciones/2/nucleo-1/2/AGI_MEX_1088_0001.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="ma_ficha_tecnica">
                        <div class="col-md-10 col-md-offset-1 p-0">
                            <!-- <h2><b></b></h2> -->
                            <table>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>Real cédula concediendo el título de Ciudad de los Ángeles y eximiendo del pago de impuestos a sus habitantes durante treinta años</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha</b></td>
                                    <td>
                                        <span>20 de marzo de 1532</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Ubicación</b></td>
                                    <td>
                                        MEXICO,1088,L.2,F.50V-51R
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
                                <p>Isabel de Portugal, reina consorte de Castilla, expidió el 20 de marzo de 1532, en Medina del Campo, este documento donde expresó:</p>
                                <p>“Por cuanto… nuestros oidores de la… Audiencia y Cancillería Real de la Nueva España, han poblado de cristianos españoles un pueblo que se dice la Puebla de los Ángeles, que es entre Cholula y Tlaxcala… por la voluntad que el emperador, mi señor, y yo tenemos a que el dicho pueblo se ennoblezca… [de] ahora en adelante se llame e intitule Ciudad de los Ángeles… y los que de ahora en adelante fueren a vivir allá no paguen la alcabala… por treinta años… Yo, la reina…”</p>
                                <p>Dicho poblado estaba conformado por agricultores castellanos, y existía desde 1530/1531. Fue promovido por la Real Audiencia (tribunal castellano que gobernó Nueva España antes de que se estableciera el Virreinato), los religiosos franciscanos y probablemente por Julián Garcés, obispo de Tlaxcala.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>

        <div class="width-container-pro pt-3">
            <h3 class="progression-vayvo-progression-slider-title my-4">Imágenes</h3>

            <div class="row exposition-gallery-container">
                <div class="grid-item col-md-3 mb-3">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-1/2/AGI_MEX_1088_0002.jpg')}}">
                        <div class="exhibition-gallery-item" style="background-image: url({{asset('img/exposiciones/2/nucleo-1/2/AGI_MEX_1088_0002.jpg')}});"></div>
                    </a>
                    <div class="clearfix"></div>
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
