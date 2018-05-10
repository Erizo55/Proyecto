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
				<div class="logo_header">
					<img src="/css/img/logosauces_peque.png" alt="Logo Sauces">
					<p>I.E.S. LOS SAUCES</p>
				</div>

				<div style="width: 45%;">
					
				</div>

				<div class="form_login">
                                    <?php
                                        if (isset($_GET["errorLogin"])) { // Si existe un error al validar el usuario, se muestra.
                                            echo "<span class='error_login'>Usuario o contraseña incorrectos</span>";
					}
                                    ?>
                                    <form action="controller/clogin.php" method="post">
					Usuario: <input type="text" name="usuario">
					Contraseña: <input type="password" name="password">
                                        <input type="submit" name="login" value="Entrar"/><br>      
                                    </form>
				</div>
			</div>
		</header>

		<section>
				<div class="panel_inicio">
					<div class="imagen_inicio">
					
					</div>
					<div>
						<h1 class="titulo_principal">BIENVENIDO A LA WEBCENTER<br> DEL I.E.S. LOS SAUCES</h1>
						<a href="registro.html" class="boton_registro">REGISTRATE</a><br>
						<a href="principal_daw1.html" class="boton_registro">EMPEZAR DAW1</a><br>
						<a href="principal_daw2.html" class="boton_registro">EMPEZAR DAW2</a><br>
						<a href="principal_smr1.html" class="boton_registro">EMPEZAR SMR1</a><br>
						<a href="principal_smr2.html" class="boton_registro">EMPEZAR SMR2</a>
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