$(function (){
    let body = $('body');
    let notyf = new Notyf();

    let tbl_eventos = $('#table-eventos');
    if(tbl_eventos.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre"},
            { data: "updated_at", name: "updated_at", searchable: false},
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_eventos = Cracknd.Datatables.render(tbl_eventos, '/administrador/get-eventos', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-evento', function () {
            let id = $(this).data('id');
            console.log('id:' + id);
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-evento', { id: id }, function (response) {
                dt_eventos.ajax.reload();
            });
        });
    }

    body.on('click', '.btn-editar-evento', function () {
        let id = $(this).data('id');
        let nombre = $(this).data('nombre');
        $("#input-actualizar-nombre-evento").val(nombre);
        $("#input-actualizar-nombre-evento-id").val(id);
    });

    $('#btn-confirmar-evento').click(function (){
        let form = $('#registro-modal-agregar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea agregar el nuevo registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/add-evento', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/gestion-eventos';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });

    $('#btn-actualizar-evento').click(function (){
        let form = $('#registro-modal-actualizar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea actualizar el registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/update-evento', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/gestion-eventos';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });
});