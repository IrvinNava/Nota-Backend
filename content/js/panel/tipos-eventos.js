$(function (){
    let body = $('body');
    let notyf = new Notyf();

    let tbl_tiposEventos = $('#table-tipos-eventos');
    if(tbl_tiposEventos.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre"},
            { data: "updated_at", name: "updated_at", searchable: false},
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_tipoEventos = Cracknd.Datatables.render(tbl_tiposEventos, '/administrador/get-registros-eventos', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-tipo-evento', function () {
            let id = $(this).data('id');
            console.log('id:' + id);
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-registro-evento', { id: id }, function (response) {
                dt_tipoEventos.ajax.reload();
            });
        });
    }

    body.on('click', '.btn-editar-tipo-evento', function () {
        let id = $(this).data('id');
        let nombre = $(this).data('nombre');
        $("#input-actualizar-tipo-evento").val(nombre);
        $("#input-actualizar-tipo-evento-id").val(id);
    });

    $('#btn-confirmar-tipo-evento').click(function (){
        let form = $('#registro-modal-agregar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea agregar el nuevo registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/add-registro-evento', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/eventos';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });

    $('#btn-actualizar-tipo-evento').click(function (){
        let form = $('#registro-modal-actualizar');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea actualizar el registro?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/update-registro-evento', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/eventos';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });
});