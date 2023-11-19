<div class="SignIn">
    <div class="SignIn__btn_close"><a href="#"></a></div>
    <div class="SignIn__close"></div>
    <div class="SignIn__container">
        <div class="SignIn__header">
            <img src="https://f5c4537feeb2b644adaf-b9c0667778661278083bed3d7c96b2f8.ssl.cf1.rackcdn.com/static/icon-logo/v2-logo-amparo-black@2x.png" alt="">
        </div>
        <div class="SignIn__content">
            <p>{{ trans('layout.modal-login-titulo') }}</p>
            <a href="{{ url('verify') }}" class="SignIn__btn">facebook</a>
            <div class="SignIn__footer">
                <p>{{ trans('layout.modal-login-copy1') }} <a href="{{ url('politicas-de-privacidad') }}">{{ trans('layout.modal-login-copy2') }}</a></p>
            </div>
        </div>
    </div>
</div>