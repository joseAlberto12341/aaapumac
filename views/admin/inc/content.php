<div class="title">
  <h2 class="title"
    style="text-align:center; color: #004080; font-weight: bold; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
    Asociación de Agentes Aduanales del Puerto de Manzanillo
  </h2>
</div>

<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12 order-md-2 order-1 theme-counter d-flex justify-content-center">
      <div class="bg"
        style="background: url(/src/views/assets/img/illustration/mundo.png) no-repeat center center; background-size: cover; padding: 85px 20px; width: 100%; text-align: center;">
        <!-- <h6 style="color: #0275d8; font-weight: 700; font-size: 22px; margin-bottom: 10px;">AAAPUMAC</h6> -->
        <div class="img-fluid">
          <img src="/src/views/assets/img/logo-a.png" alt="tino" style="width: 100%; max-width: 150px;">
        </div><br>
        <h2 style="font-size: 32px; margin-bottom: 40px; font-weight: 700;">Métricas Clave de Nuestro Éxito</h2>
        <div class="row justify-content-center">
          <div class="col-md-4 col-6 mb-4">
            <div class="single-counter-box"
              style="padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);">
              <div class="number" style="font-size: 38px; font-weight: bold; color: #0275d8; margin-bottom: 10px;">
                 <span class="timer" data-from="0" data-speed="1500"
                  data-refresh-interval="5"><?php echo $visitas; ?></span>  
              </div>
              <p style="color: #004080; font-size: 20px; font-weight: 700; margin: 15px 0;">Visitas del sitio</p>
            </div>
          </div>
          <div class="col-md-4 col-6 mb-4">
            <div class="single-counter-box"
              style="padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);">
              <div class="number" style="font-size: 38px; font-weight: bold; color: #0275d8; margin-bottom: 10px;">
                <span class="timer" data-from="0" data-to="50" data-speed="1500" data-refresh-interval="5">39</span>
              </div>
              <p style="color: #004080; font-size: 20px; font-weight: 700; margin: 15px 0;">Años Laborando actualmente</p>
            </div>
          </div>
          <div class="col-md-4 col-6 mb-4">
            <div class="single-counter-box"
              style="padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);">
              <div class="number" style="font-size: 38px; font-weight: bold; color: #0275d8; margin-bottom: 10px;">
                <span class="timer" data-from="0" data-speed="1500" data-refresh-interval="5">64</span>
              </div>
              <p style="color: #004080; font-size: 20px; font-weight: 700; margin: 15px 0;">Miembros del Equipo</>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.timer').forEach(function (timerElement) {
      const from = parseInt(timerElement.getAttribute('data-from')) || 0;
      const to = parseInt(timerElement.textContent);
      const speed = parseInt(timerElement.getAttribute('data-speed'));
      const refreshInterval = parseInt(timerElement.getAttribute('data-refresh-interval'));
      let currentValue = from;
      const increment = (to - from) / (speed / refreshInterval);

      const timer = setInterval(() => {
        currentValue += increment;
        if (currentValue >= to) {
          clearInterval(timer);
          currentValue = to;
        }
        timerElement.textContent = Math.floor(currentValue);
      }, refreshInterval);
    });
  });

</script>



<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 10px; overflow: hidden;">
      <div class="modal-header"
        style="background-color: #3afe; color: white; display: flex; justify-content: center; align-items: center;">
        <i class="mdi mdi-account-plus" style="font-size: 1.5em; margin-right: 10px;"></i>
        <h5 class="modal-title" id="addContactModalLabel">Agregar nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
          style="filter: invert(1); position: absolute; right: 15px;"></button>
      </div>
      <div class="modal-body" style="padding: 2rem;">
        <form method="post" id="qr" action="/admin/registrar">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de Usuario</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-account"></i></span>
              <input type="text" class="form-control" id="usuario" name="usuario" required
                style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-email"></i></span>
              <input type="email" class="form-control" id="email" name="email" required
                style="border-radius: 0 5px 5px 0; border: 1px solid #ccc;">
            </div>
          </div>

          <div class="mb-3">
            <label for="patente" class="form-label">Contraseña</label>
            <div class="input-group">
              <span class="input-group-text"><i class="mdi mdi-certificate"></i></span>
              <input type="password" class="form-control" id="contraseña" name="contraseña" required
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
  document.getElementById('qr').addEventListener('submit', function (e) {
    e.preventDefault();
    Swal.fire({
      title: "Buen Trabajo, Qr Registrado!",
      text: "El Usuario ha sido agregado exitosamente!",
      icon: "success",
      confirmButtonText: 'Ok'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>