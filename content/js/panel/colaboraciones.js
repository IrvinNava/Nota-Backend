$(function (){
    let body = $('body');
    let notyf = new Notyf();

    let tbl_colaboraciones = $('#table-colaboraciones');
    if(tbl_colaboraciones.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "titulo", name: "titulo"},
            { data: "updated_at", name: "updated_at", searchable: false},
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_colaboraciones = Cracknd.Datatables.render(tbl_colaboraciones, '/administrador/get-registros-colaboraciones', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-colaboracion', function () {
            let id = $(this).data('id');
            console.log('id:' + id);
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-registro-colaboracion', { id: id }, function (response) {
                dt_colaboraciones.ajax.reload();
            });
        });
    }

    body.on('click', '.btn-editar-colaboracion', function () {
        let id = $(this).data('id');
        let nombre = $(this).data('nombre');
        $("#input-actualizar-colaboracion").val(nombre);
        $("#input-actualizar-colaboracion-id").val(id);
    });

    $('#btn-guardar-colaboracion').click(function (){
        let form = $('#registro-modal-agregar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea agregar el nuevo registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/add-registro-colaboracion', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/colaboraciones';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });

    $('#btn-actualizar-colaboracion').click(function (){
        let form = $('#registro-modal-actualizar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea actualizar el registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/update-registro-colaboracion', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/colaboraciones';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });
});