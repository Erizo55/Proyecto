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
					<p>I.E.S. LOS SAUCES</p>
				</div>

				<div style="width: 30%;">
					
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
					<button class="boton_volver" onclick="location.href='index.php?location=inicio&logoff=true'">CERRAR SESION</button>
				</div>
			</div>
		</header>

		<section>
			<div class="cont_section">
				<div class="menu">
                                    <?php
                                        $classactivo="class='menu_activo'";
                                        $ArrayObjeto= (array) $_SESSION['usuario'];
                                        foreach ($ArrayObjeto as $atributos => $value) {
                                            if($atributos="*asignaturasAlumno"){
                                                foreach($value as $atributos2 => $value2){
                                                    if($value2=="SISTEMAS INFORMATICOS"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=si'".'"'.">".$value2."</button>";
                                                    }else if($value2=="BASES DE DATOS"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=bdd'".'"'.">".$value2."</button>";
                                                    }else if($value2=="PROGRAMACION"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=p'".'"'.">".$value2."</button>";
                                                    }else if($value2=="LENGUAJES DE MARCAS"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=ldm'".'"'.">".$value2."</button>";
                                                    }else if($value2=="ENTORNOS DE DESARROLLO"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=edd'".'"'.">".$value2."</button>";
                                                    }else if($value2=="FORMACION Y ORIENTACION LANORAL"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=fol'".'"'.">".$value2."</button>";
                                                    }else if($value2=="DESARROLLO WEB EN ENTORNO CLIENTE"){
                                                        echo "<button  ".$classactivo." onclick=".'"'."location.href='index.php?location=dwec'".'"'.">".$value2."</button>";
                                                    }else if($value2=="DESARROLLO WEB EN ENTORNO SERVIDOR"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=dwes'".'"'.">".$value2."</button>";
                                                    }else if($value2=="DESARROLLO DE APLICACIONES WEB"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=daw'".'"'.">".$value2."</button>";
                                                    }else if($value2=="DISEÑO DE INTERFACES WEB"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=diw'".'"'.">".$value2."</button>";
                                                    }else if($value2=="EMPRESA E INICIATIVA EMPRENDEDORA"){
                                                        echo "<button onclick=".'"'."location.href='index.php?location=eie'".'"'.">".$value2."</button>";
                                                    }
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