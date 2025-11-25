<div class="card card-rounded">
  <div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-start">
      <div>
        <br>

        <!-- ALERTA DE ÉXITO -->
        <?php if (isset($_SESSION['success_message'])): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 80px;">
            <i class="mdi mdi-check-circle-outline"></i>
            <?php echo $_SESSION['success_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        <h4 class="card-title card-title-dash"
          style="font-size: 42px; font-weight: 700; color: #0056b3; margin-bottom: 20px;">
          <?php echo $answer['data']['title']; ?>
        </h4>
        <p class="card-subtitle card-subtitle-dash"
          style="color: #175fa9; font-size: 22px; font-weight: 700; margin: 15px 0;">
          <?php echo $answer['data']['subtitle']; ?>
        </p>

        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_GET['error']; ?>
          </div>
        <?php endif; ?>
      </div>
      <div><br>
        <a href="/Aaapumac/asociado/folio_pedimento" class="btn btn-primary">
          <i class="mdi mdi-plus"></i> <?php echo $answer['data']['button']; ?>
        </a>
      </div>
    </div>

    <br>
    <div class="table-responsive">
      <table id="order-listing" class="table table-responsive table-hover table-bordered">
        <thead class="table-primary">
          <tr>
            <th>Acciones</th>
            <th>Folio</th>
            <th>Patente</th>
            <th>Nombre Completo</th>
            <th>Fecha</th>
            <th>Estatus</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($answer['data']['listaPedimentos'])): ?>
            <?php foreach ($answer['data']['listaPedimentos'] as $pedimento): ?>
              <tr>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle d-flex align-items-center" type="button"
                      id="dropdownMenuButton<?php echo $pedimento->id; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical" style="font-size: 22px; margin-right: 6px;"></i> Acciones
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo $pedimento->id; ?>">
                      <li>
                        <a href="/Aaapumac/asociado/editarPedimento?id=<?php echo $pedimento->id; ?>" class="dropdown-item">
                          <i class="ti-pencil-alt text-gray"> </i> Editar
                        </a>
                      </li>
                      <li>
                        <a href="/Aaapumac/asociado/verPedimento?id=<?php echo $pedimento->id; ?>" class="dropdown-item">
                          <i class="ti-eye text-gray"> </i> Ver
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
                <td><?php echo htmlspecialchars($pedimento->folio); ?></td>
                <td><?php echo htmlspecialchars($pedimento->patente); ?></td>
                <td><?php echo htmlspecialchars($pedimento->nombre_completo); ?></td>
                <td>
                  <?php
                  if (!empty($pedimento->fecha) && strtotime($pedimento->fecha)) {
                    echo date('d/m/Y', strtotime($pedimento->fecha));
                  } else {
                    echo 'N/A';
                  }
                  ?>
                </td>
                <td>
                  <?php
                  $status = $pedimento->Estatus;
                  switch ((int) $status) {
                    case 1:
                      echo '<span class="badge bg-success">Activo</span>';
                      break;
                    case 2:
                      echo '<span class="badge bg-danger">Inactivo</span>';
                      break;
                    case 3:
                      echo '<span class="badge bg-warning">Pendiente</span>';
                      break;
                    default:
                      echo '<span class="badge bg-secondary">Desconocido</span>';
                  }
                  ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="text-center">No hay folios registrados</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Función para mostrar confirmación de bloqueo/desbloqueo
  function confirmJobAction(event) {
    event.preventDefault();

    const button = event.currentTarget;
    const jobId = button.getAttribute('data-id');
    const jobTitle = button.getAttribute('data-title');
    const action = button.getAttribute('data-action');

    const isLock = action === 'lock';
    const actionText = isLock ? 'bloquear' : 'desbloquear';
    const actionTitle = isLock ? 'Bloquear Empleo' : 'Desbloquear Empleo';
    const actionIcon = isLock ? 'warning' : 'success';
    const confirmButtonColor = isLock ? '#d33' : '#3085d6';

    Swal.fire({
      title: actionTitle,
      html: `¿Estás seguro que deseas <strong>${actionText}</strong> el empleo?<br><strong>"${jobTitle}"</strong>`,
      icon: actionIcon,
      showCancelButton: true,
      confirmButtonColor: confirmButtonColor,
      cancelButtonColor: '#6c757d',
      confirmButtonText: isLock ? 'Sí, bloquear' : 'Sí, desbloquear',
      cancelButtonText: 'Cancelar',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Usar parámetros GET en lugar de rutas
        const url = `/Aaapumac/administrativo/${action}?id=${jobId}`;
        window.location.href = url;
      }
    });
  }

  // Agregar event listeners a los botones de bloqueo/desbloqueo
  document.addEventListener('DOMContentLoaded', function () {
    // Event listeners para botones de bloqueo/desbloqueo
    const lockButtons = document.querySelectorAll('.lock-btn');
    const unlockButtons = document.querySelectorAll('.unlock-btn');

    lockButtons.forEach(button => {
      button.addEventListener('click', confirmJobAction);
    });

    unlockButtons.forEach(button => {
      button.addEventListener('click', confirmJobAction);
    });

    // Script para el formulario de creación
    const form = document.getElementById('trabajos');
    if (form) {
      form.addEventListener('submit', function (e) {
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
    }
  });
</script>