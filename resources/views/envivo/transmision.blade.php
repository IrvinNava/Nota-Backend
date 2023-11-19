<?
    $metadata = [
        'title' => 'transmisión',
        'description' => '',
        'url' => url(''),
        'image' => ''
    ];
?>
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

                <div class="live-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QBtXMdWJ94U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
