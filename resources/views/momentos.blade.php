<?
$metadata = [
    'title' => '30 años | Museo Amparo',
    'description' => 'Te invitamos a compartir una fotografía que te hayas tomado en el Museo Amparo para formar un gran mosaico de historias. Cuéntanos de cuándo es la imagen, qué actividad realizaste en el Museo, con quién estabas y tu experiencia de visita.',
    'url' => '',
    'image' => 'http://443e3f4e7dd2b6a88a3f-b9c0667778661278083bed3d7c96b2f8.r88.cf1.rackcdn.com/amparo_online/portada-el-circulo-que-faltaba-home-1280x720-museo-amparo-puebla-08122020.png'
];
?>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')
<body id="formulario-30-anios" class="page-template-default page page-id-31 logged-in elementor-default elementor-page elementor-page-31">
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
                <div class="col-xs12 t_align_j m_top_10">
                    <ul class="Breadcrumbs__list contemporaneo-breadcrumbs">
                        <li class="Breadcrumbs__list__item">
                            <a href="{{ url('') }}">
                                Inicio
                            </a>
                        </li>
                        <li class="Breadcrumbs__list__item is-current">
                            Aniversario
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
                    <p>Es nuestro 30 aniversario y queremos celebrar mostrando la memoria visual de esta historia que es compartida.</p>
                    <p class="margentop">Por ello, te invitamos a buscar entre tus fotos esos momentos especiales que has vivido en el Amparo y a compartir esos recuerdos con nosotros.</p>
                    <p>Envíanos tus imágenes, cuéntanos de cuándo son, qué actividad realizaste, con quién estabas y, lo más importante, cómo fue tu experiencia.</p>
                    <p>Queremos formar un gran mosaico de historias que se reflejarán también en la Sala de Aniversario porque esta historia de tres décadas no sería posible sin ti.</p>
                    <form id="form-mosaico">
                       <div class="form-container pt-5">
                          <div class="form-structure-container">
                             <div id="algo" class="card mb-3">
                                <div class="card-header white">
                                   <i class="fa fa-file-texto-o blue-text"></i>
                                   <p style="color:black!important"><b>SUBE TU FOTO FAVORITA Y CREA TU MOSAICO DE CELEBRACIÓN</b></p>
                                   <small style="color: #7d7d7d">Se recomienda subir fotos con un peso mínimo de 2 MB</small>
                                </div>
                                <div class="card-body mosaico-cover-uploader">
                                   <!--<form id="form-mosaico-cover">-->
                                   <!-- <p class="mb-3"><small class="dropzone-description text-center" style="color:black!important"></small></p> -->
                                   <!--<div class="d-flex justify-content-between">
                                      <div class="dropdown dropup">
                                      <div style="z-index: 1000;"class="dropdown-menu editorjs-dropdown" aria-labelledby="dropdownMenuButton">
                                      <div class="dropdown-divider"></div>
                                      <p>1. Haz click en la sección punteada para subir la imagen de tu computadora.</p>
                                      <div class="dropdown-divider"></div>
                                      <p>2. Haz click en el botón <img src="{{ asset('img/cut-button.jpg') }}"> para recortar portada y miniatura.</p>
                                      <div class="dropdown-divider"></div>
                                      <p>3. Para finalizar haz click en el botón <img src="{{ asset('img/success-button.jpg') }}"> para confirmar ambos recortes.</p>
                                      </div>
                                      </div>-->
                                </div>
                                <input type="file" id="mosaico-input-cover" class="filepond mt-3" name="upload_file" multiple required>
                                <!--<hr>-->
                                <!--<div id="mosaico-upload-buttons-container" class="mosaico-upload-buttons-container card-footer bg-light d-none">
                                   <div class="cropper-instructions-container">
                                   <p class="mb-0 font-weight-bold" style="color:black!important">AYUDA PARA AJUSTAR TU FOTOGRAFÍA</p>
                                   <p>1. Haz click en el botón <img src="{{ asset('img/cut-button.jpg') }}"> para activar el juste de tamaños.</p>
                                   <div class="dropdown-divider"></div>
                                   <p>2. Utiliza las zonas marcadas para ajustar el área de tu foto que quieres mostrar. Puedes hacer más grande estas áreas haciendo click en las esquinas y arrastrando hasta donde quieras ajustar.</p>
                                   <div class="dropdown-divider"></div>
                                   <p>3. Para finalizar haz click en el botón <img src="{{ asset('img/success-button.jpg') }}"> para confirmar ambos recortes.</p>
                                   <div class="dropdown-divider"></div>
                                   <p>4. Espera unos segundos a que se realice el ajuste y finalmente haz click en el botón <b>GUARDAR</b> al final de esta sección.</p>
                                   </div>
                                   <a href="javascript:void(0)" id="btn-crop-mosaico-cover" class="btn btn-primary" disabled>
                                   <i class="icon icon-crop"></i>AJUSTAR FOTOGRAFÍA
                                   </a>
                                   </div>-->
                                <div class="img-preview preview-lg"></div>
                             </div>
                             <div class="cover-img-container">
                                <div class="empty-container" style="position: relative">
                                   <div class="layer-empty">
                                      <div class="empty-icon"></div>
                                   </div>
                                </div>
                             </div>
                             <p class="mb-0 font-weight-bold d-none" style="color:black!important">CREA TU MOSAICO (Miniatura)</p>
                             <div class="thumbnail-img-container">
                                <div class="empty-container" style="position: relative">
                                   <div class="layer-empty">
                                      <div class="empty-icon"></div>
                                   </div>
                                </div>
                             </div>
                             <!--<div id="mosaico-upload-buttons-container" class="mosaico-upload-buttons-container card-footer bg-light d-none">
                                <a href="javascript:void(0)" id="btn-confirm-mosaico-cover" class="btn btn-primary" disabled>
                                <i class="icon icon-check-circle"></i>CONFIRMAR MOSAICOS
                                </a>
                                </div>-->
                             <hr>
                          </div>
                       </div>
                       <div class="form-row">
                          <div class="form-group col-xs12 col-m5">
                             <label for="input-nombre-visitante">Nombre</label>
                             <input type="text" id="input-nombre-visitante" name="input-nombre-visitante" class="form-control" style="background-color:white;" required>
                          </div>
                          <div class="form-group col-xs12 col-m2">
                             <label for="input-edad-visitante">Edad actual</label>
                             <input type="text" id="input-edad-visitante" name="input-edad-visitante" class="form-control">
                          </div>
                          <div class="form-group col-xs12 col-m5">
                             <label for="input-ciudad-residencia">Ciudad actual de residencia</label>
                             <input type="text" id="input-ciudad-residencia" name="input-ciudad-residencia" class="form-control">
                          </div>
                          <div class="form-group col-xs12 col-m4">
                             <label for="input-fecha-visita">Fecha de la fotografía</label>
                             <input type="date" id="input-fecha-visita" name="input-fecha-visita" class="form-control" placeholder="DD/MM/AAAA">
                          </div>
                          <div class="form-group col-xs12 col-m4">
                             <label for="input-evento-visita">Evento al que acudiste</label>
                             <input type="text" id="input-evento-visita" name="input-evento-visita" class="form-control">
                          </div>
                          <div class="form-group col-xs12 col-m hidden">
                             <label for="input-motivo-visita">Motivo de tu visita</label>
                             <input type="text" id="input-motivo-visita" name="input-motivo-visita" class="form-control">
                          </div>
                          <div class="form-group col-xs12 col-m4">
                             <label for="input-nombre-fotografo">¿Quién te tomó esa foto?</label>
                             <input type="text" id="input-nombre-fotografo" name="input-nombre-fotografo" class="form-control">
                          </div>
                          <div class="form-group col-xs12 col-m12">
                             <label for="input-detalle-visita">¿Qué te recuerda esta foto? ¿Cuál fue tu experiencia?</label>
                             <textarea id="input-detalle-visita" name="input-detalle-visita" class="form-control" rows="4"></textarea>
                          </div>
                          <div class="form-group col-xs12 col-m12 hidden">
                             <label for="input-detalle-volviste">¿Volviste nuevamente al Museo Amparo?</label>
                             <textarea id="input-detalle-volviste" name="input-detalle-volviste" class="form-control" rows="3"></textarea>
                          </div>
                          <div class="form-group col-xs12 col-m12 hidden">
                             <label for="input-volverias" class="">¿Te gustaría volver?</label>
                             <input type="text" id="input-volverias" name="input-volverias" class="form-control ">
                          </div>
                          <div class="form-group col-xs12 col-m12 hidden">
                             <label for="input-recomendarias">Si tuvieras que recomendarle a alguien visitar el MA, ¿qué le dirías?</label>
                             <textarea id="input-recomendarias" name="input-recomendarias" class="form-control" rows="3"></textarea>
                          </div>
                       </div>
                    <!--<div class="form-group" style="display: none">
                          <label for="exampleFormControlFile1">Foto de tu visita</label><br>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <br><small>La foto debe ser menor a 5MB</small>
                        </div>
                          
                        <div class="form-group">
                            <input type="file" id="imageCropFileInput" multiple="" accept=".jpg,.jpeg,.png">
                            <input type="hidden" id="profile_img_data">
                            <div class="img-preview"></div>
                            <div id="galleryImages"></div>
                            <div id="cropper">
                                <canvas id="cropperImg" width="0" height="0"></canvas>
                                <a href="javascript:void(0);" class="btn btn-primary cropImageBtn" id="cropImageBtn"><i class="fa fa-check"></i> Cortar foto</a>
                            </div>
                        </div>-->
                    <!--<div style="clear:both"></div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="">
                                <label class="form-check-label" for="">
                                    Entiendo y acepto que la imagen y datos que estoy enviando, salvo mi correo electrónico, se harán públicos. Para más referencias visita nuestro <a href="https://museoamparo.com/politicas-de-privacidad" target="_blank">Aviso de privacidad</a>
                                </label>
                            </div>
                        </div>-->
                       <!-- </div> -->
                       <hr>
                       <!-- </div> -->
                       <div style="clear:both"></div>
                       <div class="form-group">
                          <div class="form-check">
                             <input class="form-check-input" type="checkbox" id="input-agree" value="true" name="agree" required>
                             <label class="form-check-label" for="input-agree">
                             Entiendo y acepto que la imagen y datos que estoy enviando, salvo mi correo electrónico, se harán públicos. Para más referencias visita nuestro <a href="https://museoamparo.com/politicas-de-privacidad" target="_blank">Aviso de privacidad</a>
                             </label>
                          </div>
                       </div>
                       <div class="form-group text-center">
                          <a href="javascript:void(0)" id="send-photo" class="btn btn-primary send-photo">GUARDAR</a>
                       </div>
                    </form>
                    <div class="col-xs12">
                        <p>Recuerda seguir compartiéndonos tus momentos favoritos en redes sociales usando el hashtag <b>#MuseoAmparo</b>:</p>
                        <p>Facebook: <a data-cke-saved-href="https://www.facebook.com/MuseoAmparo.Puebla/" href="https://www.facebook.com/MuseoAmparo.Puebla/">/MuseoAmparo.Puebla</a> | Twitter: <a data-cke-saved-href="https://twitter.com/MuseoAmparo" href="https://twitter.com/MuseoAmparo">@MuseoAmparo</a> | Instagram: <a data-cke-saved-href="https://www.instagram.com/museoamparo/" href="https://www.instagram.com/museoamparo/">@museoamparo</a></p>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>

@include('layout.footer')
<script>const BASEURL = "{{ url('') }}";</script>

<style media="screen">
    #progression-studios-header-search-icon {
        display: none;
    }
</style>

<script src="{{ asset('js/panel/static/app-paper.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/config.js') }}"></script>

<script data-cfasync="false" type="text/javascript">
    function arm_open_modal_box_in_nav_menu(menu_id, form_id) {

        jQuery(".arm_nav_menu_link_" + form_id).find("." + form_id).trigger("click");
        return false;
    }
</script>
<link rel='stylesheet' id='elementor-post-54-css'  href="{{ asset('css/post-54.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href="{{ asset('css/fontawesome.min.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href="{{ asset('css/brands.min.css') }}" type='text/css' media='all' />

<script type='text/javascript' src="{{ asset('js/scripts.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/navigation-superfish.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/navigation-hoverintent.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/navigation-slimmenu.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/navigation-easing.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/fitvids.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/select2.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-asRange.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/scrolltofixed.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/script.js') }}"></script>
<script type='text/javascript'>
    jQuery(document).ready(function($) {
        "use strict";

        $(".skrn-genre-select2").select2({
            placeholder: "All Genres",
            allowClear: true,
            language: {
                noResults: function () {
                    return "No genres found";
                }
            },
            minimumResultsForSearch: -1
        });

        $(".skrn-duration-select2").select2({
            placeholder: "Any Duration",
            allowClear: true,
            minimumResultsForSearch: -1
        });

        $(".skrn-category-select2").select2({
            placeholder: "All Categories",
            allowClear: true,
            language: {
                noResults: function () {
                    return "No categories found";
                }
            },
            minimumResultsForSearch: -1
        });

        $(".skrn-director-select2").select2({
            placeholder: "All Directors",
            allowClear: true,
            language: {
                noResults: function () {
                    return "No directors found";
                }
            },
            minimumResultsForSearch: -1
        });

        $("#configreset, #mobile-configure-rest").click(function(){
            $(".advanced-searchform-video-header, .mobile-searchform-video-header").trigger("reset");
            $(".advanced-searchform-video-header input:checked, .mobile-searchform-video-header input:checked").removeAttr("checked");
            $(".skrn-director-select2, .skrn-category-select2, .skrn-genre-select2, .skrn-duration-select2").val("").trigger("change");
            $(".skrn-director-select2 option[selected], .skrn-category-select2 option[selected], .skrn-genre-select2 option[selected], .skrn-duration-select2 option[selected]").removeAttr("selected");

            $(this).parents("form").find(".rating-range-search-skrn").val("0,5");
            var api = $(this).parents("form").find(".rating-range-search-skrn").data("asRange");
            api.set([0,5]);
        });


    });

</script>
<script type='text/javascript' src="{{ asset('js/animated-typing.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/countdown.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.popupoverlay.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/scrollnav.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/masonry.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/prettyPhoto.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/flexslider.js?ver=1.0') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/video-backgrounds.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/fotorama.js') }}"></script>


</script>
<script type='text/javascript' src="{{ asset('js/jquery.images-compare.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/wp-embed.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/afterglow.min.js') }}"></script>
<!-- <script type='text/javascript' src="{{ asset('js/frontend-modules.min.js') }}"></script> -->
<script type='text/javascript' src="{{ asset('js/position.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/dialog.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/waypoints.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/swiper.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('js/owl.carousel.min.js') }}" id='owl-carousel-js'></script>

<script type='text/javascript'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.7.4","urls":{"assets":"https:\/\/vayvo.progressionstudios.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_enable_lightbox_in_editor":"yes"}},"post":{"id":26,"title":"Home","excerpt":""},"user":{"roles":["armember"]}};
</script>

<script type="text/javascript" src="{{ asset('js/panel/static/locale/filepond.es-es.js')}} "></script>
<link rel="stylesheet" href="{{ asset('css/sweet-alert.css') }}">
<link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/localization/messages_es.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sweet-alert.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('js/notyf.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('js/panel/static/cracknd.js')}} "></script>

<link rel="stylesheet" href="https://museoamparo.com/css/style.css">
<link rel="stylesheet" href="{{ asset('css/panel/app.css') }}">
<link rel="stylesheet" href="https://museoamparo.com/css/animate.min.css" as="style">
<link rel="stylesheet" href="https://museoamparo.com/css/embed.min.css" as="style">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" as="style">
<link rel="stylesheet" href="https://museoamparo.com/css/main.min.css" as="style">
<link rel="preload" href="https://museoamparo.com/css/vendor.css" as="style">
<link rel="stylesheet" href="{{ asset('css/ma_aniversario.css') }}" />

<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="{{ asset('js/panel/static/cropper.min.js') }}"></script>
<script src="{{ asset('js/panel/static/jquery-cropper.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="{{ asset('js/aniversario.js') }}"></script>

<script type="text/javascript">
$(function (){
    setTimeout( function(){
        $(".ma-loading").remove();
    },1000);
});
</script>

</body>
</html>
