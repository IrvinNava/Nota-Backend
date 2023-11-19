$(function (){
    let body = $('body');
    let notyf = new Notyf();
    let element = document.querySelector('meta[name="csrf-token"]');
    let csrf = element && element.getAttribute("content");


    // EditorJS
    let form = $('#form-registro');
    if(form.length){

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


        $('#btn-actualizar-registro-timeline').click(function (){
            console.log('click --');
            editor.save().then((outputData) => {
                let form = $('#form-registro');
                let form_cover = $('#form-registro-cover');
                let contenido_markup = encodeURIComponent(JSON.stringify(clearDataMarkup(outputData)));
                Cracknd.Ajax.SweetAlert('update', {
                    title: "¿Desea actualizar la información del registro?",
                    button_color: "#fcce54",
                    button_text: "Sí, actualizar"
                }, '/administrador/update-registro-timeline', form.serialize() + `&${form_cover.serialize()}&contenido_markup=${contenido_markup}`, function (data) {
                    window.location = BASEURL + '/administrador/timeline';
                });
            }).catch((error) => {
                console.log('Saving failed: ', error)
            });
        });
    }

});
