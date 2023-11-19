@include('layout.header')
   <body class="archive post-type-archive post-type-archive-video_skrn logged-in elementor-default">
      <div id="boxed-layout-pro" 	class="
         progression-studios-sticky-header-shadow				progression-studios-header-full-width-no-gap
         progression-studios-blog-post-title-center						progression-studios-logo-position-left
         progression-studios-one-page-nav-off
         "
         >
         @include('layout.topbar')
         <!-- close #progression-studios-header-position -->
         <div id="content-pro" class="site-content">
            <div class="width-container-pro">

                <div class="not-found-container">
                    <h2>404</h2>
                    <h3>¡Error!</h3>
                    <p class="mt-3">El contenido que buscas no existe o fue removido.</p>
                </div>

               <div class="clearfix-pro"></div>
            </div>
            <!-- close .width-container-pro -->
         </div>
         <!-- #content-pro -->
         @include('layout.footer')
         @include('layout.assets')
      </div>
   </body>
</html>
