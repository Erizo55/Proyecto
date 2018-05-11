<?php

    define("DSN","mysql:host=localhost;dbname=DBproyectodaw;charset=utf8"); //SGBD, Host y nombre de base de datos.
    define("USUARIO","adminerick"); // Usuario de la base de datos.
    define("PASSWORD","paso"); // Contraseña del usuario.
    define("SERVERFTP","192.168.1.123"); // Contraseña del usuario.
    define("USERFTP",""); // Contraseña del usuario.
    define("PASSWORDFTP","paso"); // Contraseña del usuario.

    $controladores =[ // Array con la lista de controladores disponibles.
        'inicio' => 'controller/cinicio.php',
        'login' => 'controller/clogin.php',
        'registro' => 'view/vregistro.php',
        'si' => 'controller/csi.php',
        'bdd' => 'controller/cbdd.php',
        'p' => 'controller/cp.php',
        'ldm' => 'controller/cldm.php',
        'edd' => 'controller/cedd.php',
        'fol' => 'controller/cfol.php',
        'dwec' => 'controller/cdwec.php',
        'dwes' => 'controller/cdwes.php',
        'daw' => 'controller/cdaw.php',
        'diw' => 'controller/cdiw.php',
        'eie' => 'controller/ceie.php'
        
        
    ];
    $vistas = [ // Array con la lista de vistas disponibles.
        'inicio' => 'view/vinicio.php',
        'login' => 'view/vlogin.php',
        'registro' => 'view/vregistro.php',
        'si' => 'view/vsi.php',
        'bdd' => 'view/vbdd.php',
        'p' => 'view/vp.php',
        'ldm' => 'view/vldm.php',
        'edd' => 'view/vedd.php',
        'fol' => 'view/vfol.php',
        'dwec' => 'view/vdwec.php',
        'dwes' => 'view/vdwes.php',
        'daw' => 'view/vdaw.php',
        'diw' => 'view/vdiw.php',
        'eie' => 'view/veie.php'
    ];
?>
