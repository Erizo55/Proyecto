<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <link rel="shortcut icon" href="css/img/logosauces.ico">
		<title>Pagina de inicio WebCentro</title>
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
                                <a href="http://www.proyecto.local/" class="logo_header">
					<img src="/css/img/logosauces_peque.png" alt="Logo Sauces">
					<p>I.E.S. LOS SAUCES</p>
				</a>

				<div style="width: 45%;">
					
				</div>
				
			</div>
		</header>

		<section>
				<div class="panel_inicio">
					<div class="imagen_inicio">
					
					</div>
					<div>
						<h1 class="titulo_principal">BIENVENIDO A LA WEBCENTER<br> DEL I.E.S. LOS SAUCES</h1>
                                                <div class="form_login">
                                                    <?php
                                                        if (isset($_GET["errorLogin"])) { // Si existe un error al validar el usuario, se muestra.
                                                            echo "<span class='error_login'>Usuario o contraseÃ±a incorrectos</span><br>";
                                                        }
                                                    ?>
                                                    <form action="controller/clogin.php" method="post">
                                                        Usuario:<br><input type="text" name="usuario"><br>
                                                        Contraseña:<br><input type="password" name="password"><br>
                                                        <input class="boton_registro" style="width:50%; font-size: 18px;" type="submit" name="login" value="ENTRAR"/><br>      
                                                    </form>
                                                </div>
                                                <a class="boton_registro" href="/view/vregistro.php">REGISTRATE</a><br>
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