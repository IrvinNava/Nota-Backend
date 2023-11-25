<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuNewCollection">

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- Topbar -->
            @include('layout.topbar')

            <div class="content">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href=" {{ url('') }} ">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/collections') }}">Collections</a></li>
                        <li class="breadcrumb-item active">New</li>
                    </ol>
                </nav>
                <form id="form-registro" class="mb-9 mt-3">

                    <div class="row g-3 flex-between-end align-items-center mb-3 nota-stiky-controls">
                        <div class="col-auto mt-0">
                            <h2 class="mb-2">New collection</h2>
                        </div>
                        <div class="col-auto d-flex align-items-center mt-0">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="collectionStatus" name="status" type="checkbox" value="1" checked>
                                <label class="form-check-label" for="collectionStatus">Active</label>
                            </div>
                            <a id="publishCollection" href="javascript:void(0)" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="check"></i> Publish collection</a>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="mb-6">
                                <h4 class="mb-3">Name</h4>
                                <input id="collectionName" name="collectionName" class="form-control mb-5" type="text" placeholder="Write the name here..." />
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Collection description</h4>
                                <textarea class="tinymce" id="collectionDescription" name="collectionDescription" data-tinymce='{"height":"12rem","placeholder":"Write the description here..."}'></textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Experiences in this collection</h4>
                                <select class="form-select select2" id="experiencesSelect" name="experiencesSelect[]" multiple="multiple" style="width:100%;">
                                    <option value="">Unmasking Microaggressions: An interactive Discussion</option>
                                    <option value="">Asian American and Pacific Island Heritage Month</option>
                                    <option value="">National Native American Heritage Month</option>
                                    <option value="">Workplace and Employee wellness</option>
                                    <option value="">Business leadership + management</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="row g-2">
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Collection photo</h4>

                                            <div>
                                                <div class="col-md-12">
                                                    <label for="registro-input-titulo"></label>
                                                    <div class="gallery-container">
                                                        <div class="row"></div>
                                                    </div>
                                                    <input type="file" id="registro-input-gallery" class="filepond" name="upload_file" multiple>
                                                </div>
                                            </div>

                                            <div class="alert alert-soft-primary px-3 py-2" role="alert">
                                                <small><i class="" data-feather="info"></i> Recommended measurements: 420x600</small>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- Footer -->
                @include('layout.footer')
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
    <!-- <link href="../vendors/dropzone/dropzone.min.css" rel="stylesheet"> -->
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
    <script src="{{ asset('js/panel/administradorSpeakers.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',']
            });

            $('.select2-one').select2({
                maximumSelectionLength: 1
            });

            let speakerStatus = $("#speakerStatus");
            if (speakerStatus.length) {

                $("#speakerStatus").click(function() {
                    console.log("click");
                    if (speakerStatus.is(':checked')) {
                        speakerStatus.attr('checked', true);
                        speakerStatus.val(1);
                    } else {
                        speakerStatus.attr('checked', false);
                        speakerStatus.val(0);
                    }
                });

            }
        });

        $(function() {
            Dropzone.options.dropzone = {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 5000,
                success: function(file, response) {
                    console.log(response);
                },
                error: function(file, response) {
                    return false;
                }
            };
        });
    </script>

</body>

</html>