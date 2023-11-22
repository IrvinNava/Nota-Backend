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
                <h3 class="progression-vayvo-progression-slider-title my-4">
                    Puebla virreinal: 21 joyas documentales
                </h3>
                <div class="progression-studios-video-slider-excerpt">
                    <p align="justify">Esta exposición digital organizada por el Museo Amparo y el Archivo General Municipal de Puebla, en el marco del 492 aniversario de la fundación de la Ciudad de Puebla de los Ángeles, nos permite aproximarnos a algunos documentos fundacionales, así como conocer testimonios sobre la urbanización, poblamiento, administración y gobierno de la ciudad durante el Virreinato.</p>
                    <p align="justify">Los documentos que se muestran pertenecen al Archivo General de Indias de Sevilla, al Archivo Histórico Diocesano y al Archivo General Municipal de Puebla, quienes amablemente han proporcionado las imágenes que se han organizado para esta exhibición en cuatro núcleos temáticos. Esta exposición nos permite adentrarnos en la planeación y el desarrollo urbanísticos de los primeros pobladores, así como en el papel que tuvieron distintas instituciones civiles y religiosas, el impacto en la administración y en la organización poblanas tras la llegada, en el siglo XVIII, de la Casa Borbón al trono de la Monarquía Hispánica y el legado virreinal para la era del México Independiente.</p>
                    <p align="justify">Conocer el extraordinario legado documental conformado en la época virreinal, nos permite poner en valor su relevancia en el presente.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 nucleo-cover" style="background-image: url({{asset('img/exposiciones/2/puebla-virreinal-21-joyas-documentales.jpg')}}); background-position: right;">
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
                        Créditos
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix-pro"></div>
    <div id="content-pro" class="site-content-video-post">
        <div class="width-container-pro pt-3">

            <h1 style="color:#4d4d4d;"><strong>Créditos de exposición</strong></h1>

            <div id="creditsListContainer" class="row">
                <div class="col-md-6 credits-item mt-4">
                    <h5 class="m-0 fw-bold credit-entity">Curaduría</h5>
                    <p class="m-0 credit-name">Abraham Villavicencio García</p>
                    <p class="m-0 credit-titles">Adrián Hernández González</p>
                </div>
                <div class="col-md-6 credits-item mt-4"></div>
                <div class="col-md-6 credits-item mt-4">
                    <h5 class="m-0 fw-bold credit-entity">MUSEO AMPARO</h5>
                    <p class="m-0 credit-name">Ramiro Martínez Estrada</p>
                    <p class="m-0 credit-titles">Director Ejecutivo del Museo Amaparo</p>
                </div>
                <div class="col-md-6 credits-item mt-4">
                    <h5 class="m-0 fw-bold">H. Ayuntamiento del Municipio de Puebla</h5>
                    <p class="m-0 credit-name">María Lucero Saldaña Pérez</p>
                    <p class="mb-1 credit-titles">Secretaria del H. Ayuntamiento del Municipio de Puebla</p>
                </div>
                <div class="col-md-6 credits-item mt-4"></div>
                <div class="col-md-6 credits-item mt-4">
                    <p class="m-0 credit-name">María Teresa Cordero Arce</p>
                    <p class="m-0 credit-titles">Directora del Archivo General Municipal de Puebla</p>
                </div>
                <div class="col-md-6 credits-item mt-4">
                    <h5 class="m-0 fw-bold credit-entity">ARCHIVO DE INDIAS</h5>
                    <p class="m-0 credit-name">Esther Cruces Blanco</p>
                    <p class="m-0 credit-titles">Directora General del Archivo de Indias, Sevilla España</p>
                </div>
                <div class="col-md-6 credits-item mt-4">
                    <h5 class="m-0 fw- credit-entity">ARCHIVO DIOCESANO</h5>
                    <p class="m-0 credit-name">Pbro. Francisco Vázquez Ramírez</p>
                    <p class="m-0 credit-titles">Director del Archivo Diocesano</p>
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
