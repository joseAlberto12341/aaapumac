<div class="card card-rounded">
    <div class="card-body">
        <div>
            <!-- Flecha de regreso -->
            <a href="serviAdmi" class="btn btn-link text-primary d-inline-flex align-items-center"
                style="font-size: 20px; text-decoration: none; margin-bottom: 15px; padding: 5px 10px; border-radius: 8px; background-color: #f0f8ff;">
                <i class="mdi mdi-arrow-left" style="margin-right: 5px;"></i>
                Regresar
            </a>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><i
                        class="mdi mdi-help-circle-outline"></i> Ayuda
                </button>
            </div>
            <!-- <h4 class="card-title card-title-dash"
                style="font-size: 42px; font-weight: 700; color: #0056b3; margin-bottom: 20px;">
                Listado de <?php echo $answer['data']['title']; ?>
            </h4>
            <p class="card-subtitle card-subtitle-dash"
                style="color: #007bff; font-size: 22px; font-weight: 700; margin: 15px 0;">
                <?php echo $answer['data']['subtitle']; ?>
            </p> -->

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="section-title mb-5 text-center">
            <span class="title-tag d-block text-primary display-3 font-weight-bold">Asociación de Agentes
                Aduanales del Puerto de Manzanillo</span><br>
            <span class="title-tag" style="color: #007bff; font-size: 22px; font-weight: 700; margin: 15px 0;">CONVENIOS
                DISPONIBLES -
                AAAPUMAC 2024
            </span><br>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg"> <!-- modal-lg para tamaño grande -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel"
                            style="font-size: 35px; color: #0056b3; margin-bottom: 20px;">Convenios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p style="text-align: justify;">AAAPUMAC pone a su disposición el uso de convenios con algunos
                            Gimnasios, Instituciones
                            Educativas y Hoteles de la ciudad, mismos a los que los asociados y sus colaboradores podrán
                            utilizar.</p>
                        <p style="text-align: justify;"><strong>Para poder hacer uso de estos convenios se deberá
                                realizar lo siguiente:
                            </strong><br>
                            <strong>1.</strong> Enviar un correo electrónico a <a
                                href="mailto:aux.administrativo@aaamzo.org.mx">aux.administrativo@aaamzo.org.mx</a> o
                            tambien puedes contactarnos con
                            <a href="mailto:recepcion@aaamzo.org.mx">recepcion@aaamzo.org.mx</a>
                            solicitando el beneficio del convenio deseado. <br><br>
                            <strong>2.</strong> El correo deberá contener la siguiente información: patente, nombre del
                            agente aduanal y
                            nombre de la persona a utilizar el convenio. Adjunto al mismo deberán incluir el escáner del
                            documento que acredite que pertenece a su empresa (alta IMSS, credencial de la empresa,
                            Recibo de Nómina).<br><br>
                            <strong>Nota:</strong> Para los convenios de hoteles favor de especificar en el correo: <br>
                            <span class="mdi mdi-check-all"></span> Nombre del Hotel <br>
                            <span class="mdi mdi-check-all"></span> No. de Habitaciones a utilizar <br>
                            <span class="mdi mdi-check-all"></span> Plan de Habitación<br>
                            <span class="mdi mdi-check-all"></span> Nombre del Huésped (No. de adultos y niños) <br>
                            <span class="mdi mdi-check-all"></span> Fecha de entrada y salida del hotel.<br><br>
                            <strong>3.</strong> Posteriormente recibirán un correo para que puedan acudir a nuestra
                            oficina a recoger la carta confirmación que deberán presentar al gimnasio o institución
                            educativa. Para el caso
                            de los hoteles le será confirmada su reservación mediante correo electrónico, una vez
                            realizada esta confirmación se procede a que de manera directa el hotel y el asociado se
                            coordinen para el pago y la facturación.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="title align-items-center">
            <h2 class="title"
                style="color: #004080; font-weight: bold; font-size: 2rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
                GIMNASIOS
            </h2>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/spotclub-st.jpg" alt="ST. John's"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalStJohns">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/olimpia-gym.jfif" alt="Olimpia GYM"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalOlimpiaGym">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/Anytime-Fitness-Logo.png" alt="Anytime Fitness"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalAnytimeFitness">
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal ST. John's -->
        <div class="modal fade" id="modalStJohns" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #28a745;">
                        <h5 class="modal-title text-primary">ST. John’s</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="/src/views/assets/img/convenios/spotclub-st.jpg" alt="ST. John's"
                                    style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-muted">Beneficios:</h4>
                                <ul style="list-style: none; padding: 0;  font-size: 20px;">
                                    <li><i class="fas fa-check"
                                            style="color: #28a745; margin-right: 6px;"></i><strong>Descuento
                                            en Mensualidad:</strong> 18% de descuento.</li>
                                    <li><i class="fas fa-check"
                                            style="color: #28a745; margin-right: 6px;"></i><strong>Costo
                                            de Mensualidad:</strong> $600 (Incluye clases y gimnasio).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Olimpia GYM -->
        <div class="modal fade" id="modalOlimpiaGym" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #28a745;">
                        <h5 class="modal-title text-primary">Olimpia GYM</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="/src/views/assets/img/convenios/olimpia-gym.jfif" alt="Olimpia GYM"
                                    style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-muted">Beneficios:</h4>
                                <ul style="list-style: none; padding: 0; font-size: 20px;">
                                    <li><i class="fas fa-check"
                                            style="color: #28a745; margin-right: 6px;"></i><strong>Inscripción
                                            Gratuita:</strong> Sin costo al afiliarte.</li>
                                    <li><i class="fas fa-check"
                                            style="color: #28a745; margin-right: 6px;"></i><strong>Mensualidad
                                            Especial:</strong> $700.00.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Anytime Fitness -->
        <div class="modal fade" id="modalAnytimeFitness" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #28a745;">
                        <h5 class="modal-title text-primary">Anytime Fitness</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="/src/views/assets/img/convenios/Anytime-Fitness-Logo.png"
                                    alt="Anytime Fitness"
                                    style="width: 100%; max-width: 250px; height: auto; border-radius: 8px;">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-muted">Beneficios:</h4>
                                <table class="table table-sm" style="font-size: 0.9rem; border-color: #ddd;">
                                    <thead>
                                        <tr>
                                            <th style="width: 50%;">Beneficio</th>
                                            <th style="width: 25%;">Precio Normal</th>
                                            <th style="width: 25%;">Precio Especial</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mensualidad</td>
                                            <td>$899</td>
                                            <td>$799</td>
                                        </tr>
                                        <tr>
                                            <td>Inscripción</td>
                                            <td>$499</td>
                                            <td>Gratis</td>
                                        </tr>
                                        <tr>
                                            <td>Llave de Acceso</td>
                                            <td>$500</td>
                                            <td>$300</td>
                                        </tr>
                                        <tr>
                                            <td>Cuota Anual</td>
                                            <td>$500</td>
                                            <td>$250</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title align-items-center">
            <h2 class="title"
                style="color: #004080; font-weight: bold; font-size: 2rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
                INSTITUCIONES EDUCATIVAS
            </h2>
        </div>
        <section class="convenios-section section-gap grey-bg" style="margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1 -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <img src="/src/views/assets/img/convenios/vizcaya.png" alt="Universidad Vizcaya de las Américas"
                            class="img-fluid rounded" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#modalVizcaya">
                    </div>

                    <!-- Convenio 2 -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <img src="/src/views/assets/img/convenios/icep.png" alt="ICEP" class="img-fluid rounded"
                            style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#modalICEP">
                    </div>

                    <!-- Convenio 3 -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center align-items-center">
                        <img src="/src/views/assets/img/convenios/colegio-st.jpg" alt="Colegio St. John's"
                            class="img-fluid rounded" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#modalStJohn">
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal Vizcaya -->
        <div class="modal fade" id="modalVizcaya" tabindex="-1" aria-labelledby="modalVizcayaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalVizcayaLabel">Universidad Vizcaya de las Américas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/vizcaya.png" alt="Universidad Vizcaya"
                                class="img-fluid rounded">
                        </div>
                        <div>
                            <h4>Beneficios:</h4>
                            <ul style="font-size: 20px;">
                                <li><strong>25% de Descuento en Mensualidades</strong>: Obtén un 25% de descuento en
                                    todas tus mensualidades.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal ICEP -->
        <div class="modal fade" id="modalICEP" tabindex="-1" aria-labelledby="modalICEPLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalICEPLabel">Instituto de Estudios Universitarios Colimense
                            "ICEP"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/icep.png" alt="ICEP" class="img-fluid rounded">
                        </div>
                        <div>
                            <h4>Beneficios:</h4>
                            <ul style="font-size: 20px;">
                                <li><strong>Beca del 50% de Descuento en la Primera Inscripción</strong>: Obtén un 50%
                                    de descuento en tu primera inscripción.</li>
                                <li><strong>Beca del 10% de Descuento en la Mensualidad</strong>: Obtén un 10% de
                                    descuento en todas tus mensualidades.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Colegio St. John's -->
        <div class="modal fade" id="modalStJohn" tabindex="-1" aria-labelledby="modalStJohnLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalStJohnLabel">Colegio St. John's</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/colegio-st.jpg" alt="Colegio St. John's"
                                class="img-fluid rounded">
                        </div>
                        <div style="font-size: 20px;">
                            <h4>Beneficios:</h4>
                            <ul>
                                <li><strong>15% de Descuento en Colegiatura</strong>: Desde preescolar hasta media
                                    superior.</li>
                            </ul>
                            <h5>Tabla de Beneficios</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nivel</th>
                                            <th>Inscripción</th>
                                            <th>Colegiatura (11 Meses)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Maternal y Preescolar</td>
                                            <td>$7,250.00</td>
                                            <td>$4,500.00</td>
                                        </tr>
                                        <tr>
                                            <td>Primaria</td>
                                            <td>$7,950.00</td>
                                            <td>$5,800.00</td>
                                        </tr>
                                        <tr>
                                            <td>Secundaria</td>
                                            <td>$8,050.00</td>
                                            <td>$6,600.00</td>
                                        </tr>
                                        <tr>
                                            <td>Bachillerato</td>
                                            <td>$8,050.00</td>
                                            <td>$7,600.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p><em>Los costos no incluyen el descuento por convenio.</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px;  margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/terranova.png" alt="terranova"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalTerranova">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/univer-col.png" alt="univer"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalUniver">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/vovablo.jpg" alt="vocablo"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalVocablo">
                    </div>

                    <!-- Convenio 4: Politécnica -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/politecnica.png" alt="politecnica"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalMultitectica">
                    </div>
                </div>
            </div>
        </section>

        <!-- modal terranova -->
        <div class="modal fade" id="modalTerranova" tabindex="-1" aria-labelledby="modalTerranovaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTerranovaLabel">Colegio Terranova</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/terranova.png" alt="terranova"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">Colegio
                                Terranova</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                                <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 8px;"></i>
                                    <div style="font-size: 20px;">
                                        <strong>12% de Descuento en Colegiatura</strong><br>
                                        <span style="color: #555;">Descuento del 12% sobre el precio vigente de la
                                            colegiatura mensual en niveles de preescolar, primaria, secundaria y
                                            bachillerato.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal univer col -->
        <div class="modal fade" id="modalUniver" tabindex="-1" aria-labelledby="modalUniverLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalUniverLabel">Universidad Univer Colima</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/univer-col.png" alt="Univer"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">Universidad
                                Univer Colima</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                                <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 8px;"></i>
                                    <div style="font-size: 20px;">
                                        <strong>Beca de 30% en Inscripción y 10% en Mensualidades</strong><br>
                                        <span style="color: #555;">Válida durante 1 año sin pagos de reinscripciones
                                            para bachillerato general escolarizado.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal vocablo -->
        <div class="modal fade" id="modalVocablo" tabindex="-1" aria-labelledby="modalVocabloLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalVocabloLabel">Vocablo "Tecnología en Idiomas"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/vovablo.jpg" alt="vocablo"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">Vocablo
                                "Tecnología en Idiomas"</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div style="font-size: 20px;">
                                        <strong>Curso de Inglés con 4 Niveles</strong><br>
                                        <span style="color: #555;">Cada nivel consta de 80 clases, totalizando 320
                                            clases en todo el curso.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Horarios Flexibles</strong><br>
                                        <span style="color: #555;">Horarios disponibles de lunes a viernes de 7:00 am a
                                            12:00 pm y de 4:00 pm a 9:00 pm, y sábados de 8:00 am a 2:00 pm, con un
                                            mínimo de 4 horas a la semana.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Inscripción Única</strong><br>
                                        <span style="color: #555;">Inscripción única de $440.00 MXN.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Costo de Mensualidad</strong><br>
                                        <span style="color: #555;">$1,200.00 MXN por nivel.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal politecnica -->
        <div class="modal fade" id="modalMultitectica" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Escuela Politécnica</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/politecnica.png" alt="politecnica"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">Escuela
                                Politécnica</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                                <li style="display: flex; align-items: flex-start; margin-bottom: 10px;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 8px;"></i>
                                    <div style="font-size: 20px;">
                                        <strong>Descuento del 10% en Inscripción</strong><br>
                                        <span style="color: #555;">Este beneficio es válido para todos los niveles
                                            educativos de la institución.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="title align-items-center">
            <h2 class="title"
                style="color: #004080; font-weight: bold; font-size: 2rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
                HOTELES
            </h2>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px;margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/pergola.jpg" alt="pergola"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalPergola">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/City.jpg" alt="cytyExpres"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalCity">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/holiday.jpg" alt="holiday"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalHoliday">
                    </div>

                    <!-- Convenio 4: Politécnica -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/tesoro.jpg" alt="Tesoro"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalTesoro">
                    </div>
                </div>
            </div>
        </section>
        <!-- modal pergola -->
        <div class="modal fade" id="modalPergola" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">La Pergola</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/pergola.jpg" alt="pergola"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 20px; color: #007bff; font-weight: bold; display: block;">
                                La Pérgola y Hotel Ejecutivo Pez Vela
                            </span>
                            <h4 style="font-size: 15px; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 18px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Sencilla</strong><br>
                                        <span style="color: #555;">$1,788.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Doble</strong><br>
                                        <span style="color: #555;">$1,788.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Triple</strong><br>
                                        <span style="color: #555;">$2,175.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Cuádruple</strong><br>
                                        <span style="color: #555;">$2,561.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Incluye Impuestos</strong>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Desayuno de Cortesía</strong>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Check-In/Check-Out</strong><br>
                                        <span style="color: #555;">Check-In: 15:00 hrs / Check-Out: 13:00 hrs</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Restricciones de Fecha</strong><br>
                                        <span style="color: #555;">Aplica restricciones en fecha como: Santa,
                                            Pascua, Verano y Fin de
                                            Año.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal city -->
        <div class="modal fade" id="modalCity" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">City Espress Hoteles</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/City.jpg" alt="city" class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 20px; color: #007bff; font-weight: bold; display: block;">
                                City Express
                            </span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0;font-size: 18px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Sencilla</strong><br>
                                        <span style="color: #555;">$1,180.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Habitación Doble</strong><br>
                                        <span style="color: #555;">$1,280.00 por noche</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Persona Adicional</strong><br>
                                        <span style="color: #555;">$250.00</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Desayuno Americano de Cortesía</strong>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Transportación Gratuita</strong><br>
                                        <span style="color: #555;">10 km a la redonda, previa reservación y sujeta a
                                            disponibilidad.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Internet de Alta Velocidad</strong><br>
                                        <span style="color: #555;">Disponible en habitaciones y áreas
                                            públicas.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Coctel Gerencial</strong>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Check-In/Check-Out</strong><br>
                                        <span style="color: #555;">Check-In: 15:00 hrs / Check-Out: 13:00 hrs</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Restricciones de Fecha</strong><br>
                                        <span style="color: #555;">Aplican del 18 al 31 de diciembre.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal holiday -->
        <div class="modal fade" id="modalHoliday" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Holiday Inn Express</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/holiday.jpg" alt="holiday"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 20px; color: #007bff; font-weight: bold; display: block;">
                                Holiday Inn Express
                            </span>
                            <h4 style="font-size: 20px; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 20px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Tarifa Preferencial para 1 o 2 Personas</strong><br>
                                        <span style="color: #555;">Tarifa de $1,328.00 + IVA por noche.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Persona Adicional</strong><br>
                                        <span style="color: #555;">Costo adicional de $396.00 por persona.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Desayuno Express Tipo Buffet</strong><br>
                                        <span style="color: #555;">Cortesía en desayuno tipo buffet.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Internet de Alta Velocidad</strong><br>
                                        <span style="color: #555;">Internet en áreas comunes sin costo
                                            adicional.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Coctel de Gerencia</strong><br>
                                        <span style="color: #555;">Disfruta de un coctel cortesía de la
                                            gerencia.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tesoro -->
        <div class="modal fade" id="modalTesoro" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Hotel Tesoro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/tesoro.jpg" alt="tesoro"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 20px; color: #007bff; font-weight: bold; display: block;">
                                Tesoro
                            </span>
                            <h4 style="font-size: 18px; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 20px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Descuento en Reservaciones</strong><br>
                                        <span style="color: #555;">20% de descuento sobre el tarificador.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Check-In/Check-Out</strong><br>
                                        <span style="color: #555;">Check-In: 15:00 hrs / Check-Out: 12:00 hrs</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/reforma.jpeg" alt="reforma"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalReforma">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/container.png" alt="container"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalContainer">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/plus.jpg" alt="plus"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalPlus">
                    </div>

                    <!-- Convenio 4: Politécnica -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/fiesta.jpg" alt="fiesta"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalFiesta">
                    </div>
                </div>
            </div>
        </section>
        <!-- modal reforma -->
        <div class="modal fade" id="modalReforma" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Holiday Inn Express Mexico Reforma</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/reforma.jpeg" alt="reforma"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">
                                Holiday Inn Express Mexico Reforma
                            </span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios para 1 persona:</h4>
                            <table class="table table-sm"
                                style="font-size: 20px; margin-bottom: 0; border-color: #ddd;">
                                <thead>
                                    <tr>
                                        <th style="width: 60%;font-size: 20px;">Tipo de Habitación</th>
                                        <th style="width: 40%;font-size: 20px;">Tarifa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 15px;">Habitación Estándar</td>
                                        <td style="font-size: 15px;">$105.00 USD</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Habitación Superior</td>
                                        <td style="font-size: 20px;">$110.00 USD</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 20px;">Habitación Panorámica</td>
                                        <td style="font-size: 20px;">$115.00 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-utensils"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Desayuno buffet
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-wifi"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Internet
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-phone"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Llamadas locales
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-briefcase"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Centro de negocio las 24 hrs
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-dumbbell"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Gimnasio 24 hrs
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-lock"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Caja de seguridad en la habitación
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal container -->
        <div class="modal fade" id="modalContainer" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Container Inn, Puerto Vallarta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/container.png" alt="container"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">
                                Container Inn, Puerto Vallarta
                            </span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.9rem; margin-bottom: 0; border-color: #ddd;">
                                <thead>
                                    <tr>
                                        <th style="width: 60%;">Tipo de Habitación</th>
                                        <th style="width: 40%;">Tarifa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 15px;">Estándar (Sencilla o Doble)</td>
                                        <td style="font-size: 15px;">$950.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Junior Suite (Sencilla o Doble)</td>
                                        <td style="font-size: 15px;">$1,050.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Deluxe (Sencilla o Doble)</td>
                                        <td style="font-size: 15px;">$1,200.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">Suite 2 Recámaras (Sencilla o Doble)</td>
                                        <td style="font-size: 15px;">$1,200.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-utensils"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Desayuno americano de cortesía
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-calendar-alt"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Precio habitación por Noche
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-clock"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Check-In 15:00 hrs / Check-Out 12:00 hrs
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-user-plus"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Persona extra tiene un costo de $250.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal plus -->
        <div class="modal fade" id="modalPlus" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Best Western Plus Luna del Mar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/plus.jpg" alt="plus" class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 1.3rem; color: #007bff; font-weight: bold; display: block; margin-bottom: 5px;">
                                Best Western Plus Luna del Mar
                            </span>
                            <h4 style="font-size: 1.1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.95rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 8px; text-align: left;">Opción</th>
                                        <th style="padding: 8px; text-align: left;">1 Persona</th>
                                        <th style="padding: 8px; text-align: left;">2 Personas</th>
                                        <th style="padding: 8px; text-align: left;">3 Personas</th>
                                        <th style="padding: 8px; text-align: left;">4 Personas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 8px;font-size: 15px;">Solo hospedaje</td>
                                        <td style="padding: 8px;font-size: 15px;">$1,480.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$1,670.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$1,990.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$2,420.00</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;font-size: 15px;">Hospedaje con desayuno</td>
                                        <td style="padding: 8px;font-size: 15px;">$1,680.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$2,070.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$2,590.00</td>
                                        <td style="padding: 8px;font-size: 15px;">$2,790.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-utensils"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Plan con desayuno tipo americano: 1 plato de fruta, 1 platillo de nuestra carta,
                                    1 jugo, café y pan.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fiesta Mexicana -->
        <div class="modal fade" id="modalFiesta" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">Fiesta Mexicana</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/fiesta.jpg" alt="fiesta"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 20px; color: #007bff; font-weight: bold; display: block; margin-bottom: 5px;">
                                Fiesta Mexicana
                            </span>
                            <h4 style="font-size: 1.1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.95rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 8px;font-size: 18px;">Plan</th>
                                        <th style="padding: 8px;font-size: 18px;">Descuento</th>
                                        <th style="padding: 8px;font-size: 18px;">Beneficio Adicional</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 8px;font-size: 15px;">Europeo (con desayuno)</td>
                                        <td style="padding: 8px;font-size: 15px;">11% tarifas por habitación</td>
                                        <td style="padding: 8px;font-size: 15px;">Desayuno tipo buffet</td>
                                        <td style="padding: 8px;font-size: 15px;">-</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;font-size: 15px;">Todo incluido (alimento y bebidas)
                                        </td>
                                        <td style="padding: 8px;font-size: 15px;">11% tarifas por persona</td>
                                        <td style="padding: 8px;font-size: 15px;">2 menores gratis (0-12 años) <br>por
                                            habitación
                                            (Domingo - Jueves)</td>

                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-utensils"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Desayuno, comida, cena, snacks, shows diurnos y nocturnos, barra nacional de
                                    <br>
                                    bebidas y restaurante de especialidad.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/barcelo.png" alt="barcelo"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalBarcelo">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/cabo.jpg" alt="cabo"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalCabo">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/caracoles.jpg" alt="caracoles"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalCaracoles">
                    </div>

                    <!-- Convenio 4: Politécnica -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/marbella.jpg" alt="marbella"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalMarbella">
                    </div>
                </div>
            </div>
        </section>
        <!-- modal barcelo -->
        <div class="modal fade" id="modalBarcelo" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">BARCELÓ
                            KARMINA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/barcelo.png" alt="barcelo"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">BARCELÓ
                                KARMINA</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Plan</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Ocupación</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Junior Suite</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Junior Suite Vista al Mar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Continental</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Sencilla</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,300.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,800.00</td>

                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Todo Incluido</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Sencilla</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,800.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$3,300.00</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Todo Incluido</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Doble</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,200.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Todo Incluido</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Triple</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,000.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,100.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Impuestos incluidos
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-times-circle"
                                        style="color: #dc3545; font-size: 1rem; margin-right: 6px;"></i>
                                    Las tarifas no aplican en Semana Santa, puentes y días festivos
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-clock"
                                        style="color: #007bff; font-size: 1rem; margin-right: 6px;"></i>
                                    Check-In 15:00 hrs / Check-Out 12:00 hrs
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal cabo -->
        <div class="modal fade" id="modalCabo" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">HOTEL
                            CABO BLANCO (BARRA DE NAVIDAD)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/cabo.jpg" alt="cabo" class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">HOTEL
                                CABO BLANCO (BARRA DE NAVIDAD)</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Tipo de habitación y precios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Plan</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Tipo de habitación</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Temporada Alta</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Temporada Media</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Temporada Baja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Europeo</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Habitación estándar</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,870.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,590.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,496.00</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Continental</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Habitación estándar</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,250.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2,070.00</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,870.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal caracoles -->
        <div class="modal fade" id="modalCaracoles" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">HOTEL
                            CARACOLES</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/caracoles.jpg" alt="caracoles"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">HOTEL
                                CARACOLES</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Tarifas de domingo a jueves:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 10px; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Tipo Hab</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Capacidad Máxima</th>
                                        <th style="padding: 4px 8px; font-size: 18px;"># de Camas</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Tfa Neta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Sencilla</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 2 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas indiv.</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$870</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Cdpl V. Blvd</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 4 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas queen</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,070</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Cdpl V. Mar</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 4 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas queen</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,170</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Tarifas de viernes y sábado:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 10px; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Tipo Hab</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Capacidad Máxima</th>
                                        <th style="padding: 4px 8px; font-size: 18px;"># de Camas</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Tfa Neta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Sencilla</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 2 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas indiv.</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$970</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Cdpl V. Blvd</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 4 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas queen</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,170</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Cdpl V. Mar</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">1 a 4 personas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">2 camas queen</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1,270</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-info-circle"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Incluye desayuno americano con costo de $130.00 por persona.
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percent"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    10% descuento sobre tarifa de mostrador en temporadas altas, puentes y días
                                    festivos (no aplica a las tarifas mostradas).
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal marbella -->
        <div class="modal fade" id="modalMarbella" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel"> Hotel Marbella</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/marbella.jpg" alt="marbella"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">
                                Hotel Marbella
                            </span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.9rem; margin-bottom: 0; border-color: #ddd;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%; font-size: 18px;">Ocupación</th>
                                        <th style="width: 50%; font-size: 18px;">Tarifa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 15px;">1 Persona</td>
                                        <td style="font-size: 15px;">$870.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">2 Personas</td>
                                        <td style="font-size: 15px;">$1,040.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">3 Personas</td>
                                        <td style="font-size: 15px;">$1,340.00</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 15px;">4 Personas</td>
                                        <td style="font-size: 15px;">$1,480.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 0.9rem; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-info-circle"
                                        style="color: skyblue; font-size: 20px; margin-right: 6px;"></i>
                                    <div>
                                        <strong>Plan sin alimentos</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/hadas.jpg" alt="hadas"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalHadas">
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal 1 -->
        <div class="modal fade" id="modalHadas" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="width: auto; max-width: 90%;">
                <div class="modal-content" style="max-height: calc(100vh - 3rem); overflow-y: auto;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">HADAS BY BRISAS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div style="flex: 1; padding: 1rem;">
                        <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">
                            HADAS BY BRISAS
                        </span>
                        <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                        <ul style="list-style: none; padding: 0; font-size: 18px;">
                            <li><i class="fas fa-info-circle" style="color: #28a745; margin-right: 6px;"></i>
                                Precio por noche.</li>
                            <li><i class="fas fa-percent" style="color: #28a745; margin-right: 6px;"></i>
                                Tarifas en Moneda Nacional, por habitación sencilla o doble en Plan Europeo (No
                                incluye ningún alimento).</li>
                        </ul>

                        <h4 style="font-size: 1rem; margin-top: 8px;">Tipo de Plan:</h4>
                        <p style="font-size: 0.8rem; color: #333;">Europeo</p>

                        <h4 style="font-size: 1rem; margin-top: 8px;">Temporadas y Tarifas:</h4>
                        <table class="table table-sm"
                            style="font-size: 0.75rem; margin-bottom: 10px; border-color: #ddd; table-layout: fixed; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="padding: 4px; font-size: 18px;">Temporada</th>
                                    <th style="padding: 4px; font-size: 18px;">Habitación de Lujo</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Brisas Beach Club</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Suite Fantasía</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">ENE 03 – MAR 30, ABR 16 – <br>JUL 20, AGO
                                        27 – DIC
                                        20 (Baja)</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $3,427 |<br> Tarifa
                                        Comercial:
                                        $1,939.7</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,248 |<br> Tarifa
                                        Comercial:
                                        $2,801.26</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,605 |<br> Tarifa
                                        Comercial:
                                        $2,976.19</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">NAVIDAD (DIC 21 – DIC 24)<br> y PUENTES
                                        (Alta)
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,022 |<br> Tarifa
                                        Comercial:
                                        $2,326.45</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,843 |<br> Tarifa
                                        Comercial:
                                        $3,188.01</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,200 |<br> Tarifa
                                        Comercial:
                                        $3,362.94</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">VERANO (JUL 21 – AGO 26),<br> PASCUA (ABR
                                        09 – ABR
                                        15)</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $3,785 |<br> Tarifa
                                        Comercial:
                                        $2,100.35</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,607 |<br> Tarifa
                                        Comercial:
                                        $2,961.91</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,964 |<br> Tarifa
                                        Comercial:
                                        $3,136.84</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px;">SEMANA SANTA (MAR 31 – ABR 08),<br> FIN DE AÑO
                                        (DIC 25 – ENER 01)</td>
                                    <td colspan="3" style="padding: 4px;">Aplica tarifa pública</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">HADAS BY BRISAS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 style="font-size: 1rem; margin-top: 8px;">Tipo de Plan:</h4>
                        <p style="font-size: 0.8rem; color: #333;">Desayuno Buffet</p>

                        <table class="table table-sm"
                            style="font-size: 0.75rem; margin-bottom: 10px; border-color: #ddd; table-layout: fixed; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="padding: 4px; font-size: 18px;">Temporada</th>
                                    <th style="padding: 4px; font-size: 18px;">Ocupación</th>
                                    <th style="padding: 4px; font-size: 18px;">Habitación de Lujo</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Brisas Beach Club</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Suite Fantasía</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">ENE 03 – MAR 30,<br> ABR 16 –
                                        JUL 20,
                                        AGO
                                        27 – DIC 20 (Baja)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,379 |<br> Tarifa
                                        Comercial:
                                        $2,213.40</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,201 |<br> Tarifa
                                        Comercial:
                                        $3,074.96</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,558 |<br> Tarifa
                                        Comercial:
                                        $3,249.89</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,379 |<br> Tarifa
                                        Comercial:
                                        $2,487.10</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,201 |<br> Tarifa
                                        Comercial:
                                        $3,348.66</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,558 |<br> Tarifa
                                        Comercial:
                                        $3,523.59</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">NAVIDAD (DIC 21 – DIC 24)<br>
                                        y
                                        PUENTES
                                        (Alta)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,855 |<br> Tarifa
                                        Comercial:
                                        $2,600.15</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,677 |<br> Tarifa
                                        Comercial:
                                        $3,461.71</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,034 |<br> Tarifa
                                        Comercial:
                                        $3,636.64</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,855 |<br> Tarifa
                                        Comercial:
                                        $2,873.85</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,677 |<br> Tarifa
                                        Comercial:
                                        $3,735.41</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,034 |<br> Tarifa
                                        Comercial:
                                        $3,910.34</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">VERANO (JUL 21 – AGO 26),<br>
                                        PASCUA
                                        (ABR
                                        09 – ABR 15)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,617 |<br> Tarifa
                                        Comercial:
                                        $2,374.05</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,439 |<br> Tarifa
                                        Comercial:
                                        $3,235.61</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,796 |<br> Tarifa
                                        Comercial:
                                        $3,410.54</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,617 |<br> Tarifa
                                        Comercial:
                                        $2,647.75</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,439 |<br> Tarifa
                                        Comercial:
                                        $3,509.31</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,796 |<br> Tarifa
                                        Comercial:
                                        $3,784.04</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">SEMANA SANTA (MAR 31 – ABR
                                        08),<br>
                                        FIN DE
                                        AÑO (DIC 25 – ENER 01)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td colspan="3" style="padding: 4px; font-size: 15px;">Aplica tarifa pública</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td colspan="3" style="padding: 4px; font-size: 15px;">Aplica tarifa pública</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3"
                            data-bs-toggle="modal">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">HADAS BY BRISAS</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 style="font-size: 1rem; margin-top: 8px;">Tipo de Plan:</h4>
                        <p style="font-size: 0.8rem; color: #333;">Todo Incluido</p>

                        <h4 style="font-size: 1rem; margin-top: 8px;">Temporadas y Tarifas:</h4>
                        <table class="table table-sm"
                            style="font-size: 0.75rem; margin-bottom: 10px; border-color: #ddd; table-layout: fixed; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="padding: 4px; font-size: 18px;">Temporada</th>
                                    <th style="padding: 4px; font-size: 18px;">Ocupación</th>
                                    <th style="padding: 4px; font-size: 18px;">Habitación de Lujo</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Brisas Beach Club</th>
                                    <th style="padding: 4px; font-size: 18px;">H. Suite Fantasía</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">ENE 03 – MAR 30, ABR 16 – JUL
                                        20,<br>
                                        AGO
                                        27 – DIC 20 (Baja)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,470 |<br> Tarifa
                                        Comercial:
                                        $2,620
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,292 |<br> Tarifa
                                        Comercial:
                                        $3,482
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,649 |<br> Tarifa
                                        Comercial:
                                        $3,356
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,085 |<br> Tarifa
                                        Comercial:
                                        $3,630
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,907 |<br> Tarifa
                                        Comercial:
                                        $4,492
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,264 |<br> Tarifa
                                        Comercial:
                                        $4,666
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">NAVIDAD (DIC 21 – DIC 24)<br>
                                        y
                                        PUENTES
                                        (Alta)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,152 |<br> Tarifa
                                        Comercial:
                                        $3,140
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,974 |<br> Tarifa
                                        Comercial:
                                        $4,002
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,331 |<br> Tarifa
                                        Comercial:
                                        $4,176
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,044 |<br> Tarifa
                                        Comercial:
                                        $4,355
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,866 |<br> Tarifa
                                        Comercial:
                                        $5,217
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $7,223 |<br> Tarifa
                                        Comercial:
                                        $5,391
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">VERANO (JUL 21 – AGO 26),<br>
                                        PASCUA
                                        (ABR
                                        09 – ABR 15)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $4,676 |<br> Tarifa
                                        Comercial:
                                        $3,000
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,498 |<br> Tarifa
                                        Comercial:
                                        $4,860
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,855 |<br> Tarifa
                                        Comercial:
                                        $4,036
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $5,568 |<br> Tarifa
                                        Comercial:
                                        $4,235
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,390 |<br> Tarifa
                                        Comercial:
                                        $5,094
                                    </td>
                                    <td style="padding: 4px; font-size: 15px;">Tarifa Pública: $6,747 |<br> Tarifa
                                        Comercial:
                                        $5,271
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;" rowspan="2">SEMANA SANTA (MAR 31 – ABR
                                        08),<br>
                                        FIN DE
                                        AÑO (DIC 25 – ENER 01)</td>
                                    <td style="padding: 4px; font-size: 15px;">SGL</td>
                                    <td colspan="3" style="padding: 4px; font-size: 15px;">Aplica tarifa pública</td>
                                </tr>
                                <tr>
                                    <td style="padding: 4px; font-size: 15px;">DBL</td>
                                    <td colspan="3" style="padding: 4px; font-size: 15px;">Aplica tarifa pública</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 style="font-size: 20px; margin-top: 10px;">Adicionales:</h4>
                        <div style="display: flex; gap: 20px;">
                            <!-- Columna Izquierda -->
                            <ul style="list-style: none; padding: 0; font-size: 0.85rem;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percent"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    15% de descuento en alimentos y bebidas directamente en centros de consumo
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percent"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    15% de descuento en lavandería
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-ticket-alt"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    15% de descuento en el Day Pass (no aplica en Semana Santa, puentes y días
                                    festivos)
                                </li>
                            </ul>

                            <!-- Columna Derecha -->
                            <ul style="list-style: none; padding: 0; font-size: 0.85rem;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-users"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    15% de descuento en eventos sociales de los propietarios o colaboradores
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-spa"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    15% de descuento en servicios de SPA (previa reservación)
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-exclamation-circle"
                                        style="color: #28a745; font-size: 20px; margin-right: 6px;"></i>
                                    Beneficios sujetos a disponibilidad
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal">Regresar</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="title align-items-center">
            <h2 class="title"
                style="color: #004080; font-weight: bold; font-size: 2rem; text-transform: uppercase; letter-spacing: 1px; border-bottom: 4px solid #004080; padding-bottom: 15px; margin-bottom: 30px;">
                VARIOS
            </h2>
        </div>
        <section class="fact-section-three section-gap grey-bg" style="margin-top: 50px;  margin-bottom: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Convenio 1: ST. John's -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/fadalab.jpg" alt="fadalab"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalFadalab">
                    </div>

                    <!-- Convenio 2: Olimpia GYM -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/restaurante.jpg" alt="la pergola"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalRestaurante">
                    </div>

                    <!-- Convenio 3: Anytime Fitness -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/spa.jpg" alt="spa"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalSpa">
                    </div>

                    <!-- Convenio 4: Politécnica -->
                    <div class="col-lg-3 col-md-6 mb-4 d-flex justify-content-center">
                        <img src="/src/views/assets/img/convenios/stjhon.jpg" alt="alberca"
                            style="width: 200px; height: auto; object-fit: contain; border-radius: 8px; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#modalSt">
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="modalFadalab" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">LABORATORIO
                            FADALAB</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/fadalab.jpg" alt="fadalab"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">LABORATORIO
                                FADALAB</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px;font-size: 18px;">Beneficio</th>
                                        <th style="padding: 4px 8px;font-size: 18px;">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px;font-size: 15px;">Pruebas COVID</td>
                                        <td style="padding: 4px 8px;font-size: 15px;">20% descuento en pruebas COVID</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px;font-size: 15px;">Pruebas de laboratorio</td>
                                        <td style="padding: 4px 8px;font-size: 15px;">20% descuento en cualquier prueba de
                                            laboratorio</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px;font-size: 15px;">Muestras a domicilio</td>
                                        <td style="padding: 4px 8px;font-size: 15px;">Sin costo a partir de 10 personas; $200 si es
                                            menor a 10 personas</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-vial"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    20% descuento en pruebas COVID
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-flask"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    20% descuento en cualquier prueba de laboratorio
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-home"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Toma de muestras a domicilio sin costo (después de 10 personas); $200 si son
                                    menos de 10 personas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalRestaurante" tabindex="-1" aria-labelledby="modalMultitecticaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">RESTAURANTE
                            LA PÉRGOLA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/restaurante.jpg" alt="pergola"
                                class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">RESTAURANTE
                                LA PÉRGOLA</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Promoción</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">10% Descuento</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">10% en la cuenta cualquier día de la semana de
                                            7am a 11pm (cuenta global)</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">2x1 en Pizzas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Disponible los viernes</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">2x1 en Pastas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Disponible los sábados</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">2x1 en Lasaña</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">Disponible los domingos</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">3x2 en Bebidas</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">De lunes a jueves de 1pm a 6pm</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percentage"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    10% en la cuenta cualquier día de la semana de 7am a 11pm (cuenta global)
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-pizza-slice"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    2x1 en pizzas los viernes
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-utensils"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    2x1 en pastas los sábados
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-layer-group"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    2x1 en lasaña los domingos
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-cocktail"
                                        style="color:#28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    3x2 en todas las bebidas de lunes a jueves de 1pm a 6pm
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSpa" tabindex="-1" aria-labelledby="modalMultitecticaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">CINDERELLA
                            BODY SCULPTING & SPA BY WENDY GARCIA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/spa.jpg" alt="spa" class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span
                                style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">CINDERELLA
                                BODY SCULPTING & SPA BY WENDY GARCIA</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Precios especiales:</h4>
                            <table class="table table-sm"
                                style="font-size: 0.85rem; margin-bottom: 0; border-color: #ddd; border-spacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="padding: 4px 8px; font-size: 18px;">Servicio</th>
                                        <th style="padding: 4px 8px; font-size: 18px;">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Masaje relax</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$595</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Masaje terapéutico</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$638</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Masaje de drenaje linfático</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$638</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Masaje descontracturante</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$380</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Masaje prenatal</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$638</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Preso terapia (1 o 10 sesiones)</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$298 / $2850</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Day Pass: masaje relax, exfoliación corporal y
                                            rejuvenecimiento facial</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$1275</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Limpieza facial</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$510</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Microdermoabrasión</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$595</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Rejuvenecimiento facial</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$510</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Body sculpting (10 sesiones)</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$3315</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Carboxiterapia (10 sesiones)</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$2975</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Diatermia corporal (12 sesiones)</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$3825</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 4px 8px; font-size: 15px;">Diatermia facial (1 sesión)</td>
                                        <td style="padding: 4px 8px; font-size: 15px;">$723</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 style="font-size: 1rem; margin-top: 10px;">Descuentos:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 5px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percent"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Hifu facial y corporal 15% de descuento
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-scissors"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    Depilación con cera española 10% descuento
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSt" tabindex="-1" aria-labelledby="modalMultitecticaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMultitecticaLabel">ALBERCA
                            ST. JOHN´S</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-start">
                        <div class="me-3" style="flex: 0 0 150px;">
                            <img src="/src/views/assets/img/convenios/stjhon.jpg" alt="st" class="img-fluid rounded">
                        </div>
                        <div style="flex: 1;">
                            <span style="font-size: 1.2rem; color: #007bff; font-weight: bold; display: block;">ALBERCA
                                ST. JOHN´S</span>
                            <h4 style="font-size: 1rem; margin-top: 8px;">Beneficios:</h4>
                            <ul style="list-style: none; padding: 0; font-size: 18px; margin-top: 10px;">
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-percent"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    15% descuento en mensualidad de la alberca
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <i class="fas fa-dollar-sign"
                                        style="color: #28a745; font-size: 1rem; margin-right: 6px;"></i>
                                    La mensualidad de alberca está en $700.00, 5 días a la semana
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>