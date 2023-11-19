$(document).ready( function(){
    console.log("Proposals");

    $("#discardProposal, .delete-proposal-item").click( function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "This proposal will be deleted",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#a400fc',
            cancelButtonColor: '#a9bbc7',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'That proposal has been removed.',
                    'success'
                )
            }
        })
    });
});
