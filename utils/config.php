<?php
define('APP', dirname(__DIR__));
define('CONTROLLERS', APP . '/controllers');
define('REPOSITORIES', APP . '/repositories');
define('MODELS', APP . '/models');
define('VIEWS', APP . '/views');
define('UPLOADS', APP . '/uploads');
define('DEFAULT_IMAGE_TYPE', 'image/jpeg');

/* Database */
define('DB_HOST', 'localhost');
define('DB_NAME', 'aaapumac_cms');
define('DB_USER', 'aaamzo');
define('DB_PASS', '');
define('DB_CHAR', 'utf8mb4');

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}


/* Password */
// define('PASSWORD_DEFAULT', 'Aaamzo20Xx?');
//xtyAjFo2gio8Qe6l <--contraseña
