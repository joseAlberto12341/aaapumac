<div class="header-nav">
    <div class="container-fluid">
        <div class="nav-container">
            <!-- Site Logo -->
            <div class="site-logo">
                <a href="../"><img src="/src/views/assets/img/logo-aa.png" alt="Logo"></a>
            </div>

            <!-- Main Menu -->
            <div class="nav-menu d-lg-flex align-items-center">

                <!-- Navbar Close Icon -->
                <div class="navbar-close">
                    <div class="cross-wrap"><span></span><span></span></div>
                </div>

                <!-- Mneu Items -->
                <div class="menu-items">
                    <ul>
                        <li class="has-submemu">
                            <a>Inicio</a>
                            <ul class="submenu">
                                <li><a href="/">Público</a></li>
                                <li><a href="/../admin ">Administrador</a> </li>
                                <li><a href="/../client">Asociados</a></li>
                            </ul>
                        </li>

                        <li class="has-submemu">
                            <a>Calidad</a>
                            <ul class="submenu">
                                <li><a href="services-2.html">Services Two</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submemu">
                            <a href="shop.html">Servicios en linea</a>
                            <ul class="submenu">
                                <li><a href="/ticket">Envio de ticket</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li><a href="/public/jobs">Bolsa de Trabajo</a></li>
                        <li><a href="/public/politica">Nuestra Politica</a></li>
                        <!-- <li class="has-submemu">
                            <ul class="submenu">
                                <li><a href="portfolio-2.html">Portfolio Two</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li> -->
                        <li><a href="src/views/modules/contact.php">Contacto</a></li>
                        <li><a href="/public/conocenos">Quienes somos</a>
                            <!-- <ul class="submenu">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="team.html">Our Team</a> </li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul> -->
                        </li>

                        <?php if (!isset($_SESSION['logged'])): ?>
                            <li>
                                <form action="/login" method="get">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-fw">Iniciar Sesión</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="has-submenu">
                                <a href="/admin">Bienvenido (<?php echo $_SESSION['username']; ?>)</a>
                                <ul class="submenu">
                                    <li><a href="/admin/profile">Perfil</a></li>
                                    <li><a href="/admin/services">Servicios</a></li>
                                    <li><a href="/login/logout">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- Pushed Item -->
                <div class="nav-pushed-item"></div>
            </div>

            <!-- Navbar Extra  -->
            <div class="navbar-extra d-flex align-items-center">
                <!-- Social Link -->
                <div class="menu-social nav-push-item">
                    <div class="menu-social-link">
                        <a href="https://www.facebook.com/Aaapumac" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/AAAPUMAC" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/aaapumac/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- off canvas menu toggler-->
                <div class="offcanvas-toggler">
                    <span><span></span><span></span><span></span></span>
                </div>
                <!-- Navbar Toggler -->
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== OFF CANVAS START ======-->
<?php include "src/views/modules/canva.php"; ?>
<!--====== OFF CANVAS END ======-->