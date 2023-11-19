<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
    <div class="navbar-logo">

        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{ url('home') }}">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="{{ asset('img/panelNota/nota-plus-logo.png') }}" alt="phoenix" height="60" />
                    <p class="logo-text ms-2 d-none d-sm-block"></p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover" style="width: 100%; flex-direction: row-reverse;">
            <li class="nav-item dropdown">
                <a class="nav-link btn btn-sm nota-add-btn px-3 lh-1 text-light me-2" href="../add-proposal/" role="button" aria-expanded="false">
                    <span class="uil fs-0 me-2 uil-plus-circle"></span>Create proposal
                </a>
            </li>

        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="{{ asset('img/panelNota/team/avatar-placeholder.webp') }}" alt="" />

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="{{ asset('img/panelNota/team/avatar-placeholder.webp') }}" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Ingrid Harb</h6>
                        </div>
                    </div>
                    <div class="overflow-auto scrollbar">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="../in-construction/"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="../home/"><span class="me-2 text-900" data-feather="grid"></span>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="../in-construction/"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <div class="p-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="../login/"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;

    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTopNew = document.querySelector('#navbarTopNew');
    var navbarSlim = document.querySelector('#navbarSlim');
    var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');
    var navbarCombo = document.querySelector('#navbarCombo');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');
    navbarCombo.removeAttribute('style');
    navbarVertical.removeAttribute('style');
    documentElement.classList.add('navbar-combo')
</script>
