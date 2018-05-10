<?php
    $nombreArchivo = basename($_SERVER['PHP_SELF']);
    if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
        require_once 'model/Usuario.php';
    }
    else {
        require_once '../model/Usuario.php';
    }
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--build:css css/styles.min.css -->
			<link rel="stylesheet" href="/css/reset.css">
			<link rel="stylesheet" href="/css/styles.css">
		<!-- endbuild-->
		<!--build:js js/scripts.min.js -->
			
		<!-- endbuild-->
	</head>

	<body>
		<header>
			<div class="cont_header">
				<div class="logo_header">
					<img src="/css/img/logosauces_peque.png" alt="Logo Sauces">
					<p>I.E.S. LOS SAUCES(Enlace al inicio)</p>
				</div>

				<div style="width: 45%;">
					
				</div>

				<div class="form_login_principal">
					<p>¡ Bienvenid@
                                            <?php
                                                echo $_SESSION['usuario']-> getnombreAlumno();
                                                echo " ";
                                                echo $_SESSION['usuario']->getapellidosAlumno();
                                            ?>
                                            !
                                        </p>
					<button class="boton_volver" onclick="location.href='index.php?location=inicio&logoff=true'">CERRAR SESIÓN</button>
				</div>
			</div>
		</header>

		<section>
			<div class="cont_section">
				<div class="menu">
                                    <?php
                                        $ArrayObjeto= (array) $_SESSION['usuario'];
                                        foreach ($ArrayObjeto as $atributos => $value) {
                                            if($atributos="*asignaturasAlumno"){
                                                foreach($value as $atributos2 => $value2){
                                                    echo "<a href=''>".$value2."</a>";
                                                }
                                            }
                                        }

                                    ?>
				</div>
				<div class="trabajos">
					<p>TRABAJOS</p>
					<div class="panel_general">
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
					</div>
				</div>
				<div class="examenes">
					<p>EXAMENES</p>
					<div class="panel_general">
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 1</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div> 
							<p>TEMA 2</p>
						</a>
						<a>
							<div class="imagen_carpeta"></div>
							<p>TEMA 3</p>
						</a>

					</div>
				</div>

			</div>
		</section>

		<footer>
			<div class="cont_footer">
				<div>

				</div>

				<div>
					
				</div>

				<div>
					<!--<iframe frameborder="0" height="480" marginheight="0" marginwidth="0" scrolling="no" src="http://maps.google.es/maps?ie=UTF8&amp;q=ies+los+sauces&amp;fb=1&amp;gl=es&amp;hq=ies+los+sauces&amp;hnear=0xd391e3bc094f817:0x3fb3a56a82306b25,Zamora&amp;cid=0,0,2247849912108751084&amp;t=h&amp;ll=42.000899,-5.668344&amp;spn=0.007654,0.013733&amp;z=16&amp;output=embed" width="640"></iframe>-->
				</div>
			</div>
		</footer>
	</body>
</html>