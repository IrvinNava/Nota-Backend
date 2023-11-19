<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.header')
<body data-sidebar="menuSpeakers">
    <main class="main" id="top">
        <div class="container-fluid px-0">

            <div class="container-fluid px-0">
                <div class="container">
                    <div class="row flex-center min-vh-100 py-5">
                        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="<?= url('') ?>">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="{{ asset('img/panelNota/nota-plus-logo.png') }}" alt="phoenix" height="100" />
                            </div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign In</h3>
                            <p class="text-700">Get access to your account</p>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Email address</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input" id="email" name="email" type="email" placeholder="name@example.com" /><span class="fas fa-user text-900 fs--1 form-icon"></span>
                            </div>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input" id="password" name="password" type="password" placeholder="Password" /><span class="fas fa-key text-900 fs--1 form-icon"></span>
                            </div>
                        </div>
                        <!-- <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                        <div class="form-check mb-0">
                        <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                        <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                    </div>
                </div>
                <div class="col-auto"><a class="fs--1 fw-semi-bold" href="../../../pages/authentication/simple/forgot-password.html">Forgot Password?</a></div>
            </div> -->
            <a href="<?= url('/home') ?>" class="btn btn-primary w-100 mb-3">Sign In</a>
            <!-- <div class="text-center"><a class="fs--1 fw-bold" href="../../../pages/authentication/simple/sign-up.html">Create an account</a></div> -->
        </div>
    </div>
</div>
</div>
<script>
var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
var navbarTop = document.querySelector('.navbar-top');
if (navbarTopStyle === 'darker') {
    navbarTop.classList.add('navbar-darker');
}

var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
var navbarVertical = document.querySelector('.navbar-vertical');
if (navbarVertical && navbarVerticalStyle === 'darker') {
    navbarVertical.classList.add('navbar-darker');
}
</script>

</main>

<!-- assets -->
@include('layout.assets')
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
