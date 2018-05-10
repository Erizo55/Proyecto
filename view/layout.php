<?php
    $nombreArchivo = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>ProyectoDaw</title>
	</head>
	<body>
            <?php
                $layout = "view/vinicio.php"; // Por defecto, el layout será la vista de inicio.
                if(isset($_GET['location']) && isset($vistas[$_GET['location']])){ // Si se ha indicado localización y si ésta existe en el array $vistas de config.php, se establecerá la vista correspondiente a esa localización.
                    $layout = $vistas[$_GET['location']];
                }else{
                    $layout = $vistas[$_GET['location']];
                }
                include $layout; // Se muestra la vista elegida.
	    ?>
	</body>
</html>