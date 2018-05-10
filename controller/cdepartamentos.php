<?php
require_once 'model/Departamento.php';

if (!isset($_SESSION['usuario'])) { // Si no se ha iniciado sesión la aplicaciónse redirige al login.
    header("refresh:0; url = index.php?location=login");
}
else {
    if (isset($_GET['departamentos'])) { // Si se ha pulsado el botón, se buscan los departamentos y la aplicación se redirige al mantenimiento.
        $_SESSION['listaDepartamentos'] = Departamento::buscarDepartamento("");
        header("refresh:0; url = index.php?location=departamentos");
    }
    else {
        $usuario = $_SESSION['usuario']; // Se recupera el usuario almacenado en la sesión como objeto.
        include 'view/layout.php';
    }
    if(isset($_GET['buscar'])){ // Si se ha pulsado el botón, se buscan los departamentos y la aplicación se redirige al mantenimiento.
        $_SESSION['listaDepartamentos'] = Departamento::buscarDepartamento($_POST['criterioBusqueda']);
        if(empty($_SESSION['listaDepartamentos'])){
            header("refresh:0; url = index.php?location=departamentos&errorBusqueda=true");
        }
        else{
            header("refresh:0; url = index.php?location=departamentos");
        }
    }
    if(isset($_GET['borrar'])){ // Si se ha pulsado el botón, se buscan los departamentos y la aplicación se redirige al mantenimiento.
        $_SESSION['listaDepartamentos'] = Departamento::buscarDepartamentoCod($_GET['codigo']);
        foreach($_SESSION['listaDepartamentos'] as $departamento){
            $codigo=$departamento ->getCodDepartamento();
            $descripcion=$departamento ->getDescDepartamento();
        }
        header("refresh:0; url = index.php?location=borrar&codigo=".$codigo."&descripcion=".$descripcion);
    }
    if(isset($_GET['modificar'])){ // Si se ha pulsado el botón, se buscan los departamentos y la aplicación se redirige al mantenimiento.
        $_SESSION['listaDepartamentos'] = Departamento::buscarDepartamentoCod($_GET['codigo']);
        foreach($_SESSION['listaDepartamentos'] as $departamento){
            $codigo=$departamento ->getCodDepartamento();
            $descripcion=$departamento ->getDescDepartamento();
        }
        header("refresh:0; url = index.php?location=modificar&codigo=".$codigo."&descripcion=".$descripcion);
    }
}
?>