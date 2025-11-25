<div class="card card-rounded">
    <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div>
                <h4 class="card-title card-title-dash" style="font-size: 42px; font-weight: 700; color: #0056b3; margin-bottom: 20px;">
                    <?php echo $answer['data']['title']; ?>
                </h4>
                <p class="card-subtitle card-subtitle-dash" style="color: #175fa9; font-size: 22px; font-weight: 700; margin: 15px 0;">
                    <?php echo $answer['data']['subtitle']; ?>
                </p>
                
                <!-- Información del rol fijo -->
                <div class="alert alert-info">
                    <i class="mdi mdi-information-outline"></i>
                    <strong>Coordinador creando:</strong> Estás registrando un nuevo <strong>Asociado</strong>
                </div>
            </div>
        </div>

        <!-- Mostrar mensajes de error -->
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="mdi mdi-alert-circle-outline"></i>
                <?php echo $_SESSION['error_message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>

        <form id="formAsociado" method="POST" action="/Aaapumac/asociadoCoordinador/AltaPersonal">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username" class="form-label">Nombre de usuario *</label>
                        <input type="text" class="form-control" id="username" name="username" 
                               value="<?php echo $_POST['username'] ?? ''; ?>" required 
                               placeholder="Ingresa el nombre de usuario">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="form-label">Correo electrónico *</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               value="<?php echo $_POST['email'] ?? ''; ?>" required 
                               placeholder="ejemplo@correo.com">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña *</label>
                        <input type="password" class="form-control" id="password" name="password" required 
                               placeholder="Mínimo 6 caracteres">
                        <small class="form-text text-muted">La contraseña debe tener al menos 6 caracteres</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_password" class="form-label">Confirmar contraseña *</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required 
                               placeholder="Repite la contraseña">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Rol del usuario</label>
                        <input type="text" class="form-control bg-light" value="Asociado (Rol 9)" readonly>
                        <small class="form-text text-muted">Todos los usuarios creados serán asociados</small>
                        <!-- Campo oculto para enviar el rol 9 -->
                        <input type="hidden" name="id_role" value="9">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_status" class="form-label">Estatus *</label>
                        <select class="form-control" id="id_status" name="id_status" required>
                            <option value="1" selected>Activo</option>
                            <option value="2">Inactivo</option>
                            <option value="3">Eliminado</option>
                        </select>
                        <small class="form-text text-muted">Estado inicial del usuario</small>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="mdi mdi-content-save"></i> <?php echo $answer['data']['button']; ?>
                    </button>
                    <a href="/Aaapumac/asociadoCoordinador/listadoPersonal" class="btn btn-secondary btn-lg">
                        <i class="mdi mdi-arrow-left"></i> Cancelar
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formAsociado');
    
    form.addEventListener('submit', function(e) {
        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        
        // Validar que todos los campos estén llenos
        if (!username || !email || !password || !confirmPassword) {
            e.preventDefault();
            Swal.fire({
                title: 'Campos incompletos',
                text: 'Todos los campos marcados con * son obligatorios',
                icon: 'warning',
                confirmButtonText: 'Entendido'
            });
            return false;
        }
        
        // Validar contraseñas
        if (password !== confirmPassword) {
            e.preventDefault();
            Swal.fire({
                title: 'Error',
                text: 'Las contraseñas no coinciden',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return false;
        }
        
        // Validar longitud de contraseña
        if (password.length < 6) {
            e.preventDefault();
            Swal.fire({
                title: 'Contraseña muy corta',
                text: 'La contraseña debe tener al menos 6 caracteres',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return false;
        }
        
        // Validar formato de email básico
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            e.preventDefault();
            Swal.fire({
                title: 'Email inválido',
                text: 'Por favor ingresa un formato de email válido',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return false;
        }
        
        // Confirmación final
        Swal.fire({
            title: "¿Crear nuevo asociado?",
            html: `
                <div class="text-left">
                    <p><strong>Usuario:</strong> ${username}</p>
                    <p><strong>Email:</strong> ${email}</p>
                    <p><strong>Rol:</strong> Asociado (9)</p>
                    <p><strong>Estatus:</strong> ${document.getElementById('id_status').options[document.getElementById('id_status').selectedIndex].text}</p>
                </div>
            `,
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, crear asociado',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Mostrar loading
                Swal.fire({
                    title: 'Creando asociado...',
                    text: 'Por favor espere',
                    icon: 'info',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                
                // Enviar formulario
                form.submit();
            }
        });
        
        e.preventDefault();
    });

    // Validación en tiempo real para las contraseñas
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    
    function validatePasswords() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            confirmPasswordInput.style.borderColor = '#dc3545';
        } else {
            confirmPasswordInput.style.borderColor = '#28a745';
        }
    }
    
    passwordInput.addEventListener('input', validatePasswords);
    confirmPasswordInput.addEventListener('input', validatePasswords);
});
</script>

<style>
.form-control:read-only {
    background-color: #f8f9fa;
    cursor: not-allowed;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.form-text {
    font-size: 0.875rem;
}
</style>