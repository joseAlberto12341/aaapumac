<?php

namespace App\Controllers;

use App\Repositories\AdminRepository;
use App\Repositories\LoginRepository;

class LoginController
{
    public static function Home()
    {
        return [
            'view' => 'public/login.php',
            'form' => [
                'title' => 'Login',
                'action' => 'login',
                'button' => 'Iniciar Sesión',
                'message' => $_SESSION['message'] ?? '',
                'email' => $_SESSION['email'] ?? '',
                'password' => $_SESSION['password'] ?? '',
                'role' => $_SESSION['role'] ?? ''
            ],
            'scripts' => 'admin'
        ];
    }

    public static function Check()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['email']) && isset($_POST['password'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $emailCheck = LoginRepository::getUser($email, $password);

                // var_dump($emailCheck,$_POST);die();

                if ($emailCheck == null || !$emailCheck) {

                    $_SESSION['message'] = 'Usuario y/o Contraseña no encontrados';
                    header('Location: /login');
                    die();

                }

                // var_dump($_SESSION,$emailCheck,$_POST);die();

                // foreach ($emailCheck as $key) {
                $_SESSION['id_user'] = $emailCheck->getId();
                $_SESSION['username'] = $emailCheck->getUsername();
                $_SESSION['email'] = $emailCheck->getEmail();
                // $_SESSION['role'] = $key->getName();
                // }

                // var_dump($_SESSION,$emailCheck,$_POST);die();

                $_SESSION['logged'] = true;
                $_SESSION['message'] = 'Bienvenido ';
                // var_dump($_SESSION,$emailCheck,$_POST);die();
                header("Location: ../");

            }
        }
    }


    public static function Logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /');
        exit();
    }


}