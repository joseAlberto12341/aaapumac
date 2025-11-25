<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Determinar la ruta del perfil según el tipo de usuario
$perfilUrl = "/Aaapumac/admin/profile"; // Por defecto

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    // Usar id_role que es lo que guarda el LoginController
    if (isset($_SESSION['id_role'])) {
        switch ($_SESSION['id_role']) {
            case 1: // admin
                $perfilUrl = "/Aaapumac/admin/profile";
                break;
            case 2: // user (administrativo)
                $perfilUrl = "/Aaapumac/administrativo/profile";
                break;
            case 4: // user (operativo)
                $perfilUrl = "/Aaapumac/operativo/profile";
                break;
            case 9: // user (asociado)
                $perfilUrl = "/Aaapumac/asociado/profile";
                break;
            case 10: // user (asociadoCoordinador)
                $perfilUrl = "/Aaapumac/asociadoCoordinador/profile";
                break;
            default:
                $perfilUrl = "/Aaapumac/admin/profile";
        }
    }
    
    // DEBUG: Mostrar información de la sesión
    echo "<!-- DEBUG: id_role=" . ($_SESSION['id_role'] ?? 'not set') . " -->";
    echo "<!-- DEBUG: role_name=" . ($_SESSION['role_name'] ?? 'not set') . " -->";
    echo "<!-- DEBUG: perfilUrl=" . $perfilUrl . " -->";
}
?>

<section>
    <div class="topbar-area" style="background-color: #003366; padding: 10px 0; border-bottom: 1px solid #00264d;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="topbar-contact">
                        <ul style="margin: 0; padding: 0; list-style: none; color: #ffffff;">
                            <li style="display: inline-block; margin-right: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <a href="tel:+523143311500"
                                    style="color: #ffffff; text-decoration: none; margin-left: 8px;">(+52) 314 33 11
                                    500</a>
                            </li>
                            <li style="display: inline-block; margin-right: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <a href="mailto:contacto@aaamzo.org.mx"
                                    style="color: #ffffff; text-decoration: none; margin-left: 8px;">contacto@aaamzo.org.mx</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="navbar-extra d-flex align-items-center" style="justify-content: flex-end;">
                        <!-- Social Links -->
                        <div class="menu-social nav-push-item" style="margin-right: 20px;">
                            <div class="menu-social-link">
                                <a href="https://www.facebook.com/Aaapumac" target="_blank"
                                    style="color: #ffffff; text-decoration: none; margin-left: 10px;">
                                    <i class="fab fa-facebook-f" style="font-size: 16px;"></i>
                                </a>
                                <a href="https://twitter.com/AAAPUMAC" target="_blank"
                                    style="color: #ffffff; text-decoration: none; margin-left: 10px;">
                                    <i class="fab fa-twitter" style="font-size: 16px;"></i>
                                </a>
                                <a href="https://www.instagram.com/aaapumac/" target="_blank"
                                    style="color: #ffffff; text-decoration: none; margin-left: 10px;">
                                    <i class="fab fa-instagram" style="font-size: 16px;"></i>
                                </a>
                                <a href="#" target="_blank"
                                    style="color: #ffffff; text-decoration: none; margin-left: 10px;">
                                    <i class="fab fa-linkedin" style="font-size: 16px;"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Off Canvas Menu Toggler -->
                        <div class="offcanvas-toggler" style="display: inline-block; margin-left: 20px;">
                            <span><span></span><span></span><span></span></span>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="navbar-toggler" style="display: inline-block; margin-left: 20px;">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="header-nav">
    <div class="container-fluid">
        <div class="nav-container">
            <!-- Site Logo -->
            <div class="site-logo">
                <a href="/Aaapumac/"><img src="/Aaapumac/src/views/assets/img/logo-aa.png" alt="Logo"></a>
            </div>
            <!-- Main Menu -->
            <div class="nav-menu">
                <!-- Menú de navegación -->
                <div class="menu-items">
                    <ul>
                        <?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true): ?>
                        <?php else: ?>
                            <li class="has-submenu">
                                <a>Servicios en línea</a>
                                <ul class="submenu">
                                    <li><a target="_blank" href="https://tickets.aaamzo.org.mx/">Envío de ticket</a></li>
                                    <li><a target="_blank" href="http://181.191.248.54/modulacion.aspx">Trazabilidad en Gestiones</a></li>
                                    <li><a target="_blank" href="http://lotus.aaamzo.org.mx/Bases/aaapumac/portuaria.nsf/navieras">Descargo
                                            DGA´s</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li><a href="/Aaapumac/public/jobs">Bolsa de Trabajo</a><ul class="submenu"></ul></li>
                        <li><a href="/Aaapumac/public/contact">Contacto</a></li>
                        <li><a href="/Aaapumac/public/capacitacion">Capacitación</a></li>
                        <li><a href="/Aaapumac/public/politica">Nuestra Política</a></li>
                        <li><a href="/Aaapumac/public/report">Reporte Antisoborno</a></li>
                        <?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true): ?>
                            <li>
                                <form action="/Aaapumac/login" method="get">
                                    <button type="submit" class="btn btn-primary btn-rounded btn-fw">Iniciar Sesión</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="has-submenu">
                                <a>Bienvenido (<?php echo $_SESSION['username']; ?>)</a>
                                <ul class="submenu">
                                    <!-- <li><a href="/Aaapumac/client/home">Asociado</a></li> -->
                                    <li><a href="<?php echo $perfilUrl; ?>">Perfil</a></li>
                                    <li><a href="/Aaapumac/login/logout">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="navbar-extra d-flex align-items-center">
                <div class="offcanvas-toggler" style="background-color: #003366;">
                    <span><span></span><span></span><span></span></span>
                </div>
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .submenu {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .has-submenu {
        position: relative;
    }

    .has-submenu:hover .submenu {
        display: block;
    }

    /* Estilos para el icono de chat */
    .chat-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        font-size: 32px;
        cursor: pointer;
    }

    /* Estilos para la alerta emergente */
    .chat-alert {
        position: absolute;
        bottom: calc(100% + 10px);
        right: 20px;
        padding: 8px 16px;
        background-color: #f1f1f1;
        border-radius: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
        font-size: 14px;
        white-space: nowrap;
    }

    /* Estilo para mostrar el chat */
    .chat-popup .wrapper {
        width: 370px;
        background: #fff;
        border-radius: 5px;
        border: 1px solid lightgrey;
        border-top: 0px;
        position: fixed;
        bottom: 70px;
        right: 80px;
    }

    .chat-popup .title {
        background: #1c85fd;
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        line-height: 60px;
        text-align: center;
        border-bottom: 1px solid #000000;
        border-radius: 5px 5px 0 0;
    }

    .chat-popup .form {
        padding: 20px 15px;
        min-height: 400px;
        max-height: 400px;
        overflow-y: auto;
    }

    .chat-popup .form .inbox {
        width: 100%;
        display: flex;
        align-items: baseline;
    }

    .chat-popup .form .user-inbox {
        justify-content: flex-end;
        margin: 13px 0;
    }

    .chat-popup .form .inbox .icon {
        height: 40px;
        width: 40px;
        color: #fff;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        font-size: 18px;
        background: #1c85fd;
    }

    .chat-popup .form .inbox .msg-header {
        max-width: 53%;
        margin-left: 10px;
    }

    .chat-popup .form .msg-header p {
        color: #fff;
        background: #1c85fd;
        border-radius: 10px;
        padding: 8px 10px;
        font-size: 14px;
        word-break: break-all;
    }

    .chat-popup .form .user-inbox .msg-header p {
        color: #333;
        background: #efefef;
    }

    .chat-popup .typing-field {
        display: flex;
        height: 60px;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        background: #efefef;
        border-top: 1px solid #d9d9d9;
        border-radius: 0 0 5px 5px;
    }

    .chat-popup .typing-field .input-data {
        height: 40px;
        width: 335px;
        position: relative;
    }

    .chat-popup .typing-field .input-data input {
        height: 100%;
        width: 100%;
        outline: none;
        border: 1px solid transparent;
        padding: 0 80px 0 15px;
        border-radius: 3px;
        font-size: 15px;
        background: #fff;
        transition: all 0.3s ease;
    }

    .chat-popup .typing-field .input-data input:focus {
        border-color: rgba(0, 123, 255, 0.8);
    }

    .chat-popup .input-data input::placeholder {
        color: #999999;
        transition: all 0.3s ease;
    }

    .chat-popup .input-data input:focus::placeholder {
        color: #bfbfbf;
    }

    .chat-popup .typing-field .input-data button {
        position: absolute;
        right: 5px;
        top: 50%;
        height: 30px;
        width: 65px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        outline: none;
        opacity: 0;
        pointer-events: none;
        border-radius: 3px;
        background: #1c85fd;
        border: 1px solid #1c85fd;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }

    .chat-popup .typing-field .input-data input:valid~button {
        opacity: 1;
        pointer-events: auto;
    }

    .chat-popup .typing-field .input-data button:hover {
        background: #1c2bfd;
    }

    .close-btn {
        position: absolute;
        top: 0px;
        right: 15px;
        cursor: pointer;
    }

    /* Estilo para ocultar el chat por defecto */
    .chat-popup {
        display: none;
    }

    /* Estilo para la animación de aparición */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Estilo para los botones */
    .bot-buttons {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeIn 1s forwards;
        /* Modifica la duración de la animación según lo necesites */
        display: flex;
        justify-content: center;
    }

    /* Ajuste de posición de los botones */
    .bot-buttons button {
        margin: 5px;
    }
</style>
<!-- Icono de chat -->
<div class="chat-icon" id="chat-icon">
    <img src="/Aaapumac/src/views/assets/img/illustration/imagotipo_logo.png" alt="Chatbot" style="width: 60px; height: auto;">
    <div class="chat-alert" id="chat-alert">¿Necesitas ayuda?</div>
</div>

<!-- Chat -->
<div class="chat-popup" id="chat-popup">
    <div class="wrapper">
        <div class="title">
            ChatBot AAAPUMAC
            <span class="close-btn" id="close-btn">×</span>
        </div>
        <div class="form">
            <!-- mensajes del chat -->
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p class="mb-0">Hola,<br>Mi nombre es Tino ¿cómo puedo ayudarte?</p>
                </div>
            </div>
            <!-- botones de acceso directo -->
            <div class="bot-buttons mt-3">
                <button><a class="btn btn-info bot-button" type="submit" href="public/ticket"
                        data-value="ticket">Seguimiento de
                        ticket</a></button>
                <button><a class="btn btn-info bot-button"
                        href="http://lotus.aaamzo.org.mx/Bases/aaapumac/portuaria.nsf/navieras"
                        data-value="cancel">DGA's</a></button>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" class="form-control" placeholder="Escribe algo aquí.." required>
                <button id="send-btn" class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function showChat() {
        // Mostrar el chat
        $('.chat-popup').fadeIn();

        // Mostrar los botones con animación
        $('.bot-buttons').css('display', 'flex');
    }
    $(document).ready(function () {
        $('#chat-popup').hide();
        $('#chat-alert').hide();

        // Función para mostrar u ocultar el chat al hacer clic en el icono
        $('#chat-icon').click(function () {
            $('#chat-popup').fadeToggle('fast');
            $('#chat-alert').fadeOut('fast');
        });

        // Función para cerrar el chat al hacer clic en la tache
        $(".close-btn").click(function () {
            $("#chat-popup").fadeOut('');
        });

        setTimeout(function () {
            $('#chat-alert').fadeIn();
        }, 5000); // Mostrar después de 5 segundos

        setTimeout(function () {
            $('#chat-alert').fadeOut('fast');
        }, 7000); // Ocultar después de 7 segundos

        // Función para enviar un mensaje al bot
        $("#send-btn").on("click", function () {
            var message = $("#data").val();
            $.ajax({
                url: '../Aaapumac/src/views/public/inc/chat.php',
                type: 'GET',
                data: { message: message },
                success: function (response) {
                    var userMessage = '<div class="user-inbox inbox"><div class="msg-header"><p>' + message + '</p></div></div>';
                    var botMessage = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + response + '</p></div></div>';
                    $(".form").append(userMessage);
                    $(".form").append(botMessage);
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
            $("#data").val('');
        });
    });
</script>
<!-- Navbar Extra  -->

<!--====== OFF CANVAS START ======-->
<?php include "src/views/modules/canva.php"; ?>
<!--====== OFF CANVAS END ======-->
</div>