<div class="card card-rounded">
  <div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <h4 class="card-title card-title-dash">Listado de <?php echo $answer['data']['title']; ?></h4>
        <p class="card-subtitle card-subtitle-dash"><?php echo $answer['data']['subtitle']; ?></p>
      </div>
      <div>
        <a class="btn btn-primary btn-lg text-white mb-0 me-0">
          <i class="<?php echo $answer['data']['icon']; ?>">&nbsp;</i>
          <?php echo $answer['data']['button']; ?>
        </a>
      </div>
    </div>
    <br>
    <div class="table-responsive">
      <table id="order-listing" class="table table-responsive table-hover table-bordered">
        <thead class="table-primary">
          <tr>
            <th>Actions</th>
            <!-- <th>ID #</th> -->
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Status</th>
            <th>Categoria</th>
            <!-- <th>Creado</th>
            <th>Actualizado</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($answer['modal'] as $m): ?>
            <tr>
              <td><button class="btn btn-outline-light btn-rounded btn-icon"><i
                    class="ti-pencil-alt text-dark"></i></button></td>
              <!-- <td><?php echo $m->getId(); ?></td> -->
              <td><?php echo $m->getTitle(); ?></td>
              <td><?php echo $m->getDescription(); ?></td>
              <td><a href="<?php echo $m->getImage(); ?>" target="_blank"><img src="<?php echo $m->getImage(); ?>"></a>
              </td>
              <td><?php switch ($m->getVisible()) {
                case 0:
                  echo '<label class="badge badge-danger">Inactivo</label>';
                  break;

                case 1:
                  echo '<label class="badge badge-success">Activo</label>';
                  break;
              } ?></td>
              <td><?php echo $m->getIdCategory(); ?></td>
              <!-- <td><?php echo $m->getCreatedAt(); ?></td>
              <td><?php echo $m->getUpdatedAt(); ?></td> -->
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- <div class="table-responsive  mt-1">
      <table class="table select-table">
        <thead>
          <tr>
            <th>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </th>
            <th>Customer</th>
            <th>Company</th>
            <th>Progress</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex ">
                <img src="../../../../images/faces/face1.jpg" alt="">
                <div>
                  <h6>Brandon Washington</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">79%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar background-primary" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-purple-primary">In progress</div></td>
          </tr>
          <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex">
                <img src="../../../../images/faces/face2.jpg" alt="">
                <div>
                  <h6>Laura Brooks</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">65%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar background-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-purple-secondary">In progress</div></td>
          </tr>
          <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex">
                <img src="../../../../images/faces/face3.jpg" alt="">
                <div>
                  <h6>Wayne Murphy</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">65%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar background-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-purple-success">In progress</div></td>
          </tr>
          <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex">
                <img src="../../../../images/faces/face4.jpg" alt="">
                <div>
                  <h6>Matthew Bailey</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">65%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar background-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-purple-danger">Pending</div></td>
          </tr>
          <tr>
            <td>
              <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
              </div>
            </td>
            <td>
              <div class="d-flex">
                <img src="../../../../images/faces/face5.jpg" alt="">
                <div>
                  <h6>Katherine Butler</h6>
                  <p>Head admin</p>
                </div>
              </div>
            </td>
            <td>
              <h6>Company name 1</h6>
              <p>company type</p>
            </td>
            <td>
              <div>
                <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                  <p class="text-success">65%</p>
                  <p>85/162</p>
                </div>
                <div class="progress progress-md">
                  <div class="progress-bar background-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </td>
            <td><div class="badge badge-opacity-purple-warning">Completed</div></td>
          </tr>
        </tbody>
      </table>
    </div> -->
  </div>
</div>
<div class="card card-rounded">
  <!-- <div class="card-header">
    <h4>Modal</h4>
    <div class="card-body">
      <div class="d-sm-flex justify-content-between align-items-start">
        <div>
          <h4 class="card-title card-title-dash">Pending Requests</h4>
          <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
        </div>
        <div>
          <button class="btn bg-purple btn-lg text-white mb-0 me-0" type="button" data-bs-toggle="modal" data-bs-target="#modal-create-modal">
            <i class="mdi mdi-account-plus"></i>Add new member
          </button>
        </div>
      </div>
      <h4 class="card-title">Data table</h4>
      <button type="button" class="btn btn-success create-modal" data-bs-toggle="modal" data-bs-target="#modal-create-modal">Agregar Aviso</button>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th>ID #</th>
                  <th>Titulo</th>
                  <th>Descripción</th>
                  <th>Imagen</th>
                  <th>Status</th>
                  <th>Categoria</th>
                  <th>Creado</th>
                  <th>Actualizado</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($answer['modal'] as $m): ?>
                  <tr>
                    <td><?php echo $m->getId(); ?></td>
                    <td><?php echo $m->getTitle(); ?></td>
                    <td><?php echo $m->getDescription(); ?></td>
                    <td><a href="<?php echo $m->getImage(); ?>" target="_blank"><img src="<?php echo $m->getImage(); ?>"></a></td>
                    <td><?php switch ($m->getVisible()) {
                      case 0:
                        echo '<label class="badge badge-danger">Inactivo</label>';
                        break;

                      case 1:
                        echo '<label class="badge badge-success">Activo</label>';
                        break;
                    } ?></td>
                    <td><?php echo $m->getIdCategory(); ?></td>
                    <td><?php echo $m->getCreatedAt(); ?></td>
                    <td><?php echo $m->getUpdatedAt(); ?></td>

                    <td>
                      <button class="btn btn-outline-light btn-rounded btn-icon"><i class="ti-pencil-alt text-dark"></i></button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="modal modal-default fade" id="modal-create-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="alert alert-success alert-dismissible" id="ModalLabel">Agregar Nuevo Aviso</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text mdi mdi-alert-outline"></span>
                </div>
                <input type="text" class="form-control" placeholder="Titulo" aria-label="title">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text mdi mdi-alert-outline"></span>
                </div>
                <input type="text" class="form-control" placeholder="Descripción" aria-label="description">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <input type="file" class="form-control" placeholder="Adjuntar Imagen" aria-label="image">
              </div>
              <img class="img-fluid" width="200" height="200">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Visible
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>