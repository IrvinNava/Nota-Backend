$(function (){
    let body = $('body');
    let notyf = new Notyf();

    let tbl_ponentes = $('#table-ponentes');
    if(tbl_ponentes.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre"},
            { data: "profesion", name: "profesion", searchable: false},
            { data: "updated_at", name: "updated_at", searchable: false},
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_ponentes = Cracknd.Datatables.render(tbl_ponentes, '/administrador/get-registros-ponentes', Cracknd.Datatables.options(), null, columns);

        body.on('click', '.btn-drop-ponente', function () {
            let id = $(this).data('id');
            console.log('id:' + id);
            Cracknd.Ajax.SweetAlert('delete', {
                title: "¿Desea eliminar la información del registro seleccionado?",
                button_color: "#dc3545",
                button_text: "Sí, eliminar"
            }, '/administrador/drop-registro-ponente', { id: id }, function (response) {
                dt_ponentes.ajax.reload();
            });
        });
    }

    $('#btn-agregar-ponente').click(function (){
        let form = $('#form-ponente');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea agregar el nuevo registro de ponente?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/add-registro-ponente', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/ponentes';
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });

    $('#btn-actualizar-ponente').click(function (){
        let form = $('#form-actualizar-ponente');
        Cracknd.Ajax.SweetAlert('add', {
            title: "¿Desea actualizar el registro de ponente?",
            button_color: "#6bad47",
            button_text: "Sí, agregar"
        }, '/administrador/update-registro-ponente', form.serialize(), function (response) {
            if(response.status){
                let id = response.data;
                window.location = BASEURL + '/administrador/ponentes/editar/' + id;
            } else
                swal({"html": true, "title": "Espera, ¡algo ocurrió!", "text": response.message, "type":"error"});
        });
    });
});