<section class="job-details-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="job-details-wrapper"
                    style="display: flex; align-items: center; border: 1px solid #ddd; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); border-radius: 16px; overflow: hidden; background-color: #fff; transition: transform 0.3s ease; padding: 20px;">

                    <!-- Botón de regreso con flecha mejorado -->
                    <a href="javascript:history.back()"
                        style="position: absolute; top: 20px; left: 40px; font-size: 24px; color: #007bff; text-decoration: none; background: none; border: none; padding: 0; box-shadow: none;">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <!-- Imagen grande a la izquierda con animación de aparición -->
                    <div class="job-image wow slideInLeft" style="flex: 2; overflow: hidden; border-radius: 5px; margin-right: 20px;">
                        <img src="<?php echo $answer['job']->getImage(); ?>" alt="Job Image"
                            style="width: 100%; height: auto; object-fit: cover;  animation: fadeInZoom 1s ease-out;">
                    </div>

                    <!-- Información a la derecha-->
                    <div class="job-details wow zoomIn" style="flex: 3; color: #333;">
                        <h3 class="title" style="color: #004080; font-weight: bold; font-size: 30px; text-transform: uppercase; letter-spacing: 3px;">
                            <?php echo $answer['job']->getTitle(); ?>
                        </h3>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Vacantes:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getVacancy(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Responsabilidades:</strong>
                            <p class="desc" style="font-size: 15px; line-height: 1.6; color: #777;">
                                <?php echo $answer['job']->getResponsabilities(); ?></p>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Estatus:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getIdStatus(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Escolaridad:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getEducation(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Experiencia:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getExperience(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Locación:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getLocation(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Salario:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;">$<?php echo $answer['job']->getSalary(); ?></span>
                        </div>

                        <div class="info" style="margin-bottom: 15px;">
                            <strong class="label"
                                style="font-weight: bold; font-size: 18px; color: #555;">Beneficios:</strong>
                            <span class="desc"
                                style="font-size: 16px; color: #777;"><?php echo $answer['job']->getBenefits(); ?></span>
                        </div>

                        <div class="info">
                            <strong class="label" style="font-weight: bold; font-size: 18px; color: #555;">Para más
                                información:</strong>
                            <a href="mailto:bolsa@aaamzo.org.mx"
                                style="color: #007bff; text-decoration: underline; font-size: 16px;">
                                Contactar bolsa de trabajo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animaciones CSS -->
<style>
    @keyframes fadeInZoom {
        from {
            opacity: 0;
            transform: scale(0.8);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .job-image img {
        transition: transform 0.5s ease;
    }

    .job-image img:hover {
        transform: scale(1.05);
    }
</style>