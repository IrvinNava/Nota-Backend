<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuNewProposal">
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- Topbar -->
            @include('layout.topbar')

            <div class="content">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{ url('/proposals') }}">Proposals</a></li>
                      <li class="breadcrumb-item active">New</li>
                    </ol>
                </nav>
                <form id="form-registro" class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">New proposal</h2>
                            <!-- <h5 class="text-700 fw-semi-bold"></h5> -->
                        </div>
                        <div class="col-auto">
                            <a id="discardProposal" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"><i class="fas fa-trash me-1"></i>  Discard</a>
                            <a id="saveProposalDraft" class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0"  href="javascript:void(0)" type="button" ><i class="me-1 fs--1" data-feather="save"></i> Save draft</a>
                            <a id="saveSendProposal" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="send"></i> Save and Send</a>
                        </div>
                    </div>
                    <div class="row g-5">

                        <div class="col-12 col-xl-4">
                            <div class="sticky-top position-sticky" style="top: 100px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Details</h4>
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="border-bottom border-dashed border-sm-0 border-bottom-xl pb-4">
                                                    <div class="d-flex flex-wrap mb-2">
                                                        <h5 class="text-1000 me-2">Proposal Name</h5>
                                                    </div>
                                                    <input type="text" class="form-control" id="proposal_name" name="name" value="">
                                                    <small>This input is just for identification</small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="text-1000 me-2"><i class="me-1 mb-1 fs--1" data-feather="user"></i>Client Name</h5>
                                                </div>
                                                <input type="text" class="form-control" id="proposal_client" name="client_name" value="">
                                            </div>
                                            <div class="col-12 col-sm-6 col-xl-12">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <h5 class="text-1000 me-2"><i class="me-1 mb-1 fs--1" data-feather="mail"></i> Client Email</h5>
                                                </div>
                                                <input type="email" class="form-control" id="proposal_email" name="client_email" placeholder="client@email.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Add speakers by category</h4>
                                <select class="form-select select2 required" id="speaker_categories" name="speaker_categories" multiple="multiple" style="width:100%;">
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"> {{ $cat->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Add speakers by topic</h4>
                                <select class="form-select select2" id="speaker_topics" name="topics" multiple="multiple">
                                    @foreach ($topics as $topic)
                                        <option value="{{ $topic->id }}"> {{ $topic->title }}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                            <div class="border-bottom mb-6 pb-6">
                                <h4 class="mb-3">Custom</h4>
                                <!-- Drag & Drop Speakers -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card p-3 draggable-container">
                                            <div class="row g-2 elements-list" id="speakersList">
                                                @foreach ($speakers as $speaker)
                                                    <div class="col-md-3">
                                                    <div class="speaker-item" data-id="<?= $speaker->id ?>">
                                                        <div class="speaker-photo" style="background-image: url(<?= $speaker->speaker_photo ?>)"></div>
                                                        <p> <?= \App\Speakers::getNombre($speaker->id) ?></p>
                                                    </div>
                                                </div>
                                                @endforeach

                                                <!--<div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s26.png)"></div>
                                                        <p>Lacey Henderson</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/eboo-patel.png)"></div>
                                                        <p>Eboo Patel</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s1.png)"></div>
                                                        <p>Ingrid Harb</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s24.png)"></div>
                                                        <p>Raven Solomon</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/caprice-c-jones.png)"></div>
                                                        <p>Caprice C. Jones</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/deepa-purushothaman.png)"></div>
                                                        <p>Deepa Purushothaman</p>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/heather-monahan.png)"></div>
                                                        <p>Heather Monahan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/katrina-strohl.png)"></div>
                                                        <p>Katrina Strohl</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/mark_travis_rivera.png)"></div>
                                                        <p>Mark Travis Rivera</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/melissa-a-washington.png)"></div>
                                                        <p>Melissa A. Washington</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/ruth-rathblott.png)"></div>
                                                        <p>Ruth Rathblott</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/erin-gallagher.png)"></div>
                                                        <p>Erin Gallaghern</p>
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/s39.png)"></div>
                                                        <p>Max Masure</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/stacie-carroll.png)"></div>
                                                        <p>Sstacie Carroll</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/thando-hopa.png)"></div>
                                                        <p>Thando Hopa</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/william-beaman.png)"></div>
                                                        <p>William Beaman</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="speaker-item">
                                                        <div class="speaker-photo" style="background-image: url(../assets/img/speakers/zaheer_ahmad.png)"></div>
                                                        <p>Zaheer Ahmad</p>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card p-3 draggable-container">
                                            <div class="row g-2 elements-list" id="speakersAdded"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="border-bottom mb-6">
                                <h4 class="mb-3"> Proposal message</h4>
                                <textarea class="tinymce" id="proposal_message" name="proposal_message" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
                            </div>
                        </div>

                    </div>
                </form>

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
