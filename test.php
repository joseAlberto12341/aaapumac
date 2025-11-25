<?php
// test_final.php
require_once 'src/utils/autoload.php';

echo "=== TEST FINAL ===\n";

if (class_exists('App\Repositories\BaseRepository')) {
    echo " BaseRepository cargado\n";
} else {
    echo " BaseRepository NO cargado\n";
}

if (class_exists('App\Repositories\AdminRepository')) {
    echo " AdminRepository cargado\n";
    
    // Test de herencia
    if (is_subclass_of('App\Repositories\AdminRepository', 'App\Repositories\BaseRepository')) {
        echo " AdminRepository hereda de BaseRepository\n";
    } else {
        echo " Problema de herencia\n";
    }
} else {
    echo " AdminRepository NO cargado\n";
}