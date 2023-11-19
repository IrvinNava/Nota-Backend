$(function (){
    let body = $('body');
    let notyf = new Notyf();
    let element = document.querySelector('meta[name="csrf-token"]');
    let csrf = element && element.getAttribute("content");

    console.log('nucleos');

    $('#btn-confirmar-registro').click(function (){
            let form = $('#registro-modal-agregar');
            let id_nucleo = $("#id_nucleo").val();
            Cracknd.Ajax.SweetAlert('add', {
                title: "¿Desea agregar la galería?",
                button_color: "#6bad47",
                button_text: "Sí, agregar"
            }, '/administrador/add-galeria', form.serialize(), function (response) {
                if(response.status){
                    let id = response.data;
                    window.location = BASEURL + '/administrador/exposiciones/registros/nucleos/galerias/' + id_nucleo;
                } else
                    swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
            });
        });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let swichVisibilidad = $("#exposicion-swich-visibilidad");
    if (swichVisibilidad.length) {

        $("#label-exposicion-swich-visibilidad").click( function(){

            if (swichVisibilidad.is(':checked')) {
                swichVisibilidad.attr('checked', false);
                 swichVisibilidad.val(0);
            } else {
                swichVisibilidad.attr('checked', true);
                swichVisibilidad.val(1);
            }
        });

    }

    let tbl_exposiciones = $('#table-exposciones-digitales');
    if(tbl_exposiciones.length){
        let id = $('#id').val(); 
        let columns = [
            { data: "id", name: "id" },
            { data: "thumbnail", name: "thumbnail", searchable: false},
            { data: "titulo", name: "titulo" },
            { data: "visibilidad", name: "visibilidad" },
            { data: "updated_at", name: "updated_at" },
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_exposiciones = Cracknd.Datatables.render(tbl_exposiciones, '/administrador/galerias/get/'+id, Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-exposicion', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la galería seleccionada?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-galeria', { id: id }, function (response) {
                dt_exposiciones.ajax.reload();
        });
      });

        let modal_agregar_texto = $('#modal-agregar-texto');
        modal_agregar_texto.on('show.bs.modal', function (e) {
            let select_categorias = $('#texto-select-categorias');
            let select_subcategorias = $('#texto-select-subcategorias');
            Cracknd.Ajax.LoadOptions(select_categorias, '/administrador/api/get-options/categorias', null, select_categorias.data('id'));
            Cracknd.Ajax.LoadOptions(select_subcategorias, '/administrador/api/get-options/subcategorias', {id: select_categorias.data('id')});
        });

        modal_agregar_texto.on('hide.bs.modal', function (e) {
            let form = $('#texto-modal-agregar');
            form[0].reset();
        });

        $('#btn-confirmar-texto').click(function (){
            let form = $('#texto-modal-agregar');
            Cracknd.Ajax.SweetAlert('add', {
                title: "¿Desea agregar la información del nuevo texto?",
                button_color: "#6bad47",
                button_text: "Sí, agregar"
            }, '/administrador/add-texto', form.serialize(), function (response) {
                if(response.status){
                    let id = response.data;
                    window.location = BASEURL + '/administrador/textos/editar/' + id;
                } else
                    swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
            });
        });
    }

    let form = $('#form-registro');
    if(form.length){
        let coverUploader;
        let texto_id = $('#registro-input-id').val();
        let uploaders_selectors = [
            {selector: 'registro-input-cover', allowedFileTypes: ['image/png', 'image/jpeg']}
        ];

        uploaders_selectors.map((uploader_selector) => {
            let inputElement = document.getElementById(uploader_selector.selector);
            FilePond.registerPlugin(
                FilePondPluginFileValidateType
            );

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
                            formData.append('object_type', 'App\\Galerias');
                            formData.append('object_id', texto_id);
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
                            if(file.url.search('thumbnail') > 0 || file.url.search('cover') > 0){
                                container_selector = (file.url.search('thumbnail') > 0) ? '.thumbnail-img-container' : '.cover-img-container';
                                input_name = (file.url.search('thumbnail') > 0) ? 'thumbnail' : 'cover';
                                let image_container = $(container_selector);
                                image_container.html(`<img src="${file.url}" data-mime="${file.mime_type}"><input type="hidden" name="${input_name}" value="${file.url}">`);
                            } else {
                                $('.thumbnail-img-container').html(`<img src="${file.url}" data-mime="${file.mime_type}">`);
                                $('.cover-img-container').html(`<img src="${file.url}" data-mime="${file.mime_type}">`);
                            }
                            $('#registro-upload-buttons-container').removeClass('d-none');
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

        $('#btn-crop-registro-cover').click(function (){
            let image_cover = container_cover.getElementsByTagName('img').item(0);
            cropper = new Cropper(image_cover, {
                aspectRatio: 9/16
            });

            $('.thumbnail-img-container').removeClass('d-none');
            let image_thumbnail = container_thumbnail.getElementsByTagName('img').item(0);
            cropper_thumbnail = new Cropper(image_thumbnail, {
                aspectRatio: 3/4
            });
        });

        $('#btn-confirm-registro-cover').click(function (){
            let titulo = slugify($('#exposicion-input-titulo').val());
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

        let select_categorias = $('#texto-select-categorias');
        let select_subcategorias = $('#texto-select-subcategorias');
        let select_autores = $('#texto-select-autores');

        Cracknd.Ajax.LoadOptions(select_categorias, '/administrador/api/get-options/categorias', null, select_categorias.data('id'));
        Cracknd.Ajax.LoadOptions(select_subcategorias, '/administrador/api/get-options/subcategorias', {id: select_subcategorias.data('categoria')}, select_subcategorias.data('id'));
        Cracknd.Ajax.LoadOptions(select_autores, '/administrador/api/get-options/autores', null, select_autores.data('id'));

        let editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: Header,
                image: {
                    class: ImageTool,
                    config: {
                        additionalRequestHeaders: {
                            "X-CSRF-TOKEN": csrf
                        },
                        additionalRequestData: {
                            object_type: 'App\\Galerias',
                            object_id: 1,
                            uploader: 'editorjs'
                        },
                        field: 'upload_file',
                        endpoints: {
                            byFile: BASEURL + '/administrador/api/upload-file'
                        }
                    }
                },
                linkTool: {
                    class: LinkTool,
                    config: {
                        endpoint: BASEURL + '/administrador/api/fetch-metadata'
                    }
                },
                list: List,
                embed: {
                    class: Embed
                },
                paragraph: {
                    class: Paragraph,
                    inlineToolbar: true,
                },
                AnyButton: {
                    class: AnyButton,
                    inlineToolbar: false,
                    config:{
                        css:{
                            "btnColor": "btn--gray",
                        }
                    }
                },
                quote: Quote,
            },
            i18n: {
                messages:{
                    ui: {
                        "blockTunes": {
                            "toggler": {
                                "Click to tune": "Click para personalizar",
                                "or drag to move": "o mover"
                            },
                        },
                    },
                    "inlineToolbar": {
                        "converter": {
                            "Convert to": "Convertir a"
                        }
                    },
                    toolNames: {
                        "Text": "Texto",
                        "Heading": "Título",
                        "List": "Lista",
                        "Link": "Enlace",
                        "Bold": "Negrita",
                        "Italic": "Italica",
                    },
                    blockTunes: {
                        "delete": {
                            "Delete": "Eliminar"
                        },
                        "moveUp": {
                            "Move up": "Mover arriba"
                        },
                        "moveDown": {
                            "Move down": "Mover abajo"
                        }
                    },
                    tools: {
                        "AnyButton": {
                            'Button Text': 'Texto del botón',
                            'Link Url': 'Enlace',
                            'Set': "Confirmar",
                        }
                    }
                }
            },
            data: contenido
        });

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

        $('#texto-input-etiquetas').tagsinput({
            typeaheadjs: {
                displayKey: 'value',
                source: etiquetas.ttAdapter()
            }
        });

        $('#btn-actualizar-exposicion-digital').click(function (){
            editor.save().then((outputData) => {
                let form = $('#form-registro');
                let id_nucleo = $('#id_nucleo').val();
                let form_cover = $('#form-registro-cover');
                let contenido_markup = encodeURIComponent(JSON.stringify(clearDataMarkup(outputData)));
                Cracknd.Ajax.SweetAlert('update', {
                    title: "¿Desea actualizar la galería?",
                    button_color: "#fcce54",
                    button_text: "Sí, actualizar"
                 }, '/administrador/update-galeria', form.serialize() + `&${form_cover.serialize()}&descripcion=${contenido_markup}&id_nucleo=${id_nucleo}`, function (data) {
                    window.location = BASEURL + '/administrador/exposiciones/registros/nucleos/galerias/'+id_nucleo;
                });
            }).catch((error) => {
                console.log('Saving failed: ', error)
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

    function clearDataMarkup(data_markup){
        data_markup.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            data_markup.blocks[i].data.text = he.encode(content);
        });
        return data_markup;
    }

     let coverUploader;
        let registro_id = $('#registro-input-id').val();
        let uploaders_selectors = [
            {selector: 'registro-input-gallery', allowedFileTypes: ['image/png', 'image/jpeg']}
        ];

        uploaders_selectors.map((uploader_selector) => {
            let inputElement = document.getElementById(uploader_selector.selector);
            FilePond.registerPlugin(
                FilePondPluginFileValidateType
            );

            FilePond.setOptions(labels_es);
            let pond = FilePond.create(inputElement, {
                allowFileTypeValidation: true,
                allowProcess: false,
                allowRevert: false,
                acceptedFileTypes: uploader_selector.allowedFileTypes,
                server: {
                    url: BASEURL + '/administrador/api/upload-file-exposicion-galeria',
                    process: {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        ondata: (formData) => {
                            formData.append('object_type', 'App\\GaleriasMedia');
                            formData.append('object_id', registro_id);
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

                        $(".gallery-container .row").append(`<div class="col-md-3 mb-4"><a class="btn btn-sm btn-danger btn-drop-exposicion-digital-media" data-id="${file.id}" data-id-galeria="${file.id_galeria}" href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><img src="${file.url}" data-mime="${file.mime_type}"></div>`);
                        $('.registro-upload-buttons-container').removeClass('d-none');
                    break;
                    }
                } else
                notyf.error(response.message);
            });
        });

        body.on('click', '.btn-drop-exposicion-digital-media', function () {
            let id = $(this).data('id');
            let idGaleria = $(this).data('id-galeria');
            let deletebtn = $(this);
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-timeline-media', { id: id }, function (response) {
                deletebtn.parent().remove();
            });
        });

    //btn-confirmar-exposicion

        

        

});
