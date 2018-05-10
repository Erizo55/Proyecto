<?php
    if (!isset($_SESSION['usuario'])) { // Si no se ha iniciado sesión la aplicaciónse redirige al login.
        header("refresh:0; url = ../index.php?location=login");
    }
    else{
        if (isset($_GET['logoff'])) { // Si se ha pulsado el botón, se cierra sesión y la aplicación se redirige al login.
            session_unset();
            session_destroy();
            header("refresh:0; url = index.php?location=login");
        }
        else{
            $usuario = $_SESSION['usuario']; // Se recupera el usuario almacenado en la sesión como objeto.
            include 'view/layout.php';
        }
    }
?>