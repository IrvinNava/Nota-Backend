let $=jQuery.noConflict();

$(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#btn-login').click(function (){
        let button = $(this);
        let form = $('#form-login');
        doLogin(button, form);
    });

    $('.input-login').keypress(function (e) {
        if (e.which === 13) {
            let form = $('#form-login');
            let button = $('#btn-login');
            doLogin(button, form);
        }
    });

    function doLogin(button, form){
        form.validate();
        if(form.valid()){
            $.ajax({
                url: BASEURL + '/login/verify',
                type: 'POST',
                data: form.serialize(),
                beforeSend: function () {
                   
                    button.html('<i class="fa fa-cog fa-spin"></i> Cargando').attr('disabled', 'disabled').addClass('disabled');
                },
                success: function(response) {
                    button.html('<i class="fa fa-sign-in-alt"></i> INICIAR SESIÓN').removeAttr('disabled').removeClass('disabled');
                    let data = $.parseJSON(response);
                    if(data.status){
                        window.location = BASEURL;
                    } else {
                        swal({"html": true, "title": "Error", "text": data.message, "type":"error"});
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    swal({"html": true, "title": "Error", "text": errorThrown, "type":"error"});
                    button.html('<i class="fa fa-sign-in-alt"></i> INICIAR SESIÓN').removeAttr('disabled').removeClass('disabled');
                }
            });
        }
    }
});
