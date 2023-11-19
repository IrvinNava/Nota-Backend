<?
    $metadata = [
        'title' => 'Los cuerpos del desierto | Rometti Costales y Jorge Pavéz Ojeda',
        'description' => 'Rometti Costales y Jorge Pavéz Ojeda presentan una charla en el marco de la exposición y programa digital #Elcírculoquefaltaba “Los cuerpos del desierto”. Conversación en vivo moderada por Magalí Arriola',
        'url' => url('en-vivo/detalle'),
        'image' => asset('img/envivo-cover.jpg')
    ];
?>
@include('layout.header')
<body class="video_skrn-template-default single single-video_skrn postid-406 logged-in elementor-default">
   <div id="boxed-layout-pro" 	class="
      progression-studios-sticky-header-shadow				progression-studios-header-full-width-no-gap
      progression-studios-blog-post-title-center						progression-studios-logo-position-left
      progression-studios-one-page-nav-off
      "
      >
   @include('layout.topbar')
   <div id="post-406" class="post-406 video_skrn type-video_skrn status-publish has-post-thumbnail hentry video-type-television video-genres-action">
      <!-- <div id="video-page-title-pro" style="background-image:url('../img/envivo-cover.jpg');">
         <a class="video-page-title-play-button afterglow" href="#Video-Vayvo-Single"><i class="fa fa-play"></i></a>
         <div style="display:none;">
            <video id="Video-Vayvo-Single"   width="960" height="540">
               <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FMuseoAmparo.Puebla%2Fvideos%2F1466226680241548%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </video>
         </div>
         <div id="video-page-title-gradient-base"></div>
      </div> -->

      <div id="video-page-title-pro" style="background-image:url('../img/envivo-cover.jpg');" class="video-embedded-media-height-post">
          <div id="vayvo-single-video-embed">
              <p>
                  <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                      <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FMuseoAmparo.Puebla%2Fvideos%2F1466226680241548%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                  </div>
              </p>
          </div>
          <div id="video-page-title-gradient-base"></div>
      </div>

      <!-- #video-page-title-pro -->
      <div class="clearfix-pro"></div>
      <div id="content-pro" class="site-content-video-post">
         <div class="width-container-pro">
            <div id="video-post-container">
                <h1 class="video-page-title">Los cuerpos del desierto</h1>
               <ul id="video-post-meta-list">
                  <li id="video-post-meta-cat">
                     <ul>
                        <li><a href="">En vivo</a></li>
                     </ul>
                  </li>
                  <li id="video-post-meta-year">2020</li>
                  <li id="video-post-meta-rating"><span>Magalí Arriola, Rometti Costales y Jorge Pavéz Ojeda</span></li>
               </ul>
               <div class="clearfix-pro"></div>
               <div id="video-post-buttons-container">
                  <button name="progression_add_user_wishlist" class="wishlist-button-pro hidden-element"><i class="fa fa-check"></i><i class="fa fa-plus-circle"></i>Guardar</button>
                  <div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i>Compartir</div>
                  <div class="clearfix-pro"></div>
               </div>
               <!-- close #video-post-buttons-container -->
               <div id="vayvo-video-post-content">
                  <p>Los cuerpos del desierto título tomado del texto de Jorge Pavéz Ojeda, plantea cómo la excavación y la extracción o desplazamiento de cuerpos y de objetos permiten desplegar u ocultar otro tipo de narrativas, llevando a cabo un análisis de cómo este tipo de hallazgos arqueológicos pueden ser instrumentalizados con otros fines específicos. Por su parte, Víctor Costales, del dúo Rometti Costales, habla sobre el contexto de Chile, su posición geográfica y su relevancia histórica contemporánea tanto en la historia de Latinoamérica como en la global.</p>
               </div>
               <!-- #vayvo-video-post-content -->
               <div id="scroll-to-season-section"></div>

               <!-- close .vayvo-progression-video-season-container -->
            </div>
            <!-- close #video-post-container -->
            <div id="video-post-sidebar">
               <div class="content-sidebar-section video-sidebar-section-release-date">
                  <h4 class="content-sidebar-sub-header">Fecha de lanzamiento</h4>
                  <div class="content-sidebar-short-description">Julio 29, 2020</div>
               </div>
               <!-- close .content-sidebar-section -->
               <div class="content-sidebar-section video-sidebar-section-length">
                  <h4 class="content-sidebar-sub-header">Duración</h4>
                  <div class="content-sidebar-short-description">1h 4min</div>
               </div>
               <!-- close .content-sidebar-section -->

               <div class="clearfix-pro"></div>
            </div>
            <!-- close #video-post-sidebar -->
            <div class="clearfix-pro"></div>


         </div>
         <!-- close .width-container-pro -->
      </div>
      <!-- close #content-pro -->
      <div id="blog-single-social-sharing-container">
         <div id="close-social-sharing-skrn"><span></span></div>
         <ul id="blog-single-social-sharing" class="noselect">
            <li><a href="https://twitter.com/share?text=Amparo+Online+Audio&url={{ URL::current() }}" title="Twitter" class="twitter-share" target="_blank"><i class="fa fa-twitter"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir en Twitter</span></a></li>
            <li><a href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" title="Compartir en Facebook" class="facebook-share" target="_blank"><i class="fa fa-facebook-square"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir en Facebook</span></a></li>
            <li><a href="mailto:?subject=Grand+Tour&amp;body={{ URL::current() }}" title="Share on E-mail" class="mail-share"><i class="fa fa-envelope"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text">Compartir por correo</span></a></li>
         </ul>
         <div class="clearfix-pro"></div>
      </div>
   </div>
   <!-- close #id="post-406" -->
   @include('layout.footer')
   @include('layout.assets')
</body>
</html>
