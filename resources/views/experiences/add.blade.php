<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuNewExperience">

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
                        <li class="breadcrumb-item"><a href="{{ url('/experiences') }}">Experiences</a></li>
                        <li class="breadcrumb-item active">New</li>
                    </ol>
                </nav>
                <form id="form-registro" class="mb-9 mt-3">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">New experience</h2>
                                    <!-- <h5 class="text-700 fw-semi-bold"></h5> -->
                        </div>
                        <div class="col-auto d-flex align-items-center">

                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="expereinceStatus" name="status" type="checkbox" value="1" checked>
                                <label class="form-check-label" for="expereinceStatus">Active</label>
                            </div>

                            <a id="publishExperience" href="javascript:void(0)" class="btn btn-primary mb-2 mb-sm-0"><i class="me-1 fs--1" data-feather="check"></i> Publish experience</a>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">Name</h4>
                                    <input id="speaker_name" name="speaker_name" class="form-control mb-5" type="text" placeholder="Write the name here..." />
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Experience description</h4>
                                <textarea class="tinymce" id="speaker_description" name="speaker_description" data-tinymce='{"height":"15rem","placeholder":"Write the description here..."}'></textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Collections</h4>
                                <select class="form-select select2" id="speaker_categories" name="speaker_categories[]" multiple="multiple" style="width:100%;">
                                    <option value="">DE&I (Diversity, Equity, & Inclusion)</option>
                                    <option value="">Racial Equity</option>
                                    <option value="">Mental Health</option>
                                    <option value="">Disability Awareness</option>
                                    <option value="">Black History Month</option>
                                    <option value="">Hispanic Heritage Month</option>
                                    <option value="">Asian American and Pacific Island Heritage Month</option>
                                </select>
                            </div>

                            <div class="mb-6">

                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="mb-0">Key takeaways</h4>
                                    <a id="addKeyBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                </div>
                                <div id="keyList" class="mt-3">
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="row g-2">
                                <div class="col-12 col-xl-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Information</h4>
                                            <div class="row g-3">

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <h5 class="mb-3 text-1000">Experience formats</h5>
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="virtualFormal" type="checkbox">
                                                                <label class="form-check-label fw-bold fs-0 mb-3" for="virtualFormal">Virtual</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="inPersonFormat" type="checkbox">
                                                                <label class="form-check-label fw-bold fs-0 mb-3" for="inPersonFormat">In person</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12 mt-0">
                                                    <h5 class="mb-2 text-1000">People count</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" placeholder="e.g. Best for teams up to 60 people" />
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <h5 class="mb-2 text-1000">Duration</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" placeholder="e.g. 90 min" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Experience cover</h4>
                                            
                                            <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                                <div class="fallback">
                                                    <input id="speaker_photo" name="speaker_photo" type="file" multiple="multiple" />
                                                </div>
                                                <div class="dz-preview d-flex flex-wrap">
                                                    <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                                                        <img class="dz-image" src="../../../assets/img/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a>
                                                    </div>
                                                </div>
                                                <div class="dz-message text-600 text-center" data-dz-message="data-dz-message">
                                                    Drag your photo here <span class="text-800">or</span>
                                                    <button class="btn btn-link p-0" type="button">Browse from device</button><br /><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40" alt="" />
                                                </div>
                                            </div>

                                            <div class="alert alert-soft-primary px-3 py-2" role="alert">
                                                <small><i class="" data-feather="info"></i> Recommended measurements: 1000x450</small>
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