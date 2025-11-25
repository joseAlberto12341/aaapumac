<?php
// autoload.php - SIN DEFINICIONES DE CONSTANTES

if (defined('AUTOLOAD_EXECUTED_V3')) {
    return;
}
define('AUTOLOAD_EXECUTED_V3', true);

// Solo errores para desarrollo
if (!isset($_SERVER['SERVER_NAME']) || $_SERVER['SERVER_NAME'] === 'localhost') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

class Autoloader {
    private static $loadedFiles = [];
    
    public static function load($filePath) {
        $realPath = realpath($filePath);
        if (!$realPath || isset(self::$loadedFiles[$realPath])) {
            return true;
        }
        
        if (file_exists($filePath)) {
            require_once $filePath;
            self::$loadedFiles[$realPath] = true;
            return true;
        }
        
        return false;
    }
}

// ASUNCIÓN: config.php ya definió CONTROLLERS, MODELS, REPOSITORIES, VIEWS

// Carga crítica
$criticalFiles = [
    MODELS . '/EntityModel.php',
    REPOSITORIES . '/BaseRepository.php',
];

foreach ($criticalFiles as $file) {
    Autoloader::load($file);
}

// Carga del resto
$directories = [MODELS, REPOSITORIES, CONTROLLERS];
foreach ($directories as $dir) {
    if (is_dir($dir)) {
        $files = glob($dir . '/*.php');
        foreach ($files as $file) {
            $skip = ['EntityModel.php', 'BaseRepository.php'];
            if (!in_array(basename($file), $skip)) {
                Autoloader::load($file);
            }
        }
    }
}