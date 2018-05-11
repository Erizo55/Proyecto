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
                                <a href="http://www.proyecto.local/" class="logo_header">
					<img src="/css/img/logosauces_peque.png" alt="Logo Sauces">
					<p>I.E.S. LOS SAUCES</p>
				</a>

				<div style="width: 60%;">
					
				</div>

				<div class="registro_volver">
					<p>PAGINA DE REGISTRO</p>
					<button class="boton_volver" onclick="location.href='http://www.proyecto.local/'">VOLVER</button>
				</div>
			</div>
		</header>

		<section>
				<div class="panel_registro">
					<div>
						<form method="post" class="formulario_registro">
							<div class="titulo_registro">
								<h1>Usted se esta registrando, por favor introduzca los datos adecuados</h1>
							</div>
							<div>
								<div>
									<label>Nombre</label>
									<input type="text" name="nombre">
								</div>
								<div>
									<label>Apellidos</label>
									<input type="text" name="apellidos">
								</div>
							</div>
							<div>
								<label>Fecha a nacimiento</label>
								<input type="date" name="fecha">
							</div>
							<div>
								<label>Correo electronico</label>
								<input type="email" name="email">
							</div>
							<div>
								<label>Usuario</label>
								<input type="text" name="usuario">
							</div>
							
							<div>
								<label>Contraseña (poner boton mostrar contraseña)</label>
								<input type="password" name="contrasenya">
							</div>
							<div>
								<label>Repetir contraseña (poner boton mostrar contraseña)</label>
								<input type="password" name="contrasenya">
							</div>
							<div>
								<label>Perfil de usuario</label>
								<select name="frecuencia">
									<option value="null"> </option>
									<option value="profesor">Profesor</option>
									<option value="alumno">Alumno</option>
								</select>
							</div>
							<div>
								<label>Terminos y condiciones</label>
								<textarea id="terminos" disabled>Terminos y condiciones</textarea>
							</div>
							<div>
								<p><input type="checkbox" name="terminos">Acepto los terminos</p>
							</div>
							<div>
								<input type='submit' name='enviar' value='Confirmar'>
							</div>
						</form>
					</div>

					<div class="imagen_registro">
						
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