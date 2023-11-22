<?
use App\Helpers\Helper;
$metadata = [
    'title' => 'Nombre del evento',
    'description' => 'Descripción del evento',
    'url' => url(''),
    'image' => ''
];
?>
@include('layout.header')
<body class="page-template-default page page-id-31 logged-in elementor-default elementor-page elementor-page-31">
    <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
        @include('layout.topbar')
        <div id="page-title-pro">
            <div id="progression-studios-page-title-container">
                <div class="clearfix-pro"></div>
            </div>
            <div id="page-title-overlay-image" style="background-image: url('https://museoamparo.online/storage/uploads/cover_diana-negroponte_61117d331e7a1.png')"></div>
        </div>

        <div class="elementor-section elementor-section-boxed">
            <div class="elementor-container elementor-column-gap-default">
                <div class="col-xs12">
                    <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                        <li class="Breadcrumbs__list__item">
                            <a href="{{ url('') }}">
                                Inicio
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item">
                            <a href="">
                                Timeline
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item">
                            <a href="">
                                1991
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item is-current">
                            Visita de Diana Negroponte
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="clearfix-pro"></div>
        <div id="content-pro" class="site-content-blog-post">
            <div class="width-container-pro">

                <div class="width-container-pro">
                    <h1 class="page-title">Visita de Diana Negroponte</h1>
                    <ul class="progression-single-post-meta">
                        <li class="blog-meta-author-display"><span>Visitantes</span></li>
                        <li class="blog-category-date-list"><a href="">17 Octubre 1991</a></li>
                    </ul>
                    <br>
                    <div class="clearfix-pro"></div>
                </div>

                <div id="main-container-pro">
                    <div class="row">
                        <div class="editor-item col-md-12 col-xs-12">
                            <div class="editor-item-content">
                                <p>En 1991, la señora Diana Negroponte, esposa del embajador de Estados Unidos, acompañada de la señora Patricia Kurczyn y la señora Ángeles Espinosa Yglesias Rugarcía, realizó un recorrido por el Museo para conocer la cultura de nuestro país.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i>Compartir</div>


                <div class="clearfix-pro"></div>
                <div class=" hidden-elemen" style="padding: 20px">
                    <h3>Galería</h3>


                    <div class="mosaicos" data-page="1">
                        <div class="grid">
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita.jpg') }}" />
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita-1.jpg') }}" />
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita-2.jpg') }}" />
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita-3.jpg') }}" />
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita-4.jpg') }}" />
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="{{ asset('img/ma-visita-5.jpg') }}" />
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <div id="blog-single-social-sharing-container">
            <div id="close-social-sharing-skrn"><span></span></div>
            <ul id="blog-single-social-sharing" class="noselect">
                <li>
                    <a href="https://twitter.com/share?text=AmparoOnline+Audio&url={{ URL::current() }}" title="Twitter" class="twitter-share" target="_blank"><i class="fa fa-twitter"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir en Twitter</span></a>
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

        @include('layout.footer')
        @include('layout.assets')

        <link rel='stylesheet' id='elementor-post-31-css'  href="{{ asset('css/post-31.css?ver=1570662040') }}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"  crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/ma-custom-fancybox.css') }}" />

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
