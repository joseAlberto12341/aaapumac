<?php
session_start();

// ===== CONVERSOR DE RUTAS AMIGABLES =====
$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/Aaapumac';

if (strpos($requestUri, $basePath . '/') === 0 && !isset($_GET['e'])) {
    $cleanUri = str_replace($basePath, '', $requestUri);
    $cleanUri = explode('?', $cleanUri)[0];
    
    $uriParts = explode('/', trim($cleanUri, '/'));
    $uriParts = array_filter($uriParts);
    $uriParts = array_values($uriParts);
    
    if (count($uriParts) >= 2) {
        $_GET['e'] = $uriParts[0];
        $_GET['a'] = $uriParts[1];
        
        if (isset($uriParts[2])) {
            $_GET['id'] = $uriParts[2];
        }
    } elseif (count($uriParts) === 1) {
        $_GET['e'] = $uriParts[0];
        $_GET['a'] = 'index';
    }
}

require_once('src/utils/config.php');
if (!defined('AUTOLOAD_EXECUTED_V3')) {
    require_once('src/utils/autoload.php');
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

$entity = $_GET['e'] ?? 'public';
$action = $_GET['a'] ?? 'index';
$id = $_GET['id'] ?? 'no-id';

$entity = ucfirst(strtolower($entity));
$class = 'App\\Controllers\\' . $entity . 'Controller';

if (!class_exists($class)) {
    die("La clase {$class} no existe. Verifica el namespace y el nombre del archivo.");
}

if (!method_exists($class, $action)) {
    die("La acción {$action} no existe en la clase {$class}");
}

$answer = $class::$action();

if (!is_array($answer) || !isset($answer['view'])) {
    die("Error: El controlador no retornó un array válido con la clave 'view'");
}

include VIEWS . '/public/inc/header.php';
include VIEWS . '/' . $answer['view'];

if (isset($answer['scripts']) && $answer['scripts'] == 'prime') {
    include (VIEWS . '/public/inc/footer.php');
}
include VIEWS . '/public/inc/scripts.php';