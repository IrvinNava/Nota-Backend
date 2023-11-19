jQuery(document).ready( function(){

    jQuery(".print-btn").click( function(){
        window.print();
        return false;
    });

    let exhibitionDescriptionP = jQuery('.exhibition-description-p');
    if (exhibitionDescriptionP.length) {
        exhibitionDescriptionP.collapser({
            mode: 'lines',
            truncate: 11,  // Shows only 2 lines
            ellipsis: ' ... ',
            showText: 'Seguir leyendo...',
            hideText: 'Ver menos',
        });
    }

});
