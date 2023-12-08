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

                        $(".gallery-container .row").append(`<div class="row g-2"><a class="btn btn-sm btn-danger btn-drop-timeline-media" data-id="${file.id}" data-id-galeria="${file.id_galeria}" href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><input type="hidden" id="speaker_photos" name="speaker_photos" class="hidden" value="${file.url}"><img src="${file.url}" data-mime="${file.mime_type}"></div>`);
                        $('.registro-upload-buttons-container').removeClass('d-none');
                    break;
                    }
                } else
                notyf.error(response.message);
            });
        });

        $('#saveSendProposal').click(function(){
            console.log('send email');
            let button = $('#saveProposalDraft');
            let form = $('#form-registro');
            if(form.valid()){
                var description = tinymce.get("proposal_message").getContent();
                var categorias = $('#speaker_categories').select2('val');
                var ids = [];
                $($("#speakersAdded").find('.speaker-item')).each(function() {
                  console.log($( this ).data('id'));
                    ids.push($( this ).data('id'));
                    console.log(ids);
                    $('#speakersList').val(ids);
                });

                var custom = $('#speakersList').val();

                $.ajax({
                    url: BASEURL + '/save-proposal',
                    type: 'POST',
                    data: form.serialize() + '&send=true' + '&description=' + description + '&categorias=' + categorias + '&custom=' + custom ,
                    beforeSend: function () {
                        console.log("before send");
                        $('#saveSendProposal').html('<i class="fa fa-cog fa-spin"></i>&nbsp;Saving...').attr('disabled', 'disabled');
                    },
                    success: function(response) {
                         console.log("success");
                        let data = $.parseJSON(response);
                        console.log(data);
                        if(data.status){
                            $('#saveSendProposal').html('<i class="me-1 fs--1" data-feather="check"></i> Save and Send').removeAttr('disabled');
                            swal({
                                title:"Finished",
                                text: data.message,
                                type: "success",
                                showCancelButton: false,
                            },
                            function(isConfirm){
                                if(isConfirm)
                                    window.location = BASEURL + '/proposals';
                            });
                        } else {
                            swal({"html": true, "title": "Wait!, there's some missing data", "text": data.message, "type":"error"});
                            $('button.confirm').html('<i class="me-1 fs--1" data-feather="check"> Publish Speaker').removeAttr('disabled');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        swal({"html": true, "title": "Error", "text": errorThrown, "type":"error"});
                        $('button.confirm').html('<i class="fa fa-save"></i> Publish Speaker').removeAttr('disabled');
                    }
                });
            }
        });


        $('#saveProposalDraft').click(function(){
            console.log('only save');
            let button = $('#saveProposalDraft');
            let form = $('#form-registro');
            if(form.valid()){
                var description = tinymce.get("proposal_message").getContent();
                var categorias = $('#speaker_categories').select2('val');
                var ids = [];
                $($("#speakersAdded").find('.speaker-item')).each(function() {
                  console.log($( this ).data('id'));
                    ids.push($( this ).data('id'));
                    console.log(ids);
                    $('#speakersList').val(ids);
                });

                var custom = $('#speakersList').val();

                $.ajax({
                    url: BASEURL + '/save-proposal',
                    type: 'POST',
                    data: form.serialize() + '&description=' + description + '&categorias=' + categorias + '&custom=' + custom ,
                    beforeSend: function () {
                        console.log("before send");
                        $('#saveProposalDraft').html('<i class="fa fa-cog fa-spin"></i>&nbsp;Saving...').attr('disabled', 'disabled');
                    },
                    success: function(response) {
                         console.log("success");
                        let data = $.parseJSON(response);
                        console.log(data);
                        if(data.status){
                            $('#saveProposalDraft').html('<i class="me-1 fs--1" data-feather="check"></i> Publish Speaker').removeAttr('disabled');
                            swal({
                                title:"Finished",
                                text: data.message,
                                type: "success",
                                showCancelButton: false,
                            },
                            function(isConfirm){
                                if(isConfirm)
                                    window.location = BASEURL + '/proposals';
                            });
                        } else {
                            swal({"html": true, "title": "Wait!, there's some missing data", "text": data.message, "type":"error"});
                            $('button.confirm').html('<i class="me-1 fs--1" data-feather="check"> Publish Speaker').removeAttr('disabled');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        swal({"html": true, "title": "Error", "text": errorThrown, "type":"error"});
                        $('button.confirm').html('<i class="fa fa-save"></i> Publish Speaker').removeAttr('disabled');
                    }
                });
            }
        });

        body.on('click', '.delete-proposal-item', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('drop', {
                title: "Delete Item?",
                button_color: "#e74c3c",
                button_text: "Yes, delete"
            }, '/speaker/drop', {id: id}, function (response) {
                window.location = BASEURL + '/proposals';
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

});
