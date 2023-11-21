$(document).ready( function(){
    console.log("speakers");

    $("#discardSpeaker, .delete-speaker-item").click( function(){
        Swal.fire({
            title: 'Are you sure --?',
            text: "This speaker will be deleted",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#a400fc',
            cancelButtonColor: '#a9bbc7',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'That speaker has been removed.',
                    'success'
                )
            }
        })
    });

    $("#searchByCategory").click(function(){
        const arregloCategorias = [];
        $("#accordionPanelsStayOpenExample .form-check-input").each( function( i ) {
            if($(this).is(':checked')){
                arregloCategorias.push($(this).val());
            }
        });
        window.location = BASEURL + '/talent/' +'categories='+ arregloCategorias
    });

});
