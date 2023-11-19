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

    let tbl_videos = $('#table-videos');
    if(tbl_videos.length){
        let columns = [
            { data: "id", name: "id" },
            { data: "thumbnail", name: "thumbnail", searchable: false},
            { data: "titulo", name: "titulo" },
            { data: "status", name: "status"},
            { data: "fecha_lanzamiento", name: "fecha_lanzamiento" },
            { data: "autores", name: "autores" },
            { data: "updated_at", name: "updated_at" },
            { data: "acciones", name: "acciones", searchable: false},
        ];
        let dt_videos = Cracknd.Datatables.render(tbl_videos, '/administrador/get-videos', Cracknd.Datatables.options(), null, columns);
    }
});