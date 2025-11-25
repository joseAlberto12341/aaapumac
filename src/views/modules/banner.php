<section class="banner-section banner-section-three">
    <div class="banner-slider">
        <div class="single-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-2">
                        <div class="banner-content">
                            <span class="promo-text wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="400ms">
                                Asociación de Agentes Aduanales del Puerto de Manzanillo
                            </span>
                            <h1 class="wow slideInLeft" data-wow-duration="1500ms" data-wow-delay="500ms">
                                <span class="highlight">Impulsando</span> la <br>
                                competitividad <br> en nuestro puerto
                            </h1>
                            <ul class="btn-wrap" style="list-style: none; padding: 0; margin: 0;">
                                <li class="wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                                    <a href="https://tickets.aaamzo.org.mx/" target="_blank" class="main-btn main-btn-3"
                                        style="background-color: #003366; color: #ffffff;">
                                        Generar Ticket
                                    </a>
                                </li>
                                <?php if (!isset($_SESSION['logged']) !== true): ?>
                                    <li class="wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                                        <a href="admin/profile" class="main-btn main-btn-3"
                                            style="background-color: #003366; color: #ffffff;">
                                            Servicios Web
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                                        <a href="/Aaapumac/public/contact" class="main-btn main-btn-3"
                                            style="background-color: #003366; color: #ffffff;">
                                            Asóciate
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-6 mx-auto wow fadeInRight">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"
                            style="width: 100%; height: 600px; overflow: hidden;">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" style="width: 100%; height: auto;">
                                <div class="carousel-item active">
                                    <img src="/Aaapumac/src/views/assets/img/illustration/1080.jpg" class="d-block w-100 h-100"
                                        alt="Imagen 1" style="object-fit: cover; width: auto; height: auto;">
                                </div>
                                <div class="carousel-item">
                                    <img src="/Aaapumac/src/views/assets/img/illustration/Puerto_AAAPUMAC.jpg"
                                        class="d-block w-100 h-100" alt="Imagen 3"
                                        style="object-fit: cover; width: auto; height: auto;">
                                </div>
                                <div class="carousel-item">
                                    <img src="/Aaapumac/src/views/assets/img/illustration/video-2.jpg"
                                        class="d-block w-100 h-100" alt="Imagen 4"
                                        style="object-fit: cover; width: auto; height: auto;">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>&nbsp;</div>
            </div>
        </div>
    </div>
</section>

<section id="comunicado" class="comunicado-section section-gap">
    <div style="padding: 30px; max-width: 1800px; margin: auto; font-family: Arial, sans-serif;">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2
                style="font-size: 2.5rem; font-weight: bold; color: #343a40; text-transform: uppercase; margin-bottom: 10px;">
                <span style="border-bottom: 4px solid #007bff; padding: 0 10px;">Comunicados</span>
            </h2>
            <p style="font-size: 1.2rem; color: #6c757d; max-width: 650px; margin: 0 auto;">
                Mantente informado con los <span style="color: #007bff; font-weight: bold;">últimos anuncios</span> y
                novedades importantes.
            </p>
        </div>
        <div class="row align-items-center justify-content-between wow slideInLeft" id="clientSlider">
            <!-- Comunicados -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/Antisoborno.png" alt="Comunicado 1"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">REPORTE ANTISOBORNO</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            Si tienes conocimiento de algún hecho que viole la política y los lineamientos antisoborno
                            de AAAPUMAC, ¡REPORTALO!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/comunicado.png" alt="Comunicado 3"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">AAAPUMAC INFORMA</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            CAMPAÑA / DONA UN JUGUETE
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/caarem.png" alt="Comunicado 2"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">CAPACITACIÓN</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            CURSO REFORMAS FISCALES 2025 | 16 DE ENERO
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/dominio.png" alt="Comunicado 1"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">AAAPUMAC INFORMA</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            CAMBIO DE DOMINIO AAAPUMAC
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/ssa.png" alt="Comunicado 3"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">AAAPUMAC INFORMA/VIDEO
                            TUTORIAL</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            TERMINAL MULTIPROPÓSITO Y RECINTO ESPECIALIZADO - CÓMO LIBERAR TUS MERCANCÍAS
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div
                    style="background-color: #fff; border-radius: 4px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.5s ease; height: 650px; min-height: 500px;">
                    <img src="src/views/assets/img/modal/aduanas.png" alt="Comunicado 2"
                        style="width: 500%; height: 350px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#imageModal" onclick="document.getElementById('modalImage').src=this.src">
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.8rem; color: #007bff; margin-bottom: 15px;">RECORDATORIO</h3>
                        <p style="font-size: 1.1rem; color: #6c757d;">
                            AAAPUMAC INFORMA//SE SOLICITA SU PARTICIPACION PARA PRUEBAS PITA.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Imagen ampliada" style="width: 100%; height: auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>