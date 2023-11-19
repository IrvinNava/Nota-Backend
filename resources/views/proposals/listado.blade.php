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

            <div class="content">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        <li class="breadcrumb-item active">Proposals generated</li>
                    </ol>
                </nav>
                <div class="mt-3">
                    <div class="row g-3 mb-4">
                        <div class="col-auto">
                            <h2 class="mb-0">Proposals</h2>
                        </div>
                    </div>
                    <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>

                        <div class="mb-2">
                            <div class="row g-3">
                                <div class="col-auto flex-grow-1">
                                    <ul class="nav nav-links mb-3 mb-lg-2 mx-n3 proposals-buttons">
                                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Generated <span class="text-700 fw-semi-bold">{{ $numeroPropuestas }}</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('proposals-requested') }}">Requested <span class="text-700 fw-semi-bold">{{ $numeroProposalsSended }}</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <!-- <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button> -->
                                    <a class="btn btn-primary" href="../add-proposal/"><span class="fas fa-plus me-2"></span>Add proposal</a>
                                </div>
                            </div>
                        </div>

                        <div class="mx-n4 px-4 mx-lg-n6 p-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                            <div class="table-responsive scrollbar mx-n1 px-1">
                                <table class="table table-s fs--1 mb-0 align-middle table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class="sort align-middle white-space-nowrap" scope="col">ID</th>
                                            <th class="sort align-middle" scope="col">NAME</th>
                                            <th class="sort align-middle" scope="col">SPEAKERS</th>
                                            <th class="sort align-middle" scope="col">STATUS</th>
                                            <th class="sort align-middle" scope="col">CREATED ON</th>
                                            <th class="sort align-middle" scope="col" style="width:80px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proposals as $proposal)
                                        <? $status = ($proposal->status === 2) ? '<span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Sended</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span>' : '<span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Created</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span>' ;
                                            $numberOfMembers = 0;
                                            if($proposal->custom){
                                                $numberOfMembers += count(explode(",", $proposal->custom));
                                            }
                                            /*if($proposal->categories){
                                                $cate = explode(",", $proposal->categories);
                                                foreach ($cate as $cat) {
                                                    $numberOfMembers += SpeakerCategories::where('id_category', $cate)->get()->count();
                                                }
                                                
                                            }*/
                                        ?>                                        
                                        <tr>
                                            <td class="ps-2">{{ $proposal->id }} </td>
                                            <td><a href="<?= url('/proposal-details/'.$proposal->id) ?>">{{ $proposal->name }}</a></td>
                                            <td><span class="me-1 mb-1 fs--2" data-feather="users"></span>{{ $numberOfMembers }} speakers</td>
                                            <td><?= $status ?></td>
                                            <td class="time">{{ $proposal->created_at }}</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="<?= url('/proposal-details/'.$proposal->id) ?>">View</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-proposal-item" href="javascript:void(0);" data-id="{{ $proposal->id }}"><i class="fas fa-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!--<tr>
                                            <td class="ps-2">001</td>
                                            <td><a href="../proposal-details/">Florida Proposal</a></td>
                                            <td><span class="me-1 mb-1 fs--2" data-feather="users"></span>15 speakers</td>
                                            <td><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Sended</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                                            <td class="time">Apr 12, 7:36 PM</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../proposal-details/">View</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-proposal-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-2">002</td>
                                            <td><a href="../proposal-details/">New Demo Proposal</a></td>
                                            <td><span class="me-1 mb-1 fs--2" data-feather="users"></span>10 speakers</td>
                                            <td><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Created</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                                            <td class="time">Apr 12, 7:36 PM</td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="../proposal-edit/"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-proposal-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>-->

                                    </tbody>
                                </table>

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
