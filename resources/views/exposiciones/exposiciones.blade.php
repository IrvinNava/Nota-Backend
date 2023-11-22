<?
    use App\Helpers\Helper;
    $metadata = [
        'title' => 'Exposiciones digitales',
        'description' => '',
        'url' => 'https://museoamparo.online/exposiciones-digitales',
        'image' => ''
    ];
?>
@include('layout.header')
<body class="page-template-default page page-id-31 logged-in elementor-default elementor-page elementor-page-31">
   <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gap progression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
   @include('layout.topbar')
   <div id="page-title-pro">
        <div id="progression-studios-page-title-container">
            <div class="width-container-pro">
                <h1 class="page-title">&nbsp;</h1>
                <h4 class="progression-sub-title">&nbsp;</h4>
            </div>
        </div>
        <div class="clearfix-pro"></div>
        <div id="page-title-overlay-image" style="background-image: url('{{asset('img/exposiciones/2/expos-digital.jpg')}}')"></div>
    </div>
   <div id="content-pro">
      <div class="ma-full-page width-container-pro">
         <div id="post-31" class="post-31 page type-page status-publish hentry">
            <div class="page-content-pro">
               <div data-elementor-type="wp-post" data-elementor-id="31" class="elementor elementor-31" data-elementor-settings="[]">
                  <div class="elementor-inner">
                     <div class="elementor-section-wrap">
                         <section class="elementor-element elementor-element-682306ce elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="682306ce" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">

                             <div class="elementor-container elementor-column-gap-default">
                                 <div class="elementor-row">
                                     <div class="elementor-element elementor-element-dddbd69 elementor-column elementor-col-100 elementor-top-column" data-id="dddbd69" data-element_type="column">
                                         <div class="elementor-column-wrap  elementor-element-populated">
                                             <div class="elementor-widget-wrap">
                                                 <div class="elementor-element elementor-element-a282bc6 elementor-widget elementor-widget-progression-video-post-list" data-id="a282bc6" data-element_type="widget" data-widget_type="progression-video-post-list.default">
                                                     <div class="elementor-widget-container">
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
                                                                             Exposiciones
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </section>


                        <section class="elementor-element elementor-element-0f97e1f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0f97e1f" data-element_type="section">
                           <div class="elementor-container elementor-column-gap-default">
                              <div class="elementor-row">
                                 <div class="elementor-element elementor-element-930027f elementor-column elementor-col-100 elementor-top-column" data-id="930027f" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                       <div class="elementor-widget-wrap">
                                          <div class="elementor-element elementor-element-804cb6d elementor-widget elementor-widget-progression-video-post-list" data-id="804cb6d" data-element_type="widget" data-widget_type="progression-video-post-list.default">
                                             <div class="elementor-widget-container">

                                                 <div class="progression-studios-elementor-review-container">

                                                     <div class="clearfix-pro"></div>
                                                     <div class="progression-masonry-margins">
                                                         <div id="progression-video-index-masonry-804cb6d">


                                                                 <!-- <div class="progression-masonry-item ">
                                                                     <div class="progression-masonry-padding-blog">
                                                                         <div class="progression-studios-isotope-animation">
                                                                             <div id="post-182" class="post-182 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-drama">
                                                                                 <div class="progression-studios-video-index-container">
                                                                                     <a href="{{url('exposiciones-digitales/1')}}">
                                                                                         <div class="progression-studios-video-feaured-image">
                                                                                             <img width="700" height="480" src="{{ asset('img/exposiciones/joyas-puebla.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt=""/>
                                                                                         </div>
                                                                                         <div class="progression-video-index-content">
                                                                                             <div class="progression-video-index-table">
                                                                                                 <div class="progression-video-index-vertical-align">

                                                                                                     <h2 class="progression-video-title">Joyas compartidas de Administración y Gobierno Virreinal de la Puebla de los Ángeles</h2>
                                                                                                     <div class="clearfix"></div>

                                                                                                     <div class="clearfix-pro"></div>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                         <div class="video-index-border-hover"></div>
                                                                                     </a>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div> -->

                                                                 <div class="progression-masonry-item ">
                                                                     <div class="progression-masonry-padding-blog">
                                                                         <div class="progression-studios-isotope-animation">
                                                                             <div id="post-182" class="post-182 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-television video-genres-drama">
                                                                                 <div class="progression-studios-video-index-container">
                                                                                     <a href="{{url('exposiciones-digitales/2')}}">
                                                                                         <div class="progression-studios-video-feaured-image">
                                                                                             <img width="700" height="480" src="{{ asset('img/exposiciones/2/puebla-virreinal-21-joyas-documentales.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt=""/>
                                                                                         </div>
                                                                                         <div class="progression-video-index-content">
                                                                                             <div class="progression-video-index-table">
                                                                                                 <div class="progression-video-index-vertical-align">
                                                                                                     <!-- <p></p> -->

                                                                                                     <h2 class="progression-video-title">Puebla virreinal: 21 joyas documentales</h2>
                                                                                                     <div class="clearfix"></div>

                                                                                                     <div class="clearfix-pro"></div>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                         <div class="video-index-border-hover"></div>
                                                                                     </a>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
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
