$(function () {
    let body = $('body');
    let contenido = $('.contenido-container');
    let locale = $('#section-locale');
    let id_section = $('#section-id').val();
    let meta_container = $(".metadata-content-container");
    let meta_form = $(".metadata-form-container");
    let meta_footer = $(".meta-footer");
    const notyf = new Notyf();

    setPanelFooterControls();
    $( window ).resize(function() {
        setPanelFooterControls();
    });

    if(contenido.length){
        // loadTraduccion(id_section, locale.val());
    }

    locale.change(function () {
        loadTraduccion(id_section, $(this).val());
        setTimeout( function(){
            setPanelFooterControls();
        },300);
    });

    $('#btn-editor-agregar-texto').click(function () {
        console.log("Algo");
        if(contenido.hasClass('contenido-empty'))
            contenido.html('').removeClass('contenido-empty');
        let html = '<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="text"><div class="editor-item-content new-item"><p>Comienza agregando algo fantástico</p></div><div class="editor-item-tools"></div></div></div>';
        contenido.append(html);
        generateSortable();
    });

    $('#btn-editor-agregar-boton').click(function () {
        if(contenido.hasClass('contenido-empty'))
            contenido.html('').removeClass('contenido-empty');
        let html = '<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="button"><div class="editor-item-content"><a href="" class="btn btn-element btn-block text-center">Botón</a></div><div class="editor-item-tools"></div></div></div>';
        contenido.append(html);
        generateSortable();
    });

    let btn_upload_imagen = $('#btn-editor-agregar-imagen');
    if(btn_upload_imagen.length){
        let progress_bar = $('.progress-bar');
        btn_upload_imagen.fileupload({
            url: baseurl + 'app/libs/upload/images.php',
            dataType: 'json',
            sequentialUploads: true,
            dropZone: $('#editor-imagenes-dropzone'),
            start: function(e){
                $('.progress').toggleClass('hide');
                if(contenido.hasClass('contenido-empty'))
                    contenido.html('').removeClass('contenido-empty');
            },
            always(e, data){
                if(data.textStatus){
                    $.each(data.result.files, function (index, file) {
                        let id = $('#section-id').val();
                        let titulo = $('#section-titulo').val() + ' | Museo Amparo, Puebla';
                        let tipo = $('#section-type').val();
                        let tags = $('#section-etiquetas').val();
                        $.ajax({
                            url: baseurl + 'editor/migrateFile',
                            type: 'POST',
                            data: `module=images&section=${id}&section_type=${tipo}&archivo=${file.name}&size=${file.size}&titulo=${titulo}&tags=${tags}`,
                            beforeSend: function(){
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '100%');
                            },
                            success: function(response) {
                                var data = $.parseJSON(response);
                                if(data.status){
                                    let image = data.data;
                                    let template = `<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="image" data-id="${image.id}"><div class="editor-item-content"><a href="${image.path}" class="image-zoom" data-id="${id}" data-fancybox="zoom-images-${id}"><img src="${image.path}" alt="${titulo} | Museo Amparo, Puebla." title="${titulo} |  Museo Amparo, Puebla." class="img-fluid"></div><div class="editor-item-tools"></div></div></div></div>`;
                                    notyf.confirm(data.message);
                                    contenido.append(template);
                                    generateSortable();
                                    $('.progress-bar-indicator').addClass('hide').removeClass('progress-bar-striped active').css('width', '0');
                                } else {
                                    swal("Error", data.message, "error");
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                swal("Error", errorThrown, "error");
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '0');
                            }
                        });
                    });
                }
            },
            done: function (e, data) {
                progress_bar.parents('.progress').toggleClass('hide');
                progress_bar.css('width', 0).attr('aria-valuenow', 0);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                progress_bar.css(
                    'width',
                    progress + '%'
                );
            }
        });
    }

    let btn_upload_galeria = $('#btn-editor-agregar-galeria');
    if(btn_upload_galeria.length){
        let progress_bar = $('.progress-bar');
        let id_galeria = 0;
        btn_upload_galeria.fileupload({
            url: baseurl + 'app/libs/upload/images.php',
            dataType: 'json',
            sequentialUploads: true,
            dropZone: $('#editor-galeria-dropzone'),
            start: function(e){
                $('.progress').toggleClass('hide');
                if(contenido.hasClass('contenido-empty'))
                    contenido.html('').removeClass('contenido-empty');
                id_galeria = getGalleryLastId();
                let galeria = $(`<div class="row"><div class="gallery-item col-md-12 col-xs-12" data-type="gallery" data-id="${id_galeria}"><div class="row editor-gallery-content gallery-empty"><h3>La galería aún no tiene imágenes cargadas</h3></div><div class="gallery-item-tools"></div></div></div>`);
                contenido.append(galeria);
            },
            always(e, data){
                if(data.textStatus){
                    $.each(data.result.files, function (index, file) {
                        let id = $('#section-id').val();
                        let titulo = $('#section-titulo').val() + ' | Museo Amparo, Puebla';
                        let tipo = $('#section-type').val();
                        $.ajax({
                            url: baseurl + 'editor/migrateFile',
                            type: 'POST',
                            data: `module=images&section=${id}&section_type=${tipo}&archivo=${file.name}&size=${file.size}&titulo=${titulo}`,
                            beforeSend: function(){
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '100%');
                            },
                            success: function(response) {
                                var data = $.parseJSON(response);
                                if(data.status){
                                    let image = data.data;
                                    let template = `<div class="editor-item col-md-3 col-xs-12" data-type="gallery-item" data-id="${image.id}" data-image="true"><div class="editor-item-content"><a href="${image.path}" data-fancybox="gallery-images-${id_galeria}"><img src="${image.path}" alt="${titulo}" title="${titulo}" class="img-fluid"></a></div><div class="editor-item-tools"></div></div>`;
                                    notyf.confirm(data.message);
                                    let gallery_content = $(`.gallery-item[data-type="gallery"][data-id="${id_galeria}"]`).find('.editor-gallery-content');
                                    if(gallery_content.hasClass('gallery-empty'))
                                        gallery_content.html(template).removeClass('gallery-empty');
                                    else
                                        gallery_content.append(template);
                                    generateSortable();
                                    $('.progress-bar-indicator').addClass('hide').removeClass('progress-bar-striped active').css('width', '0');
                                } else {
                                    swal("Error", data.message, "error");
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                swal("Error", errorThrown, "error");
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '0');
                            }
                        });
                    });
                    generateSortable();
                }
            },
            done: function (e, data) {
                progress_bar.parents('.progress').toggleClass('hide');
                progress_bar.css('width', 0).attr('aria-valuenow', 0);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                progress_bar.css(
                    'width',
                    progress + '%'
                );
            }
        });
    }

    let btn_upload_archivo = $('#btn-editor-agregar-archivo');
    if(btn_upload_archivo.length){
        let progress_bar = $('.progress-bar');
        btn_upload_archivo.fileupload({
            url: baseurl + 'app/libs/upload/files.php',
            dataType: 'json',
            sequentialUploads: true,
            dropZone: $('#editor-archivos-dropzone'),
            start: function(e){
                $('.progress').toggleClass('hide');
                if(contenido.hasClass('contenido-empty'))
                    contenido.html('').removeClass('contenido-empty');
            },
            always(e, data){
                if(data.textStatus){
                    let id = $('#section-id').val();
                    let etiquetas = $('#section-etiquetas').val();
                    let tipo = $('#section-type').val();
                    $.each(data.result.files, function (index, file) {
                        $.ajax({
                            url: baseurl + 'editor/migrateFile',
                            type: 'POST',
                            data: `module=files&section=${id}&section_type=${tipo}&archivo=${file.name}&size=${file.size}&type=${file.type}&etiquetas=${etiquetas}`,
                            beforeSend: function(){
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '100%');
                            },
                            success: function(response) {
                                var data = $.parseJSON(response);
                                if(data.status){
                                    let file = data.data;
                                    let file_control = `<div class="col-xs-12 col-md-12 m_bottom_10"><div class="material_extra ${file.type}"><a href="${file.path}" target="_blank" class="material_extra__link Modal__btn" data-modal="${file.type}"><div class="material_extra__img"></div><div class="material_extra__description"><strong class="material_extra__title">${file.basename}</strong><span>${file.description}</span><label>${file.size}</label></div></a></div></div>`;
                                    let template = `<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="files" data-id="${file.id}"><div class="editor-item-content">${file_control}</div><div class="editor-item-tools"></div></div></div>`;
                                    notyf.confirm(data.message);
                                    contenido.append(template);
                                    generateSortable();
                                    $('.progress-bar-indicator').addClass('hide').removeClass('progress-bar-striped active').css('width', '0');
                                } else {
                                    swal("Error", data.message, "error");
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                swal("Error", errorThrown, "error");
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '0');
                            }
                        });
                    });
                }
            },
            done: function (e, data) {
                progress_bar.parents('.progress').toggleClass('hide');
                progress_bar.css('width', 0).attr('aria-valuenow', 0);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                progress_bar.css(
                    'width',
                    progress + '%'
                );
            }
        });
    }

    let switch_visibilidad = $('#switch-visibility');
    if(switch_visibilidad.length){
        if(parseInt(switch_visibilidad.data('visibilidad')))
            switch_visibilidad.addClass('active-switch').data('visibilidad', 1);
        else
            switch_visibilidad.removeClass('active-switch').data('visibilidad', 0);
    }

    body.on('keyup', '#section-busqueda-imagenes', function () {
       let busqueda = $(this).val();
       if(busqueda.length > 3)
           loadGallery(1, busqueda);
       else if(busqueda.length === 0)
           loadGallery(1, null);
    });

    body.on('keyup', '#section-busqueda-archivos', function () {
        let busqueda = $(this).val();
        if(busqueda.length > 3)
            loadFiles(1, busqueda);
        else if(busqueda.length === 0)
            loadFiles(1, null);
    });

    body.on('click', '.editor-item', function () {
        let item = $(this);
        let tipo = item.data('type');
        let contenido = item.find('.editor-item-content');
        switch (tipo) {
            case 'text':
            case 'files':
            case 'image':
            case 'prexisting-image':
                if(contenido.hasClass('new-item'))
                    contenido.html('').removeClass('new-item');
                contenido.attr('contenteditable', true);
                contenido.ckeditor();
                break;
        }
    });

    body.on('click', '.editor-item-content', function () {
        let item = $(this).parents('.editor-item');
        let tipo = item.data('type');
        let editor_tools;
        editor_tools = item.find('.editor-item-tools');
        $('.editor-item .editor-item-tools').removeClass('active');
        $('.gallery-item .gallery-item-tools').removeClass('active');
        $('.editor-item').removeClass('selected');
        $('.gallery-item').removeClass('selected');
        if(!editor_tools.hasClass('active'))
            editor_tools.addClass('active');
        if(!editor_tools.hasClass('selected'))
            item.addClass('selected');
    });

    body.on('click', 'a[data-fancybox="images"]', function (e) {
        e.preventDefault();
    });

    body.on('click', '.gallery-item', function () {
        let item = $(this);
        let editor_tools = item.find('.gallery-item-tools');
        if(!editor_tools.hasClass('active'))
            editor_tools.addClass('active');
        if(!editor_tools.hasClass('selected'))
            item.addClass('selected');
    });

    body.on('click', '.btn-close-item', function (){
        let item = $(this).parents('.editor-item');
        let editor_tools = item.find('.editor-item-tools');
        $('.editor-item').removeClass('selected');
        if(editor_tools.hasClass('active'))
            setTimeout( function(){
                editor_tools.removeClass('active');
            },100);
    });

    body.on('click', '.btn-expand-item', function () {
        let item = $(this).parents('.editor-item');
        let size = getColSize(item.attr('class'));
        if(size > 0 && size < 12){
            item.removeClass('col-md-' + size).addClass('col-md-' + (size + 1));
            let clases = item.attr('class').split(' ');
            $.each(clases, function (i, clase) {
                if(clase.indexOf('offset-md-') > -1)
                    item.removeClass(clase);
            });
        }
    });

    body.on('click', '.btn-contract-item', function () {
        let item = $(this).parents('.editor-item');
        let size = getColSize(item.attr('class'));
        if((size - 1) > 0){
            item.removeClass('col-md-' + size).addClass('col-md-' + (size - 1));
            let clases = item.attr('class').split(' ');
            $.each(clases, function (i, clase) {
                if(clase.indexOf('offset-md-') > -1)
                    item.removeClass(clase);
            });
        }
    });

    body.on('click', '.btn-toggle-up-item', function () {
        let item = $(this).parents('.editor-item');
        let size = getColSize(item.attr('class'));
        if(size < 11)
            item.removeClass('col-md-' + size + ' ' + 'offset-md-' + ((12 - size) / 2)).addClass('col-md-' + (size + 2) + ' ' + 'offset-md-' + ((10 - (size)) / 2));
    });

    body.on('click', '.btn-toggle-down-item', function () {
        let item = $(this).parents('.editor-item');
        let size = getColSize(item.attr('class'));
        if(size > 4)
            item.removeClass('col-md-' + size + ' ' + 'offset-md-' + ((12 - size) / 2)).addClass('col-md-' + (size - 2) + ' ' + 'offset-md-' + ((12 - (size - 2)) / 2));
    });

    body.on('click', '.btn-add-image-to-content', function () {
        let prexinsting_image = $(this);
        let path = prexinsting_image.data('path');
        let id = prexinsting_image.data('id');
        let title = $('#section-titulo').val();
        let template = `<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="prexisting-image" data-id="${id}" data-image="true"><div class="editor-item-content"><a href="${path}" class="image-zoom" data-id="${id}" data-fancybox="zoom-images-${id}"><img src="${path}" alt="${title} | Museo Amparo, Puebla." title="${title} |  Museo Amparo, Puebla." class="img-fluid"></a></div><div class="editor-item-tools"></div></div></div>`;
        notyf.confirm("Se ha agregado la imagen al contenido de la sección");
        contenido.append(template);
        generateSortable();
    });

    body.on('click', '.btn-add-file-to-content', function () {
        let prexinsting_file = $(this);
        let path = prexinsting_file.data('path');
        let id = prexinsting_file.data('id');
        let type = prexinsting_file.data('type');
        let basename = prexinsting_file.data('basename');
        let description = prexinsting_file.data('description');
        let size = prexinsting_file.data('size');
        let file_control = `<div class="col-xs-12 col-md-12 m_bottom_10"><div class="material_extra ${type}"><a href="${path}" target="_blank" class="material_extra__link Modal__btn" data-modal="${type}"><div class="material_extra__img"></div><div class="material_extra__description"><strong class="material_extra__title">${basename}</strong><span>${description}</span><label>${size}</label></div></a></div></div>`;
        let template = `<div class="row"><div class="editor-item col-md-12 col-xs-12" data-type="files" data-id="${id}"><div class="editor-item-content">${file_control}</div><div class="editor-item-tools"></div></div></div>`;
        notyf.confirm("Se ha agregado el archivo al contenido de la sección");
        contenido.append(template);
        generateSortable();
    });

    body.on('click', '.btn-add-gallery-item', function () {
        let gallery = $(this).parents('.gallery-item');
        let id_galeria = gallery.data('id');
        let progress_bar = $('.progress-bar');
        $(this).fileupload({
            url: baseurl + 'app/libs/upload/images.php',
            dataType: 'json',
            sequentialUploads: true,
            dropZone: $('#editor-galeria-dropzone'),
            start: function(e){
                $('.progress').toggleClass('hide');
                if(contenido.hasClass('contenido-empty'))
                    contenido.html('').removeClass('contenido-empty');
            },
            always(e, data){
                if(data.textStatus){
                    $.each(data.result.files, function (index, file) {
                        let id = $('#section-id').val();
                        let titulo = $('#section-titulo').val();
                        let etiquetas = $('#section-etiquetas').val();
                        $.ajax({
                            url: baseurl + 'editor/migrateFile',
                            type: 'POST',
                            data: `module=images&section=${id}&archivo=${file.name}&size=${file.size}&titulo=${titulo}&etiquetas=${etiquetas}`,
                            beforeSend: function(){
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '100%');
                            },
                            success: function(response) {
                                var data = $.parseJSON(response);
                                if(data.status){
                                    let image = data.data;
                                    let title = $('#contenido-titulo').val();
                                    let template = `<div class="editor-item col-md-4 col-xs-12" data-type="gallery-item" data-id="${image.id}"><div class="editor-item-content"><a href="${image.path}" data-fancybox="images"><img src="${image.path}" alt="${title} | Museo Amparo, Puebla." title="${title} |  Museo Amparo, Puebla." class="img-fluid"></a></div><div class="editor-item-tools"></div></div>`;
                                    notyf.confirm(data.message);
                                    let gallery_content = $(`.gallery-item[data-type="gallery"][data-id="${id_galeria}"]`).find('.editor-gallery-content');
                                    if(gallery_content.hasClass('gallery-empty'))
                                        gallery_content.html(template).removeClass('gallery-empty');
                                    else
                                        gallery_content.append(template);
                                    generateSortable();
                                    $('.progress-bar-indicator').addClass('hide').removeClass('progress-bar-striped active').css('width', '0');
                                } else {
                                    swal("Error", data.message, "error");
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                swal("Error", errorThrown, "error");
                                $('.progress-bar-indicator').removeClass('hide').addClass('progress-bar-striped active').css('width', '0');
                            }
                        });
                    });
                    generateSortable();
                }
            },
            done: function (e, data) {
                progress_bar.parents('.progress').toggleClass('hide');
                progress_bar.css('width', 0).attr('aria-valuenow', 0);
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                progress_bar.css(
                    'width',
                    progress + '%'
                );
            }
        });
    });

    body.on('click', '.editor-item[data-image="true"]', function (e) {
        e.preventDefault();
    });

    body.on('click', '.btn-drop-item', function () {
        let type = $(this).data('type');
        let item;
        switch (type) {
            case 'gallery':
                item = $(this).parents('.gallery-item');
                break;

            default:
                item = $(this).parents('.editor-item');
                break;
        }

        swal({
            title: "Atención",
            text: "Deseas eliminar el elemento seleccionado",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e74c3c",
            confirmButtonText: "Si, eliminar",
            cancelButtonText: "No",
            showLoaderOnConfirm: true,
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm){
            if(isConfirm) {
                item.remove();
                let items = $('.editor-item');
                if(!items.length)
                    contenido.html('<h3>Comienza agregando algo fantástico <i class="fa fa-thumbs-up"></i></h3>').addClass('contenido-empty');
            }
        });
    });

    let section_cover_generator = $('#section-cover-generator');
    if(section_cover_generator.length){
        section_cover_generator.click(function (e) {
            let titulo = $('#section-titulo').val();
            if(titulo.length){
                section_cover_generator.imgPicker({
                    url: baseurl + 'app/libs/upload/cover.php',
                    aspectRatio: 1513/631,
                    uploadSuccess: function(image) {
                        this.options.setSelect = (image.width > image.height) ?
                            [(image.width-image.height)/2, 0, image.height, image.height] :
                            [0, (image.height-image.width)/2, image.width, image.width];
                    },
                    cropSuccess: function(image) {
                        let panel = section_cover_generator.parents('.panel.panel-default');
                        panel.find('.accordion-status').removeClass('success-status').addClass('warning-status').html('<span class="fa fa-exclamation-circle fa-2x"></span>');
                        $('.vista-previa-cover').html(`<div class="w-100"><img src="${baseurl}public/img/s/c/${image.versions.c.url}" class="img-thumbnail img-responsive"><input type="hidden" name="cover" value="${image.versions.c.url}"></div>`);
                        $("#accordion-thumbnail-form").css("opacity", 1);
                        generar_thumbnail();
                        $("#cover-aprox").css(`background-image`,`url(${baseurl}public/img/s/c/${image.versions.c.url})`).data('enabled', true);
                    },
                    data:{
                        titulo: titulo
                    }
                });
            } else {
                e.preventDefault();
                swal("Importante", "Antes de continuar es importante agregar el título de la sección", "warning");
            }
        });
    }

    $('#btn-guardar-contenido').click(function () {
        let contenido = cleanContent($('.contenido-container'));
        let form = $('#form-contenido');
        let visibilidad = parseInt($('#switch-visibility').data('visibilidad'));
        if(contenido.length){
            swal({
                title: "Importante",
                text: "¿Deseas guardar el contenido de la sección?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#62cb31",
                confirmButtonText: "Si, guardar",
                cancelButtonText: "No",
                showLoaderOnConfirm: true,
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm){
                if(isConfirm) {
                    contenido = encodeURIComponent(contenido);
                    $.ajax({
                        url: baseurl + 'editor/add',
                        type: 'POST',
                        data: form.serialize() + '&contenido=' + contenido + '&locale=' + locale.val() + '&visibilidad=' + visibilidad,
                        beforeSend: function () {
                            $('button.confirm').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
                        },
                        success: function(response) {
                            var data = $.parseJSON(response);
                            if(data.status){
                                $('button.confirm').html('Ok').removeAttr('disabled');
                                swal({
                                    title:"Finalizado",
                                    text: data.message,
                                    type: "success",
                                    showCancelButton: false
                                },
                                function(isConfirm){
                                    if(isConfirm) {
                                        switch (data.data) {
                                            case 1:
                                                window.location.reload();
                                                break;

                                            case 2:
                                                window.location = baseurl + 'visitasguiadas';
                                                break;
                                        }
                                    }
                                });
                            }else{
                                swal("Por favor revisa los datos ingresados", data.message, "error");
                                $('button.confirm').html('Ok').removeAttr('disabled');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            swal("Error", errorThrown, "error");
                            $('button.confirm').html('Ok').removeAttr('disabled');
                        }
                    });
                }
            });
        } else
            swal("Antes de continuar, tienes que agregar contenido", '', "error");
    });

    $('#btn-actualizar-contenido').click(function () {
        let contenido = cleanContent($('.contenido-container'));
        let form = $('#form-contenido');
        let visibilidad = $('#switch-visibility').data('visibilidad');
        let form_data = generateFormData();
        if(contenido.length){
            swal({
                title: "Importante",
                text: "¿Deseas actualizar el contenido de la sección?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fcce54",
                confirmButtonText: "Si, actualizar",
                cancelButtonText: "No",
                showLoaderOnConfirm: true,
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm){
                if(isConfirm) {
                    contenido = encodeURIComponent(contenido);
                    $.ajax({
                        url: baseurl + 'editor/update',
                        type: 'POST',
                        data: form.serialize() + '&contenido=' + contenido + '&locale=' + locale.val() + '&visibilidad=' + visibilidad + '&form_data=' + form_data,
                        beforeSend: function () {
                            $('button.confirm').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
                        },
                        success: function(response) {
                            var data = $.parseJSON(response);
                            if(data.status){
                                $('button.confirm').html('Ok').removeAttr('disabled');
                                swal({
                                    title:"Finalizado",
                                    text: data.message,
                                    type: "success",
                                    showCancelButton: false
                                },
                                function(isConfirm){
                                    if(isConfirm) {
                                        if(isConfirm) {
                                            switch (data.data) {
                                                case 1:
                                                    window.location.reload();
                                                    break;

                                                case 2:
                                                    window.location = baseurl + 'contenido/visitas_guiadas';
                                                    break;
                                            }
                                        }
                                    }
                                });
                            }else{
                                swal("Por favor revisa los datos ingresados", data.message, "error");
                                $('button.confirm').html('Ok').removeAttr('disabled');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            swal("Error", errorThrown, "error");
                            $('button.confirm').html('Ok').removeAttr('disabled');
                        }
                    });
                }
            });
        } else
            swal("Antes de continuar, tienes que agregar contenido", '', "error");
    });

    body.on('click', '.btn-drop-section', function () {
        let button = $(this);
        let id = button.data('id');
        let type = button.data('type');
        swal({
            title: "Importante",
            text: "¿Deseas eliminar la sección seleccionada?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e74c3c",
            confirmButtonText: "Si, eliminar",
            cancelButtonText: "No",
            showLoaderOnConfirm: true,
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm){
            if(isConfirm) {
                $.ajax({
                    url: baseurl + 'editor/drop',
                    type: 'POST',
                    data: `id=${id}&type=${type}`,
                    beforeSend: function () {
                        $('button.confirm').html('<i class="fa fa-cog fa-spin"></i>').attr('disabled', 'disabled');
                    },
                    success: function(response) {
                        var data = $.parseJSON(response);
                        if(data.status){
                            $('button.confirm').html('Ok').removeAttr('disabled');
                            swal({
                                title:"Finalizado",
                                text: data.message,
                                type: "success",
                                showCancelButton: false
                            },
                            function(isConfirm){
                                if(isConfirm) {
                                    if(isConfirm) {
                                        window.location.reload();
                                    }
                                }
                            });
                        }else{
                            swal("Por favor revisa los datos ingresados", data.message, "error");
                            $('button.confirm').html('Ok').removeAttr('disabled');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        swal("Error", errorThrown, "error");
                        $('button.confirm').html('Ok').removeAttr('disabled');
                    }
                });
            }
        });
    });

    $('.gallery-content').on('scroll', function() {
        let page = $(this).data('page');
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            $(this).append('<div class="gallery-loading-more"><div class="gallery-loader"></div><span>Cargando más imágenes...</span></div>');
            let nextPage = page + 1;
            $(this).data('page', nextPage);
            let busqueda = $('#section-busqueda-imagenes').val();
            busqueda = (busqueda.length > 3) ? busqueda : null;
            loadGallery(nextPage, busqueda);
        }
    });

    $('.editor-files-items').on('scroll', function() {
        let page = $(this).data('page');
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            let nextPage = page + 1;
            $(this).data('page', nextPage);
            let busqueda = $('#section-busqueda-imagenes').val();
            busqueda = (busqueda.length > 3) ? busqueda : null;
            loadGallery(nextPage, busqueda);
        }
    });

    let etiquetas = $('#section-etiquetas');
    if(etiquetas.length){
        etiquetas.tagEditor({
            forceLowercase: false,
            sortable: true,
            placeholder: 'Etiquetas'
        });
    }

    function getColSize(clases) {
        clases = clases.split(' ');
        let size = 0;
        $.each(clases, function (i, clase) {
            if(clase.search('col-md') >= 0){
                let col = clase.split('-');
                size = parseInt(col[col.length - 1]);
            }
        });
        return size;
    }

    function generateSortable() {
        let editor_rows = $('.contenido-container .row');
        $.each(editor_rows, function (i, editor_row) {
            new Sortable(editor_row, {
                group: 'shared',
                connectWith: '.editor-item',
                handle: '.btn-move-item',
                ghostClass: 'card-background-class',
                onAdd: function (evt) {
                    let editor_rows = $('.contenido-container .row');
                    $.each(editor_rows, function (i, editor_row) {
                        let row = $(editor_row);
                        if(row.hasClass('row-placeholder'))
                            row.removeClass('row-placeholder');
                        row.html($.trim(row.html()));
                        if(!row.html().length)
                            row.remove();
                    });

                    if(!$('.row .row-placeholder').length){
                        let row_placeholder = $('<div class="row row-placeholder"></div>');
                        contenido.append(row_placeholder);
                        generateSortable();
                    }
                },
                onChoose: function (/**Event*/evt) {
                    let items = $('.editor-item-content');
                    items.each(function (i, item) {
                       $(item).removeClass('cke_editable cke_editable_inline cke_contents_ltr cke_show_borders cke_focus').removeAttr('contenteditable tabindex spellcheck role aria-multiline aria-label title aria-describedby style');
                    });
                }
            });
        });
        loadControles();
    }

    function loadControles(){
        let drop_control;
        let move_control = '<span class="btn-move-item"><i class="fa fa-hand-paper-o"></i></span>';
        let expand_control = '<span class="btn-expand-item"><i class="fa fa-plus-square"></i></span>';
        let contract_control = '<span class="btn-contract-item"><i class="fa fa-minus-square"></i></span>';
        let toggle_up_control = '<span class="btn-toggle-up-item"><i class="fa fa-expand"></i></span>';
        let toggle_down_control = '<span class="btn-toggle-down-item"><i class="fa fa-compress"></i></span>';
        let close_control = '<span class="btn-close-item"><i class="fa fa-times-circle"></i></i></span>';
        let addfile_control = '<span class="btn-add-gallery-item"><i class="fa fa-plus"></i></i><input type="file" name="files[]" multiple></span>';
        let items_editor = $('.editor-item');
        if(items_editor.length){
            drop_control = '<span class="btn-drop-item" data-type="editor"><i class="fa fa-trash text-danger"></i></span>';

            $.each(items_editor, function (i, item_editor) {
                let div_editor = $(item_editor);
                div_editor.find('.editor-item-tools').html(move_control + toggle_down_control + toggle_up_control + contract_control + expand_control + drop_control + close_control);
            });
        }

        let gallery_items_editor = $('.gallery-item');
        if(gallery_items_editor.length){
            drop_control = '<span class="btn-drop-item" data-type="gallery"><i class="fa fa-trash text-danger"></i></span>';

            $.each(gallery_items_editor, function (i, gallery_item_editor) {
                let div_editor = $(gallery_item_editor);
                div_editor.find('.gallery-item-tools').html(move_control + addfile_control + drop_control + close_control);
            });
        }
    }

    function cleanContent(html){
        let editor_items = html.find('.editor-item');
        $.each(editor_items, function (i, editor_item) {
            let item = $(editor_item);
            let tools = item.find('.editor-item-tools');
            let content = item.find('.editor-item-content');
            content.html($.trim(content.html()));
            tools.html('').removeClass('active');
            content.removeClass('cke_editable selected cke_editable_inline cke_contents_ltr cke_show_borders cke_focus').removeAttr('contenteditable tabindex spellcheck role aria-multiline aria-label title aria-describedby style data-cke-saved-href draggable');
            content.find('img.cke_reset.cke_widget_mask').remove();
            content.find('span.cke_reset.cke_widget_drag_handler_container').remove();

            let type = item.data('type');
            switch (type) {
                case 'prexisting-image':
                case 'image':
                    let url = item.find('a').attr('href');
                    let extension = url.split('.').pop();
                    switch(extension){
                        case 'jpg':
                        case 'jpeg':
                        case 'png':
                            let id = item.find('a').data('id');
                            item.find('a').addClass('image-zoom').attr('data-fancybox', `zoom-images-${id}`).removeAttr('target');
                            item.find('div.img-settings').remove();
                            break;

                        default:
                            item.find('a').removeClass('image-zoom').removeAttr('data-fancybox');
                            item.find('div.img-settings').remove();
                            break;
                    }
                    break;

                case 'button':
                    item.find('div.button-parameters-container').remove();
                    break;

                case 'gallery':
                    item.find('div.img-settings').remove();
                    break;
            }
        });

        let gallery_items = html.find('.gallery-item');
        $.each(gallery_items, function (i, gallery_item) {
            let item = $(gallery_item);
            let tools = item.find('.gallery-item-tools');
            let content = item.find('.editor-gallery-content');
            content.html($.trim(content.html()));
            tools.html('').removeClass('active');
            content.removeClass('cke_editable selected cke_editable_inline cke_contents_ltr cke_show_borders cke_focus').removeAttr('contenteditable tabindex spellcheck role aria-multiline aria-label title aria-describedby style data-cke-saved-href draggable');
        });

        let editor_rows = $('.contenido-container .row');
        $.each(editor_rows, function (i, editor_row) {
            let row = $(editor_row);
            row.html($.trim(row.html()));
            if(!row.html().length)
                row.remove();
        });

        return $.trim(html.html());
    }

    function setPanelFooterControls() {
        let panel_footer = $(".panel-footer");
        var windowHeight = $(window).height();
        var bodyHeight = $("#wrapper").height();
        var panelWidth = $(".animate-panel").outerWidth();
        var footerHeight = panel_footer.outerHeight();

        panel_footer.addClass("panel-footer-fixed");
        panel_footer.css("width",panelWidth);
        $(".accordion-container").last().css("margin-bottom",footerHeight-80);
    }

    function loadTraduccion(id_seccion, idioma){
        $.ajax({
            url: baseurl + 'editor/getTranslation',
            type: 'POST',
            data: `id_seccion=${id_seccion}&idioma=${idioma}`,
            success: function(response) {
                var data = $.parseJSON(response);
                if(data.status){
                    let traduccion = data.data;
                    $('#section-titulo').val(Cracknd.decodeHTMLEntities(traduccion.title));
                    $('#editor-contenido').html(Cracknd.decodeHTMLEntities(traduccion.content));
                    let input_tags = $('#section-etiquetas');
                    let tags = input_tags.tagEditor('getTags')[0].tags;
                    if(tags.length >= 0)
                        input_tags.tagEditor('destroy');
                    input_tags.val('');
                    let etiquetas = (traduccion.tags !== null) ? traduccion.tags.split(',') : [];
                    input_tags.tagEditor({initialTags: etiquetas, forceLowercase: false});
                    generateSortable();
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                swal("Error", errorThrown, "error");
            }
        });
    }

    function loadFiles(page, busqueda = null){
        let url = '';
        if(busqueda !== null)
            url = baseurl + 'editor/getFiles?page=1&busqueda=' + busqueda;
        else
            url = baseurl + 'editor/getFiles?page=' + page;
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function(){
                showGalleryLoader();
            },
            success: function(response) {
                let data = $.parseJSON(response);
                let container_files = $('.editor-files-items');
                let items_existentes = $('.editor-items .col-md-4');
                if(items_existentes.length === 0 || busqueda !== null)
                    container_files.html('');
                if(data.status){
                    let files = data.data;
                    $.each(files, function (i, file) {
                        let template = `<div class="editor-item col-md-4 col-xs-12"><div class="material_extra ${file.type}"><div class="material_extra__link" target="_blank" data-modal="files" data-id="${file.id}"><div class="material_extra__img"></div><div class="material_extra__description"><strong class="material_extra__title">${file.basename}</strong><span>${file.description}</span><label>${file.size}</label></div></div><a href="javascript:void(0)" class="btn btn-default btn-xs btn-block btn-add-file-to-content" data-id="${file.id}" data-path="${file.path}" data-type="${file.type}" data-description="${file.description}" data-size="${file.size}" data-basename="${file.basename}">Agregar al contenido</a></div></div></div></div>`;
                        container_files.append(template);
                    });
                } else {
                    if(items_existentes.length === 0)
                        container_files.html('<h3>Lo sentimos, no hay archivos en el servidor</h3>');
                }
                removeGalleryLoader();
            },
            error: function(jqXHR, textStatus, errorThrown){
                swal("Error", errorThrown, "error");
                removeGalleryLoader();
            }
        });
    }

    function loadGallery(page, busqueda = null) {
        let url = '';
        if(busqueda !== null)
            url = baseurl + 'editor/getGallery?page=1&busqueda=' + busqueda;
        else
            url = baseurl + 'editor/getGallery?page=' + page;
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function(){
                showGalleryLoader();
            },
            success: function(response) {
                let data = $.parseJSON(response);
                let container_images = $('.editor-gallery-items');
                let items_existentes = $('.editor-gallery-items .col-sm-3');
                let loading_more = $(".gallery-loading-more");
                if(items_existentes.length === 0 || busqueda !== null)
                    container_images.html('');
                if(data.status){
                    let imagenes = data.data;
                    $.each(imagenes, function (i, image) {
                        let template = `<div class="col-sm-3"><img src="${image.thumbnail}" title="" alt=""><a href="javascript:void(0)" class="btn btn-default btn-xs btn-block btn-add-image-to-content" data-id="${image.id}" data-path="${image.path}">Agregar al contenido</a></div>`;
                        container_images.append(template);
                    });
                    loading_more.remove();
                } else {
                    if(items_existentes.length === 0)
                        container_images.html('<h3>Lo sentimos, no hay imágenes en el servidor</h3>');
                        loading_more.remove();
                }
                removeGalleryLoader();
            },
            error: function(jqXHR, textStatus, errorThrown){
                swal("Error", errorThrown, "error");
                removeGalleryLoader();
                loading_more.remove();
            }
        });
    }

    function getGalleryLastId() {
        let galleries = $('.gallery-item[data-type="gallery"]');
        let ids = [];
        if(galleries.length){
            galleries.each(function (i, gallery) {
                ids.push($(gallery).data('id'));
            });
            ids = ids.sort();

            return ids[ids.length - 1] + 1;
        } else
            return 1;
    }

    $(".switch").click( function(){
        console.log("Switch");
        var idSwitch = $(this).attr("id");
        switch (idSwitch) {
            case "switch-structure":
            if ( $(this).hasClass("active-switch") ) {
                $(this).removeClass("active-switch");
                $("#editor-contenido").removeClass("show-structure");
            } else {
                $(this).addClass("active-switch");
                $("#editor-contenido").addClass("show-structure");
            }
            break;
            case "switch-visibility":
            if ( $(this).hasClass("active-switch") ) {
                $(this).removeClass("active-switch");
                $(this).data("visibilidad", 0);
            } else {
                $(this).addClass("active-switch");
                $(this).data("visibilidad", 1);
            }
            break;
            case "switch-mobile":
            if ( $(this).hasClass("active-switch") ) {
                $(this).removeClass("active-switch");
                removeMobile();
            } else {
                $(this).addClass("active-switch");
                setMobile();
            }
            break;
        }
    });

    $("#btn-open-gallery").click( function(){
        $(".panel-footer").addClass("show-gallery");
        $("#btn-actualizar-contenido").addClass("hidden");
        $("#cancel-gallery").removeClass("hidden");
        $('.gallery-content').data('page', 1);
        $("#cancel-resources").removeClass("hidden");
        $(".footer-btns a").hide();
        loadGallery(1);
    });

    $("#btn-open-files").click( function(){
        $(".panel-footer").addClass("show-files");
        $("#btn-actualizar-contenido").addClass("hidden");
        $("#cancel-resources").removeClass("hidden");
        $(".footer-btns a").hide();
        loadFiles(1);
    });

    $("#cancel-resources").click( function(){
        $(".panel-footer").removeClass("show-gallery show-files");
        $("#btn-actualizar-contenido").removeClass("hidden");
        $("#cancel-resources").addClass("hidden");
        $(".footer-btns a").show();
    });

    function setMobile() {
        $(".iframe").addClass("mobile-view");
        $("#switch-structure").removeClass("active-switch");
        $("#editor-contenido").removeClass("show-structure");
    }

    function showGalleryLoader() {
        $(".gallery-loader").show()
    }

    function removeGalleryLoader() {
        $("h4 .gallery-loader").hide()
    }

    function removeMobile() {
        $(".iframe").removeClass("mobile-view")
    }

    function generar_thumbnail() {
        let titulo = $('#section-titulo').val();
        let section_thumbnail_generator = $('#section-thumbnail-generator');
        section_thumbnail_generator.imgPicker({
            url: baseurl + 'app/libs/upload/thumbnail.php',
            aspectRatio: 1,
            loadComplete: function(image) {
                this.setImage(image);
                this.options.setSelect = (image.width > image.height) ?
                    [(image.width-image.height)/2, 0, image.height, image.height] :
                    [0, (image.height-image.width)/2, image.width, image.width];
            },
            cropSuccess: function(image) {
                $('.vista-previa-thumbnail').html(`<div class="col-sm-12"><img src="${baseurl}public/img/s/c/${image.versions.tmb.url}" class="img-thumbnail img-responsive"><input type="hidden" name="thumbnail" value="${image.versions.tmb.url}"></div>`);
                $("#thumbnail-aprox").css(`background-image`,`url(${baseurl}public/img/s/c/${image.versions.tmb.url})`).data('enabled', true);
                let panel = section_thumbnail_generator.parents('.panel.panel-default');
                panel.find('.accordion-status').removeClass('warning-status').addClass('success-status').html('<span class="fa fa-check-circle fa-2x"></span>');
            },
            data:{
                titulo: titulo
            }
        });
    }

    $("#btn-metadata").click( function(){
        let locale = $('#section-locale option:selected').val();
        meta_form.fadeIn();
        meta_container.css("right","0");
        meta_footer.css("right","15px");
        $(".meta-header").css("right","15px");
        getMetadata(id_section, locale);
        // body.css("overflow","hidden");
    });

    $('#section-metadata-locale').change(function () {
        let locale = $('#section-metadata-locale option:selected').val();
        meta_form.fadeIn();
        meta_container.css("right","0");
        meta_footer.css("right","15px");
        $(".meta-header").css("right","15px");
        getMetadata(id_section, locale);
    });

    body.on('keyup', '#section-metadata-title', function (e) {
        $(this).removeClass("is-invalid");
        $("#metadata-example-facebook-title, #metadata-example-twitter-title").html( $(this).val() );
    });

    body.on('keyup', '#section-metadata-description', function (e) {
        $(this).removeClass("is-invalid");
        $("#metadata-example-twitter-description").html( $(this).val() );
    });

    $("#section-metadata-title, #section-metadata-description").blur( function(e){
        if ( $(this).val().trim() == "" ) {
            $(this).addClass("is-invalid");
            $(this).val("");
        }
    });

    function getMetadata(id_section, locale){
        Cracknd.Ajax.init(`editor/getMetadata`, {section_id: id_section, locale: locale}, 'POST').then( data => {
            let response = $.parseJSON(data);
            if(response.status){
                let data = response.data;
                let input_metadata_title = $('#section-metadata-title');
                let input_metadata_description = $('#section-metadata-description');
                if(data.title.length)
                    input_metadata_title.val(data.title).removeClass('is-invalid');
                else
                    input_metadata_title.val('').addClass('is-invalid');
                if(data.description.length)
                    input_metadata_description.val(data.description).removeClass('is-invalid');
                else
                    input_metadata_description.val('').addClass('is-invalid');
                $('.vista-previa-metadata-facebook').html(`<img src="${data.fb_image}" class="img-thumbnail"><input type="hidden" name="fb_image" value="${data.fb_image}">`);
                $('#metadata-example-facebook-image').attr('src', data.fb_image);
                $('#metadata-example-facebook-title').html(data.title);
                $('#metadata-example-facebook-description').html(data.description);
                $('.vista-previa-metadata-twitter').html(`<img src="${data.tw_image}" class="img-thumbnail"><input type="hidden" name="tw_image" value="${data.tw_image}">`);
                $('#metadata-example-twitter-image').attr('src', data.tw_image);
                $('#metadata-example-twitter-title').html(data.title);
                $('#metadata-example-twitter-description').html(data.description);
            }
            $(".meta-loader").fadeOut();
        });
    }

    $('#btn-actualizar-metadata-section').click(function () {
        let form = $('#form-section-metadata');
        let section_id = $('#section-id').val();
        let section_locale = $('#section-metadata-locale option:selected').val();
        //form.validate();
        //if(form.valid()){
        Cracknd.Ajax.SweetAlert('update', {
            title: "¿Deseas actualizar la información de metadatos?",
            button_color: "#ffb606",
            button_text: "Sí, actualizar"
        }, 'editor/updateMetadata', `section_id=${section_id}&locale=${section_locale}&` + form.serialize(), function (data) {

        });
        //}
    });

    let section_metadata_facebook_generator = $('#section-metadata-facebook-generator');
    if(section_metadata_facebook_generator.length){
        section_metadata_facebook_generator.click(function (e) {
            let titulo = $('#section-metadata-title').val();
            if(titulo.length){
                section_metadata_facebook_generator.imgPicker({
                    url: baseurl + 'utils/upload/images-crop',
                    aspectRatio: 40/21,
                    uploadSuccess: function(image) {
                        this.options.setSelect = (image.width > image.height) ?
                            [(image.width-image.height)/2, 0, image.height, image.height] :
                            [0, (image.height-image.width)/2, image.width, image.width];
                    },
                    cropSuccess: function(image) {
                        $('.vista-previa-metadata-facebook').html(`<img src="${BASEURL}public/img/uploads/${image.versions.img.url}" class="img-thumbnail"><input type="hidden" name="fb_image" value="${image.versions.img.url}">`);
                        $('#metadata-example-facebook-image').attr('src', `${BASEURL}public/img/uploads/${image.versions.img.url}`);
                    },
                    data:{
                        titulo: titulo,
                        tipo: 'metadata-fb'
                    }
                });
            } else {
                e.preventDefault();
                swal("Importante", "Antes de continuar es importante agregar el título de la sección", "warning");
            }
        });
    }

    let section_metadata_twitter_generator = $('#section-metadata-twitter-generator');
    if(section_metadata_twitter_generator.length){
        section_metadata_twitter_generator.click(function (e) {
            let titulo = $('#section-metadata-title').val();
            if(titulo.length){
                section_metadata_twitter_generator.imgPicker({
                    url: baseurl + 'utils/upload/images-crop',
                    aspectRatio: 40/21,
                    uploadSuccess: function(image) {
                        this.options.setSelect = (image.width > image.height) ?
                            [(image.width-image.height)/2, 0, image.height, image.height] :
                            [0, (image.height-image.width)/2, image.width, image.width];
                    },
                    cropSuccess: function(image) {
                        $('.vista-previa-metadata-twitter').html(`<img src="${BASEURL}public/img/uploads/${image.versions.img.url}" class="img-thumbnail"><input type="hidden" name="tw_image" value="${image.versions.img.url}">`);
                        $('#metadata-example-twitter-image').attr('src', `${BASEURL}public/img/uploads/${image.versions.img.url}`);
                    },
                    data:{
                        titulo: titulo,
                        tipo: 'metadata-tw'
                    }
                });
            } else {
                e.preventDefault();
                swal("Importante", "Antes de continuar es importante agregar el título de la sección", "warning");
            }
        });
    }

    $(".metadata-close").click( function(){
        closeMetaForm();
    });

    function closeMetaForm() {
        meta_container.css("right","-100%");
        meta_footer.css("right","-100%");
        $(".meta-header").css("right","-100%");
        meta_form.fadeOut();
        $('#section-metadata-title').val('');
        $('#section-metadata-description').val('');
        $('.vista-previa-metadata-facebook').html(`<img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" class="img-thumbnail"><input type="hidden" name="fb_image" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png">`);
        $('#metadata-example-facebook-image').attr('src', 'https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png');
        $('#metadata-example-facebook-title').html('Título de la publicación');
        $('#metadata-example-facebook-description').html('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $('.vista-previa-metadata-twitter').html(`<img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png" class="img-thumbnail"><input type="hidden" name="tw_image" value="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png">`);
        $('#metadata-example-twitter-image').attr('src', 'https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/cover-placeholder.png');
        $('#metadata-example-twitter-title').html('Título de la publicación');
        $('#metadata-example-twitter-description').html('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        // body.css("overflow","initial");
    }

    // Buttons Parameters Option

    body.on("click", ".btn-element", function(e){
        e.preventDefault();
        let url_visor = 'https://docs.google.com/viewer?embedded=true&url=';
        $(".button-parameters-container").remove();
        $(this).addClass("thisButton");
        let btnParent = $(this).parent(".editor-item-content");
        btnParent.append('<div class="button-parameters-container"> <div class="parameters-close"></div> <p>CONFIGURACIONES EL BOTÓN</p> <form class=""> <div class="form-group form-float"> <div class="form-line"> <label class="form-label">Texto del botón</label> <input name="titulo" class="form-control form-control-lg btn-text-input" type="text" autocomplete="off"> </div> </div> <div class="form-group form-float"> <div class="form-line"> <label class="form-label">Enlace del botón</label> <input name="titulo" class="form-control form-control-lg btn-url-input" type="text" autocomplete="off"> </div> </div> <div class="switch-container"> <span>Abrir en nueva pestaña </span> <div class="switch target-switch"><span></span></div> </div><div class="switch-container"> <span>Visor de documentos </span> <div class="switch visor-switch"><span></span></div> </div> <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-aplicar-parametros float-right"> Aplicar cambios </a> </form> </div>');
        let switch_newtab = $(".target-switch");
        let switch_visor = $('.visor-switch');
        let text = $(this).html();
        let url = $(this).attr("href");
        let target = $(this).attr("target");
        if ( target === "_blank" )
            switch_newtab.addClass("active-switch");
        if(url.includes(url_visor)){
            url = url.replace(url_visor, '');
            switch_visor.addClass("active-switch");
        }

        $(".btn-text-input").val(text);
        $(".btn-url-input").val(url);
        $(".btn-text-input").select();
    });

    body.on("click", ".parameters-close", function(){
        let parametersContainer = $(this).parents(".button-parameters-container");
        parametersContainer.remove();
        $(".btn-element").removeClass("thisButton");
    });

    body.on("click",".btn-aplicar-parametros", function(){
        let url_visor = 'https://docs.google.com/viewer?embedded=true&url=';
        let text = $(".btn-text-input").val();
        let url = $(".btn-url-input").val();
        let thisButton = $(this).parents(".editor-item-content").find(".btn-element");
        let switchTarget = $(this).parents(".editor-item-content").find(".target-switch");
        let switchVisor = $(this).parents(".editor-item-content").find(".visor-switch");
        thisButton.html(text);
        if(switchTarget.hasClass("active-switch"))
            thisButton.attr("target", "_blank");
        else
            thisButton.attr("target", "");
        if(switchVisor.hasClass("active-switch"))
            thisButton.attr('href', url_visor + url);
        else
            thisButton.attr("href", url);
        let parametersContainer = $(this).parents(".button-parameters-container");
        parametersContainer.remove();
        $(".btn-element").removeClass("thisButton");
    });

    body.on("click", ".target-switch", function(){
        if ($(this).hasClass("active-switch"))
            $(this).removeClass("active-switch");
        else
            $(this).addClass("active-switch");
    });

    body.on("click", ".visor-switch", function(){
        if ($(this).hasClass("active-switch"))
            $(this).removeClass("active-switch");
        else
            $(this).addClass("active-switch");
    });

    // Images Parameters Options

    setTimeout( function(){
        let images = $('.img-fluid');
        images.each(function (i, img) {
            $(img).addClass('');
            $(this).parents(".editor-item").append('<div class="img-settings"><i class="fa fa-gear"></i></div>');
        });
    },2000);

    body.on("click", ".img-settings", function(e){
        e.stopPropagation();
        $(".img-parameters-container").remove();
        let imgParent = $(this).parents(".editor-item");
        imgParent.append('<div class="img-parameters-container"> <div class="parameters-close"></div> <p>CONFIGURACIONES DE LA IMAGEN</p> <form class=""> <div class="form-group form-float"> <div class="form-line"> <label class="form-label">Texto alternativo</label> <input name="alt" class="form-control form-control-lg img-alt-input" type="text" autocomplete="off"> </div> </div> <div class="form-group form-float"> <div class="form-line"> <label class="form-label">Título de la imagen</label> <input name="titulo" class="form-control form-control-lg img-title-input" type="text" autocomplete="off"> </div> </div> <a href="javascript:void(0)" class="btn btn-primary btn-sm img-aplicar-parametros float-right"> Aplicar cambios </a> </form> </div>');
        let thisImg = $(this).parents(".editor-item").find(".img-fluid");
        let altText = thisImg.attr("alt");
        let titleText = thisImg.attr("title");
        $(".img-alt-input").val(altText);
        $(".img-title-input").val(titleText);
        $(".img-alt-input").select();
    });

    body.on("click", ".parameters-close", function(){
        let parametersContainer = $(this).parents(".img-parameters-container");
        parametersContainer.remove();
    });

    body.on("click",".img-aplicar-parametros", function(){
        let altText = $(".img-alt-input").val();
        let titleText = $(".img-title-input").val();
        let thisImg = $(this).parents(".editor-item").find(".img-fluid");
        thisImg.attr("alt",altText);
        thisImg.attr("title",titleText);
        // Remove Form
        let parametersContainer = $(this).parents(".img-parameters-container");
        parametersContainer.remove();
    });

    function generateFormData() {
        let data = [];
        let inputs_form = $('.input-editor-form');
        inputs_form.each(function (i, input_form) {
            let input = $(input_form);
            if(input.data('column') !== undefined)
                data.push({column: input.data('column'), 'type': input.data('type'), 'value': input.val()});
        });

        let selects_form = $('.select-editor-form');
        selects_form.each(function (i, select_form) {
            let select = $(select_form);
            if(select.data('column') !== undefined){
                let select_value = null;
                let isMultiple = select.prop('multiple');
                if(isMultiple){
                    let key = select.data('key');
                    let options = [];
                    let selected_options = select.find('option:selected');
                    selected_options.each(function (i, selected_option) {
                        let option = $(selected_option);
                        let object = new Object();
                        object[key] = option.val();
                        options.push(object);
                    });
                    select_value = JSON.stringify(options);
                }
                data.push({column: select.data('column'), 'type': select.data('type'), 'value': select_value});
            }
        });
        return encodeURI(JSON.stringify(data));
    }
});
