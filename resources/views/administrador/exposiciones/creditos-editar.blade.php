@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel.sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4><i class="icon icon-library_books text-lime s-18"></i>&nbsp;<span>EDITAR CRÉDITOS</span></h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-wrapper animatedParent animateOnce p-0">

            <div class="p-4">

                <div class="card mb-5">
                    <div class="card-body white">
                        <h4 class="mb-3"><b>Exposición digital</b></h4>
                        <form id="form-registro">
                            <div class="form-group">
                                <div class="input-group mb-2 custom-select-2-container">
                                    <input id="exposicion-titulo" name="titulo" type="text" class="form-control required" value="<?= $exposicionDigital->titulo ?>" disabled>
                                </div>

                                 <input type="hidden" id="registro-input-id" name="id" value="<?= $exposicionDigital->id ?>">

                            </div>
                        </form>
                    </div>

                    <div class="p-4">

                        <div class="d-flex justify-content-end">
                            <a href="javascript:void(0);" id="btnPreview" class="btn btn-sm btn-secondary"><i id="icon-preview" class="icon-eye mr-2"></i>Vista previa</a>
                            <a href="javascript:void(0);" id="btnAddCredit" class="btn btn-sm btn-ma ml-2"><i class="icon-plus-square-o mr-2"></i>Agregar crédito</a>
                        </div>

                        <hr>

                        <div class="alert alert-info alert-dismissible mb-5" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <i class="icon-info mr-2"></i> Los créditos se acomodarán de manera consecutiva hacia la derecha. Si se requiere dejar un espacio en blanco, unicamente agrega un elemento de crédito con campos vacíos.
                        </div>

                        <div id="creditsListContainer" class="row">
                            <? if(!$exposicionDigital->creditos): ?>
                            <div class="col-6 credits-item">
                                <a href="javascript:void(0);" class="btn btn-danger p- btn-delete-credit"><i class="icon-delete"></i></a>
                                <input type="text" class="form-control credit-entity-input" placeholder="Departamento ó Entidad">
                                <input type="text" class="form-control credit-name-input" placeholder="Nombre completo">
                                <input type="text" class="form-control credit-titles-input" placeholder="Cargo ó segundo nombre">
                            </div>
                            <? endif; ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<div class="editor-tools-container d-flex justify-content-center align-items-center">
    <div class="save-update-content-container">
        <div class="d-flex justify-content-between">
            <small><strong>Última actualización:</strong><br>13:34 18/02/2021</small>
            <a href="javascript:void(0)" id="btn-actualizar-registro-timeline" class="btn btn-success float-right">
                <i class="icon icon-save"></i> ACTUALIZAR
            </a>
        </div>
    </div>
</div>


@include('layout.panel.assets')
<link href="{{ asset('css/editorjs-wsm.css') }}" rel="stylesheet">
<script src="{{ asset('js/editorjs-wsm.js') }}"></script>
>

<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>s
<script src="{{ asset('js/panel/credits.js') }}"></script>
</body>

</html>