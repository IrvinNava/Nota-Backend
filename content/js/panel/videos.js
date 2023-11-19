$(function (){
    let body = $('body');
    let notyf = new Notyf();
    let element = document.querySelector('meta[name="csrf-token"]');
    let csrf = element && element.getAttribute("content");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let tbl_videos = $('#table-videos');
    if(tbl_videos.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "thumbnail", name: "thumbnail", searchable: false},
            { data: "titulo", name: "titulo" },
            { data: "status", name: "status"},
            { data: "fecha_lanzamiento", name: "fecha_lanzamiento" },
            { data: "autores", name: "autores" },
            { data: "updated_at", name: "updated_at" },
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_videos = Cracknd.Datatables.render(tbl_videos, '/administrador/get-videos', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-video', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del video seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-video', { id: id }, function (response) {
                dt_videos.ajax.reload();
            });
        });

        let modal_agregar_video = $('#modal-agregar-video');
        modal_agregar_video.on('show.bs.modal', function (e) {
            let select_categorias = $('#video-select-categorias');
            let select_subcategorias = $('#video-select-subcategorias');
            Cracknd.Ajax.LoadOptions(select_categorias, '/administrador/api/get-options/categorias', null, select_categorias.data('id'));
            Cracknd.Ajax.LoadOptions(select_subcategorias, '/administrador/api/get-options/subcategorias', {id: select_categorias.data('id')});
        });

        modal_agregar_video.on('hide.bs.modal', function (e) {
            let form = $('#video-modal-agregar');
            form[0].reset();
        });

        $('#btn-confirmar-video').click(function (){
            let form = $('#video-modal-agregar');
            Cracknd.Ajax.SweetAlert('add', {
                title: "¿Desea agregar la información del nuevo video?",
                button_color: "#6bad47",
                button_text: "Sí, agregar"
            }, '/administrador/add-video', form.serialize(), function (response) {
                if(response.status){
                    let id = response.data;
                    window.location = BASEURL + '/administrador/videos/editar/' + id;
                } else
                    swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
            });
        });
    }

    let card_video = $('.card-video');
    if(card_video.length){
        let select_categorias = $('#video-select-categorias');
        let select_subcategorias = $('#video-select-subcategorias');
        let select_autores = $('#video-select-autores');

        Cracknd.Ajax.LoadOptions(select_categorias, '/administrador/api/get-options/categorias', null, select_categorias.data('id'));
        Cracknd.Ajax.LoadOptions(select_subcategorias, '/administrador/api/get-options/subcategorias', {id: select_subcategorias.data('categoria')}, select_subcategorias.data('id'));
        Cracknd.Ajax.LoadOptions(select_autores, '/administrador/api/get-options/autores', null, select_autores.data('id'));

        let etiquetas = new Bloodhound({
            datumTokenizer: datum => Bloodhound.tokenizers.whitespace(datum.value),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                wildcard: '%QUERY',
                url: BASEURL + '/administrador/api/get-options/tags?query=%QUERY',
                transform: response => $.map(response.data, tag => ({
                    id: tag.id,
                    value: tag.nombre
                }))
            }
        });

        etiquetas.initialize();

        $('#video-input-etiquetas').tagsinput({
            typeaheadjs: {
                displayKey: 'value',
                source: etiquetas.ttAdapter()
            }
        });

        $('#btn-actualizar-video').click(function (){
            let form = $('#form-video');
            let form_cover = $('#form-video-cover');
            Cracknd.Ajax.SweetAlert('update', {
                title: "¿Desea actualizar la información del video?",
                button_color: "#fcce54",
                button_text: "Sí, actualizar"
            }, '/administrador/update-video', form.serialize() + '&' + form_cover.serialize(), function (data) {
                window.location = BASEURL + '/administrador/videos';
            });
        });
    }

    let audio_cover_uploader = $('.video-cover-uploader');
    if(audio_cover_uploader.length){
        let video_id = $('#video-input-id').val();
        let coverUploader;
        let audioUploader;

        let uploaders_selectors = [
            {selector: 'video-input-uploader', allowedFileTypes: ['video/mp4']},
            {selector: 'video-input-cover', allowedFileTypes: ['image/png', 'image/jpeg']}
        ];

        uploaders_selectors.map((uploader_selector) => {
            let inputElement = document.getElementById(uploader_selector.selector);
            FilePond.registerPlugin(FilePondPluginFileValidateType);

            FilePond.setOptions(labels_es);
            let pond = FilePond.create(inputElement, {
                allowFileTypeValidation: true,
                allowProcess: false,
                allowRevert: false,
                acceptedFileTypes: uploader_selector.allowedFileTypes,
                server: {
                    url: BASEURL + '/administrador/api/upload-file',
                    process: {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        ondata: (formData) => {
                            formData.append('object_type', 'App\\Audio');
                            formData.append('object_id', video_id);
                            return formData;
                        }
                    }
                }
            });

            if(uploader_selector.selector === 'video-input-cover')
                coverUploader = pond;
            else
                audioUploader = pond;
        });

        const ponds = document.querySelectorAll('.filepond--root');
        ponds.forEach(function (pond){
            pond.addEventListener('FilePond:processfile', e => {
                let response = JSON.parse(e.detail.file.serverId);
                let container_selector;
                let input_name;
                if(response.status){
                    let file = response.data;
                    switch (file.mime_type){
                        case 'image/png':
                        case 'image/jpg':
                        case 'image/jpeg':
                            if(file.url.search('thumbnail') > 0 || file.url.search('cover') > 0){
                                container_selector = (file.url.search('thumbnail') > 0) ? '.thumbnail-img-container' : '.cover-img-container';
                                input_name = (file.url.search('thumbnail') > 0) ? 'thumbnail' : 'cover';
                                let image_container = $(container_selector);
                                image_container.html(`<img src="${file.url}" data-mime="${file.mime_type}"><input type="hidden" name="${input_name}" value="${file.url}">`);
                            } else {
                                $('.thumbnail-img-container').html(`<img src="${file.url}" data-mime="${file.mime_type}">`);
                                $('.cover-img-container').html(`<img src="${file.url}" data-mime="${file.mime_type}">`);
                            }
                            $('#video-upload-buttons-container').removeClass('d-none');
                            $('#btn-crop-video-cover').removeClass('disabled');
                            break;

                        case 'video/mp4':
                            let video_container = $('.video-body-container');
                            let video_template = `<video preload="auto" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="${file.url}"><a href="">${file.url}</a></video><input type="hidden" name="file" value="${file.basename}">`;
                            video_container.html(video_template);
                            $('#btn-actualizar-video-file').removeClass('disabled').removeAttr('disabled');
                            notyf.success('Se ha subido el archivo de audio correctamente');
                            break;
                    }
                } else
                    notyf.error(response.message);
            });
        });

        let Cropper = window.Cropper;
        let container_cover = document.querySelector('.cover-img-container');
        let container_thumbnail = document.querySelector('.thumbnail-img-container');
        let cropper;
        let cropper_thumbnail;

        $('#btn-crop-video-cover').click(function (){
            let image_cover = container_cover.getElementsByTagName('img').item(0);
            cropper = new Cropper(image_cover, {
                aspectRatio: 16 / 9
            });

            $('.thumbnail-img-container').removeClass('d-none');
            $('#btn-confirm-video-cover').removeClass('disabled');
            let image_thumbnail = container_thumbnail.getElementsByTagName('img').item(0);
            cropper_thumbnail = new Cropper(image_thumbnail, {
                aspectRatio: 4 / 3
            });
        });

        $('#btn-actualizar-video-file').click(function (){
            let form = $('#form-video-file');
            Cracknd.Ajax.SweetAlert('update', {
                title: "¿Desea actualizar el archivo del video?",
                button_color: "#fcce54",
                button_text: "Sí, actualizar"
            }, '/administrador/update-video-file', form.serialize(), function (data) {

            });
        });

        $('#btn-actualizar-video-link').click(function (){
            let form = $('#form-video-url');
            let code_yt = extract_code_youtube($('#video-input-enlace').val());
            if(code_yt !== false){
                Cracknd.Ajax.SweetAlert('update', {
                    title: "¿Desea actualizar el enlace del video?",
                    button_color: "#fcce54",
                    button_text: "Sí, actualizar"
                }, '/administrador/update-video-link', form.serialize() + '&code=' + code_yt, function (data) {

                });
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": "Lo sentimos, el enlace ingresado no es un enlace válido de Youtube", "type":"error"});
        });

        $('#btn-confirm-video-cover').click(function (){
            let titulo = slugify($('#video-input-titulo').val());
            let images_selectors = [
                {selector: '.cover-img-container', cropper: cropper, type: 'cover'},
                {selector: '.thumbnail-img-container', cropper: cropper_thumbnail, type: 'thumbnail'}
            ];

            images_selectors.map((image_selector) => {
                let image = $(image_selector.selector).find('img');
                let mime = image.data('mime');
                let extension = image.attr('src').split('.').pop();
                let result = image_selector.cropper.getCroppedCanvas();
                let image_encoded = result.toDataURL(mime);
                const blob = new Blob([image_encoded], {
                    type: mime
                });

                let file = new File([blob], `${image_selector.type}_${titulo}.${extension}`, {
                    type: mime
                });

                coverUploader.addFile(file);
            });
        });
    }

    function slugify(text, separator = '-'){
        return text
            .toString()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9 ]/g, '')
            .replace(/\s+/g, separator);
    }

    function extract_code_youtube(url){
        let expression = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
        let match = url.match(expression);
        return (match && match[1].length === 11) ? match[1] : false;
    }

    let playlistSwichVisibilidad = $("#video-swich-visibilidad");
    if (playlistSwichVisibilidad.length) {

        $("#label-swich-visibilidad").click( function(){

            if (playlistSwichVisibilidad.is(':checked')) {
                playlistSwichVisibilidad.attr('checked', false);
            } else {
                playlistSwichVisibilidad.attr('checked', true);
            }
        });

    }
});
