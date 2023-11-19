<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
    var navbarStyle = window.config.config.phoenixNavbarStyle;
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
    }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content pt-0">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Home</p>
                    <hr class="navbar-vertical-line" />
                    <!-- parent pages-->
                    <div class="nav-item-wrapper">
                        <a id="menuDashboard" class="nav-link label-1" href="{{ url('home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="grid"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Speakers</p>
                    <hr class="navbar-vertical-line" />
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuSpeakers" class="nav-link label-1" href="{{ url('speakers') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="users"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Speakers</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuNewSpeaker" class="nav-link label-1" href="{{ url('add.speaker') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="plus-circle"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">New</span></span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Proposals</p>
                    <hr class="navbar-vertical-line" />
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuProposals" class="nav-link label-1" href="{{ url('proposals') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="clipboard"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Generated</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuRequestedProposals" class="nav-link label-1" href="{{ url('proposals-requested') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="monitor"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Requested</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuNewProposal" class="nav-link label-1" href="{{ url('add-proposal') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="plus-circle"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">New</span></span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Experiences</p>
                    <hr class="navbar-vertical-line" />
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuExperiences" class="nav-link label-1" href="{{ url('experiences') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="box"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Experiences</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuNewExperience" class="nav-link label-1" href="{{ url('add-experience') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="plus-circle"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">New</span></span>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Collections</p>
                    <hr class="navbar-vertical-line" />
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuCollections" class="nav-link label-1" href="{{ url('collections') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="folder"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Collections</span></span>
                            </div>
                        </a>
                    </div>
                    <!-- item-->
                    <div class="nav-item-wrapper">
                        <a id="menuNewCollection" class="nav-link label-1" href="{{ url('add-collection') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="plus-circle"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">New</span></span>
                            </div>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
    </div>
</nav>
