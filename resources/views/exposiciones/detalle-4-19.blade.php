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
                        <a href="{{url('exposiciones-digitales/2/nucleo/4')}}">
                            Puebla en la era borbónica
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Información relativa a la fundación y erección de un hospicio...
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
                IV. Puebla en la era borbónica
            </h3>
        </div>

        <div class="width-container-pro pt-3">

            <div class="ma-row">
                <div class="col-md-6 text-center">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-4/foto-19.jpg')}}">
                        <img src="{{asset('img/exposiciones/2/nucleo-4/foto-19.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="ma_ficha_tecnica">
                        <div class="col-md-10 col-md-offset-1 p-0">
                            <!-- <h2><b></b></h2> -->
                            <table>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>Información relativa a la fundación y erección de un hospicio para pobres en el colegio de San Ildefonso, en el que mencionan que no tienen suficientes fondos para su sustento, por lo que piden se establezca como nuevo seminario correccional</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha</b></td>
                                    <td>
                                        <span>1791</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Archivo</b></td>
                                    <td>
                                        Archivo Histórico Diocesano
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
                                <p>Carlos III expulsó a los jesuitas del Imperio Hispánico en 1767.  La Corona y los clérigos seculares buscaron aprovechar los edificios jesuíticos desocupados para sus intereses y para beneficio público, convirtiendo varias de sus fundaciones en hospicios e instituciones de bienestar social.</p>
                                <p>Victoriano López Gonzalo, obispo de Puebla en 1791, envió una solicitud al rey Carlos IV donde propuso convertir el antiguo colegio jesuita de San Ildefonso en un hospicio. Buscaba ocupar el sitio desalojado por sus anteriores propietarios para establecer una institución que beneficiara a los habitantes de Puebla.</p>
                                <p>Este documento permite comprender cómo el bienestar público pasó de “caridad cristiana” a tema de “beneficencia pública” durante la época borbónica, idea vigente hasta la actualidad. También expresa el interés del Estado por adueñarse de inmuebles que consideraba “inservibles” por estar en manos “muertas” (de corporaciones colectivas como los jesuitas) para convertirlos en “bienes públicos”.</p>
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
