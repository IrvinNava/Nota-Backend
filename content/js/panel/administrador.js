$(function () {
    let body = $('body');
    let notyf = new Notyf();
    let element = document.querySelector('meta[name="csrf-token"]');
    let csrf = element && element.getAttribute("content");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let tbl_usuarios = $('#table-usuarios');
    if(tbl_usuarios.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre"},
            { data: "email", name: "titulo" },
            { data: "roles", name: "roles"},
            { data: "last_login", name: "last_login", searchable: false },
            { data: "updated_at", name: "updated_at", searchable: false },
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_usuarios = Cracknd.Datatables.render(tbl_usuarios, '/administrador/get-usuarios', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-usuario', function () {
            let id = $(this).data('id');
            Cracknd.Ajax.SweetAlert('drop', {
                title: "¿Desea eliminar el usuario seleccionado?",
                button_color: "#e74c3c",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-usuario', {id: id}, function (data) {
                dt_usuarios.ajax.reload();
            });
        });
    }

    $('#btn-guardar-usuario').click(function () {
        let form = $('#form-usuario');
        form.validate({
            rules: {
                password: {
                    required: true,
                    minlength: 6
                },
                password_repeat: {
                    equalTo: "#usuario-password"
                }
            },
        });
        if(form.valid()){
            $.ajax({
                url: BASEURL + '/administrador/add-usuario',
                type: 'POST',
                data: form.serialize(),
                beforeSend: function () {
                    $('button.confirm').html('<i class="fa fa-cog fa-spin"></i>&nbsp;Guardando...').attr('disabled', 'disabled');
                },
                success: function(response) {
                    let data = $.parseJSON(response);
                    if(data.status){
                        $('button.confirm').html('<i class="fa fa-save"></i> GUARDAR USUARIO').removeAttr('disabled');
                        swal({
                            title:"Finalizado",
                            text: data.message,
                            type: "success",
                            showCancelButton: false
                        },
                        function(isConfirm){
                            if(isConfirm)
                                window.location = BASEURL + '/administrador/usuarios';
                        });
                    } else {
                        swal({"html": true, "title": "Espera, aún falta información importante", "text": data.message, "type":"error"});
                        $('button.confirm').html('<i class="fa fa-save"></i> GUARDAR USUARIO').removeAttr('disabled');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    swal({"html": true, "title": "Error", "text": errorThrown, "type":"error"});
                    $('button.confirm').html('<i class="fa fa-save"></i> GUARDAR USUARIO').removeAttr('disabled');
                }
            });
        }
    });

    $('#btn-actualizar-usuario').click(function () {
        let form = $('#form-usuario');
        form.validate({
            rules: {
                password: {
                    minlength: 6
                },
                password_repeat: {
                    equalTo: "#usuario-password"
                }
            },
        });
        if(form.valid()){
            $.ajax({
                url: BASEURL + '/administrador/update-usuario',
                type: 'POST',
                data: form.serialize(),
                beforeSend: function () {
                    $('#btn-actualizar-usuario').html('<i class="fa fa-cog fa-spin"></i>&nbsp;Guardando...').attr('disabled', 'disabled');
                },
                success: function(response) {
                    let data = $.parseJSON(response);
                    if(data.status){
                        $('#btn-actualizar-usuario').html('<i class="fa fa-save"></i> ACTUALIZAR USUARIO').removeAttr('disabled');
                        swal({
                            title:"Finalizado",
                            text: data.message,
                            type: "success",
                            showCancelButton: false
                        },
                        function(isConfirm){
                            if(isConfirm) {
                                window.location = BASEURL + '/administrador/usuarios';
                            }
                        });
                    } else {
                        swal({"html": true, "title": "Espera, aún falta información importante", "text": data.message, "type":"error"});
                        $('#btn-actualizar-usuario').html('<i class="fa fa-save"></i> ACTUALIZAR USUARIO').removeAttr('disabled');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    swal({"html": true, "title": "Error", "text": errorThrown, "type":"error"});
                    $('#btn-actualizar-usuario').html('<i class="fa fa-save"></i> ACTUALIZAR USUARIO').removeAttr('disabled');
                }
            });
        }
    });

    let data_table = $('.data-table');
    if(data_table.length){
        data_table.DataTable();
    }

});
