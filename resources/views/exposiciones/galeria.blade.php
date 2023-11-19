<?
use App\Helpers\Helper;
$metadata = [
    'title' => 'El Museo Amparo ',
    'description' => '',
    'url' => url(''),
    'image' => ''
];
?>
@include('layout.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="">
    @include('layout.topbar')
    <div id="content-pro" class="site-content">
        <div class="page">
            <div class="gallery-container relative">

                <div id="sync1" class="owl-carousel owl-theme">
                    <div class="item" style="background-image: url(https://museoamparo.online/storage/uploads/cover_diacronia-y-sincronia-lo-prehispanico-en-el-arte-moderno-y-contemporaneo_6333136c181a9.jpg)">
                        <h1>1</h1>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-arquitectura-historia-1280x720-museo-amparo-puebla-01112021.jpg)">
                        <h1>2</h1>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-slider-plasmar-el-alma-arte-maya-museo-amparo-puebla.jpg)">
                        <h1>3</h1>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-las-nuevas-visiones-de-la-conquista-museoamparo-puebla-29092021.png)">
                        <h1>4</h1>
                    </div>
                    <div class="item" style="background-image: url(https://museoamparo.online/storage/uploads/cover_dialogos-con-artistas-de-la-coleccion-de-arte-contemporaneo_625dbec6b836f.png)">
                        <h1>5</h1>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-slider-la-catedral-de-puebla-museo-amparo-puebla-1820x720-03032021-2.png)">
                        <h1>6</h1>
                    </div>
                </div>

                <div id="sync2" class="owl-carousel owl-theme">
                    <div class="item" style="background-image: url(https://museoamparo.online/storage/uploads/cover_diacronia-y-sincronia-lo-prehispanico-en-el-arte-moderno-y-contemporaneo_6333136c181a9.jpg)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 1</h5>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-arquitectura-historia-1280x720-museo-amparo-puebla-01112021.jpg)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 2</h5>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-slider-plasmar-el-alma-arte-maya-museo-amparo-puebla.jpg)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 3</h5>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-las-nuevas-visiones-de-la-conquista-museoamparo-puebla-29092021.png)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 4</h5>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(https://museoamparo.online/storage/uploads/cover_dialogos-con-artistas-de-la-coleccion-de-arte-contemporaneo_625dbec6b836f.png)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 5</h5>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-slider-la-catedral-de-puebla-museo-amparo-puebla-1820x720-03032021-2.png)">
                        <div class="gallery-caption">
                            <h5 class="progression-video-title">Galería 6</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layout.footer')
    @include('layout.assets')

    <link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/galeria.css') }}" />

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script> -->

    <script src="{{ asset('js/galeria.js') }}"></script>


</body>
</html>
