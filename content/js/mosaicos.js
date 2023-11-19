jQuery(document).ready(function($) {
    let body = $('body');

    // function loadGallery(page, busqueda = null) {
    //     let url = '';
    //     if(busqueda !== null)
    //         url = baseurl + 'editor/getGallery?page=1&busqueda=' + busqueda;
    //     else
    //         url = baseurl + 'editor/getGallery?page=' + page;
    //     $.ajax({
    //         url: url,
    //         type: 'GET',
    //         beforeSend: function(){
    //             showGalleryLoader();
    //         },
    //         success: function(response) {
    //             let data = $.parseJSON(response);
    //             let container_images = $('.editor-gallery-items');
    //             let items_existentes = $('.editor-gallery-items .col-sm-3');
    //             let loading_more = $(".gallery-loading-more");
    //             if(items_existentes.length === 0 || busqueda !== null)
    //                 container_images.html('');
    //             if(data.status){
    //                 let imagenes = data.data;
    //                 $.each(imagenes, function (i, image) {
    //                     let template = `<div class="col-sm-3"><img src="${image.thumbnail}" title="" alt=""><a href="javascript:void(0)" class="btn btn-default btn-xs btn-block btn-add-image-to-content" data-id="${image.id}" data-path="${image.path}">Agregar al contenido</a></div>`;
    //                     container_images.append(template);
    //                 });
    //                 loading_more.remove();
    //             } else {
    //                 if(items_existentes.length === 0)
    //                     container_images.html('<h3>Lo sentimos, no hay imágenes en el servidor</h3>');
    //                     loading_more.remove();
    //             }
    //         },
    //         error: function(jqXHR, textStatus, errorThrown){
    //             swal("Error", errorThrown, "error");
    //             loading_more.remove();
    //         }
    //     });
    // }

    $(window).scroll(function() {
        let mosaicos = $(".mosaicos");
        let page = mosaicos.data('page');
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            console.log("Bottom");
            $(".gallery-loading-more").remove();
            $(".content-loading-container").append('<div class="gallery-loading-more"><div class="gallery-loader"></div><span>Cargando más fotos...</span></div>');
            let nextPage = page + 1;
            mosaicos.data('page', nextPage);
            // let busqueda = $('#section-busqueda-imagenes').val();
            // busqueda = (busqueda.length > 3) ? busqueda : null;
            // loadGallery(nextPage, busqueda);
            console.log(nextPage);
        }
    });


// LAZY LOAD BLUR

    // window.addEventListener('load', function() {
    //
    //     // setTimeout to simulate the delay from a real page load
    //     setTimeout(lazyLoad, 1000);
    //
    // });
    //
    // function lazyLoad() {
    //     var card_images = document.querySelectorAll('.card-image');
    //
    //     // loop over each card image
    //     card_images.forEach(function(card_image) {
    //         var image_url = card_image.getAttribute('data-image-full');
    //         var content_image = card_image.querySelector('img');
    //
    //         // change the src of the content image to load the new high res photo
    //         content_image.src = image_url;
    //
    //         // listen for load event when the new photo is finished loading
    //         content_image.addEventListener('load', function() {
    //             // swap out the visible background image with the new fully downloaded photo
    //             card_image.style.backgroundImage = 'url(' + image_url + ')';
    //             // add a class to remove the blur filter to smoothly transition the image change
    //             card_image.className = card_image.className + ' is-loaded';
    //         });
    //
    //     });
    //
    // }

});
