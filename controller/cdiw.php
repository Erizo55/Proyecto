<?php
if (!isset($_SESSION['usuario'])) { // Si no se ha iniciado sesión la aplicaciónse redirige al login.
    header("refresh:0; url = index.php?location=login");
}
else {
        if (isset($_GET['subirtrabajo'])) { // Si se ha pulsado el botón, se cierra sesión y la aplicación se redirige al login.                    
            $mensaje="";
            $archivoname = $_FILES['archivo']['name'];
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $directoriosubir='/public_html/archivos/diw/';
            $directoriosubir=$directoriosubir.$_SESSION['usuario']-> getdescUsuario()."/trabajos/";
                                                            
            $ftp_server="192.168.1.123";
            $ftp_user = "adminproyecto";
            $ftp_pass = "paso";
                                                    
            // establecer una conexión básica
            $conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");
                                                    
            ftp_login($conn_id, $ftp_user, $ftp_pass);
                                                    
            // cambiar al directorio public_html
            ftp_chdir($conn_id, $directoriosubir);
                                                    
            if (ftp_put($conn_id,$archivoname,$archivotmp,FTP_BINARY)){ 
                $mensaje="Se subio"; 
            }else{
                $mensaje="No se subio";
            } 
            // cerrar la conexión ftp
            ftp_close($conn_id);
            header("refresh:0; url = index.php?location=diw&mensajetrabajo=".$mensaje);
            
        }else if(isset($_GET['subirexamen'])){
            
            $mensaje="";
            $archivoname = $_FILES['archivo']['name'];
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $directoriosubir='/public_html/archivos/diw/';
            $directoriosubir=$directoriosubir.$_SESSION['usuario']-> getdescUsuario()."/examenes/";
                                                            
            $ftp_server="192.168.1.123";
            $ftp_user = "adminproyecto";
            $ftp_pass = "paso";
                                                    
            // establecer una conexión básica
            $conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");
                                                    
            ftp_login($conn_id, $ftp_user, $ftp_pass);
                                                    
            // cambiar al directorio public_html
            ftp_chdir($conn_id, $directoriosubir);
                                                    
            if (ftp_put($conn_id,$archivoname,$archivotmp,FTP_BINARY)){ 
                $mensaje="Se subio"; 
            }else{
                $mensaje="No se subio";
            } 
            // cerrar la conexión ftp
            ftp_close($conn_id);
            header("refresh:0; url = index.php?location=diw&mensajeexamen=".$mensaje);
        }
        else{
            $usuario = $_SESSION['usuario']; // Se recupera el usuario almacenado en la sesión como objeto.
            include 'view/layout.php';
        }
}
?>