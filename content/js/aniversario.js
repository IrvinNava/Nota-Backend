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

    let tbl_mosaicos = $('#table-fotos');
    if(tbl_mosaicos.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "thumbnail", name: "thumbnail", searchable: false},
            { data: "nombre", name: "nombre" },
            { data: "status", name: "status"},
            { data: "detalle", name: "detalle" },
            { data: "creado", name: "creado" },
            { data: "acciones", name: "acciones", searchable: false},
            { data: "eliminar", name: "eliminar" , searchable: false},
        ];
        let dt_mosaicos = Cracknd.Datatables.render(tbl_mosaicos, '/administrador/api/get-mosaicos', Cracknd.Datatables.options(), null, columns);

        $(body).on('click','.feed-modal', function(){
            $("#nombre-visitante").text($(this).data('nombre-visitante'));
            $("#edad-visitante").text($(this).data('edad-visitante'));
            $("#ciudad-residencia").text($(this).data('ciudad-residencia'));
            $("#fecha-visita").text($(this).data('fecha-visita'));
            $("#evento-visita").text($(this).data('evento-visita'));
            $("#motivo-visita").text($(this).data('motivo-visita'));
            $("#nombre-fotografo").text($(this).data('nombre-fotografo'));
            $("#detalle-visita").text($(this).data('detalle-visita'));
            $("#detalle-volviste").text($(this).data('detalle-volviste'));
            $("#detalle-volverias").text($(this).data('volverias'));
            $("#detalle-recomendarias").text($(this).data('recomendarias'));
            $("#mosaico-completo").attr('src',$(this).data('mosaico-completo'));
            $("#mosaico-id").val($(this).data('id'));
        });

        $(".update-status-mosaico").click(function(){
            $statusLabel = ($(this).data('status') == 1) ? 'aprobar ' : 'rechazar';
            Cracknd.Ajax.SweetAlert('update', {
                title: "¿Estas seguro de "+$statusLabel+" este mosaico?",
                button_color: "#fcce54",
                button_text: "Sí, actualizar"
                }, '/administrador/update-mosaico',`id=${ $("#mosaico-id").val()}`+`&status=${$(this).data('status')}`, function (data) {
                window.location = BASEURL + '/administrador/30anios';
            });
        });

        body.on('click', '.btn-drop-mosaico', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('delete', { Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del mosaico seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-mosaico', { id: id }, function (response) {
                dt_mosaicos.ajax.reload();
            });
        });
    }

    let form = $('#form-mosaico');
    if(form.length){
        $("#send-photo").click(function(){
            console.log(form);
            if(form.valid()){
                if($("#data-cover-img-container").length){
                    //if(form.agree.checked){
                        Cracknd.Ajax.SweetAlert('add', {
                            title: "¿Desea agregar la información del nuevo mosaico?",
                            button_color: "#6bad47",
                            button_text: "Sí, agregar"
                            }, '/mosaico/add', 'id_cover='+$("#data-cover-img-container").data('id')+'&'+'id_thumbnail='+$("#data-thumbnail-img-container").data('id')+'&'+form.serialize(), function (response) {
                            if(response.status){
                                let id = response.data;
                                window.location = BASEURL + '/mosaicos';
                            } else
                                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
                        });
                    //}
                    //else{
                        //swal({"html": true, "title": "Debes aceptar los términos y condiciones", "text": 'Este paso es necesario para continuar el proceso', "type":"error"});
                    //}
                }
                else{
                    swal({"html": true, "title": "Carga una fotografía", "text": 'Arrastra o dá clic sobre la sección de carga', "type":"error"});
                }
            }
            else
                swal({"html": true, "title": "Faltan campos por completar", "text": 'Completa el formulario', "type":"error"});
        });

        let coverUploader;
        let uploaders_selectors = [
            {selector: 'mosaico-input-cover', allowedFileTypes: ['image/png', 'image/jpeg', 'image/jpg', 'image/JPG', 'image/JPEG']}
        ];

        uploaders_selectors.map((uploader_selector) => {
            let inputElement = document.getElementById(uploader_selector.selector);
            FilePond.registerPlugin(
                FilePondPluginFileValidateType,
                FilePondPluginImageExifOrientation,
                FilePondPluginImageTransform
            );

            FilePond.setOptions(labels_es);
            let pond = FilePond.create(inputElement, {
                allowFileTypeValidation: true,
                FilePondPluginImageExifOrientation: true,
                FilePondPluginImagePreview:true,
                ImageTransformOutputStripImageHead: false,
                allowProcess: false,
                allowRevert: false,
                acceptedFileTypes: uploader_selector.allowedFileTypes,
                server: {
                    url: BASEURL + '/administrador/api/upload-mosaico',
                    process: {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        ondata: (formData) => {
                            formData.append('object_type', 'App\\MosaicoMedia');
                            return formData;
                        }
                    }
                }
            });
            coverUploader = pond;
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
                        case 'image/JPG':
                        case 'image/JPEG':
                            if(file.url.search('thumbnail') > 0 || file.url.search('cover') > 0){
                                container_selector = (file.url.search('thumbnail') > 0) ? '.thumbnail-img-container' : '.cover-img-container';
                                input_name = (file.url.search('thumbnail') > 0) ? 'thumbnail' : 'cover';
                                let image_container = $(container_selector);
                                image_container.html(`<img src="${file.url}" data-mime="${file.mime_type}"><input id="data-${container_selector.replace('.','')}" type="hidden" name="${input_name}" value="${file.url}" data-id="${file.id}" required>`);
                            } else {
                                $('.thumbnail-img-container').html(`<img src="${file.url}" data-mime="${file.mime_type}" data-id="${file.id}" required><input id="data-thumbnail-img-container" type="hidden" name="cover" value="${file.url}" data-id="${file.id}" required>`);
                                $('.cover-img-container').html(`<img class="d-none" src="${file.url}" data-mime="${file.mime_type}" data-id="${file.id}" required><input id="data-cover-img-container" type="hidden" name="thumbnail" value="${file.url}" data-id="${file.id}" required >`);
                            }
                            $('.mosaico-upload-buttons-container').removeClass('d-none');
                            removeLoader('formulario-30-anios');
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

        $('#btn-crop-mosaico-cover').click(function (){
            console.log("cortando imagen");
            let image_cover = container_cover.getElementsByTagName('img').item(0);
            cropper = new Cropper(image_cover, {
                aspectRatio: 2 / 1
            });

            $('.thumbnail-img-container').removeClass('d-none');
            let image_thumbnail = container_thumbnail.getElementsByTagName('img').item(0);
            cropper_thumbnail = new Cropper(image_thumbnail, {
                aspectRatio: 400 / 400
            })
        });

        $('#btn-confirm-mosaico-cover').click(function (){
            $(".mosaico-upload-buttons-container").addClass('d-none');
            let titulo = slugify($('#input-nombre-visitante').val());
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

    $("#check-test").click(function() {
        if ($("#input-agree").is(
            ":checked")) {
                alert("Check box in Checked");
            } else {
                alert("Check box is Unchecked");
            }
        });

});

function addLoaderTo(container) {
    $('#'+container).append('<div class="ma-loading"><div></div></div>');
}

function removeLoader(container) {
    $('#'+container).find('.ma-loading').remove();
}
