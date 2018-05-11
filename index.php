<?php
    require_once 'model/Usuario.php';
    require_once 'config/constDB.php';

    session_start();

    $controlador = 'controller/cinicio.php'; // Por defecto, el controlador será el controlador de inicio.

    if (isset($_SESSION['usuario'])) { // Si se ha iniciado una sesión, se comprueba si se ha indicado localización y, si ésta existe en el array $controladores de config.php, se establecerá el controlador correspondiente a esa localización.
        if (isset($_GET['location']) && isset($controladores[$_GET['location']])) {
            if($_GET['location']=="login"){
                $_GET['location']='inicio';
            }
            else{
                $controlador = $controladores[$_GET['location']];
            }
        }
        else{
            $_GET['location'] = 'inicio';
        }
    } else { // Si no se ha establecido localización o no se ha iniciado sesión, el controlador será el controlador de login.
        $_GET['location'] = 'login';
        $controlador = $controladores[$_GET['location']];
    }
    include $controlador; // Se ejecuta el controlador elegido.
?>