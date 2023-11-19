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
});
