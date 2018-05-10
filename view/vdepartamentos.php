<?php
$nombreArchivo = basename($_SERVER['PHP_SELF']);
$paginaRefrescada = isset($_SERVER['HTTP_CACHE_CONTROL']);
if($paginaRefrescada) {
   header("refresh:0; url = index.php?location=departamentos&departamentos=true");
}
$listaDepartamentos = $_SESSION['listaDepartamentos'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<header>
			<div class="menu">
				<span class="titulo">Mantenimiento Departamentos</span>
			</div>
		<main>
			<section>
				<article>
					<form action="index.php?location=departamentos&buscar=true" method="post">
						<p>
                                                    <input type="text" style="width: 250px;" class="criterioBusqueda" name="criterioBusqueda" placeholder="Buscar departamento por descripción"
							value="<?php
									if (isset($_POST['buscar'])) { // Si se ha pulsado el botón de buscar, el valor del criterio de búsqueda será el que se haya escrito en el input.
										echo $_POST["criterioBusqueda"];
									}
									else {
									   echo "";
									}
								?>"/>
							<button>Buscar</button>
						</p>
					</form>	
                                        <ul>
                                            <button onclick="location.href ='index.php?location=departamentos&departamentos=true'">Reset</button>
                                            <button onclick="location.href='index.php?location=insertar'">Insertar</button>
                                            <button onclick="location.href='index.php?location=inicio'">Volver</button>
                                        </ul>
                                        
					<?php
						if (!empty($listaDepartamentos)) { // Si hay departamentos se muestran en una tabla.
							echo "<table >";
							echo "<tr>";
							echo "<th>";
							echo "Código Departamento";
							echo "</th>";
							echo "<th>";
							echo "Descripción Departamento";
							echo "</th>";
							echo "<th>";
							echo "Acciones";
							echo "</th>";
							echo "</tr>";
					        foreach ($listaDepartamentos as $nDepartamento) { // Se recogen de la sesión todos los departmentos y se muestran en la tabla.
					        	echo "<tr>";
					        	echo "<td>";
					        	echo $nDepartamento -> getcodDepartamento();
					        	echo "</td>";
					        	echo "<td>";
					        	echo $nDepartamento -> getdescDepartamento();
					        	echo "</td>";
					        	echo "<td>";
					        	// Se guarda el código y la descripción del departamento para poder enviarlo a través del método $_GET en el caso de que se quiera modificar o borrar el departamento.
					        	$codigo = $nDepartamento -> getcodDepartamento();
					        	$descripcion = str_replace(" ", "_", $nDepartamento -> getDescDepartamento());
                                        ?>
                                                <button onclick="location.href='index.php?location=departamentos&borrar=true&codigo=<?php  echo $codigo?>'">Borrar</button>
                                                <button onclick="location.href='index.php?location=departamentos&modificar=true&codigo=<?php echo $codigo?>'">Modificar</button>
                                        <?php       
					        	echo "</td>";
					        	echo "</tr>";
					        }
					    	echo "</table>";
						}
						else {
                                                    
                                                    echo "<p style='margin-top: 20px'>";
                                                    if (isset($_GET["errorBusqueda"])) { // Si existe un error al buscar, se muestra.
							echo "No se han encontrado departamentos";
                                                    }
                                                    else{
                                                        echo "Lo sentimos no hay departamentos, ¿Por qué no pruebas a insertar uno?";
                                                    }
                                                    echo "</p>";
						}
				        
                                        ?>
				</article>
			</section>
		</main>
	</body>
</html>