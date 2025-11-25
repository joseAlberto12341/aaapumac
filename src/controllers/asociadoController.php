<?php
namespace App\Controllers;
use App\Repositories\AsociadoRepository;

class AsociadoController
{
    public static function Home()
    {
        return [
            'view' => 'asociado/home.php',
            'scripts' => 'asociado',
            'action' => 'content',
        ];
    }

    public static function Profile()
    {
        return [
            'view' => 'asociado/home.php',
            'scripts' => 'asociado',
            'action' => 'content',
            'data' => [ 
                'title' => 'Mi Perfil',
                'subtitle' => 'Actualiza tu información personal',
            ],
        ];
    }

    public static function aso()
    {
        // Obtener el ID del usuario LOGUEADO
        $user_id = $_SESSION['id_user'] ?? null;

        if (!$user_id) {
            $_SESSION['error_message'] = "No hay una sesión activa";
            header('Location: /Aaapumac/asociado/listadoPersonal');
            exit();
        }

        // Obtener información
        $informacionExistente = AsociadoRepository::obtenerInformacionGeneral($user_id);
        $usuarioInfo = AsociadoRepository::getPersonalById($user_id);

        return [
            'view' => 'asociado/home.php',
            'scripts' => 'asociado',
            'action' => 'aso',
            'data' => [
                'title' => 'Mi Perfil',
                'subtitle' => $usuarioInfo ? 'Bienvenido: ' . $usuarioInfo->getUsername() : 'Mi información personal',
                'icon' => 'mdi mdi-account',
                'user_id' => $user_id,
                'informacionExistente' => $informacionExistente,
                'usuarioInfo' => $usuarioInfo
            ]
        ];
    }
public static function listaPedimentos()
{
    $listaPedimentos = AsociadoRepository::listPedimentos();

    return [
        'view' => 'asociado/home.php',
        'scripts' => 'asociado',
        'action' => 'listaPedimentos',
        'data' => [
            'title' => 'Gestor de Pedimentos',
            'subtitle' => 'Pedimentos registrados',
            'button' => 'Agregar nuevo pedimento',
            'icon' => 'mdi mdi-account-multiple',
            'listaPedimentos' => $listaPedimentos, // Mueve aquí los pedimentos
        ]
    ];
}
public static function folio_pedimento()
{
    return [
        'view' => 'asociado/home.php',
        'scripts' => 'asociado',
        'action' => 'folio_pedimento',
        'data' => [
            'title' => 'Agregar Nuevo Pedimento',
            'subtitle' => 'Complete el formulario para agregar un nuevo pedimento',
            'icon' => 'mdi mdi-file-document-box-plus',
        ]
    ];
}
} 