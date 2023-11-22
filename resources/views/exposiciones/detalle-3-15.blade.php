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
                        <a href="{{url('exposiciones-digitales/2/nucleo/3')}}">
                            La ciudad y sus instituciones
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Real cédula sobre las constituciones y obligaciones de la religión...
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
                III. La ciudad y sus instituciones
            </h3>
        </div>

        <div class="width-container-pro pt-3">

            <div class="ma-row">
                <div class="col-md-6 text-center">
                    <a data-fancybox="gallery" href="{{asset('img/exposiciones/2/nucleo-3/foto-15.jpg')}}">
                        <img src="{{asset('img/exposiciones/2/nucleo-3/foto-15.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="ma_ficha_tecnica">
                        <div class="col-md-10 col-md-offset-1 p-0">
                            <!-- <h2><b></b></h2> -->
                            <table>
                                <tr>
                                    <td><b>Título</b></td>
                                    <td>Real cédula sobre las constituciones y obligaciones de la religión betlemítica, para la fundación del hospital</td>
                                </tr>
                                <tr>
                                    <td><b>Fecha</b></td>
                                    <td>
                                        <span>1687</span>
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
                                <p>Al cierre del siglo XVII las congregaciones religiosas en Nueva España vivieron su etapa de mayor auge. Eran propietarias de haciendas, hospitales, colegios y conventos, así como también les llegaban grandes cantidades de dinero para su sustento económico.</p>
                                <p>En 1678 surgen las primeras peticiones de fundar un hospital betlemita en Puebla. Al no haber un inmueble, la iniciativa se retomó hasta 1682 cuando el obispo Manuel Fernández de Santa Cruz solicita al virrey que los betlemitas se instalen formalmente en Puebla y levanten su hospital para atender a la población vulnerable que no tenía recursos económicos y apoyar a otros hospitales que se hallaban rebasados. El edificio sobrevive en la calle 4 Poniente y 7 Norte. Conserva su fuente del claustro del hospital que actualmente es el patio central de la biblioteca pública Ignacio Zaragoza, en cuyo centro se halla una fuente que indica que el hospital tuvo una merced de agua, es decir, el privilegio de tener un ducto que lo abastecía de agua potable.</p>
                                <p>En apego a los breves, documentos emitidos por los papas de carácter administrativo o que expresa una orden, el presente documento fue emitido el mismo año que el papa Inocencio XI reconoció formalmente la fundación de la congregación. En éste se expresa que había antecedentes en breves de Clemente X, firmados en 1673 y 1674, para operar sus hospitales y les autoriza que les sean pagados los servicios y cumplimientos funerarios de sus enfermos.</p>
                                <p>Les concede la aprobación de normas que permitan a los betlemitas operar su hospital en Puebla para atender a los pobres y enfermos de la ciudad. El texto también enfatiza la atención hospitalaria de la población, ya que existían fallecimientos constantes por no recibir atención médica inmediata. Una de las preocupaciones para fundar el hospital son los costos que los indígenas no pueden pagar por servicios de sanidad.</p>
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
