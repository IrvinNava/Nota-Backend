<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuExperiences">

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
                        <li class="breadcrumb-item active">Unmasking Microaggressions: An Interactive Discussion</li>
                    </ol>
                </nav>
                <form id="form-registro" class="mb-9 mt-3">
                    <input type="hidden" id="experience_id" name="id" class="hidden" value="experience-id">

                    <div class="row g-3 flex-between-end align-items-center mb-3 nota-stiky-controls">
                        <div class="col-auto mt-0">
                            <h2 class="mb-2 experience-name-text">Unmasking Microaggressions: An Interactive Discussion</h2>
                            <h5 class="text-700 fw-semi-bold">Experience</h5>
                        </div>
                        <div class="col-auto d-flex align-items-center mt-0">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="experienceStatus" type="checkbox" name="status" value="1" checked>
                                <label class="form-check-label" id="label-experience-status" for="experienceStatus">Active</label>
                            </div>

                            <a id="discardexperience" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0 delete-experience-item" data-id=""><i class="fas fa-trash me-1"></i> Delete</a>
                            <a id="experienceDetail" class="btn btn-phoenix-secondary mb-2 me-2 mb-sm-0 " data-id="" href="" target="_blank"><i class="fas fa-eye"></i></a>
                            <a id="publishexperience" class="btn btn-primary mb-2 mb-sm-0 updateexperience" data-id=""><i class="me-1 fs--1" data-feather="check"></i> Update</a>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mb-3">Name</h4>
                                    <input id="experience_name" name="experience_name" class="form-control mb-5" type="text" placeholder="Write the name here..." value="Unmasking Microaggressions: An Interactive Discussion" />
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Experience overview</h4>
                                <textarea class="tinymce" id="experience_description" name="experience_description" data-tinymce='{"height":"20rem","placeholder":"Write the description here..."}'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam porro omnis ex, nulla quas aliquam voluptas accusantium dolorum asperiores optio, laborum deserunt. Similique voluptate rerum incidunt ratione quia maiores deleniti!</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-6">
                                        <h4 class="mb-3">Speaker</h4>
                                        <select class="form-select select2-one" id="speakerSelect" name="speakerSelect[]" multiple="multiple" style="width:100%;">
                                            <option value="">Lacey Henderson</option>
                                            <option value="">Eboo Patel</option>
                                            <option value="" selected>Ingrid Harb</option>
                                            <option value="">Raven Solomon</option>
                                            <option value="">Erin Gallaghern</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="mb-6">
                                        <h4 class="mb-3">Is it part of any collection?</h4>
                                        <select class="form-select select2" id="collectionsSelect" name="collectionSelect[]" multiple="multiple" style="width:100%;">
                                            <option value="" selected>Unmasking Microaggressions: An Interactive Discussion</option>
                                            <option value="">Hispanic heritage month</option>
                                            <option value="">Black history month</option>
                                            <option value="">Pride month</option>
                                            <option value="">DEI Elementals</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Related categories</h4>
                                <select class="form-select select2" id="categoriesSelect" name="categoriesSelect[]" multiple="multiple" style="width:100%;">
                                    <option value="" selected>DE&I (Diversity, Equity, & Inclusion)</option>
                                    <option value="">Racial Equity</option>
                                    <option value="" selected>Mental Health</option>
                                    <option value="">Disability Awareness</option>
                                    <option value="" selected>Black History Month</option>
                                    <option value="">Hispanic Heritage Month</option>
                                    <option value="" selected>Asian American and Pacific Island Heritage Month</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="mb-0">Key takeaways</h4>
                                    <a id="addKeyBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                </div>
                                <div id="keyList" class="mt-3">
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger remove-key"><span class="fa-solid fa-trash fs--"></span></a>
                                    </div>
                                    <div class="key-item mb-2">
                                        <input type="text" class="form-control key-input" name="key_input" value="Key takeawayDemo">
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
                                                    <h5 class="mb-2 text-1000">Experience formats</h5>
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="experienceFormat" id="virtualFormat">
                                                                <label class="form-check-label" for="virtualFormat">Virtual</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="experienceFormat" id="personFormat">
                                                                <label class="form-check-label" for="personFormat">In person</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12 mt-2">
                                                    <h5 class="mb-2 text-1000">People count</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" value="Best for teams up to 60 people" />
                                                </div>

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <h5 class="mb-2 text-1000">Duration</h5>
                                                    <input id="" name="" class="form-control mb-0" type="text" value="90 min" />
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

                                            <div>
                                                <div class="row g-2">
                                                    <input type="hidden" id="speaker_photos" name="speaker_photos" class="hidden" value="">
                                                    <img src="https://notainclusion.com/demo/resources/img/experience-photo.jpg">
                                                </div>
                                                <hr>
                                                <a class="btn btn-sm btn-danger btn-drop-photo-speaker" href="javascript:void(0)" data- style="width: 100%;"><i class="fas fa-trash me-1"></i> Delete</a>
                                                <label for="registro-input-titulo"></label>
                                                <div class="gallery-container">
                                                    <div class="row"></div>
                                                </div>
                                                <input type="file" id="registro-input-gallery" class="filepond" name="upload_file" multiple>
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

    <!--<script src="../js/experiences.js"></script>-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',']
            });

            $('.select2-one').select2({
                maximumSelectionLength: 1
            });

            let experienceStatus = $("#experienceStatus");
            if (experienceStatus.length) {

                $("#experienceStatus").click(function() {
                    console.log("click");
                    if (experienceStatus.is(':checked')) {
                        experienceStatus.attr('checked', true);
                        experienceStatus.val(1);
                    } else {
                        experienceStatus.attr('checked', false);
                        experienceStatus.val(0);
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