<?php

namespace App\Controllers;

use App\Models\JobInfoModel;
use App\Models\UserModel;
use App\Repositories\AdminRepository;
use App\Models\InventarioModel;
use app\Models\ContactosModel;
use App\Models\AndenNModel;

class AdminController
{
    public static function Home()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'content',
        ];
    }
    public static function Profile()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'content',
            'data' => [
                'title' => 'Usuarios',
                'subtitle' => 'Información de tu perfil',
                'button' => 'Agregar Nuevo Usuario',
                'icon' => 'mdi mdi-account-outline',
            ],
            'usuario' => $usuario = AdminRepository::getUsuarioList(),
            // 'profile' => $profile = ClientRepository::getProfile(),
        ];
    }
    /* Comienza administracion */
    public static function serviAdmi()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviAdmi'
        ];
    }
    public static function convenio()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'convenio',
            'data' => [
                'title' => 'Convenios',
                'subtitle' => 'Convenios disponibles',
            ],
        ];
    }
    public static function inventario()
    {
        $inventario = new InventarioModel();
        $productos = $inventario->obtenerProductos();

        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'inventario',
            'data' => [
                'title' => 'Inventario',
                'subtitle' => 'Control de inventario',
                'button' => 'Agregar Nuevo Producto',
                'icon' => 'mdi mdi-cart-arrow-right',
                'productos' => $productos,
            ],
        ];
    }
    public static function producMas()
    {
        if (isset($_POST['id_producto'])) {
            $id_producto = $_POST['id_producto'];

            // Crear instancia del modelo
            $inventario = new InventarioModel();

            // Llamar al método de aumento
            if ($inventario->aumentarCantidad($id_producto, 1)) {
                // Redirige o muestra un mensaje de éxito
                header("Location: /admin/inventario");
                exit;
            } else {
                // Muestra un mensaje de error
                echo "Error al aumentar la cantidad.";
            }
        }
    }
    public static function producMenos()
    {
        if (isset($_POST['id_producto'])) {
            $id_producto = $_POST['id_producto'];

            $inventario = new InventarioModel();

            if ($inventario->disminuirCantidad($id_producto, 1)) {
                // Redirige o muestra un mensaje de éxito
                header("Location: /admin/inventario");
                exit;
            } else {
                // Muestra un mensaje de error
                echo "Error al disminuir la cantidad.";
            }
        }
    }
    public static function NewProduc()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $invent = AdminRepository::newProduc();

            AdminRepository::setProduc($invent, $_POST);
            header('Location: /admin/inventario');
            exit();
        }
    }
    public static function Jobs()
    {
        $jobs = AdminRepository::listJobs();

        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'jobs',
            'data' => [
                'title' => 'Bolsa de Trabajo',
                'subtitle' => 'Empleos registrados',
                'button' => 'Agregar nuevo empleo',
                'icon' => 'mdi mdi-briefcase',
            ],
            'jobs' => $jobs,
        ];
    }
    public static function Lock()//sirve para desbloquear un trabajo
    {
        $id = $_GET['id'];
        $job = new JobInfoModel();
        $job->update($id, 'id_status = 0', [//se trae el metodo update de entitymodel
            'where' => 'id = :id',
            'replaces' => [':id' => $id],
        ]);
        header('Location: /admin/jobs');
    }

    public static function Unlock()//sirve para desbloquear un trabajo
    {
        $id = $_GET['id'];
        $job = new JobInfoModel();
        $job->update($id, 'id_status = 1', [
            'where' => 'id = :id',
            'replaces' => [':id' => $id],
        ]);
        header('Location: /admin/jobs');
    }
    /* termina administracion */
 
    /* comienza arancelario */
    public static function serviAran()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviAran'
        ];
    }
    /* termina arancelario */

    /* Comienta sistemas */
    public static function serviTi()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',

            'action' => 'serviTi'
        ];
    }
    /* termina sistemas */

    /* Comienza operativo */
    public static function serviOpe()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviOpe'
        ];
    }            
    /* termina operativo */

    /* Comienza callcenter */
    public static function serviCall()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviCall'
        ];
    }
    /* termina callcenter */

    /* comienza navieras */
    public static function serviNavi()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviNavi'
        ];
    }
    /* termina navieras */

    /* Comienza juridico */
    public static function serviJuri()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviJuri'
        ];
    }
    /* termina juridico */
    
    /* comienza calidad */
    public static function serviCali()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'serviCali'
        ];
    }

    /* termina calidad */
    public static function Modals()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'modals',
            'data' => [
                'title' => 'Avisos',
                'subtitle' => 'Tienes  avisos registrados',
                'button' => 'Agregar nuevo aviso',
                'icon' => 'mdi mdi-bell-ring-outline',
            ],
            'modal' => $modal = AdminRepository::getModalList(),
        ];
    }
    public static function Modal()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'modal',
            'data' => [
                'title' => 'Editar aviso',
                'subtitle' => 'Nuevos avisos',
                'button' => 'Agregar nuevo aviso',
                'icon' => 'mdi mdi-bell-ring-outline',
            ],
            'modal' => $modal = AdminRepository::getModalList(),
        ];
    }
    public static function andenes()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'andenes',
            'andenN' => $andenN = AdminRepository::getAndenList(),
            'andenS' => $andenNS = AdminRepository::getAndensList(),
        ];
    }

    /*  public static function validar()
     {
         return [
             'view'=> 'admin/home.php',
             'scripts'=> 'admin',
             'action'=> 'validar',
         ];
     } */
    public static function validarAnden()
    {
        // Obtener los valores del formulario POST
        $patente = $_POST['patente'] ?? '';
        $cd_Dependiente = $_POST['cd_dependiente'] ?? '';

        // Asegúrate de que los valores no estén vacíos
        if (empty($patente) || empty($cd_Dependiente)) {
            $_SESSION['message'] = 'Patente y/o CD Dependiente no proporcionados';
            header('Location: /admin/profile');
            die();
        }   
        // Llamar a la función del repositorio para validar
        $validar = AdminRepository::getValidar($patente, $cd_Dependiente);

        // Verificar si la validación es exitosa
        if ($validar) {
            // Guardar la patente y cd_dependiente en la sesión
            $_SESSION['patente'] = $patente;
            $_SESSION['cd_dependiente'] = $cd_Dependiente;

            // Redirigir a la página de andenes con la información
            header('Location: /admin/andenes');
            exit;
        } else {
            $_SESSION['message'] = 'Patente y/o CD Dependiente incorrectos';
            // No redirigir, solo enviar el control de vuelta a la página con el modal
            header('Location: /admin/serviOpe');
            die();
        }
    }

    public static function User()
    {
        $id = $_GET['id'];
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'user',
            'data' => [
                'title' => 'Editar Usuario',
                'subtitle' => 'Edita un usuario',
                'button' => 'Actualizar',
                'icon' => 'mdi mdi-account-outline',
            ],
            'user' => $user = AdminRepository::findUser($id),
        ];
    }
    public static function validar()
    {
        // Obtener el listado de contactos desde el repositorio
        $contactos = AdminRepository::validarPatente();
        // Configurar los datos para la vista
        return [
            'view' => 'admin/home.php', // Ruta de la vista
            'scripts' => 'admin',
            'action' => 'trazabilidad',
            'data' => [
                'title' => 'Validación de Agente Aduanal',  // Título de la vista
                'subtitle' => 'Verifica si la patente está registrada',  // Subtítulo
            ],
            'contactos' => $contactos, // Asegúrate de que esta es la clave correcta
        ];
    }
    public static function Trazabilidad()
    {
        $contactos = AdminRepository::validarPatente();
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'trazabilidad',
            'data' => [
                'title' => 'Validación de Agente Aduanal',  // Título de la vista
                'subtitle' => 'Verifica si la patente está registrada',  // Subtítulo
            ],
            'contactos' => $contactos,
        ];
    }

    public static function NewUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $users = AdminRepository::newUsers();

            AdminRepository::setUsers($users, $_POST);
            header('Location: /admin/users');
            exit();
        }
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'user',
            'data' => [
                'title' => 'Nuevos Usuarios',
                'subtitle' => 'Agrega un nuevo Usuario',
                'button' => 'Guardar',
                'icon' => 'mdi mdi-briefcase',
                'action' => 'newuser',
            ],
        ];
    }
    public static function Registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Registrar el usuario en la base de datos
            $regis = AdminRepository::registrarU();

            // Generar el código QR
            include_once __DIR__ . '/../views/admin/inc/userqr.php';
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $email = $_POST['email'];
            $ruta_qr = generarCodigoQR($usuario, $contraseña, $email);

            // Guardar la ruta del código QR en la base de datos
            AdminRepository::setUsuario($regis, array_merge($_POST, ['codigo_qr' => $ruta_qr]));

            // Redirigir a la página de perfil
            header('Location: /admin/profile');
            exit();
        }
    }
    public static function Qr()
    {
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'usersqr',
            'data' => [
                'title' => 'Usuarios',
                'subtitle' => 'Información de tu perfil',
                'button' => 'Agregar Nuevo Usuario',
                'icon' => 'mdi mdi-account-outline',
            ],
            'usuario' => $usuario = AdminRepository::getUsuarioList(),
        ];
    }
    public static function NewJob()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $job = AdminRepository::newJob();

            AdminRepository::setJob($job, $_POST);
            header('Location: /admin/jobs');
            exit();
        }
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'job',
            'data' => [
                'title' => 'Nuevo Empleo',
                'subtitle' => 'Agrega un nuevo empleo',
                'button' => 'Guardar',
                'icon' => 'mdi mdi-briefcase',

            ],
        ];
    }
    public static function editJob()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $job = AdminRepository::editJob();

            AdminRepository::setJob($job, $_POST);
            header('Location: /admin/jobs');
            exit();
        }
    }
    public static function Users()
    {
        $users = AdminRepository::getUserList();

        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'users',
            'data' => [
                'title' => 'Usuarios',
                'subtitle' => 'Tienes  usuarios registrados',
                'button' => 'Agregar nuevo usuario',
                'icon' => 'mdi mdi-account-plus',

            ],
            'users' => $users,
        ];
    }

    public static function addContact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Crea una nueva instancia del modelo
            $contacto = AdminRepository::addContact();

            // Llena el modelo con los datos del formulario
            AdminRepository::setContac($contacto, $_POST);

            // Redirige a la página de operaciones
            header('Location: /admin/ops');
            exit(); // Asegúrate de detener la ejecución del script después de redirigir
        }

        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'ops',
        ];
    }

    public static function NewAviso()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $aviso = AdminRepository::addAviso();

            AdminRepository::setAviso($aviso, $_POST);

            header('Location: /admin/modals');
            exit();
        }
    }

    public static function Job()
    {
        $id = $_GET['id'];
        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'job',
            'data' => [
                'title' => 'Editar Empleo',
                'subtitle' => 'Edita un empleo',
                'button' => 'Actualizar',
                'icon' => 'mdi mdi-briefcase',
            ],
            'job' => $job = AdminRepository::findJob($id),
        ];
    }

    public static function UpdateJob()
    {
        $id = $_GET['id'];
        $job = AdminRepository::findJob($id);

        if (!$job) {
            header('Location: /admin/jobs?error=404');
            die();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            AdminRepository::setJob($job, $_POST);

            header('Location: /admin/jobs');
            die();
        }

        return [
            'view' => 'admin/home.php',
            'scripts' => 'admin',
            'action' => 'job',
            'data' => [
                'title' => 'Editar Empleo',
                'subtitle' => 'Edita un empleo',
                'button' => 'Actualizar',
                'icon' => 'mdi mdi-briefcase',
                'job' => $job,
            ],
        ];
    }

    public static function DeleteJob()
    {
        $id = $_GET['id'];
        $job = AdminRepository::findJob($id);

        if (!$job) {
            header('Location: /admin/jobs?error=404');
            die();
        }

        AdminRepository::delJob($job);
        header('Location: /admin/jobs');
    }
}
