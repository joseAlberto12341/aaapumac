<div class="title align-items-center">
    <h2 class="title"
        style="color: #004080; font-weight: bold; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
        Operativo
    </h2>
</div>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="container-fluid text-center my-5">
                <div class="row">

                    <!-- andenes -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="service-item position-relative border rounded-lg shadow h-100 p-4"
                            style="background: #f9f9f9;border-radius: 6px; height: 400px;">
                            <i class="mdi mdi-truck-delivery text-primary position-absolute"
                                style="font-size: 200px; top: 40%; right: -5px; opacity: 0.3;"></i>
                            <div class="service__icon mb-4" style="text-align: left;">
                                <i class="mdi mdi-warehouse mdi-48px text-primary"></i>
                            </div>
                            <div class="service__content" style="text-align: left;">
                                <h4 class="service__title mb-3" style="font-size: 1.75rem;">Andenes</h4>
                                <p class="service__desc mb-4" style="font-size: 1.1rem;">
                                    Administra y consulta toda la información relacionada con los andenes de carga.
                                </p>
                                <ul class="list-items list-unstyled" style="font-size: 1.1rem;">
                                    <li><i class="mdi mdi-check-circle text-success"></i> Disponibilidad de andenes</li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Horarios de carga y descarga
                                    </li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Estado de ocupación</li>
                                </ul>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#authModal"
                                    style="padding: 10px 30px; border: 3px solid #0033cc; border-radius: 30px; color: #333; text-decoration: none; font-weight: 500; font-size: 1rem; display: inline-flex; align-items: center; transition: all 0.3s ease; background-color: transparent;">
                                    <span>Ver Andenes</span>
                                    <i class="mdi mdi-arrow-right" style="margin-left: 8px; font-size: 1.2rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para autenticación -->
                    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="authModalLabel">Autenticación de Andenes</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php if (isset($_SESSION['message'])): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $_SESSION['message'] ?>
                                        </div>
                                        <?php unset($_SESSION['message']); ?>
                                    <?php endif; ?>
                                    <form id="authForm" method="POST" action="/admin/validarAnden">
                                        <div class="mb-3">
                                            <label for="patente" class="form-label">Patente</label>
                                            <input type="text" class="form-control" id="patente" name="patente"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cd_dependiente" class="form-label">CD Dependiente</label>
                                            <input type="text" class="form-control" id="cd_dependiente"
                                                name="cd_dependiente" required>
                                        </div>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- trazabilidad -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="service-item position-relative border rounded-lg shadow h-100 p-4"
                            style="background: #f9f9f9; border-radius: 6px; height: 400px;">
                            <i class="mdi mdi-file-sign text-primary position-absolute"
                                style="font-size: 200px; top: 35%; right: 5px; opacity: 0.3;"></i>
                            <div class="service__icon mb-4" style="text-align: left;">
                                <i class="mdi mdi-file-document-check mdi-48px text-primary"></i>
                            </div>
                            <div class="service__content" style="text-align: left;">
                                <h4 class="service__title mb-3" style="font-size: 1.75rem;">Trazabilidad</h4>
                                <p class="service__desc mb-4" style="font-size: 1.1rem;">
                                    Mantén un control preciso y detallado de cada etapa del proceso mediante
                                    herramientas digitales.
                                </p>
                                <ul class="list-items list-unstyled" style="font-size: 1.1rem;">
                                    <li><i class="mdi mdi-check-circle text-success"></i> Seguimiento en tiempo real
                                    </li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Historial completo de
                                        actividades</li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Alertas y notificaciones
                                        automáticas</li>
                                </ul>
                                <a href="trazabilidad"
                                    style="padding: 10px 30px; border: 3px solid #0033cc; border-radius: 30px; color: #333; text-decoration: none; font-weight: 500; font-size: 1rem; display: inline-flex; align-items: center; transition: all 0.3s ease; background-color: transparent;">
                                    <span>Explorar Trazabilidad</span>
                                    <i class="mdi mdi-arrow-right" style="margin-left: 8px; font-size: 1.2rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- sistema de qr -->
                    <div class="col-lg-4 col-sm-12 mb-4">
                        <div class="service-item position-relative border rounded-lg shadow h-100 p-4"
                            style="background: #f9f9f9; border-radius: 6px; height: 400px;">
                            <i class="mdi mdi-qrcode-scan text-primary position-absolute"
                                style="font-size: 200px; top: 35%; right: 5px; opacity: 0.3;"></i>
                            <div class="service__icon mb-4" style="text-align: left;">
                                <i class="mdi mdi-qrcode mdi-48px text-primary"></i>
                            </div>
                            <div class="service__content" style="text-align: left;">
                                <h4 class="service__title mb-3" style="font-size: 1.75rem;">Sistema QR</h4>
                                <p class="service__desc mb-4" style="font-size: 1.1rem;">
                                    Accede a toda la información de tu sistema de gestión mediante QR.
                                </p>
                                <ul class="list-items list-unstyled" style="font-size: 1.1rem;">
                                    <li><i class="mdi mdi-check-circle text-success"></i> Escaneo de inventario</li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Verificación de producto</li>
                                    <li><i class="mdi mdi-check-circle text-success"></i> Control de acceso rápido</li>
                                </ul>
                                <a href="qr"
                                    style="padding: 10px 30px; border: 3px solid #0033cc; border-radius: 30px; color: #333; text-decoration: none; font-weight: 500; font-size: 1rem; display: inline-flex; align-items: center; transition: all 0.3s ease; background-color: transparent;">
                                    <span>Ver Sistema QR</span>
                                    <i class="mdi mdi-arrow-right" style="margin-left: 8px; font-size: 1.2rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>