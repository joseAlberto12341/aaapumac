<div class="card card-rounded">
  <div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <a href="serviCall" class="btn btn-link text-primary d-inline-flex align-items-center"
          style="font-size: 20px; text-decoration: none; margin-bottom: 15px; padding: 5px 10px; border-radius: 8px; background-color: #f0f8ff;">
          <i class="mdi mdi-arrow-left" style="margin-right: 5px;"></i>
          Regresar
        </a>
        <h4 class="card-title card-title-dash"
          style="font-size: 42px; font-weight: 700; color: #0056b3; margin-bottom: 20px;">Listado de
          <?php echo $answer['data']['title']; ?></h4>
        <p class="card-subtitle card-subtitle-dash"
          style="color: #007bff; font-size: 22px; font-weight: 700; margin: 15px 0;">
          <?php echo $answer['data']['subtitle']; ?></p>
      </div>
      <div>
        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" data-bs-toggle="modal"
          data-bs-target="#modal-create-modal">
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
            <th>Acciones</th>
            <!-- <th>ID #</th> -->
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Estado</th>
            <th>Categoria</th>
            <!-- <th>Creado</th>
            <th>Actualizado</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($answer['modal'] as $m): ?>
            <tr>
              <td>
                <div class="btn-group">
                  <a href='/admin/<?php echo $m->getId(); ?>/modal' class="btn btn-warning btn-sm" title="Editar"><i
                      class="ti-pencil-alt"></i></a>
                  <a href='/admin/<?php echo $m->getId(); ?>/del' class="btn btn-danger btn-sm" title="Eliminar"><i
                      class="ti-trash"></i></a>
                </div>
              </td>
              </td>
              <!-- <td><?php echo $m->getId(); ?></td> -->
              <td><?php echo $m->getTitle(); ?></td>
              <td><?php echo $m->getDescription(); ?></td>
              <td><a href="<?php echo $m->getImage(); ?>" target="_blank"><img
                    src="/src/views/assets/img/modal/<?php echo $m->getImage(); ?>"></a>
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
</div>
<!-- Modal nuevo Aviso -->
<div class="modal fade" id="modal-create-modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 10px; overflow: hidden;">
      <div class="modal-header"
        style="background-color: #3afe; color: white; display: flex; justify-content: center; align-items: center;">
        <i class="mdi mdi-bell-plus" style="font-size: 1.5em; margin-right: 10px;"></i>
        <h5 class="modal-title" id="ModalLabel"><strong>Agregar Nuevo Aviso</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
          style="filter: invert(1); position: absolute; right: 15px;"></button>
      </div>
      <div class="modal-body" style="padding: 2rem;">
        <form method="post" id="avisos" action="/admin/NewAviso">
          <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-format-size"></i></span>
              <input type="text" class="form-control" id="title" name="title" required placeholder="Titulo"
                aria-label="title" style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-clipboard-text"></i></span>
              <input type="text" class="form-control" id="description" name="description" required
                placeholder="Descripción" aria-label="description"
                style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <div class="input-group">
              <input type="file" class="form-control" id="image" name="image" aria-label="image"
                style="border-radius: 5px; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="visible" class="form-label">Estado</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-clipboard-check"></i></span>
              <input type="text" class="form-control" id="visible" name="visible" required placeholder="Estado"
                aria-label="description" style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="id_category" class="form-label">Categoria</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-view-carousel"></i></span>
              <input type="text" class="form-control" id="id_category" name="id_category" required
                placeholder="Categoria" aria-label="Categoria"
                style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('avisos').addEventListener('submit', function (e) {
    e.preventDefault();
    Swal.fire({
      title: "Buen Trabajo!",
      text: "El Aviso ha sido agregado exitosamente!",
      icon: "success",
      confirmButtonText: 'Ok'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    });
  });
</script>