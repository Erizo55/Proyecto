<?php
    if (!isset($_SESSION['usuario'])) { // Si no se ha iniciado sesión la aplicaciónse redirige al login.
        if (isset($_GET['volver'])) { // Si se ha pulsado el botón, se cierra sesión y la aplicación se redirige al login.
            header("refresh:0; url = index.php?location=login");
        }
        else{
            $usuario = $_SESSION['usuario']; // Se recupera el usuario almacenado en la sesión como objeto.
            include 'view/layout.php';
        }
        
    }
    else{
        header("refresh:0; url = ../index.php?location=inicio");
    }
?>