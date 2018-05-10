<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
}
else {
    require_once '../model/Usuario.php';
}

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario']; // Código del usuario.
    $password = hash('sha256', $_POST['password']); // Contraseña del usuario.
    $usuario = Usuario::validarUsuario($usuario, $password); // Validación del usuario introducido.
    if (is_null($usuario)) { // Si no existe el usuario la aplicación se redirige al login con un mensaje de error.
        header("refresh:0; url = ../index.php?location=login&errorLogin=true");
    } else { // Si el usuario existe, se almacena en la sesión y la aplicación se redirige a la ventana principal.
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("refresh:0; url = ../index.php?location=inicio");
    }
}
else { // Si no se ha intentado iniciar sesión, la aplicación ejecutará el layout y, en este caso, se redirigirá al login.
    include 'view/layout.php';
}
?>