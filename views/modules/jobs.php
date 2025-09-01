<section class="job-list-area-section" style="padding: 50px 0; background: linear-gradient(135deg, #f5f7fa, #c3cfe2);">
    <div class="container col-10 wow fadeInUp">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-inner"
                    style="background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 6px 12px rgba(0,0,0,0.1);">
                    <span class="title-tag"
                        style="color: #004080; font-weight: bold; font-size: 30px; text-transform: uppercase; letter-spacing: 3px;">
                        ¡CONOCE LAS VACANTES DISPONIBLES QUE TENEMOS PARA TI!
                    </span>
                    <h3 class="title" style="color: #007bff; font-size: 32px; font-weight: 700; margin: 15px 0;">
                       ENVIANOS TU CV PARA FORMAR PARTE DE NOSOTROS
                    </h3><br>
                    <div class="job-list-wrapper">
                        <div class="row">
                            <?php foreach ($answer['jobs'] as $j): ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="job-card">
                                        <div class="job-image-box">
                                            <img src="<?php echo $j->getImage(); ?>" alt="Job Image">
                                            <div class="job-overlay">
                                                <div class="job-hover-content">
                                                    <p><?php echo $j->getResponsabilities(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-text">
                                            <h4 class="job-title"><a
                                                    href='/public/<?php echo $j->getId(); ?>/job'><?php echo $j->getTitle(); ?></a>
                                            </h4>
                                            <p class="job-details"><i class="fas fa-calendar-alt"></i> <strong>Fecha
                                                    Límite:</strong> <?php echo $j->getDeadline(); ?></p>
                                            <p class="job-details"><i class="fas fa-graduation-cap"></i>
                                                <strong>Escolaridad:</strong> <?php echo $j->getEducation(); ?>
                                            </p>
                                            <p class="job-details"><i class="fas fa-briefcase"></i>
                                                <strong>Experiencia:</strong> <?php echo $j->getWorkExperience(); ?> año(s)
                                            </p>
                                            <p class="job-details"><i class="fas fa-pen-alt"></i>
                                                <strong>Responsabilidades:</strong> <?php echo $j->getResponsabilities(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .job-card {
        background-color: #f8f9fa;
        border: 2px solid #004080;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
        display: flex;
        flex-direction: column;
        height: 500px;
        /* Altura fija para todas las tarjetas */
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .job-image-box {
        position: relative;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
        height: 250px;
        /* Mayor altura para la imagen */
    }

    .job-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Asegura que la imagen cubra el área sin distorsionar */
        border-radius: 8px 8px 0 0;
    }

    .job-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-radius: 8px 8px 0 0;
    }

    .job-image-box:hover .job-overlay {
        opacity: 1;
    }

    .job-text {
        text-align: left;
        padding: 20px;
        flex-grow: 1;
        /* Permite que el contenedor de texto ocupe el espacio restante */
        overflow: hidden;
    }

    .job-title {
        font-size: 22px;
        font-weight: 700;
        color: #0056b3;
        margin-bottom: 10px;
    }

    .job-title a {
        text-decoration: none;
        color: inherit;
        transition: color 0.3s ease;
    }

    .job-title a:hover {
        color: #003d80;
    }

    .job-details,
    .responsabilities {
        font-size: 14px;
        color: #333;
        margin-bottom: 10px;
    }

    .job-details i,
    .responsabilities i {
        color: #007bff;
        margin-right: 8px;
    }

    .responsabilidades {
        font-size: 14px;
        color: #555;
        margin-top: auto;
        padding-top: 15px;
        border-top: 1px solid #ddd;
    }
</style>

<!-- <div class="col-lg-4">

    <div class="sidebar">

        <div class="widget search-widget">
            <form action="#">
                <input type="text" placeholder="Search here">
                <button type="submit"><i class="far fa-search"></i></button>
            </form>
        </div>

        <div class="widget cat-widget">
            <h4 class="widget-title">Category</h4>
            <ul>
                <li>
                    <a href="#">All<span>(15)</span></a>
                </li>
                <li>
                    <a href="#">Financial Planning <span>(10)</span></a>
                </li>
                <li>
                    <a href="#">Relationship Buildup <span>(05)</span></a>
                </li>
                <li>
                    <a href="#">Investement Planning<span>(04)</span></a>
                </li>
                <li>
                    <a href="#">Marketing Strategy <span>(10)</span></a>
                </li>
                <li>
                    <a href="#">Product Strategy <span>(05)</span></a>
                </li>
            </ul>
        </div>
    </div>
</div> -->