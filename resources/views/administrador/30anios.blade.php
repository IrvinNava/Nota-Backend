@include('layout.panel.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="app">
    @include('layout.panel./sidebar')
    @include('layout.panel.topbar')
    <div class="page has-sidebar-left height-full">
        <header class="ma-background relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon icon-photo_library "></i>
                            Fotos de la comunidad de MA
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce container-content">
            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li><a href="{{ url('administrador') }}">Inicio</a> &raquo;</li>
                    <li>Fotos de 30 años</li>
                </ul>
            </div>
            <div class="ro">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="elements-container p-0">
                                <div class="table-responsive">
                                    <table id="table-fotos" class="table table-striped table-hover r-0">
                                        <thead>
                                            <tr class="no-b">
                                                <th data-header="ID">#</th>
                                                <th data-header="VISTA PREVIA"></th>
                                                <th data-header="NOMBRE">NOMBRE VISITANTE</th>
                                                <th data-header="ESTATUS">ESTATUS</th>
                                                <th data-header="DETALLE">DETALLE DE LA VISITA</th>
                                                <th data-header="CREADO"><small>CREADO</small></th>
                                                <th data-header="ELIMINAR">DETALLE</th>
                                                <th data-header="DETALLE">ELIMINAR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fotoModalLabel">Detalle de Fotografía</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <input type="hidden" id="mosaico-id" name="" value="">
                  <img id="mosaico-completo" src="<?= asset('img/ma-visita-4.jpg') ?>" alt="">
              </div>
              <div class="col-md-6">
                  <table class="table-bordered">
                      <tbody>
                          <tr>
                              <th style="width:50%">Nombre:</th>
                              <td id="nombre-visitante">Adela Farre</td>
                          </tr>
                          <tr>
                              <th>Edad</th>
                              <td id="edad-visitante">28 años</td>
                          </tr>
                          <tr>
                              <th>Ciudad actual de residencia</th>
                              <td id="ciudad-residencia">Puebla</td>
                          </tr>
                          <tr>
                              <th>Fecha de la fotografía</th>
                              <td id="fecha-visita">22/12/2020</td>
                          </tr>
                          <tr>
                              <th>Evento al que acudiste</th>
                              <td id="evento-visita">Noche de Museos</td>
                          </tr>
                          <tr class="hidden">
                              <th>Motivo de tu visita</th>
                              <td id="motivo-visita">Visita a la ciudad de Puebla y conocer su historia</td>
                          </tr>
                          <tr class="hidden">
                              <th>¿Quién te tomó esa foto?</th>
                              <td id="nombre-fotografo">Familia</td>
                          </tr>
                          <tr>
                              <th>¿Qué te recuerda esta foto? ¿Cuál fue tu experiencia?</th>
                              <td id="detalle-visita">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                          </tr>
                          <tr class="hidden">
                              <th>¿Volviste nuevamente al Museo Amparo?</th>
                              <td id="detalle-volviste"></td>
                          </tr>
                          <tr class="hidden">
                              <th>¿Te gustaría volver?</th>
                              <td id="detalle-volverias"></td>
                          </tr>
                          <tr class="hidden">
                              <th>Si tuvieras que recomendarle a alguien visitar el MA, ¿qué le dirías?</th>
                              <td id="detalle-recomendarias"></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" data-status="1" class="btn btn-success update-status-mosaico">Aprobar</button>
        <button type="button" data-status="0" class="btn btn-danger update-status-mosaico">Rechazar</button>
      </div>
    </div>
  </div>
</div>

@include('layout.panel.assets', [])
<script src="<?= asset('js/aniversario.js') ?>"></script>
</body>
</html>
