<?
    $metadata = [
        'title' => 'Inicio',
        'description' => 'Amparo Online es un archivo digital que contiene múltiples documentos derivados de nuestras colecciones, exposiciones y programas públicos.',
        'url' => url(''),
        'image' => 'https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/public/museo-amparo-online-desktop.png'
    ];
    use App\Helpers\Helper;
?>

@include('layout.header')
<body class="page-template-default page page-id-26 logged-in elementor-default elementor-page elementor-page-26">
   <div class="ma-loading"><div></div></div>
   <div id="boxed-layout-pro" class="progression-studios-sticky-header-shadow progression-studios-header-full-width-no-gapprogression-studios-blog-post-title-center progression-studios-logo-position-left progression-studios-one-page-nav-off">
   @include('layout.topbar')
   <div id="content-pro">

       <section class="elementor-section elementor-section-boxed section-about visible-movil">
           <div class="elementor-container elementor-column-gap-default">
               <div class="col-md-4">
                   <h2 class="text-white">¿Qué es?</h2>
                   <img src="{{url('/img/logo_amparo_digital_light.svg')}}" class="" alt="Museo Amparo Online" loading="lazy">
               </div>
               <div class="col-md-8">
                   <p align="justify" class="text-white"><b>Amparo Online</b> es un archivo digital que contiene múltiples documentos derivados de nuestras exposiciones, programas públicos y colecciones, que abarcan desde el arte prehispánico y virreinal hasta el contemporáneo. En este micrositio se ofrecen selecciones temáticas de estos materiales –audios, videos, textos y fotografías–, realizadas por especialistas invitados, así como por el equipo del Museo Amparo. De esta manera es posible consultar y activar en un solo sitio contenidos antes disponibles en  plataformas distintas. El objetivo principal de este espacio es difundir nuestro acervo documental desde nuevas perspectivas temáticas, así como ofrecer herramientas para estudiantes y públicos específicos. Invitamos a nuestras comunidades a explorar modos de interacción y de consulta más dinámicos.</p>
               </div>
           </div>
       </section>

   <div class="ma-full-page ">
   <div id="post-26" class="post-26 page type-page status-publish hentry">
   <div class="page-content-pro">
      <div data-elementor-type="wp-post" data-elementor-id="26" class="elementor elementor-26 elementor-bc-flex-widget" data-elementor-settings="[]">
         <div class="elementor-inner">
            <div class="elementor-section-wrap">
               <section class="elementor-element elementor-element-14a1a9d elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="14a1a9d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-row">
                        <div class="elementor-element elementor-element-ba4b48a elementor-column elementor-col-100 elementor-top-column" data-id="ba4b48a" data-element_type="column">
                           <div class="elementor-column-wrap  elementor-element-populated">
                              <div class="elementor-widget-wrap">
                                 <div class="elementor-element elementor-element-b6e1555 elementor-widget elementor-widget-progression-studios-video-slider" data-id="b6e1555" data-element_type="widget" data-widget_type="progression-studios-video-slider.default">
                                    <div class="elementor-widget-container">
                                       <div class="progression-studios-post-slider-main progression_elements_slider_arrow_visiblity_hover progression_elements_slider_dots_visiblity_visible">
                                          <div id="progression-elements-progression-flexslider-b6e1555" class="flexslider">
                                             <ul class="slides">

                                              <!--Después de la conquista-->
                                              <li class="progression_animate_left">
                                                    <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                       <div class="progression-studios-skrn-slider-background" style="background-image:url('https://museoamparo.online/img/exposiciones/2/puebla-virreinal-21-joyas-documentales.jpg')">
                                                          <div class="progression-skrn-slider-elements-display-table">
                                                             <div class="progression-skrn-slider-text-floating-container">
                                                                <div class="progression-skrn-slider-container-max-width">
                                                                   <div class="progression-skrn-slider-content-floating-container">
                                                                      <div class="progression-skrn-slider-content-max-width">
                                                                         <div class="progression-skrn-slider-content-margins">
                                                                            <div class="progression-skrn-slider-content-alignment">
                                                                               <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                  <h2 class="progression-vayvo-progression-slider-title">
                                                                                     <a href="javascript:void(0);">
                                                                                      Puebla virreinal: 21 joyas documentales</a>
                                                                                  </h2>
                                                                                  <div class="clearfix-pro"></div>
                                                                                  <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">
                                                                                        En el marco del 492 aniversario de la fundación de la ciudad de Puebla de los Ángeles, esta exhibición digital organizada por el Museo Amparo y el Archivo General Municipal de Puebla nos presenta documentos fundacionales y testimonios manuscritos e impresos sobre la urbanización, poblamiento, administración y gobierno de la ciudad durante el Virreinato.
                                                                                    </p>
                                                                                  </div>
                                                                                  <a href="{{ url('/exposiciones-digitales/2') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                  <div class="clearfix-pro"></div>
                                                                               </div>
                                                                               <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                            </div>
                                                                            <!-- close .progression-skrn-slider-content-alignment -->
                                                                            <div class="clearfix-pro"></div>
                                                                         </div>
                                                                      </div>
                                                                      <!-- close .progression-skrn-slider-content-max-width -->
                                                                   </div>
                                                                   <!-- close .progression-skrn-slider-content-floating-container -->
                                                                </div>
                                                                <!-- close .progression-skrn-slider-container-max-width -->
                                                             </div>
                                                             <!-- close .progression-skrn-slider-text-floating-container -->
                                                          </div>
                                                          <!-- close .progression-skrn-slider-elements-display-table -->
                                                          <div style="display:none;">
                                                             <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                             </video>
                                                          </div>
                                                          <div class="slider-background-overlay-color"></div>
                                                          <a href="javascript:void(0);" class="vayvo-slider-background-link"></a>
                                                          <div class="clearfix-pro"></div>
                                                       </div>
                                                       <!-- close .progression-studios-skrn-slider-background -->
                                                    </div>
                                                    <!-- #post-## -->
                                              </li>

                                              <!--Después de la conquista-->
                                              <li class="progression_animate_left">
                                                    <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                       <div class="progression-studios-skrn-slider-background" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/cover_despues_de_la_conquista.jpeg')">
                                                          <div class="progression-skrn-slider-elements-display-table">
                                                             <div class="progression-skrn-slider-text-floating-container">
                                                                <div class="progression-skrn-slider-container-max-width">
                                                                   <div class="progression-skrn-slider-content-floating-container">
                                                                      <div class="progression-skrn-slider-content-max-width">
                                                                         <div class="progression-skrn-slider-content-margins">
                                                                            <div class="progression-skrn-slider-content-alignment">
                                                                               <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                  <h2 class="progression-vayvo-progression-slider-title">
                                                                                     <a href="javascript:void(0);">
                                                                                      Después de la conquista: Nueva España, siglos XVI y XVII</a>
                                                                                  </h2>
                                                                                  <div class="clearfix-pro"></div>
                                                                                  <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">
                                                                                        Este ciclo de conferencias nos muestra como en la época después de la conquista se gestaron la economía, la sociedad, la política y la cultura que marcaron lo que somos hoy en día.</p>
                                                                                  </div>
                                                                                  <a href="{{ url('/playlist/12/despues-de-la-conquista-nueva-espana-siglos-xvi-y-xvii') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                  <div class="clearfix-pro"></div>
                                                                               </div>
                                                                               <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                            </div>
                                                                            <!-- close .progression-skrn-slider-content-alignment -->
                                                                            <div class="clearfix-pro"></div>
                                                                         </div>
                                                                      </div>
                                                                      <!-- close .progression-skrn-slider-content-max-width -->
                                                                   </div>
                                                                   <!-- close .progression-skrn-slider-content-floating-container -->
                                                                </div>
                                                                <!-- close .progression-skrn-slider-container-max-width -->
                                                             </div>
                                                             <!-- close .progression-skrn-slider-text-floating-container -->
                                                          </div>
                                                          <!-- close .progression-skrn-slider-elements-display-table -->
                                                          <div style="display:none;">
                                                             <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                             </video>
                                                          </div>
                                                          <div class="slider-background-overlay-color"></div>
                                                          <a href="javascript:void(0);" class="vayvo-slider-background-link"></a>
                                                          <div class="clearfix-pro"></div>
                                                       </div>
                                                       <!-- close .progression-studios-skrn-slider-background -->
                                                    </div>
                                                    <!-- #post-## -->
                                              </li>


                                               <!--Prehispanico-->
                                              <li class="progression_animate_left">
                                                    <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                       <div class="progression-studios-skrn-slider-background" style="background-image:url('https://museoamparo.online/storage/uploads/cover_diacronia-y-sincronia-lo-prehispanico-en-el-arte-moderno-y-contemporaneo_6333136c181a9.jpg')">
                                                          <div class="progression-skrn-slider-elements-display-table">
                                                             <div class="progression-skrn-slider-text-floating-container">
                                                                <div class="progression-skrn-slider-container-max-width">
                                                                   <div class="progression-skrn-slider-content-floating-container">
                                                                      <div class="progression-skrn-slider-content-max-width">
                                                                         <div class="progression-skrn-slider-content-margins">
                                                                            <div class="progression-skrn-slider-content-alignment">
                                                                               <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                  <h2 class="progression-vayvo-progression-slider-title">
                                                                                     <a href="javascript:void(0);">
                                                                                      Lo prehispánico en el arte moderno y contemporáneo.</a>
                                                                                  </h2>
                                                                                  <div class="clearfix-pro"></div>
                                                                                  <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">
                                                                                        En estas conferencias, reconocidos investigadores nos explican cómo es que el arte prehispánico constituye la raíz más honda de la identidad mexicana, y cómo es que debido a su antigüedad histórica y diversidad cultural y es lo que la sigue distinguiendo como única.</p>
                                                                                  </div>
                                                                                  <a href="{{ url('/playlist/10/diacronia-y-sincronia-lo-prehispanico-en-el-arte-moderno-y-contemporaneo') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                  <div class="clearfix-pro"></div>
                                                                               </div>
                                                                               <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                            </div>
                                                                            <!-- close .progression-skrn-slider-content-alignment -->
                                                                            <div class="clearfix-pro"></div>
                                                                         </div>
                                                                      </div>
                                                                      <!-- close .progression-skrn-slider-content-max-width -->
                                                                   </div>
                                                                   <!-- close .progression-skrn-slider-content-floating-container -->
                                                                </div>
                                                                <!-- close .progression-skrn-slider-container-max-width -->
                                                             </div>
                                                             <!-- close .progression-skrn-slider-text-floating-container -->
                                                          </div>
                                                          <!-- close .progression-skrn-slider-elements-display-table -->
                                                          <div style="display:none;">
                                                             <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                             </video>
                                                          </div>
                                                          <div class="slider-background-overlay-color"></div>
                                                          <a href="javascript:void(0);" class="vayvo-slider-background-link"></a>
                                                          <div class="clearfix-pro"></div>
                                                       </div>
                                                       <!-- close .progression-studios-skrn-slider-background -->
                                                    </div>
                                                    <!-- #post-## -->
                                              </li>


                                              <!--Arquitectura-->
                                              <li class="progression_animate_left">
                                                    <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                       <div class="progression-studios-skrn-slider-background" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-arquitectura-historia-1280x720-museo-amparo-puebla-01112021.jpg')">
                                                          <div class="progression-skrn-slider-elements-display-table">
                                                             <div class="progression-skrn-slider-text-floating-container">
                                                                <div class="progression-skrn-slider-container-max-width">
                                                                   <div class="progression-skrn-slider-content-floating-container">
                                                                      <div class="progression-skrn-slider-content-max-width">
                                                                         <div class="progression-skrn-slider-content-margins">
                                                                            <div class="progression-skrn-slider-content-alignment">
                                                                               <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                  <h2 class="progression-vayvo-progression-slider-title">
                                                                                     <a href="javascript:void(0);">
                                                                                      Arquitectura mexicana. Un recorrido histórico.</a>
                                                                                  </h2>
                                                                                  <div class="clearfix-pro"></div>
                                                                                  <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">
                                                                                        En esta sección encontrarás una selección de conferencias impartidas en cursos, diplomados y programas enfocados en la historia de la arquitectura.</p>
                                                                                  </div>
                                                                                  <a href="{{ url('/playlist/9/arquitectura-historia') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                  <div class="clearfix-pro"></div>
                                                                               </div>
                                                                               <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                            </div>
                                                                            <!-- close .progression-skrn-slider-content-alignment -->
                                                                            <div class="clearfix-pro"></div>
                                                                         </div>
                                                                      </div>
                                                                      <!-- close .progression-skrn-slider-content-max-width -->
                                                                   </div>
                                                                   <!-- close .progression-skrn-slider-content-floating-container -->
                                                                </div>
                                                                <!-- close .progression-skrn-slider-container-max-width -->
                                                             </div>
                                                             <!-- close .progression-skrn-slider-text-floating-container -->
                                                          </div>
                                                          <!-- close .progression-skrn-slider-elements-display-table -->
                                                          <div style="display:none;">
                                                             <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                             </video>
                                                          </div>
                                                          <div class="slider-background-overlay-color"></div>
                                                          <a href="javascript:void(0);" class="vayvo-slider-background-link"></a>
                                                          <div class="clearfix-pro"></div>
                                                       </div>
                                                       <!-- close .progression-studios-skrn-slider-background -->
                                                    </div>
                                                    <!-- #post-## -->
                                              </li>

                                              <!--Diálogos con artistas de la coleccion de arte-->
                                              <li class="progression_animate_left">
                                                    <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                       <div class="progression-studios-skrn-slider-background" style="background-image:url('https://museoamparo.online/storage/uploads/cover_dialogos-con-artistas-de-la-coleccion-de-arte-contemporaneo_625dbec6b836f.png')">
                                                          <div class="progression-skrn-slider-elements-display-table">
                                                             <div class="progression-skrn-slider-text-floating-container">
                                                                <div class="progression-skrn-slider-container-max-width">
                                                                   <div class="progression-skrn-slider-content-floating-container">
                                                                      <div class="progression-skrn-slider-content-max-width">
                                                                         <div class="progression-skrn-slider-content-margins">
                                                                            <div class="progression-skrn-slider-content-alignment">
                                                                               <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                  <h2 class="progression-vayvo-progression-slider-title">
                                                                                     <a href="javascript:void(0);">
                                                                                    Diálogos con artistas de la Colección de Arte Contemporáneo</a>
                                                                                  </h2>
                                                                                  <div class="clearfix-pro"></div>
                                                                                  <div class="progression-studios-video-slider-excerpt">
                                                                                     <p align="justify">La Colección de Arte Contemporáneo del Museo Amparo permite configurar un mapa de la práctica artística de nuestro país durante las últimas décadas. Al establecer vínculos con el acervo prehispánico, virreinal y del siglo XIX que resguarda el propio museo, la colección funge como nodo en el que confluyen el pasado de nuestro territorio y las condiciones que dan forma al presente. Este ciclo de diálogos se conduce por distintas generaciones e intereses, partiendo de las obras presentadas en la exposición El tiempo en las cosas, las conversaciones transitarán por las diversas metodologías de trabajo desarrolladas a lo largo de amplias y singulares trayectorias.
                                                                                     </p>
                                                                                  </div>
                                                                                  <a href="{{ url('/playlist/8/dialogos-con-artistas-de-la-coleccion-de-arte-contemporaneo') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                  <div class="clearfix-pro"></div>
                                                                               </div>
                                                                               <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                            </div>
                                                                            <!-- close .progression-skrn-slider-content-alignment -->
                                                                            <div class="clearfix-pro"></div>
                                                                         </div>
                                                                      </div>
                                                                      <!-- close .progression-skrn-slider-content-max-width -->
                                                                   </div>
                                                                   <!-- close .progression-skrn-slider-content-floating-container -->
                                                                </div>
                                                                <!-- close .progression-skrn-slider-container-max-width -->
                                                             </div>
                                                             <!-- close .progression-skrn-slider-text-floating-container -->
                                                          </div>
                                                          <!-- close .progression-skrn-slider-elements-display-table -->
                                                          <div style="display:none;">
                                                             <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                             </video>
                                                          </div>
                                                          <div class="slider-background-overlay-color"></div>
                                                          <a href="javascript:void(0);" class="vayvo-slider-background-link"></a>
                                                          <div class="clearfix-pro"></div>
                                                       </div>
                                                       <!-- close .progression-studios-skrn-slider-background -->
                                                    </div>
                                                    <!-- #post-## -->
                                              </li>

                                                <!--Arte maya-->
                                              <li class="progression_animate_left">
                                                   <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                      <div class="progression-studios-skrn-slider-background" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-slider-plasmar-el-alma-arte-maya-museo-amparo-puebla.jpg')">
                                                         <div class="progression-skrn-slider-elements-display-table">
                                                            <div class="progression-skrn-slider-text-floating-container">
                                                               <div class="progression-skrn-slider-container-max-width">
                                                                  <div class="progression-skrn-slider-content-floating-container">
                                                                     <div class="progression-skrn-slider-content-max-width">
                                                                        <div class="progression-skrn-slider-content-margins">
                                                                           <div class="progression-skrn-slider-content-alignment">
                                                                              <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                 <h2 class="progression-vayvo-progression-slider-title">
                                                                                    <a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}">
                                                                                    Plasmar el alma: arte maya</a>
                                                                                 </h2>
                                                                                 <ul class="slider-video-post-meta-list">
                                                                                 </ul>
                                                                                 <div class="clearfix-pro"></div>
                                                                                 <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">En esta selección de conferencias del archivo multimedia del Museo Amparo se aporta un panorama completo de las diferentes manifestaciones artísticas mayas (arquitectura, pintura, escultura, cerámica y escritura).</p>
                                                                                 </div>
                                                                                 <a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                 <div class="clearfix-pro"></div>
                                                                              </div>
                                                                              <!-- close .progression-skrn-slider-progression-crowd-index-content -->
                                                                           </div>
                                                                           <!-- close .progression-skrn-slider-content-alignment -->
                                                                           <div class="clearfix-pro"></div>
                                                                        </div>
                                                                     </div>
                                                                     <!-- close .progression-skrn-slider-content-max-width -->
                                                                  </div>
                                                                  <!-- close .progression-skrn-slider-content-floating-container -->
                                                               </div>
                                                               <!-- close .progression-skrn-slider-container-max-width -->
                                                            </div>
                                                            <!-- close .progression-skrn-slider-text-floating-container -->
                                                         </div>
                                                         <!-- close .progression-skrn-slider-elements-display-table -->
                                                         <div style="display:none;">
                                                            <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                            </video>
                                                         </div>
                                                         <div class="slider-background-overlay-color"></div>
                                                         <a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}" class="vayvo-slider-background-link"></a>
                                                         <div class="clearfix-pro"></div>
                                                      </div>
                                                      <!-- close .progression-studios-skrn-slider-background -->
                                                   </div>
                                                   <!-- #post-## -->
                                              </li>
                                              
                                       

                                              <!--El amparo eres tu-->

                                                <!--<li class="progression_animate_left">
                                                   <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                      <div class="progression-studios-skrn-slider-background" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/slider-elamparoerestu-1280x720-museo-amparo-puebla-2.png')">
                                                         <div class="progression-skrn-slider-elements-display-table">
                                                            <div class="progression-skrn-slider-text-floating-container">
                                                               <div class="progression-skrn-slider-container-max-width">
                                                                  <div class="progression-skrn-slider-content-floating-container">
                                                                     <div class="progression-skrn-slider-content-max-width">
                                                                        <div class="progression-skrn-slider-content-margins">
                                                                           <div class="progression-skrn-slider-content-alignment">
                                                                              <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                 <h2 class="progression-vayvo-progression-slider-title">
                                                                                    <a href="{{ url('mosaicos') }}">
                                                                                    El Amparo eres tú</a>
                                                                                 </h2>
                                                                                 <ul class="slider-video-post-meta-list">
                                                                                 
                                                                                    <li class="slider-video-post-meta-rating">

                                                                                        <span><a href="#">Comparte tu foto con nosotros</a></span>
                                                                                    </li>
                                                                                 </ul>
                                                                                 <div class="clearfix-pro"></div>
                                                                                 <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">El Museo Amparo cumple 30 años y queremos celebrarlo contigo, que eres parte de nuestra historia.</p>
                                                                                 </div>
                                                                                 <a href="{{ url('mosaicos') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                 <div class="clearfix-pro"></div>
                                                                              </div>
                                                                             
                                                                           </div>
                                                                           
                                                                           <div class="clearfix-pro"></div>
                                                                        </div>
                                                                     </div>
                                                                    
                                                                  </div>
                                                                 
                                                               </div>
                                                               
                                                            </div>
                                                           
                                                         </div>
                                                        
                                                         <div style="display:none;">
                                                            <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                            </video>
                                                         </div>
                                                         <div class="slider-background-overlay-color"></div>
                                                         <a href="{{ url('mosaicos') }}" class="vayvo-slider-background-link"></a>
                                                         <div class="clearfix-pro"></div>
                                                      </div>
                                                     
                                                   </div>
                                                  
                                                </li>-->

                                                <!--<li class="progression_animate_left" style="display:none;">
                                                   <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
                                                      <div class="progression-studios-skrn-slider-background" style="background-image:url('https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/slider-linea-del-tiempo-1280x720-museo-amparo-puebla.png')">
                                                         <div class="progression-skrn-slider-elements-display-table">
                                                            <div class="progression-skrn-slider-text-floating-container">
                                                               <div class="progression-skrn-slider-container-max-width">
                                                                  <div class="progression-skrn-slider-content-floating-container">
                                                                     <div class="progression-skrn-slider-content-max-width">
                                                                        <div class="progression-skrn-slider-content-margins">
                                                                           <div class="progression-skrn-slider-content-alignment">
                                                                              <div class="progression-skrn-slider-progression-crowd-index-content">
                                                                                 <h2 class="progression-vayvo-progression-slider-title">
                                                                                    <a href="{{ url('timeline') }}">
                                                                                    Línea del tiempo: 30 años</a>
                                                                                 </h2>
                                                                                 <ul class="slider-video-post-meta-list">

                                                                                    <li class="slider-video-post-meta-year"></li>
                                                                                    <li class="slider-video-post-meta-rating">
                                                                                        <span><a href="#">El Amparo eres tú</a></span>,
                                                                                        <span><a href="#">30 aniversario</a></span>
                                                                                    </li>
                                                                                 </ul>
                                                                                 <div class="clearfix-pro"></div>
                                                                                 <div class="progression-studios-video-slider-excerpt">
                                                                                    <p align="justify">Desde su inauguración en 1991, el Museo Amparo ha sido un punto de encuentro en el Centro Histórico de Puebla para compartir diálogos, experiencias y aproximaciones al arte en México. </p>
                                                                                 </div>
                                                                                 <a href="{{ url('timeline') }}" class="vayvo-progression-slider-button afterglow">
                                                                                 <i class="fa fa-play-circle"></i>Ver más</a>
                                                                                 <div class="clearfix-pro"></div>
                                                                              </div>
                                                                           </div>
                                                                           <div class="clearfix-pro"></div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                            <video id="SkrnLightbox-406"   width="960" height="540" data-youtube-id="e-hYjapxC3s">
                                                            </video>
                                                         </div>
                                                         <div class="slider-background-overlay-color"></div>
                                                         <a href="{{ url('timeline') }}" class="vayvo-slider-background-link"></a>
                                                         <div class="clearfix-pro"></div>
                                                      </div>
                                                   </div>

                                                </li>-->
                                             </ul>
                                          </div>
                                       </div>

                                       <section class="elementor-section elementor-section-boxed section-about visible-desktop">
                                           <div class="elementor-container elementor-column-gap-default">
                                               <div class="col-md-4">
                                                   <h2 class="text-white"></h2>
                                                   <img width="80%" src="{{url('/img/logo_amparo_digital_light.svg')}}" class="" alt="Museo Amparo Online" loading="lazy">
                                               </div>
                                               <div class="col-md-8">
                                                   <p align="justify" class="text-white"><b>Amparo Online</b> es un archivo digital que contiene múltiples documentos derivados de nuestras exposiciones, programas públicos y colecciones, que abarcan desde el arte prehispánico y virreinal hasta el contemporáneo. En este micrositio se ofrecen selecciones temáticas de estos materiales –audios, videos, textos y fotografías–, realizadas por especialistas invitados, así como por el equipo del Museo Amparo. De esta manera es posible consultar y activar en un solo sitio contenidos antes disponibles en  plataformas distintas. El objetivo principal de este espacio es difundir nuestro acervo documental desde nuevas perspectivas temáticas, así como ofrecer herramientas para estudiantes y públicos específicos. Invitamos a nuestras comunidades a explorar modos de interacción y de consulta más dinámicos.</p>
                                               </div>
                                           </div>
                                       </section>
                                       <!-- close .progression-studios-post-slider-main -->
                                       <script type="text/javascript">
                                          jQuery(document).ready(function($) {
                                             'use strict';

                                               $('#progression-elements-progression-flexslider-b6e1555').flexslider({
                                                prevText: "",
                                                nextText: "",
                                                slideshow:true,
                                                slideshowSpeed: 6000,
                                                animation: "fade",
                                                animationSpeed: 1000,
                                                pauseOnHover: true,
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

               <div class="width-container-pro">

                  <!--Playlist Lo prehispánico en el arte moderno y contemporáneo-->
                    <div class="ma-home-slider-container">
                      <div class="index-category-title-container">
                        <a href="{{ url('/playlist/10/lo-prehispanico-en-el-arte-moderno-y-contemporaneo') }}">
                          <div class="ma-category-titles">
                                <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>Lo prehispánico en el arte moderno y contemporáneo</span></h2>
                          </div>
                        </a>
                        <span><a href="{{ url('/playlist/10/lo-prehispanico-en-el-arte-moderno-y-contemporaneo') }}" class="home-more-link">Ver más</a></span>
                      </div>
                      <p>En estas conferencias, reconocidos investigadores nos explican cómo es que el arte prehispánico constituye la raíz más honda de la identidad mexicana, y cómo es que debido a su antigüedad histórica y diversidad cultural es lo que la sigue distinguiendo como única. Este conjunto de conferencias están dirigidas a estudiantes de Arquitectura, Artes Plásticas, Diseño, Historia, Historia del Arte, y Curaduría de arte contemporáneo.</p>

                      <div id="imagen-home-carousel-8" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                        <? $galerias = \App\Galeria::where('playlist_id', 10)->where('status', 1)->get(); ?>

                        @foreach($galerias as $galeria)
                 
                        <div class="item">
                             <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                                <div class="progression-studios-video-index-container">
                                   <a href="{{ $galeria->getUrl() }}">
                                      <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{$galeria->thumbnail}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                      <!-- close .progression-studios-feaured-image -->
                                      <!-- close featured thumbnail -->
                                      <div class="progression-video-index-content">
                                         <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                @if($galeria->autores->count())
                                                  <p><?= Helper::getList($galeria->autores) ?></p>
                                                @endif
                                               <h2 class="progression-video-title">{{$galeria->titulo}}</h2>
                                               <div class="clearfix-pro"></div>
                                            </div>
                                            <!-- close .progression-video-index-vertical-align -->
                                         </div>
                                         <!-- close .progression-video-index-table -->
                                      </div>
                                      <!-- close .progression-video-index-content -->
                                      <div class="video-index-border-hover"></div>
                                   </a>
                                </div>
                                <!-- close .progression-studios-video-index-container -->
                             </div>
                             <!-- #post-## -->
                        </div>
                        @endforeach
                         <div class="item">
                            <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{ url('/playlist/10/lo-prehispanico-en-el-arte-moderno-y-contemporaneo') }}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <h2 class="progression-video-title">Ver más</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>
                      </div>
                   </div>

                   <div class="width-container-pro">

                  <!-- Playlist Arquitectura mexicana. Un recorrido histórico -->
                    <div class="ma-home-slider-container">
                      <div class="index-category-title-container">
                        <a href="{{ url('/playlist/9/arquitectura-historia') }}">
                          <div class="ma-category-titles">
                                <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>Arquitectura mexicana. Un recorrido histórico.</span></h2>
                          </div>
                        </a>
                        <span><a href="{{ url('/playlist/9/arquitectura-historia') }}" class="home-more-link">Ver más</a></span>
                      </div>
                      <p>En esta sección encontrarás una selección de Rogelio Sánchez Velázquez con conferencias impartidas en cursos, diplomados y programas enfocados en la historia de la arquitectura.</p>

                      <div id="imagen-home-carousel-9" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                        <? $galerias = \App\Galeria::where('playlist_id', 9)->where('status', 1)->get(); ?>

                        @foreach($galerias as $galeria)
                 
                        <div class="item">
                             <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                                <div class="progression-studios-video-index-container">
                                   <a href="{{ $galeria->getUrl() }}">
                                      <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{$galeria->thumbnail}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                      <!-- close .progression-studios-feaured-image -->
                                      <!-- close featured thumbnail -->
                                      <div class="progression-video-index-content">
                                         <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                @if($galeria->autores->count())
                                                  <p><?= Helper::getList($galeria->autores) ?></p>
                                                @endif
                                               <h2 class="progression-video-title">{{$galeria->titulo}}</h2>
                                               <div class="clearfix-pro"></div>
                                            </div>
                                            <!-- close .progression-video-index-vertical-align -->
                                         </div>
                                         <!-- close .progression-video-index-table -->
                                      </div>
                                      <!-- close .progression-video-index-content -->
                                      <div class="video-index-border-hover"></div>
                                   </a>
                                </div>
                                <!-- close .progression-studios-video-index-container -->
                             </div>
                             <!-- #post-## -->
                        </div>
                        @endforeach
                         <div class="item">
                            <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{ url('/playlist/9/arquitectura-historia') }}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <h2 class="progression-video-title">Ver más</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>
                      </div>
                   </div>

                   <!--Playlist Arte Maya-->
                   <div class="ma-home-slider-container">
                      <div class="index-category-title-container">
                        <a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}">
                          <div class="ma-category-titles">
                                <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>Plasmar el alma: arte maya</span></h2>
                          </div>
                        </a>
                        <span><a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}" class="home-more-link">Ver más</a></span>
                      </div>
                      <p>En esta selección de conferencias del archivo multimedia del Museo Amparo se aporta un panorama completo de las diferentes manifestaciones artísticas mayas (arquitectura, pintura, escultura, cerámica y escritura).</p>

                      <div id="imagen-home-carousel-6" class="owl-carousel progression-own-theme owl-loaded owl-drag">

                          <div class="item">
                             <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                                <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/63/escenas-de-guerra-entre-los-mayas-cautivos-armas-y-torturas')}}">
                                      <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_escenas-de-guerra-entre-los-mayas-cautivos-armas-y-torturas_6258779c2ef50.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                      <!-- close .progression-studios-feaured-image -->
                                      <!-- close featured thumbnail -->
                                      <div class="progression-video-index-content">
                                         <div class="progression-video-index-table">
                                            <div class="progression-video-index-vertical-align">
                                                <p>Ana García Barrios</p>
                                               <h2 class="progression-video-title">Escenas de guerra entre los mayas: cautivos, armas y torturas</h2>
                                               <div class="clearfix-pro"></div>
                                            </div>
                                            <!-- close .progression-video-index-vertical-align -->
                                         </div>
                                         <!-- close .progression-video-index-table -->
                                      </div>
                                      <!-- close .progression-video-index-content -->
                                      <div class="video-index-border-hover"></div>
                                   </a>
                                </div>
                                <!-- close .progression-studios-video-index-container -->
                             </div>
                             <!-- #post-## -->
                          </div>

                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/62/dioses-en-la-boveda-maya')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_dioses-en-la-boveda-maya_625876efef212.jpg" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Leticia Staines Cicero</p>
                                              <h2 class="progression-video-title">Dioses en la bóveda maya</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/61/lo-teotihuacano-entre-los-mayas-y-viceversa-influencias-repeticiones-analogias')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_lo-teotihuacano-entre-los-mayas-y-viceversa-influencias-repeticiones-analogias_6258757592c87.jpg" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <p>Liwy Grazioso</p>
                                              <h2 class="progression-video-title">Lo teotihuacano entre los mayas y viceversa...</h2>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/60/asi-se-sentaban-los-senores-mayas-el-respaldo-de-trono-del-museo-amparo')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_asi-se-sentaban-los-senores-mayas-el-respaldo-de-trono-del-museo-amparo_6258748b2104f.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Ana García Barrios y  Erik Velásquez García</p>
                                              <h2 class="progression-video-title">Así se sentaban los señores mayas...</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/59/las-mascaras-mayas-de-jade-imagenes-de-una-restauracion')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_las-mascaras-mayas-de-jade-imagenes-de-una-restauracion_625873d4443e5.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Sofía Martínez del Campo Lanz</p>
                                              <h2 class="progression-video-title">Las máscaras mayas de jade...</h2>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>

                         <div class="item">
                            <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{ url('/playlist/6/plasmar-el-alma-arte-maya') }}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <h2 class="progression-video-title">Ver más</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                      </div>
                   </div>

                   <!--Playlist Moda-->
                   <div class="ma-home-slider-container">
                      <div class="index-category-title-container">
                        <a href="{{ url('/playlist/5/moda') }}">
                          <div class="ma-category-titles">
                                <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>Moda</span></h2>
                          </div>
                        </a>
                        <span><a href="{{ url('/playlist/5/moda') }}" class="home-more-link">Ver más</a></span>
                      </div>
                      <p>En esta sección se muestran materiales del archivo que incluye contenidos que muestran el desarrollo de la moda dentro del diseño mexicano, su influencia indígena y la relación con la indumentaria tradicional, así como la vinculación del mundo del vestido y la moda con las vanguardias artísticas.</p>

                      <div id="imagen-home-carousel-5" class="owl-carousel progression-own-theme owl-loaded owl-drag">


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/49/la-moda-occidental-del-uniforme-burgues-de-vida-su-protagonismo-en-el-modernismo-y-su-vinculacion-con-las-vanguardias')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_la-moda-occidental-del-uniforme-burgues-de-vida-su-protagonismo-en-el-modernismo-y-su-vinculacion-con-las-vanguardias_6184355f78f84.png" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <h2 class="progression-video-title">La moda occidental</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('imagen/50/la-moda-occidental-del-uniforme-burgues-de-vida-su-protagonismo-en-el-modernismo-y-su-vinculacion-con-las-vanguardias')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_la-moda-occidental-del-uniforme-burgues-de-vida-su-protagonismo-en-el-modernismo-y-su-vinculacion-con-las-vanguardias_61843783d3553.png" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <p>Héctor Guillermo Fernández de Lara</p>
                                              <h2 class="progression-video-title">La moda occidental</h2>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/51/los-tejidos-del-peru-antiguo-sofisticaciones-y-belleza')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_los-tejidos-del-peru-antiguo-sofisticaciones-y-belleza_6184396fbee9f.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Clementina Battcock</p>
                                              <h2 class="progression-video-title">Los tejidos del Perú antiguo: sofisticaciones y belleza</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/52/textiles-y-accesorios-indigenas-mexicanos-disenos-materiales-tecnicas')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_textiles-y-accesorios-indigenas-mexicanos-disenos-materiales-tecnicas_61843b2b56fea.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Marta Turok</p>
                                              <h2 class="progression-video-title">Textiles y accesorios indígenas mexicanos</h2>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{url('/imagen/53/bordado-contemporaneo-aplicaciones-actuales-en-el-arte-y-la-ilustracion')}}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://museoamparo.online/storage/uploads/thumbnail_bordado-contemporaneo-aplicaciones-actuales-en-el-arte-y-la-ilustracion_61843be0f3265.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                               <p>Fernanda Poiré</p>
                                              <h2 class="progression-video-title">Bordado contemporáneo: aplicaciones actuales en el arte y la ilustración</h2>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                         <div class="item">
                            <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                  <a href="{{ url('/playlist/5/moda') }}">
                                     <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                     <!-- close .progression-studios-feaured-image -->
                                     <!-- close featured thumbnail -->
                                     <div class="progression-video-index-content">
                                        <div class="progression-video-index-table">
                                           <div class="progression-video-index-vertical-align">
                                              <h2 class="progression-video-title">Ver más</h2>
                                              <div class="clearfix"></div>
                                              <div class="clearfix-pro"></div>
                                           </div>
                                           <!-- close .progression-video-index-vertical-align -->
                                        </div>
                                        <!-- close .progression-video-index-table -->
                                     </div>
                                     <!-- close .progression-video-index-content -->
                                     <div class="video-index-border-hover"></div>
                                  </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                            </div>
                            <!-- #post-## -->
                         </div>


                      </div>
                 </div>

               <!--Playlist Manuel Felguerez-->
               <div class="ma-home-slider-container">
                  <div class="index-category-title-container">
                    <a href="{{ url('/playlist/1/manuel-felguerez') }}">
                      <div class="ma-category-titles">
                            <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>Manuel Felguérez</span></h2>
                      </div>
                    </a>
                    <span><a href="{{ url('/playlist/1/manuel-felguerez') }}" class="home-more-link">Ver más</a></span>
                  </div>
                  <p>En esta sección se muestran materiales del archivo digital del Museo Amparo relacionados con Manuel Felguérez, artista fundamental del arte moderno y contemporáneo de México.</p>
                  <div id="imagen-home-carousel-4" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/texto/5/manuel-felguerez-seleccion-de-obras')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-texto-manuel-felguerez-seleccion-de-obras-640x480-museo-amparo-puebla.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Manuel Felguérez. Selección de obras</h2>
                                          <div class="clearfix"></div>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('imagen/14/charla-en-homenaje-a-manuel-felguerez')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-video-charla-en-homenaje-a-manuel-felguerez-640x480-museo-amparo-puebla.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Pilar García</p>
                                          <h2 class="progression-video-title">Charla en homenaje a Manuel Felguérez</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/texto/6/manuel-felguerez-el-futuro-era-nuestro')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-texto-manuel-felguerez-El-futuro-era-nuestro-640x480-museo-amparo-puebla.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Manuel Felguérez. El futuro era nuestro</h2>
                                          <div class="clearfix"></div>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/texto/7/manuel-felguerez-trayectorias')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/slider-manuel-felguerez-640x480-museo-amparo-puebla-20042021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Manuel Felguérez. Trayectorias</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/15/historia-de-la-pintura-mural-en-mexico')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-video-mas-alla-de-la-pintura-mural-640x480-museo-amparo-puebla.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Historia de la pintura mural en México. Módulo III. La pintura mexicana en el siglo XX</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{ url('/playlist/1/manuel-felguerez') }}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Ver más</h2>
                                          <div class="clearfix"></div>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                  </div>
               </div>


               <!--Playlist La catedral-->
               <div class="ma-home-slider-container">
                  <div class="index-category-title-container">
                     <a href="{{ url('/playlist/3/la-catedral-de-puebla') }}">
                       <div class="ma-category-titles">
                          <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>La Catedral de Puebla</span></h2>
                       </div>
                      </a>
                     <span><a href="{{ url('/playlist/3/la-catedral-de-puebla') }}" class="home-more-link">Ver más</a></span>
                  </div>
                  <p>En este apartado se presentan materiales del archivo digital del Museo Amparo relacionados con el tema de la Catedral de Puebla.</p>
                  <div id="imagen-home-carousel" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/8/sesion-i-el-patrimonio-de-la-antigua-catedral')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion1-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Pablo Amador Marrero</p>
                                          <h2 class="progression-video-title">El patrimonio de la antigua Catedral</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/9/sesion-ii-la-catedral-y-la-ciudad-arzobispal')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion2-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Monserrat Galí</p>
                                          <h2 class="progression-video-title">La Catedral y la ciudad arzobispal</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/10/sesion-iii-la-presencia-de-jose-de-ibarra')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion3-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Paula Mues Orts</p>
                                          <h2 class="progression-video-title">La presencia de José de Ibarra</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/11/sesion-iv-acervo-pictorico-protagonistas-y-sus-legados')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion4-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Pedro Ángeles</p>
                                          <h2 class="progression-video-title">Acervo pictórico. Protagonistas y sus legados</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/12/sesion-v-el-ajuar-liturgico-catedralicio')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion5-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Andrés de Leo</p>
                                          <h2 class="progression-video-title">El ajuar litúrgico catedralicio</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                           <div class="progression-studios-video-index-container">
                              <a href="{{url('/imagen/13/sesion-vi-el-ajuar-liturgico-los-textiles')}}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-la-catedral-de-puebla-sesion6-640x480-museo-amparo-puebla-03032021.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p>Pablo Amador Marrero</p>
                                          <h2 class="progression-video-title">El ajuar litúrgico: los textiles</h2>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     <div class="item">
                        <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                           <div class="progression-studios-video-index-container">
                              <a href="{{ url('/playlist/3/la-catedral-de-puebla') }}">
                                 <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <h2 class="progression-video-title">Ver más</h2>
                                          <div class="clearfix"></div>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                  </div>
               </div>
               <!--Playlist El circulo-->
              <div class="ma-home-slider-container">
                   <div class="index-category-title-container">
                       <a href="{{ url('/playlist/2/el-circulo-que-faltaba') }}">
                          <div class="ma-category-titles">
                              <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>El círculo que faltaba</span></h2>
                          </div>
                        </a>
                       <span><a href="{{ url('/playlist/2/el-circulo-que-faltaba') }}" class="home-more-link">Ver más</a></span>
                   </div>
                   <p>Este archivo digital contiene información del programa público "El círculo que faltaba", ofrecido en línea en el marco de la exposición del mismo nombre.</p>
                   <div id="imagen-home-carousel-2" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/audio/5/entrevista-a-magali-arriola')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-el-circulo-que-faltaba-audios-320x240-museo-amparo-puebla-08122020.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">
                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola</p>
                                                  <h2 class="progression-video-title">Entrevista a Magalí Arriola</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/3/introduccion-al-programa-digital-elcirculoquefaltaba')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-introduccion-al-programa-digital-elcirculoquefaltaba-640x480-museo-amparo-puebla-21122020201800.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">

                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola, Natalia Valencia Arango</p>
                                                  <h2 class="progression-video-title">Introducción al Programa Digital</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/texto/2/el-circulo-que-faltaba-leer-mas')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-el-circulo-que-faltaba-texto-640x480-museo-amparo-puebla-08122020.png" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">
                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola, Julio Cortázar</p>
                                                  <h2 class="progression-video-title">El círculo que faltaba | Leer más...</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/4/el-presente-manana')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-el-presente-el-manana-640x480-museo-amparo-puebla-21122020201800.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">

                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola, Carla Zaccagnini</p>
                                                  <h2 class="progression-video-title">El presente, mañana</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-documentary video-type-movies video-genres-action video-category-featured">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/5/comunidades-y-especies-en-riesgo')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-comunidades-y-especies-en-riesgo-640x480-museo-amparo-puebla-21122020201800.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">

                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola, Noé Martínez, Nohemí Pérez</p>
                                                  <h2 class="progression-video-title">Comunidades y especies en riesgo</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/6/los-origenes-del-conflicto-en-colombia')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-los-origenes-del-conflito-en-colombia-640x480-museo-amparo-puebla-21122020201800.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">

                                               <div class="progression-video-index-vertical-align">
                                                   <p>Emiliano Valdés, Pável Aguilar, Manuel Correa</p>
                                                  <h2 class="progression-video-title">Los orígenes del conflicto en Colombia</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                           <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                               <div class="progression-studios-video-index-container">
                                   <a href="{{url('/imagen/7/efectos-de-la-pandemia-en-el-imaginario-social')}}">
                                       <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/amparo_online/portada-efectos-de-la-pandemia-en-el-imaginario-social-640x480-museo-amparo-puebla-21122020201800.jpg" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                       <!-- close .progression-studios-feaured-image -->
                                       <!-- close featured thumbnail -->
                                       <div class="progression-video-index-content">
                                           <div class="progression-video-index-table">

                                               <div class="progression-video-index-vertical-align">
                                                   <p>Magalí Arriola, Alan Page</p>
                                                  <h2 class="progression-video-title">Efectos de la pandemia en el imaginario social</h2>
                                                  <div class="clearfix-pro"></div>
                                               </div>
                                               <!-- close .progression-video-index-vertical-align -->
                                           </div>
                                           <!-- close .progression-video-index-table -->
                                       </div>
                                       <!-- close .progression-video-index-content -->
                                       <div class="video-index-border-hover"></div>
                                   </a>
                               </div>
                               <!-- close .progression-studios-video-index-container -->
                           </div>
                           <!-- #post-## -->
                       </div>
                       <div class="item">
                          <div class="see-more-card video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-podcasts video-genres-drama video-category-featured video-category-season-2">
                             <div class="progression-studios-video-index-container">
                                <a href="{{ url('/playlist/2/el-circulo-que-faltaba') }}">
                                   <div class="progression-studios-video-feaured-image"><img width="700" height="480" src="{{url('/img/amparo-online-black.jpg')}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"></div>
                                   <!-- close .progression-studios-feaured-image -->
                                   <!-- close featured thumbnail -->
                                   <div class="progression-video-index-content">
                                      <div class="progression-video-index-table">
                                         <div class="progression-video-index-vertical-align">
                                            <h2 class="progression-video-title">Ver más</h2>
                                            <div class="clearfix"></div>
                                            <div class="clearfix-pro"></div>
                                         </div>
                                         <!-- close .progression-video-index-vertical-align -->
                                      </div>
                                      <!-- close .progression-video-index-table -->
                                   </div>
                                   <!-- close .progression-video-index-content -->
                                   <div class="video-index-border-hover"></div>
                                </a>
                             </div>
                             <!-- close .progression-studios-video-index-container -->
                          </div>
                          <!-- #post-## -->
                       </div>
                   </div>
              </div>
              <!--Fin playlist el circulo-->

               <!--Playlist 30 años-->

               <div class="ma-home-slider-container amparo-eres-tu-container">
                  <div class="index-category-title-container">
                     <div class="ma-category-titles">
                        <a href="{{ url('/mosaicos') }}" class="home-more-link">
                          <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-photo-video fa-lg"></i><span>¡El Amparo eres tú!</span></h2>
                        </a>
                     </div>
                     <span><a href="{{ url('/mosaicos') }}" class="home-more-link">Ver más</a></span>
                  </div>
                  <div id="imagen-home-carousel-3" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                     <?$registros = \App\MosaicoRegistro::take(8)->orderBy('id','DESC')->get();?>
                     @foreach ($registros as $registro)
                     <?$media = ($registro->media_collection->count()) ? str_replace(' ', '%20',$registro->media_collection->first()->url) : '';?>
                     <div class="item">
                        <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                           <div class="progression-studios-video-index-container" style="background-image: url({{$media}})">
                              <a href="{{url('/mosaicos')}}">
                                 <div class="progression-studios-video-feaured-image">
                                     <!-- <img width="700" height="480" src="{{$media}}" class="attachment-progression-studios-video-index size-progression-studios-video-index wp-post-image" alt="" loading="lazy"> -->
                                 </div>
                                 <!-- close .progression-studios-feaured-image -->
                                 <!-- close featured thumbnail -->
                                 <div class="progression-video-index-content">
                                    <div class="progression-video-index-table">
                                       <div class="progression-video-index-vertical-align">
                                          <p></p>
                                          <h2 class="progression-video-title">¡El Amparo eres tú!</h2>
                                          <div class="clearfix"></div>
                                          <ul class="video-index-meta-taxonomy ma-tags-container">
                                             <li>30 Aniversario</li>
                                          </ul>
                                          <div class="clearfix-pro"></div>
                                       </div>
                                       <!-- close .progression-video-index-vertical-align -->
                                    </div>
                                    <!-- close .progression-video-index-table -->
                                 </div>
                                 <!-- close .progression-video-index-content -->
                                 <div class="video-index-border-hover"></div>
                              </a>
                           </div>
                           <!-- close .progression-studios-video-index-container -->
                        </div>
                        <!-- #post-## -->
                     </div>
                     @endforeach
                  </div>
               </div>

              <!--Playlist Timeline-->
              <!--<div class="ma-home-slider-container">
                   <div class="index-category-title-container">
                       <a href="{{ url('/timeline') }}">
                          <div class="ma-category-titles">
                              <h2 class="progression-studios-skrn-post-list-title"><i class="fa fa-history fa-lg"></i><span>Línea del Tiempo Museo Amparo</span></h2>
                          </div>
                        </a>
                       <span><a href="{{ url('timeline') }}" class="home-more-link">Ver más</a></span>
                   </div>
                   <p>Desde su inauguración en 1991, el Museo Amparo ha sido un punto de encuentro en el Centro Histórico de Puebla para compartir diálogos, experiencias y aproximaciones al arte en México.</p>
                   <div id="timeline-home-carousel" class="owl-carousel progression-own-theme owl-loaded owl-drag">
                      <?
                        $registrosTimeline = \App\Timeline::listaTimeline(); ?>
                        @foreach ($registrosTimeline as $registroTimeline)
                          <div class="item">
                            <div class="video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action video-genres-drama video-category-featured">
                                 <div class="progression-studios-video-index-container" style="background-image: url({{ $registroTimeline->cover }})">
                                     <a href="https://museoamparo.online/timeline-detalle/{{ \Carbon\Carbon::parse($registroTimeline->fecha_evento)->format('Y') }}/{{  $registroTimeline->anio_id }}">
                                        <div class="progression-studios-video-feaured-image">
                                         
                                        </div>
                                        
                                         <div class="progression-video-index-content">
                                             <div class="progression-video-index-table">
                                                 <div class="progression-video-index-vertical-align">
                                                     <p>{{ \Carbon\Carbon::parse($registroTimeline->fecha_evento)->format('Y') }}</p>
                                                     <p>{{ \App\EventoTipo::getNombre($registroTimeline->tipo_evento_id) }}</p>
                                                    <h2 class="progression-video-title">{{ $registroTimeline->titulo }}</h2>
                                                    <div class="clearfix-pro"></div>
                                                 </div>
                                                 
                                             </div>
                                            
                                         </div>
                     
                                         <div class="video-index-border-hover"></div>
                                     </a>
                                 </div>
                                 
                            </div>
                             
                          </div>
                        @endforeach
                   </div>
              </div>-->
              <!--Fin playlist el timeline-->

              <!--Fin playlists-->
              </div>
              <!--Scripts slider-->
               <script type="text/javascript">
               jQuery(document).ready(function($) {
                   'use strict';

                   $('#imagen-home-carousel').owlCarousel({
                       margin:5,
                       items:3,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-2').owlCarousel({
                       margin:5,
                       items:3,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-3').owlCarousel({
                       margin:5,
                       items:1,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-4').owlCarousel({
                       margin:5,
                       items:1,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-5').owlCarousel({
                       margin:5,
                       items:1,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-6').owlCarousel({
                       margin:5,
                       items:1,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
                   $('#imagen-home-carousel-7').owlCarousel({
                       margin:5,
                       items:1,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });

                    $('#imagen-home-carousel-8').owlCarousel({
                       margin:5,
                       items:3,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });

                    $('#imagen-home-carousel-9').owlCarousel({
                       margin:5,
                       items:3,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });

                   $('#timeline-home-carousel').owlCarousel({
                       margin:5,
                       items:3,
                       autoplay:true,
                       autoplayTimeout:4000,
                       nav: true,
                       slideBy:1,
                       loop:true,//match with rewind
                       rewind: true,
                       dots: false,
                       autoplayHoverPause:true,
                       responsive : {
                           // breakpoint from 0 up
                           0 : {
                               items:1,
                           },
                           // breakpoint from 768 up
                           768 : {
                               items:2,
                           },
                           // breakpoint from 1025 up
                           1025 : {
                               items:3,
                           },
                           1300 : {
                               items:4,
                           }
                       }
                   });
               });
               </script>


               </div>
               </div>
               </div>
               <div class="clearfix-pro"></div>
            </div>
            <!-- .entry-content -->
         </div>
         <!-- #post-## -->
         <div class="clearfix-pro"></div>
      </div>
      <!-- close .width-container-pro -->
   </div>
   <!-- #content-pro -->
   @include('layout.footer')
   @include('layout.assets')

   <script type="text/javascript">
   (function() {


       setTimeout(function(){

       var el = document.querySelector( '.ma-loading' );
       el.parentNode.removeChild( el );

   },2000);

   })();
   </script>
</body>
</html>
