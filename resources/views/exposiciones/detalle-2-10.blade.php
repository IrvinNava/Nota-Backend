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
                        <a href="{{url('exposiciones-digitales/2/nucleo/2')}}">
                            El nacimiento de una urbe
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Planta de la Çiudad de los Ángeles de Nueba España
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
                II. El nacimiento de una urbe
            </h3>
        </div>

        <div class="width-container-pro pt-3">

            <div class="ma-row">
                <div class="col-md-6 text-center">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-2/foto-10.jpg')}}">
                        <img src="{{asset('img/exposiciones/2/nucleo-2/foto-10.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="ma_ficha_tecnica">
                        <div class="col-md-10 col-md-offset-1 p-0">
                            <!-- <h2><b></b></h2> -->
                            <table>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>Planta de la Ciudad de los Ángeles de Nueva España</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha</b></td>
                                    <td>
                                        <span>12 de enero de 1698</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Ubicación</b></td>
                                    <td>
                                        MP-MEXICO,529
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
                                <p>Cristóbal de Guadalajara fue sacerdote y bachiller de origen angelopolitano, versado en matemáticas, geografía y cartografía. Vivió en Puebla a finales del siglo XVII y fue autor del plano que se muestra, firmado el 12 de enero de 1698.</p>
                                <p>La ciudad aparece orientada este-oeste, probablemente para respetar la dirección de la catedral, edificio clave en el urbanismo poblano. Después del traslado diocesano, de Tlaxcala a Puebla, se reorganizó el espacio urbano siguiendo ideales renacentistas. La plaza mayor concentró al ayuntamiento, la catedral y a los comerciantes. A partir de ella, nació la red cuadriculada de calles que se aprecia en el plano dibujado por Guadalajara y que sigue distinguiendo a la ciudad. La obra también muestra la ubicación de barrios indígenas periféricos, como El Alto o Analco.</p>
                                <p>Este tipo de planos ayudaron a mejorar la administración fiscal, urbana y social, sobre los solares de la ciudad.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        </div>

        <div class="width-container-pro">

            <div class="row exposition-gallery-container">

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
