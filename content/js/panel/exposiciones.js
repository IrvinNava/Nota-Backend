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

    let tbl_timeline = $('#table-timeline-articulos');
    if(tbl_timeline.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "cover", name: "cover", searchable: false},
            { data: "titulo", name: "titulo" },
            { data: "status", name: "status"},
            { data: "fecha", name: "fecha" },
            { data: "updated_at", name: "updated_at" , searchable: false},
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_timeline = Cracknd.Datatables.render(tbl_timeline, '/administrador/get-registros-timeline', Cracknd.Datatables.options(), null, columns);



        $('#btn-confirmar-registro').click(function (){
            let form = $('#registro-modal-agregar');
            Cracknd.Ajax.SweetAlert('add', {
                title: "¿Desea agregar el nuevo registro al timeline?",
                button_color: "#6bad47",
                button_text: "Sí, agregar"
            }, '/administrador/add-registro-timeline', form.serialize(), function (response) {
                if(response.status){
                    let id = response.data;
                    window.location = BASEURL + '/administrador/timeline/editar/' + id;
                } else
                    swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
            });
        });

        body.on('click', '.btn-drop-registro', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-registro-timeline', { id: id }, function (response) {
                dt_timeline.ajax.reload();
            });
        });
    }
    let form = $('#form-registro');
    if(form.length){

        let select_autores = $('#time-select-autores');
        let select_colaboraciones = $('#time-select-colaboradores');

        Cracknd.Ajax.LoadOptions(select_autores, '/administrador/api/get-options/autores', null, select_autores.data('id'));
        Cracknd.Ajax.LoadOptions(select_colaboraciones, '/administrador/api/get-options/colaboraciones', null, select_colaboraciones.data('id'));

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
                            object_type: 'App\\Timeline',
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

        $('#time-input-etiquetas').tagsinput({
            typeaheadjs: {
                displayKey: 'value',
                source: etiquetas.ttAdapter()
            }
        });

        let coverUploader;
        let registro_id = $('#registro-input-id').val();
        let uploaders_selectors = [
            {selector: 'registro-input-cover', allowedFileTypes: ['image/png', 'image/jpeg']}
        ];

        uploaders_selectors.map((uploader_selector) => {
            let inputElement = document.getElementById(uploader_selector.selector);
            FilePond.registerPlugin(
                FilePondPluginFileValidateType,
                // previews dropped images
                FilePondPluginImagePreview
            );

            FilePond.setOptions(labels_es);
            let pond = FilePond.create(inputElement, {
                allowFileTypeValidation: true,
                allowProcess: false,
                allowRevert: false,
                allowImagePreview: false,
                acceptedFileTypes: uploader_selector.allowedFileTypes,
                server: {
                    url: BASEURL + '/administrador/api/upload-file',
                    process: {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf
                        },
                        ondata: (formData) => {
                            formData.append('object_type', 'App\\Timeline');
                            formData.append('object_id', registro_id);
                            return formData;
                        }
                    }
                }
            });

            // Logos Exposiciones
            let logosPond = FilePond.create(document.getElementById('logosFilepond'), {
                allowImagePreview: true,
                imagePreviewMaxHeight: 180,
            });

            // Galeria Exposiciones
            let galleryPond = FilePond.create(document.getElementById('galeriaFilepond'), {
                allowImagePreview: true,
                imagePreviewMaxHeight: 180,
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
                            $('.registro-upload-buttons-container').removeClass('d-none');
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

        $('#btn-confirm-registro-cover').click(function (){
            console.log('confirmando corte');
            $(".registro-upload-buttons-container").addClass('d-none');
            let titulo = slugify($('#registro-input-titulo').val());
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

    function clearDataMarkup(data_markup){
        data_markup.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            data_markup.blocks[i].data.text = he.encode(content);
        });
        return data_markup;
    }

    // Galería Logos de Exposiciónote



});
