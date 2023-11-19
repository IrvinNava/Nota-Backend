<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.header')

<body data-sidebar="menuSpeakers">
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
                        <li class="breadcrumb-item active">Speakers</li>
                    </ol>
                </nav>
                <div class="mt-3">
                    <div class="row g-3 mb-4 justify-content-between">
                        <div class="col-auto">
                            <h2 class="mb-0">Speakers</h2>
                        </div>
                        <div class="col-auto">
                            <!-- <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button> -->
                            <a class="btn btn-primary" href="{{ url('/add-speaker') }}"><span class="fas fa-user-plus me-2"></span>Add speaker</a>
                        </div>
                    </div>

                    <div>
                        <div class="mx-n4 px-4 mx-lg-n6 p-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                            <div class="table-responsive scrollbar mx-n1 px-1">
                                <table class="table table-sm fs--1 mb-0 align-middle table-hover dataTable">
                                    <thead>
                                        <tr>
                                            <th class="sort align-middle white-space-nowrap" scope="col">ID</th>
                                            <th></th>
                                            <th class="sort align-middle" scope="col">NAME</th>
                                            <th class="sort align-middle" scope="col">TOPIC</th>
                                            <th class="sort align-middle" scope="col" style="width:80px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($speakers as $speaker)
                                        <tr>
                                            <td class="ps-2">{{ $speaker->id }}</td>
                                            <td>
                                                <div class="speaker-photo" style="background-image: url({{ $speaker->speaker_photo }})"></div>
                                            </td>
                                            <? 
                                            $name = Str::slug($speaker->first_name.' '.$speaker->last_name);
                                            $rutaSpeaker = url('/speakerDetail/'.$speaker->id.'/'.$name); ?>
                                            <td><a href="<?= $rutaSpeaker ?>">{{ $speaker->first_name }} {{ $speaker->last_name }}</a></td>
                                            <? $categorias = explode(",", $speaker->categories); ?>
                                            <td>
                                            @foreach ($categorias as $cat)
                                                {{ \App\Categories::getName( $cat) }}<p></p>
                                            @endforeach
                                            </td>
                                            <td class="btn-reveal-trigger">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                        <a class="dropdown-item" href="<?= $rutaSpeaker ?>"><i class="fas fa-pen me-1"></i> View / Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger delete-speaker-item" href="javascript:void(0);"><i class="fas fa-trash me-1"></i> Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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

            <!-- assets -->
            @include('layout.assets')
            <script src="{{ asset('js/panelNota/speakers.js') }}"></script>
        </div>

    </main>
</body>

</html>