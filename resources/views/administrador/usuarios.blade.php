@include('layout.panel.header')
@include('layout.panel.sidebar')
@include('layout.panel.topbar')
<div class="page has-sidebar-left height-full">

    <div class="content-wrapper animatedParent animateOnce ">
        <div class="container-fluid">

            <div role="navigation" aria-label="breadcrumbs navigation">
                <ul class="wy-breadcrumbs">
                    <li>Usuarios &raquo;</li>
                    <li>Listado</li>
                </ul>
            </div>
            <div class="card-header bg-transparent px-0 b-0">
                <div class="row">
                    <div class="col-md-9 col-xs-12"><h4>Listado de usuarios</h4></div>
                    <div class="col-md-3 col-xs-12 card-tools">
                        <a href="#" data-toggle="modal" data-target="#agregarAdminModal" class="btn btn-ma btn-sm">
                            <i class="icon-plus"></i> AGREGAR
                        </a>
                    </div>
                </div>
            </div>
            <div class="card no-b">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover r-0 data-table">
                            <thead>
                                <tr class="no-b">
                                    <th data-header="Nombre">Nombre</th>
                                    <th data-header="Acciones" style="min-width: 95px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Noelia Cuellar</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleElementoModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarElementoModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Pedro Luis Enriquez</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleAdminModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarAdminModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Asuncion Novo</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleElementoModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarElementoModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Marcos Antonio Recio</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleAdminModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarAdminModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Felisa Borrego</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleElementoModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarElementoModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                                <tr>

                                    <td>Pedro Javier Calatayud</td>

                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#detalleAdminModal"><div class="d-inline mr-3 s-24 icon-eye"></div></a>
                                        <a href="#" data-toggle="modal" data-target="#editarAdminModal"><div class="d-inline s-24 icon-mode_edit"></div></a>
                                        <a href="#" class="delete-btn"><div class="d-inline ml-3 s-24 icon-trash"></div></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Admin Agregar -->
<div class="modal fade" id="agregarAdminModal" tabindex="-1" aria-labelledby="agregarAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h3 class="modal-title" id="agregarAdminModalLabel"><b>Agregar usuario administrador</b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body pt-0 white">
          <form id="form-usuario" class="">
              <div class="row mt-3">
                  <div class="col-md-7">
                      <div class="body">
                          <h4 class="mb-3">Información del usuario</h4>
                          <div class="row clearfix">
                              <div class="col-md-12 mb-3">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <label for="">Nombre del usuario</label>
                                          <input type="text" id="usuario-nombre" name="nombre" class="form-control required" placeholder="Ingresa el nombre del usuario">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-12 mb-3">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <label for="">Correo electrónico</label>
                                          <input type="text" id="usuario-email" name="email" class="form-control required" placeholder="Ingrese el correo electrónico">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <label for="">Contraseña</label>
                                          <input type="password" id="usuario-password" name="password" class="form-control required" placeholder="Ingresa la contraseña">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <label for="">Repetir contraseña</label>
                                          <input type="password" id="usuario-password-repeat" name="password_repeat" class="form-control required" placeholder="Vuelva a ingresar la contraseña">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-8 mb-3">
                                  <div class="form-group">
                                      <div class="form-line">
                                          <label for="">Teléfono</label>
                                          <input type="text" id="usuario-telefono" name="telefono" class="form-control input-phone" placeholder="Ingresa el teléfono" im-insert="true">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      <h4 class="mb-3">Roles</h4>
                      <ul class="list-group">
                          <li class="list-group-item">
                              Administrador<div class="material-switch float-right">
                                  <input id="usuarios-role-1" name="roles[]" type="checkbox" value="admin">
                                  <label for="usuarios-role-1" class="bg-primary"></label>
                              </div>
                          </li>
                          <li class="list-group-item">
                              Editor<div class="material-switch float-right">
                                  <input id="usuarios-role-6" name="roles[]" type="checkbox" value="caja">
                                  <label for="usuarios-role-6" class="bg-primary"></label>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer px-4">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
          <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@include('layout.panel.assets')
</html>
