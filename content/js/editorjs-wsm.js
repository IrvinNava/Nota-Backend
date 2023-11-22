$(function () {
    let body = $('body');

    let preview_button = $('#preview-content-button');
    let editor_container = $('#editorjs');
    if (preview_button.length) {
        preview_button.click( function(){

            console.log('Preview');
            if (editor_container.hasClass('dark-preview')) {
                editor_container.removeClass('dark-preview');
                $('#preview-icon').removeClass('icon-eye-slash').addClass('icon-eye');
                preview_button.removeClass('dark-mode');
            } else {
                editor_container.addClass('dark-preview');
                $('#preview-icon').removeClass('icon-eye').addClass('icon-eye-slash');
                preview_button.addClass('dark-mode');
            }

        });
    }
});
