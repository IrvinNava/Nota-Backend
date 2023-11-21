<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layout.header')

<body data-sidebar="menuNewSpeaker">

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
                        <li class="breadcrumb-item"><a href="{{ url('/speakers') }}">Speakers</a></li>
                        <li class="breadcrumb-item active"> {{ $speaker->first_name }}</li>
                    </ol>
                </nav>
                <form id="form-registro" class="mb-9 mt-3">
                    <input type="hidden" id="speaker_id" name="id" class="hidden" value="{{ $speaker->id}}">
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">{{ $speaker->first_name }} {{ $speaker->last_name }}</h2>
                            <h5 class="text-700 fw-semi-bold">Nota's speaker</h5>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" id="speakerStatus" type="checkbox" name="status" value="{{ $speaker->status }}" <?=  ($speaker->status === 1) ? 'checked="checked"' : ''; ?>>
                                <label class="form-check-label" id="label-speaker-status" for="speakerStatus">Active</label>
                            </div>
                            <? 
                                $name = Str::slug($speaker->first_name.' '.$speaker->last_name);
                                $rutaSpeaker = url('/speaker/'.$speaker->id.'/'.$name); 
                            ?>
                            <a id="discardSpeaker" class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0 delete-speaker-item" data-id="{{ $speaker->id }}"><i class="fas fa-trash me-1"></i> Delete</a>
                            <a id="speakerDetail" class="btn btn-phoenix-secondary mb-2 me-2 mb-sm-0 " data-id="{{ $speaker->id }}" href="{{ $rutaSpeaker }}"><i class="fas fa-eye" ></i></a>
                            <a id="publishSpeaker" class="btn btn-primary mb-2 mb-sm-0 updateSpeaker" data-id="{{ $speaker->id }}"><i class="me-1 fs--1" data-feather="check"></i> Update</a>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="mb-3">First Name</h4>
                                    <input id="edit_speaker_name" name="speaker_name" class="form-control mb-5" type="text" placeholder="Write the name here..." value="{{ $speaker->first_name }}" />
                                </div>
                                <div class="col-6">
                                    <h4 class="mb-3">Last Name</h4>
                                    <input id="edit_speaker_name" name="last_name" class="form-control mb-5" type="text" placeholder="Write the name here..." value="{{ $speaker->last_name }}" />
                                </div>

                                <div class="col-md-8 mb-5">
                                    <h4 class="mb-2">Speaker titles</h4>
                                    <input id="edit_speaker_titles" name="speaker_titles" class="form-control mb-0" type="text" placeholder="e.g. Author, Psychologist, etc..." value="{{ $speaker->titles }}"/>
                                    <small>Add titles separate with coma (,)</small>
                                </div>

                                <div class="col-md-4 mb-5">
                                    <h4 class="mb-2">Pronouns</h4>
                                    <input id="edit_speaker_pronouns" name="speaker_pronouns" class="form-control mb-0" type="text" placeholder="e.g. She/Her" value="{{ $speaker->pronouns }}"/>
                                    <small>Add pronouns separate with diagonal (/)</small>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Speaker description</h4>
                                <textarea class="tinymce" id="edit_speaker_description" name="edit_speaker_description" data-tinymce='{"height":"15rem","placeholder":"Write the description here..."}'>{{ $speaker->description }}</textarea>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3">Information</h4>
                                <div class="row g-0 border-top border-bottom border-300">
                                    <div class="col-sm-4">


                                        <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="videosTab" data-bs-toggle="tab" data-bs-target="#videosTabContent" role="tab" aria-controls="videosTabContent" aria-selected="false">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="play-circle"></span>
                                                <span class="d-none d-sm-inline">Videos</span>
                                            </a>
                                            <a class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="testimonialsTab" data-bs-toggle="tab" data-bs-target="#testimonialsTabContent" role="tab" aria-controls="testimonialsTabContent" aria-selected="false">
                                                <span class="me-sm-2 fs-4 nav-icons" data-feather="message-square"></span>
                                                <span class="d-none d-sm-inline">Testimonials</span>
                                            </a>
                                        </div>


                                    </div>
                                    <div class="col-sm-8">
                                        <div class="tab-content py-3 ps-sm-4 h-100">

                                            <div class="tab-pane fade h-100 show active pe-3" id="videosTabContent" role="tabpanel" aria-labelledby="videosTab">
                                                <div class="d-flex flex-column h-100">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <h5 class="m-0 text-1000">Add the iframe code</h5>
                                                        <a id="addVideoBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                                    </div>
                                                    <div id="videosList" class="mt-3">
                                                        @foreach ($videos as $video)
                                                            <div class="video-item mb-2">
                                                                <textarea class="form-control video-textarea speaker-item-video" name="speaker_item_video" rows="4">{{ $video->iframe }}</textarea>
                                                                <a href="javascript:void(0);" class="btn btn-soft-danger remove-video" data-id-video="{{ $video->id }}" type="button"><span class="fa-solid fa-trash fs--"></span></a>
                                                            </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade pe-3" id="testimonialsTabContent" role="tabpanel" aria-labelledby="testimonialsTab">
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <h5 class="m-0 text-1000">Add testimonial</h5>
                                                    <a id="addTestimonialsBtn" href="javascript:void(0);" class="btn btn-sm btn-primary"><span class="fa-solid fa-plus fs--2"></span></a>
                                                </div>
                                                <div id="testimonialsList" class="mt-3">
                                                    @foreach ($testimonials as $testimonial)
                                                        <div class="card p-2 testimonial-item mb-2">
                                                            <textarea class="form-control" name="speaker_item_testimonial" rows="4" cols="80" placeholder="Testimonial text...">{{ $testimonial->testimonial }}</textarea>

                                                            <input type="text" name="speaker_item_author" class="form-control" placeholder="Testimonial autor" value="{{ $testimonial->author }}">

                                                            <a href="javascript:void(0);" class="btn btn-soft-danger remove-testimonial" data-id-testimonial="{{ $testimonial->id }}" type="button"><span class="fa-solid fa-trash fs--"></span></a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="mb-3"> Categories</h4>
                                <select class="form-select select2" id="speaker_categories" name="speaker_categories" multiple="multiple" style="width:100%;">
                                    <? $speakerCategories = explode(",", $speaker->categories); ?>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}" <? if(in_array($cat->id,$speakerCategories)): ?>selected<? endif ?>>{{  $cat->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <h4 class="mb-3"> Topics</h4>
                                <select class="form-select select2" id="speaker_topics" name="speaker_topics" multiple="multiple" style="width:100%;">
                                    <? $speakerTopics = explode(",", $speaker->topics); ?>
                                    @foreach ($topics as $topic)
                                        <option value="{{ $topic->id }}" <? if(in_array($topic->id,$speakerTopics)): ?>selected<? endif ?>>{{  $topic->title }}</option>
                                    @endforeach
                                </select>
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
                                                    <h5 class="mb-2 text-1000">Price range</h5>
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                                                <input type="text" class="form-control" id="edit_price_from" name="price_from" placeholder="From:" aria-describedby="basic-addon1" value="{{ $speaker->startprice }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                                                <input type="text" class="form-control" id="edit_price_to" name="price_to" placeholder="To:" aria-describedby="basic-addon1" value="{{ $speaker->limitprice }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="mb-xl-4">
                                                        <h5 class="mb-2 text-1000">Tags</h5>
                                                        <select id="speaker_tags" name="speaker_tags" class="form-control form-control-sm select2-tags" multiple="multiple" style="width:100%;">
                                                            <? $tags = explode(",", $speaker->tags); ?>
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                                            @endforeach
                                                        </select>
                                                        <small>Add tags separate with coma (,). This tags will be appear under speaker photo</small>
                                                    </div>
                                                </div>-->

                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="">
                                                        <div class="d-flex flex-wrap mb-2">
                                                            <h5 class="mb-0 text-1000 me-2">Quote</h5>
                                                        </div>
                                                        <textarea class="form-control" id="edit_speaker_quote" name="speaker_quote" rows="6" cols="80">{{ $speaker->quote }}</textarea>
                                                        <small>Without the quotes.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photo -->
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Speaker photo</h4>
                                            <div>
                                                <div class="row g-2"><a class="btn btn-sm btn-danger btn-drop-photo-speaker"  href="javascript:void(0)" data-><i class="icon-delete"></i>  Eliminar </a><input type="hidden" id="speaker_photos" name="speaker_photos" class="hidden" value="{{ $speaker->speaker_photo }}"><img src="{{ $speaker->speaker_photo }}" ></div>
                                            <hr>
                                            <label for="registro-input-titulo"></label>
                                            <div class="gallery-container">
                                                <div class="row">
                                                     
                                                </div>
                                            </div>
                                            <hr>

                                            <input type="file" id="registro-input-gallery" class="filepond mt-3" name="upload_file" multiple>

                                            <hr>
                                            
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body bg-danger text-white">
                                                    <p class="card-text">La experiencia de los usuarios al acceder a un sitio web del Museo Amparo es importante para todo el ecosistema de Amparo. Por lo que antes de subir una imagen es importante asegurarse de lo siguiente:</p>
                                                    <ul>
                                                        <li>1.  Las imágenes deben contar con las dimensiones recomendadas previamente.</li>
                                                        <li>2.  Las imágenes deben pasar por un proceso de compresión. Te recomendamos usar alguna herramienta en Internet como: <a href="https://tinypng.com/" target="_blank"><b><u>https://tinypng.com/</u></b> <i class="icon-one-finger-click2"></i></a></li>
                                                    </ul>
                                                    <p><b>¿Por qué esto es importante?</b><br>Al respetar dimensiones y pasar los recursos gráficos por un proceso de compasión ayudamos a que la carga de un sitio web suceda de manera rápida y eficiente.</p>
                                                </div>
                                            </div>
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

    <!--<script src="../js/speakers.js"></script>-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',']
            });

            $("#speaker_categories").select2();
            $("#speaker_topics").select2();

            let speakerStatus = $("#speakerStatus");
            if (speakerStatus.length) {

                $("#speakerStatus").click( function(){
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

        $(function(){
            Dropzone.options.dropzone =
            {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
            };
        });
    </script>

</body>

</html>