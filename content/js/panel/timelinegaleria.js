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


    function clearDataMarkup(data_markup){
        data_markup.blocks.map((block, i) => {
            let content = $('<textarea>').html(block.data.text).text();
            data_markup.blocks[i].data.text = he.encode(content);
        });
        return data_markup;
    }

    // EditorJS
    let form = $('#form-registro');
    if(form.length){
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
                            formData.append('object_type', 'App\\TimelineMedia');
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

                        $(".gallery-container .row").append(`<div class="row g-2"><a class="btn btn-sm btn-danger btn-drop-timeline-media" data-id="${file.id}" data-id-galeria="${file.id_galeria}" href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><img src="${file.url}" data-mime="${file.mime_type}"></div>`);
                        $('.registro-upload-buttons-container').removeClass('d-none');
                    break;
                    }
                } else
                notyf.error(response.message);
            });
        });


        $("#btn-actualizar-registro-timeline").click(function(){
        console.log('click --');
            editor.save().then((outputData) => {
                let form = $('#form-registro');
                let contenido_markup = encodeURIComponent(JSON.stringify(clearDataMarkup(outputData)));
                Cracknd.Ajax.SweetAlert('update', {
                    title: "¿Desea actualizar la información del registro?",
                    button_color: "#fcce54",
                    button_text: "Sí, actualizar"
                }, '/administrador/update-galeria', form.serialize() + `&contenido_markup=${contenido_markup}`, function (data) {
                    window.location = BASEURL + '/administrador/timeline';
                });
            }).catch((error) => {
                console.log('Saving failed: ', error)
            });
        });

        body.on('click', '.btn-drop-timeline-media', function () {
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
    }

});
