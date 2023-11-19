$(document).ready(function () {

    setTimeout( function () {
        $('.load-layer').fadeOut();
    },500);

    var body = $('body');

    let collectionsFilters = $('.collections-filters');
    if (collectionsFilters.length) {
    
        // Scroll en listas
        $('.checkbox-list').slimScroll({
            height: '260px'
        });

        $('.btn-filter').click(function () {
            $('.btn-filter').removeClass('filter-active');
            $(this).addClass('filter-active')
        });

        $('#btnAllCategories').click(function () {
            $('.checkbox-list').find('.form-check-input').prop('checked', false);
        });
    }

    let checkboxList = $('.checkbox-list');
    if (checkboxList.length) {
    }

});