<?
    $metadata = [
        'title' => '30 años | Museo Amparo',
        'description' => 'Te invitamos a compartir una fotografía que te hayas tomado en el Museo Amparo para formar un gran mosaico de historias. Cuéntanos de cuándo es la imagen, qué actividad realizaste en el Museo, con quién estabas y tu experiencia de visita.',
        'url' => '',
        'image' => 'http://443e3f4e7dd2b6a88a3f-b9c0667778661278083bed3d7c96b2f8.r88.cf1.rackcdn.com/amparo_online/slider-elamparoerestu-1280x720-museo-amparo-puebla.png'
    ];
?>
@include('layout.header')
<body class="page-template-default page page-id-31 logged-in elementor-default elementor-page elementor-page-31">
    <div class="ma-loading"><div></div></div>
   <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
   @include('layout.topbar')

   <div class="principal-container form-content">
        <div class="principal-content">
            <div class="center-block col-xs12 col-s12 col-l8 no-padding">

            </div>
        </div>
    </div>

    <div class="center-block col-xs12 col-s10">
        <div class="">
            <div class="col-xs12 t_align_j">
                <ul class="Breadcrumbs__list contemporaneo-breadcrumbs m_top_10">
                    <li class="Breadcrumbs__list__item">
                        <a href="{{ url('') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="Breadcrumbs__list__item is-current">
                        Mosaicos
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ma-anniversary-content">
        <div class="center-block col-xs12 col-s10">
            <div class="col-xs12 t_align_j">
                <h2 class="progression-vayvo-progression-slider-title">¡El Amparo eres tú!</h2>
                <br>
                <p >Es nuestro 30 aniversario y queremos celebrar mostrando la memoria visual de esta historia que es compartida.</p>
                <p class="margentop">Por ello, te invitamos a buscar entre tus fotos esos momentos especiales que has vivido en el Amparo y a compartir esos recuerdos con nosotros.</p>
                <p>Envíanos tus imágenes, cuéntanos de cuándo son, qué actividad realizaste, con quién estabas y, lo más importante, cómo fue tu experiencia.</p>
                <p>Queremos formar un gran mosaico de historias que se reflejarán también en la Sala de Aniversario porque esta historia de tres décadas no sería posible sin ti.</p>
                <br>
                <p class="">Puedes subirla directamente en el siguiente link:</p>

                <p>
                    <a class="ma-online-dark-button" href="{{url('aniversario')}}">Subir mi foto</a>
                </p>

                <div class="mosaicos" data-page="1">
                    <div class="grid">
                    @foreach($registros as $registro)
                        <?
                        $prefix = 'type';
                        $media = ($registro->media_collection->count()) ? $registro->media_collection : null;?>
                        @if($media)
                            @foreach($media as $media_img)
                                <? $type = $prefix.'_'.$media_img->type;//2 = mosaico completo | 3 = mosaico cuadrado
                                $$type = $media_img->url?>
                            @endforeach
                            <div class="item">
                            <a href="{{$type_3}}" data-fancybox="images">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{$type_3}}" />
                                        <div class="caption">
                                            <h2 class="Name_section__title2"><b>{{$registro->nombre_visitante}}</b><br/><span>Edad: {{$registro->edad_visitante}} | </span><span>{{$registro->ciudad_residencia}}</span></h2>
                                            <p><b>Fecha:</b> {{$registro->fecha_visita}}</p>
                                            <p><b>Evento:</b> {{$registro->evento_visita}}</p>
                                            <p class="hidden"><b>Motivo de la visita:</b> {{$registro->motivo_visita}}</p>
                                            <p><b>Mi experiencia:</b> {{$registro->detalle_visita}}</p>
                                            <p><b>Fotografía por:</b> {{$registro->nombre_fotografo}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        @else
                            <p>No tenemos datos de la visita</p>
                        @endif

                    @endforeach
                    </div>
                </div>
                <div class="content-loading-container"></div>
                <hr>
                <div class="items">
                    <p>Recuerda seguir compartiéndonos tus momentos favoritos en redes sociales usando el hashtag <b>#MuseoAmparo</b>:</p>
                    <p>Facebook: <a data-cke-saved-href="https://www.facebook.com/MuseoAmparo.Puebla/" href="https://www.facebook.com/MuseoAmparo.Puebla/">/MuseoAmparo.Puebla</a> | Twitter: <a data-cke-saved-href="https://twitter.com/MuseoAmparo" href="https://twitter.com/MuseoAmparo">@MuseoAmparo</a> | Instagram: <a data-cke-saved-href="https://www.instagram.com/museoamparo/" href="https://www.instagram.com/museoamparo/">@museoamparo</a></p>
                </div>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>

   @include('layout.footer')
   @include('layout.assets')
   <link rel="stylesheet" href="https://museoamparo.com/css/style.css">
   <link rel="stylesheet" href="https://museoamparo.com/css/animate.min.css" as="style">
   <link rel="stylesheet" href="https://museoamparo.com/css/embed.min.css" as="style">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" as="style">
   <link rel="stylesheet" href="https://museoamparo.com/css/main.min.css" as="style">
   <link rel="preload" href="https://museoamparo.com/css/vendor.css" as="style">
   <link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"  crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"  crossorigin="anonymous" />
   <link rel="stylesheet" href="{{ asset('css/ma-custom-fancybox.css') }}" />

   <script src="{{ asset('js/mosaicos.js') }}"></script>

   <script type="text/javascript">

   // Template for custom "info" button
   $.fancybox.defaults.btnTpl.info =
   '<button data-fancybox-info class="fancybox-button fancybox-button--info" title="Show caption">&#x25cf;&#x25cf;&#x25cf;</button>';

   // Initialise fancybox with custom settings
   $('[data-fancybox="images"]').fancybox({
       preventCaptionOverlap: false,
       infobar: false,
       protect: true,
       // Disable idle
       idleTime: 0,
       touch:false,
       // Display only these two buttons
       buttons: ["fullScreen","close"],

       // Custom caption content
       caption: function (instance, obj) {
           return (
               '<div><p class="fancy-nav"><a data-fancybox-prev title="Previous" tabindex="1">&lsaquo;</a> <a data-fancybox-next title="Next" tabindex="2">&rsaquo;</a> &nbsp; <span data-fancybox-index></span> de <span data-fancybox-count></span> imágenes</p>' +
               $(this).find(".caption").html() +
               "</div>"
           );
       },

       onInit: function (instance) {
           // Toggle caption on tap
           instance.$refs.container.on(
               "touchstart",
               "[data-fancybox-info]",
               function (e) {
                   e.stopPropagation();
                   e.preventDefault();
                   instance.$refs.container.toggleClass("fancybox-vertical-caption");
               }
           );

           // Display caption on button hover
           instance.$refs.container.on(
               "mouseenter",
               "[data-fancybox-info]",
               function (e) {
                   instance.$refs.container.addClass("fancybox-vertical-caption");
                   // Hide caption when mouse leaves caption area
                   instance.$refs.caption.one("mouseleave", function (e) {
                       instance.$refs.container.removeClass("fancybox-vertical-caption");
                   });
               }
               );
           }
       });

       function resizeGridItem(item) {
           grid = document.getElementsByClassName("grid")[0];
           rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
           rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
           rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
           item.style.gridRowEnd = "span " + rowSpan;
       }

       function resizeAllGridItems() {
           allItems = document.getElementsByClassName("item");
           for (x = 0; x < allItems.length; x++) {
               resizeGridItem(allItems[x]);
           }
       }

       function resizeInstance(instance) {
           item = instance.elements[0];
           resizeGridItem(item);
       }

       window.onload = resizeAllGridItems();
       window.addEventListener("resize", resizeAllGridItems);

       allItems = document.getElementsByClassName("item");
       for (x = 0; x < allItems.length; x++) {
           imagesLoaded(allItems[x], resizeInstance);
       }

       $(function (){

           resizeAllGridItems();

           setTimeout( function(){
               $(".ma-loading").remove();
           },1000);
       });

   </script>



</body>
</html>
