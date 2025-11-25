<link rel="stylesheet" href="/Aaapumac/src/views/assets/css/sidebar.css">
<nav class="sidebar-modern" id="sidebar">
    <!-- Header del Sidebar -->
    <div class="sidebar-header">
        <div class="sidebar-toggle">
            <button class="toggle-btn" type="button" data-bs-toggle="minimize">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>
        <div class="sidebar-brand">
            <a href="/Aaapumac/" class="brand-logo-full">
                <img src="/Aaapumac/src/views/assets/img/logo-2.png" alt="AAAPUMAC" />
            </a>
            
        </div>
    </div>

    <!-- Menú de Navegación -->
    <div class="sidebar-menu">
        <ul class="nav-menu">
            <!-- Inicio -->
            <li class="nav-item">
                <a class="nav-link" href="/Aaapumac/administrativo/profile">
                    <div class="nav-icon">
                        <i class="mdi mdi-view-dashboard"></i>
                    </div>
                    <span class="nav-text">Inicio</span>
                </a>
            </li>

            <!-- Administrativo -->
            <li class="nav-category">
                <span class="category-title">Departamentos</span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Aaapumac/administrativo/jobs">
                    <div class="nav-icon gradient-blue">
                        <i class="mdi mdi-shield-crown-outline"></i>
                    </div>
                    <span class="nav-text">Bolsa de trabajo</span>
                </a>
            </li>

            <!-- Arancelario -->
            <li class="nav-item">
                <a class="nav-link" href="/Aaapumac/administrativo/convenio">
                    <div class="nav-icon gradient-purple">
                        <i class="mdi mdi-window-shutter-cog"></i>
                    </div>
                    <span class="nav-text">Convenios</span>
                </a>
            </li>

            <!-- Sistemas -->
            <li class="nav-item">
                <a class="nav-link" href="/Aaapumac/administrativo/serviAdministrativo">
                    <div class="nav-icon gradient-teal">
                        <i class="mdi mdi-monitor-cellphone-star"></i>
                    </div>
                    <span class="nav-text">Control de Almacen</span>
                </a>
            </li>

            <!-- Operativo -->
            <li class="nav-item">
                <a class="nav-link" href="/Aaapumac/administrativo/serviOpe">
                    <div class="nav-icon gradient-orange">
                        <i class="mdi mdi-human-dolly"></i>
                    </div>
                    <span class="nav-text">Usuarios</span>
                </a>
            </li>

            
            <!-- Logout -->
            <li class="nav-item">
                <a href="/Aaapumac/login/logout" class="nav-link">
                    <div class="nav-icon gradient-red">
                        <i class="mdi mdi-power"></i>
                    </div>
                    <span class="nav-text">Cerrar Sesión</span>
                </a>
            </li>


        </ul>
    </div>
</nav>

<script>
// Script para toggle del sidebar
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.toggle-btn');
    const sidebar = document.querySelector('.sidebar-modern');
    const body = document.body;

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('minimized');
            body.classList.toggle('sidebar-minimized');
        });
    }

    // Activar link actual
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});
</script>