<div class="card card-rounded">
  <div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <!-- Flecha de regreso -->
        <a href="serviAdmi" class="btn btn-link text-primary d-inline-flex align-items-center"
          style="font-size: 20px; text-decoration: none; margin-bottom: 15px; padding: 5px 10px; border-radius: 8px; background-color: #f0f8ff;">
          <i class="mdi mdi-arrow-left" style="margin-right: 5px;"></i>
          Regresar
        </a>
        <h4 class="card-title card-title-dash"
          style="font-size: 42px; font-weight: 700; color: #0056b3; margin-bottom: 20px;">
          Listado de <?php echo $answer['data']['title']; ?>
        </h4>
        <p class="card-subtitle card-subtitle-dash"
          style="color: #007bff; font-size: 22px; font-weight: 700; margin: 15px 0;">
          <?php echo $answer['data']['subtitle']; ?>
        </p>

        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_GET['error']; ?>
          </div>
        <?php endif; ?>
      </div>
      <div><br>
        <button type="button" class="btn btn-primary btn-lg text-white mb-0 me-0" data-bs-toggle="modal"
          data-bs-target="#modal-agregar-empleo">
          <i class="<?php echo $answer['data']['icon']; ?>">&nbsp;</i>
          <?php echo $answer['data']['button']; ?>
        </button>
      </div>
    </div>

    <br>
    <div class="table-responsive">
      <!-- <table id="order-listing" class="table table-responsive table-hover table-bordered"> -->
      <table id="order-listing" class="table table-responsive table-hover table-bordered">
        <thead class="table-primary">
          <tr>
            <th>Accciones</th>
            <!-- <th>ID #</th> -->
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Estatus</th>
            <!-- <th>Vacantes</th>
            <th>Responsabilidades</th>
            <th>Escolaridad</th>
            <th>Experiencia</th>
            <th>Adicionales</th>
            <th>Años de Experiencia</th>
            <th>Salario</th>
            <th>Contratación</th>
            <th>Beneficios</th>
            <th>Ubicación</th>
            <th>Fecha de Término</th> 
            <th>Creado</th>
            <th>Actualizado</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($answer['jobs'] as $j): ?>
            <tr>
              <td>
                <button title="Editar" data-bs-toggle="modal" data-bs-target="#modal-editar-empleo"
                  class="btn btn-warning btn-rounded btn-icon" id="<?php echo $j->getid(); ?>">
                  <i class="ti-pencil-alt text-light"></i>
                </button>
                <?php if ($j->getId_Status() == 1): ?>
                  <a title="Bloquear" href='/admin/<?php echo $j->getId(); ?>/lock'
                    class="btn btn-danger btn-rounded btn-icon">
                    <i class="ti-lock text-light"></i>
                  </a>
                <?php else: ?>
                  <a title="Desbloquear" href='/admin/<?php echo $j->getId(); ?>/unlock'
                    class="btn btn-success btn-rounded btn-icon">
                    <i class="ti-unlock text-light"></i>
                  </a>
                <?php endif; ?>
              </td>
              <!-- <td><?php echo $j->getId(); ?></td> -->
              <td><?php echo $j->getTitle(); ?></td>
              <td><?php echo $j->getDescription(); ?></td>
              <td><a href="<?php echo $j->getImage(); ?>" target="_blank"><img src="<?php echo $j->getImage(); ?>"></a>
              </td>
              <td><?php switch ($j->getId_Status()) {
                case 0:
                  echo '<label class="badge badge-danger">Inactivo</label>';
                  break;

                case 1:
                  echo '<label class="badge badge-success">Activo</label>';
                  break;
              } ?></td>
              <!-- <td><?php echo $j->getVacancy(); ?></td>
              <td><?php echo $j->getResponsabilities(); ?></td>
              <td><?php echo $j->getEducation(); ?></td>
              <td><?php echo $j->getExperience(); ?></td>
              <td><?php echo $j->getAdditional(); ?></td>
              <td><?php echo $j->getWorkExperience(); ?></td>
              <td><?php echo $j->getSalary(); ?></td>
              <td><?php echo $j->getContractType(); ?></td>
              <td><?php echo $j->getBenefits(); ?></td>
              <td><?php echo $j->getLocation(); ?></td>
              <td><?php echo $j->getDeadline(); ?></td> 
              <td><?php echo $j->getCreatedAt(); ?></td>
              <td><?php echo $j->getUpdatedAt(); ?></td> -->
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal para agregar nuevo Empleo -->
<div class="modal fade" id="modal-agregar-empleo" tabindex="-1" aria-labelledby="modalAgregarEmpleoLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 10px; overflow: hidden;">
      <div class="modal-header"
        style="background-color: #3afe; color: white; display: flex; justify-content: center; align-items: center;">
        <i class="mdi mdi-briefcase-plus" style="font-size: 1.5em; margin-right: 10px;"></i>
        <h5 class="modal-title" id="modalAgregarEmpleoLabel">Agregar Nuevo Empleo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
          style="filter: invert(1); position: absolute; right: 15px;"></button>
      </div>
      <div class="modal-body" style="padding: 2rem;">
        <form method="post" id="trabajos" enctype="multipart/form-data" action="/admin/NewJob">
          <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-format-size"></i></span>
              <input type="text" class="form-control" id="title" name="title" placeholder="Título" aria-label="title"
                required style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-clipboard-text"></i></span>
              <input type="text" class="form-control" id="description" name="description" placeholder="Descripción"
                aria-label="description" required style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-camera"></i></span>
              <input type="file" class="form-control" id="image" name="image" accept=".jpg, .png" required
                style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
            <br>
            <img id="previewImage" class="img-fluid" width="200" height="200" style="display: none;">
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="visible" name="visible">
              <label class="form-check-label" for="visible">Visible</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Vacantes</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-clipboard-text"></i></span>
              <input type="int" class="form-control" id="vacancy" name="vacancy" placeholder="Descripción"
                aria-label="description" required style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
              style="border-radius: 5px;">Cancelar</button>
            <button type="submit" class="btn btn-primary"
              style="background-color: #3afe; border-color: #3afe; color: #fff; border-radius: 5px;">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal para editar Empleo -->
<div class="modal modal-default fade" id="modal-editar-empleo" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="mx-auto" id="ModalLabel"><strong>Editar Empleo</strong></h4>
      </div>
      <div class="modal-body">
        <form method="post" action="editJob">
          <input type="hidden" name="id" value="<?= $j->getId(); ?>">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-format-size"></span>
              </div>
              <input type="text" name="title" value="<?php echo $j->getTitle(); ?>" class="form-control"
                placeholder="Titulo" aria-label="title" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-clipboard-text"></span>
              </div>
              <input type="text" name="description" value="<?= $j->getDescription(); ?>" class="form-control"
                placeholder="Descripción" aria-label="description" required>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text mdi mdi-briefcase"></span>
              </div>
              <input type="text" name="vacancy" value="<?= $j->getVacancy(); ?>" class="form-control"
                placeholder="Vacante" aria-label="vacancy" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('trabajos').addEventListener('submit', function (e) {
    e.preventDefault();
    Swal.fire({
      title: "Buen Trabajo!",
      text: "El Empleo ha sido agregado exitosamente!",
      icon: "success",
      confirmButtonText: 'Ok'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    });
  });
</script>