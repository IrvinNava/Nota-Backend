<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuProposals">
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- Topbar -->
            @include('layout.topbar')

            <div class="content px-0 pt-9">
                <div class="row g-0">
                    <div class="col-12 col-lg-8 px-0 bg-soft">
                        <div class="px-4 px-lg-6 pt-6 pb-9">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('/proposals') }}">Proposals</a></li>
                                    <li class="breadcrumb-item active">{{ $proposal->name }}</li>
                                </ol>
                            </nav>
                            <div class="mt-4 mb-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="text-black fw-bold mb-2">Proposal to <span class="nota-text">{{ $proposal->name }}</span></h2>
                                    <div class="font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="../proposal-edit/{{ $proposal->id }}"><i class="fas fa-pen me-2"></i>Edit</a>
                                            <a id="discardProposal" class="dropdown-item text-danger" href="javascript:void()"><i class="fas fa-trash me-1"></i> Delete</a></div>
                                    </div>
                                </div>
                                <span class="badge badge-phoenix badge-phoenix-success">Sended<span class="ms-1 uil uil-check-circle"></span></span>
                                <!-- <span class="badge badge-phoenix badge-phoenix-info">Created<span class="ms-1 uil uil-stopwatch"></span></span> -->
                            </div>
                            <div class="row gx-0 gx-sm-5 gy-8 mb-8">
                                <div class="col-12 col-xl-5 col-xxl-4 pe-xl-0">
                                    <div class="mb-0">
                                        <div class="row gx-0 gx-sm-7">
                                            <div class="col-12 col-sm-auto">
                                                <h4 class="text-1100 mb-4">Details:</h4>
                                                <table class="lh-sm mb-4 mb-sm-0 mb-xl-4 table-borderless table table-hover proposal-details-table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="align-top py-1">
                                                                <div class="d-flex"><span class="fa-solid fa-user me-2 text-700 fs--1"></span>
                                                                    <h5 class="text-900 mb-0 text-nowrap">Client: </h5>
                                                                </div>
                                                            </td>
                                                            <td class="ps-1 py-1">{{ $proposal->client_name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1">
                                                                <div class="d-flex"><span class="far fa-envelope me-2 text-700 fs--1"></span>
                                                                    <h5 class="text-900 mb-0 text-nowrap">Email: </h5>
                                                                </div>
                                                            </td>
                                                            <td class="ps-1 py-1"><a href="mailto:aida_talavera@gmail.com">{{ $proposal->client_email }}</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1 pe-2">
                                                                <div class="d-flex"><span class="fa-solid fa-link me-2 text-700 fs--1"></span>
                                                                    <h5 class="text-900 mb-0 text-nowrap">Public link: </h5>
                                                                </div>
                                                            </td>
                                                            <td class="ps-1 py-1"><a class="" href="#!">See proposal <span class="fa-solid fa-chevron-right me-2 fs--2"></span></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="align-top py-1">
                                                                <div class="d-flex"><span class="fas fa-calendar-alt me-2 text-700 fs--1"></span>
                                                                    <h5 class="text-900 mb-0 text-nowrap">Date: </h5>
                                                                </div>
                                                            </td>
                                                            <td class="ps-1 py-1">{{ $proposal->created_at }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-lg-8 col-xl-7">
                                    <h4 class="text-1100 mb-4">Categories & Topics</h4>
                                    <? $arregloCategorias = explode(",", $proposal->categories); ?>
                                    @foreach ($arregloCategorias as $cat)
                                    <span class="badge badge-tag me-2 mb-1">Category: <?= \App\Categories::getName($cat) ?></span>
                                    @endforeach

                                    <? $arregloTopics = explode(",", $proposal->topics); ?>
                                    @foreach ($arregloTopics as $top)
                                    <span class="badge badge-tag me-2 mb-1">Topics: <?= \App\Topics::getName($top) ?></span>
                                    @endforeach
                                </div>
                                <div class="col-12">
                                    <h4 class="text-1100 mb-4">Speakers in proposal:</h4>
                                    <!-- Speakers -->
                                    <div class="row g-2 speakers-list">
                                        

                                        <? $arreglo_total = array(); ?>

                                        <? $arregloTopics = explode(",", $proposal->topics); ?>
                                        @foreach ($arregloTopics as $top)
                                            <? $resultados = \App\SpeakerTopics::where('id_topic', $top)->get() ?>
                                            @foreach ($resultados as $res)
                                                <?
                                                    if(!in_array($res->id_speaker, $arreglo_total, true)){
                                                        array_push($arreglo_total, $res->id_speaker);
                                                    }
                                                ?>
                                                <!--<div class="col-4 col-md-2">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(<?= \App\Speakers::getPicture($res->id_speaker) ?>)"></div>
                                                        <span class="badge badge-tag me-2 mb-1">Topic: <?= \App\Topics::getName($res->id_topic) ?></span>
                                                        <p><?= \App\Speakers::getNombre($res->id_speaker) ?></p>
                                                    </div>
                                                </div>-->
                                            @endforeach
                                        @endforeach

                                        <? $arregloCategories = explode(",", $proposal->categories); ?>
                                        @foreach ($arregloCategories as $cat)
                                            <? $resultados = \App\SpeakerCategories::where('id_category', $cat)->get() ?>
                                            @foreach ($resultados as $res)
                                                <?
                                                    if(!in_array($res->id_speaker, $arreglo_total, true)){
                                                        array_push($arreglo_total, $res->id_speaker);
                                                    }
                                                ?>
                                                <!--<div class="col-4 col-md-2">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(<?= \App\Speakers::getPicture($res->id_speaker) ?>)"></div>
                                                        <span class="badge badge-tag me-2 mb-1">Category: <?= \App\Categories::getName($res->id_category) ?></span>
                                                        <p><?= \App\Speakers::getNombre($res->id_speaker) ?></p>
                                                    </div>
                                                </div>-->
                                            @endforeach
                                        @endforeach

                                        <? $arregloCustom = explode(",", $proposal->custom); ?>
                                        @foreach ($arregloCustom as $cus)
                                                <?
                                                    if(!in_array((int)$cus, $arreglo_total, true)){
                                                        array_push($arreglo_total, $cus);
                                                    }
                                                ?>
                                                <!--<div class="col-4 col-md-2">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(<?= \App\Speakers::getPicture($cus) ?>)"></div>
                                                        <p><?= \App\Speakers::getNombre($cus) ?></p>
                                                    </div>
                                                </div>-->
                                        @endforeach
                                        
                                        @foreach ($arreglo_total as $at)
                                            <div class="col-4 col-md-2">
                                                <div class="speaker-item">
                                                    <div class="speaker-photo" style="background-image: url(<?= \App\Speakers::getPicture($at) ?>)"></div>
                                                    <p><?= \App\Speakers::getNombre($at) ?></p>
                                                </div>
                                            </div>
                                        @endforeach

                                        <!--<div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s26.png)"></div>
                                                <p>Lacey Henderson</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/eboo-patel.png)"></div>
                                                <p>Eboo Patel</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s1.png)"></div>
                                                <p>Ingrid Harb</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s24.png)"></div>
                                                <p>Raven Solomon</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/caprice-c-jones.png)"></div>
                                                <p>Caprice C. Jones</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/deepa-purushothaman.png)"></div>
                                                <p>Deepa Purushothaman</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/heather-monahan.png)"></div>
                                                <p>Heather Monahan</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/katrina-strohl.png)"></div>
                                                <p>Katrina Strohl</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/mark_travis_rivera.png)"></div>
                                                <p>Mark Travis Rivera</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/melissa-a-washington.png)"></div>
                                                <p>Melissa A. Washington</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/ruth-rathblott.png)"></div>
                                                <p>Ruth Rathblott</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/erin-gallagher.png)"></div>
                                                <p>Erin Gallaghern</p>
                                            </div>
                                        </div>



                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s39.png)"></div>
                                                <p>Max Masure</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/stacie-carroll.png)"></div>
                                                <p>Sstacie Carroll</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/thando-hopa.png)"></div>
                                                <p>Thando Hopa</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/william-beaman.png)"></div>
                                                <p>William Beaman</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="speaker-item">
                                                <div class="speaker-photo" style="background-image: url(../assets/img/speakers/zaheer_ahmad.png)"></div>
                                                <p>Zaheer Ahmad</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-1100 mb-4">Proposal message</h3>
                            <?= $proposal->message ?>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 px-0 border-start border-300 border-top-sm">
                        <div class="h-100">
                            <div class="bg-light dark__bg-1100 h-100">
                                <div class="p-4 p-lg-6">
                                    <h3 class="text-1000 mb-4 fw-bold">History</h3>
                                    <div class="timeline-vertical timeline-with-details">
                                        <div class="timeline-item position-relative">
                                            <div class="row g-md-3">
                                                <div class="col-12 col-md-auto d-flex">
                                                    <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                        <p class="fs--2 fw-semi-bold text-600 text-end"><?= $proposal->created_at ?><br class="d-none d-md-block" /> </p>
                                                    </div>
                                                    <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                        <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-plus text-primary-600 fs--2 dark__text-primary-300"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="timeline-item-content ps-6 ps-md-3">
                                                        <h5 class="fs--1 lh-sm">Proposal start</h5>
                                                        <p class="fs--1">by <a class="fw-semi-bold" href="javascript:void(0);">Admin</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item position-relative">
                                            <div class="row g-md-3">
                                                <div class="col-12 col-md-auto d-flex">
                                                    <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                        <p class="fs--2 fw-semi-bold text-600 text-end"><?= $proposal->updated_at ?><br class="d-none d-md-block" /> </p>
                                                    </div>
                                                    <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                        <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-check text-primary-600 fs--2 dark__text-primary-300"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="timeline-item-content ps-6 ps-md-3">
                                                        <h5 class="fs--1 lh-sm">Proposal finished</h5>
                                                        <p class="fs--1">by <a class="fw-semi-bold" href="javascript:void(0);">Admin</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item position-relative">
                                            <div class="row g-md-3">
                                                <div class="col-12 col-md-auto d-flex">
                                                    <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                                        <p class="fs--2 fw-semi-bold text-600 text-end"> - <br class="d-none d-md-block" />  </p>
                                                    </div>
                                                    <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                                                        <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-paper-plane text-primary-600 fs--2 dark__text-primary-300"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="timeline-item-content ps-6 ps-md-3">
                                                        <h5 class="fs--1 lh-sm">Proposal sended</h5>
                                                        <p class="fs--1">by <a class="fw-semi-bold" href="javascript:void(0);">Admin</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="border-top border-300 px-4 px-lg-6 py-4">
                                    <h3 class="text-1000 mb-4 fw-bold">Notes</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>-->

                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Footer -->
                @include('layout.footer')

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

            <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
            @include('layout.assets')

            <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}"></script>
            <link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
            <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

            <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/link"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/raw"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
            <script src="https://cdn.jsdelivr.net/npm/editorjs-paragraph-with-alignment@1.1.0"></script>
            <script src="https://cdn.jsdelivr.net/npm/editorjs-button@1.0.1"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
            <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
            <!-- Filepond -->

            <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
            <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
            <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
            <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
            <script type="text/javascript" src="{{ asset('js/panel/static/locale/filepond.es-es.js')}} "></script>

            <link rel="stylesheet" href="{{ asset('css/notyf.min.css') }}">
            <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
            <link rel="stylesheet" href="{{ asset('css/panel/editor/sweet-alert.css') }}">
            <script type="text/javascript" src="{{ asset('js/sweet-alert.min.js')}} "></script>
            <script type="text/javascript" src="{{ asset('js/notyf.min.js')}} "></script>

            <script type="text/javascript" src="{{ asset('js/panel/static/cracknd.js')}} "></script>
            <script src="{{ asset('js/panel/administradorProposals.js') }}"></script>
            <script src="{{ asset('js/panel/proposals.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>
        </div>
    </main>
</body>
</html>
