<?php

    define("DSN","mysql:host=localhost;dbname=DBproyectodaw;charset=utf8"); //SGBD, Host y nombre de base de datos.
    define("USUARIO","adminerick"); // Usuario de la base de datos.
    define("PASSWORD","paso"); // Contraseña del usuario.

    $controladores =[ // Array con la lista de controladores disponibles.
        'inicio' => 'controller/cinicio.php',
        'login' => 'controller/clogin.php'
    ];
    $vistas = [ // Array con la lista de vistas disponibles.
        'inicio' => 'view/vinicio.php',
        'login' => 'view/vlogin.php'
    ];
?>
