<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => 'Listas de reproducción',
        'description' => 'Conoce todos los contenidos categorizados por tema en Amparo Online',
        'url' => url('/playlists'),
        'image' => '',
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
       <div id="page-title-overlay-image" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/cover-playlists-1280X720-museo-amparo-puebla-20042021.jpg'); background-position:top"></div>
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
                    <li class="Breadcrumbs__list__item is-current">
                          Playlists
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix-pro"></div>
   <div id="content-pro">

      <div class="ma-full-page width-container-pro">
         <div id="post-31" class="post-31 page type-page status-publish hentry">
            <div class="page-content-pro">
               <div data-elementor-type="wp-post" data-elementor-id="31" class="elementor elementor-31" data-elementor-settings="[]">
                  <div class="elementor-inner">
                     <div class="elementor-section-wrap">

                         <div class="width-container-pro ">
                             <h2 class="progression-vayvo-progression-slider-title">
                                 <a href="javascript:void(0);">
                                    Listas de reproducción</a>
                                 </h2>
                                 <ul class="slider-video-post-meta-list">
                                     <!--<li class="slider-video-post-meta-cat">
                                         <ul>
                                             <li><a href="">Exposiciones</a></li>
                                         </ul>
                                     </li>
                                     <li class="slider-video-post-meta-year">Oct 2020 - Feb 2021</li>-->
                                     <li class="slider-video-post-meta-rating"><span></span></li>
                                 </ul>
                                 <div class="clearfix-pro"></div>
                                 <div class="progression-studios-video-slider-excerpt" align="justify">
                                    "<i>Las playlists o listas de reproducción</i>, son selecciones con temáticas específicas curadas por especialistas en la materia derivadas de nuestras exposiciones, programas públicos y colecciones a partir del archivo de conferencias, charlas, cursos, seminarios, diplomados y otros materiales audiovisuales del Museo. Temas como moda, arquitectura o arte, sirven como el punto de partida para resignificar el archivo del Amparo. ¡Te invitamos a descubrirlas en esta sección de Amparo Online!"
                                 </div>
                             </div>


                        <section class="elementor-element elementor-element-0f97e1f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0f97e1f" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                                 <div class="elementor-element elementor-element-930027f elementor-column elementor-col-100 elementor-top-column" data-id="930027f" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                       <div class="elementor-widget-wrap">
                                          <div class="elementor-element elementor-element-804cb6d elementor-widget elementor-widget-progression-video-post-list" data-id="804cb6d" data-element_type="widget" data-widget_type="progression-video-post-list.default">
                                             <div class="elementor-widget-container">
                                                 <div class="ma-filters-container">
                                                         <!-- <input type="text" class="search-field-progression" name="search_keyword" placeholder="Buscar en imagen" value="">
                                                     <div class="ma-filters-search-button">
                                                         <a href="" class="ma-btn">Buscar</a>
                                                     </div> -->
                                                 </div>
                                                 <div class="progression-studios-elementor-review-container">
                                                     
                                                     <div class="clearfix-pro"></div>
                                                     <div class="progression-masonry-margins">
                                                         <div id="progression-video-index-masonry-804cb6d">
                                                          <div class="container">
                                                          <div class="row">
                                                            @foreach ($playlists as $playlist)
                                                             <!-- .progression-masonry-item -->
                                                            <div class="col-md-6" style="max-height: 300px;">
                                                             <div class="progression-masonry-item imagen" style="width: 100%;">
                                                                <div class="progression-masonry-padding-blog">
                                                                   <div class="progression-studios-isotope-animation">
                                                                      <div id="" class="post-182 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-drama">
                                                                         <div class="progression-studios-video-index-container">
                                                                            <a href="{{$playlist->getUrl()}}">
                                                                               <div class="progression-studios-video-feaured-image"><img width="" height="480" style="max-height: 480px" src="{{$playlist->cover}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" /></div>
                                                                               <div class="progression-video-index-content">
                                                                                  <div class="progression-video-index-table">
                                                                                     <div class="progression-video-index-vertical-align">
                                                                                            <h2 class="progression-video-title"><b>{{$playlist->titulo}}</b></h2>
                                                                                            <div class="clearfix"></div>
                                                                                           
                                                                                            <ul class="video-index-meta-taxonomy">
                                                                                               <li> <?= substr($playlist->descripcion_corta, 0,300) ?>...</li>
                                                                                            </ul>
                                                                                            <div class="clearfix-pro"></div>
                                                                                     </div>
                                                                                  </div>
                                                                               </div>
                                                                               <!--div class="video-index-border-hover"></div>-->
                                                                            </a>
                                                                         </div>
                                                                      </div>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                            </div>
                                                            @endforeach
                                                          </div>
                                                         </div>
                                                        </div>
                                                     </div>
                                                     <div class="clearfix-pro"></div>
                                                     <div class="clearfix-pro"></div>
                                                     <ul class='page-numbers hidden-element'>
                                                         <li><span aria-current='page'
                                                                   class='page-numbers current'>1</span></li>
                                                         <li><a class='page-numbers' href=''>2</a></li>
                                                         <li><a class="next page-numbers" href=""><span>Siguiente &rsaquo;</span></a>
                                                         </li>
                                                     </ul>
                                                     <div class="clearfix-pro"></div>
                                                 </div>
                                                 <div class="clearfix-pro"></div>
                                                 <script type="text/javascript">
                                                     jQuery(document).ready(function ($) {
                                                         'use strict';

                                                         /* Default Isotope Load Code */
                                                         var $container804cb6d = $("#progression-video-index-masonry-804cb6d").isotope();
                                                         $container804cb6d.imagesLoaded(function () {
                                                             $(".progression-masonry-item").addClass("opacity-progression");
                                                             $container804cb6d.isotope({
                                                                 itemSelector: "#progression-video-index-masonry-804cb6d .progression-masonry-item",
                                                                 percentPosition: true,
                                                                 layoutMode: "masonry"
                                                             });
                                                         });
                                                         /* END Default Isotope Code */


                                                         $('.progression-filter-group-804cb6d').on('click', 'li', function () {
                                                             var filterValue = $(this).attr('data-filter');
                                                             $container804cb6d.isotope({filter: filterValue});
                                                         });

                                                         $('.progression-filter-group-804cb6d').each(function (i, buttonGroup) {
                                                             var $buttonGroup = $(buttonGroup);
                                                             $buttonGroup.on('click', 'li', function () {
                                                                 $buttonGroup.find('.pro-checked').removeClass('pro-checked');
                                                                 $(this).addClass('pro-checked');
                                                             });
                                                         });


                                                     });
                                                 </script>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
                <div class="clearfix-pro"></div>
            </div>
         </div>
          <div class="clearfix-pro"></div>
      </div>
   </div>
   <link rel='stylesheet' id='elementor-post-31-css'  href="{{ asset('css/post-31.css?ver=1570662040') }}" type='text/css' media='all' />
   @include('layout.footer')
   @include('layout.assets')
</body>
</html>
