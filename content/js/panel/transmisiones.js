$(function (){
    let body = $('body');

    $('#youtube-url-input').change( function(){
        $('#facebook-code-input').val('');
        console.log("SOmething new on youtube input");
    });

    $('#facebook-code-input').change( function(){
        $('#youtube-url-input').val('');
    });

});
