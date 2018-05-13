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
                        <script type='text/javascript' src='../js/funciones.js'></script>
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
                                            <?php
                                                $entradaOK=true;

                                                    $error="";
                                                    
                                                    $idAlumno=0;
                                                    $nombre="";
                                                    $apellidos="";
                                                    $fecha_nacimiento="";
                                                    $correo="";
                                                    
                                                    $curso="";
                                                    
                                                    $idUsuario="";
                                                    $descUsuario="";
                                                    $password="";
                                                    $perfil="";

                                                    if(isset($_POST['enviar'])){
                                                        $idUsuario = $_POST['idusuario']; // Código del usuario.
                                                        $descUsuario = $_POST['usuario']; // descripcion del usuario.
                                                        $password = hash('sha256', $_POST['contrasenya']); // Contraseña del usuario.
                                                        $perfil = $_POST['perfil']; // perfil del usuario.
                                                        $nombre = $_POST['nombre']; // perfil del usuario.
                                                        $apellidos = $_POST['apellidos']; // perfil del usuario.
                                                        $fecha_nacimiento = $_POST['fecha']; // perfil del usuario.
                                                        $correo = $_POST['email']; // perfil del usuario.
                                                        $curso = $_POST['curso']; // perfil del usuario.
                                                        
                                                    }else{
                                                        $entradaOK=false;
                                                    }
                                                    if($entradaOK){
                                                        try{
                                                            /*
                                                             * sentecia sql de insertar sobre la base de datos
                                                             */
                                                            $sentenciaSQL = "INSERT INTO usuario VALUES ('".$idUsuario."','".$descUsuario."','".$password."','".$perfil."',NULL)";
                                                            $sqlalumno="INSERT INTO alumno VALUES (NULL,'".$nombre."','".$apellidos."','".$fecha_nacimiento."','".$correo."','".$idUsuario."')";
                                                            $sqlbuscaridalumno="SELECT idAlumno FROM alumno INNER JOIN usuario ON alumno.idUsuario=usuario.idUsuario WHERE alumno.idUsuario LIKE '".$idUsuario."'";
                                                            
                                                            /*
                                                             * Conexion con la base de datos
                                                             */
                                                            $conexion=new PDO('mysql:host=localhost;dbname=DBproyectodaw','adminerick','paso');

                                                            /*
                                                             * resultado de la consulta
                                                             */
                                                            $resultado= $conexion->query($sentenciaSQL);
                                                            /*
                                                             * si no encuentra el usuario y la contraseÃ±a volver al formulario y mensaje de error
                                                             */
                                                            if(!$resultado) {
                                                                $mensaje="El usuario ya existe o no se ha podido registrar.";
                                                            }
                                                            else{
                                                                    $resultadoinsertalumno = $conexion->query($sqlalumno);
                                                                    if($resultadoinsertalumno){
                                                                        $resultadobuscaridalumno = $conexion->query($sqlbuscaridalumno);
                                                                        $registroIdalumno=$resultadobuscaridalumno->fetch(PDO::FETCH_OBJ);
                                                                        if($resultadobuscaridalumno->rowCount()>0){
                                                                            $idAlumno=$registroIdalumno -> idAlumno;
                                                                            $sqlcurso="INSERT INTO matricula VALUES (NULL,'".$idAlumno."', '".$curso."')";
                                                                            $resultadocurso = $conexion->query($sqlcurso);
                                                                            if($resultadocurso){
                                                                                $mensaje="El alumno se ha matriculado corrrectamente";
                                                                            }
                                                                            else{
                                                                                $mensaje="El alumno no se ha podido matricular.";
                                                                            }
                                                                        }
                                                                    }else{
                                                                        $mensaje="El alumno no se ha podido registrar.";
                                                                    }
                                                                
                                                            }
                                                            /*
                                                             * cerramos la conexion a la base de datos
                                                             */
                                                            unset($conexion);
                                                           
                                                            header('refresh:0; url = http://www.proyecto.local/index.php?location=login&registro=true&mensaje='.$mensaje.'');
                                                        }
                                                        catch(Exception $miExeception){
                                                            /*
                                                             * Imprimir codigo de error
                                                             */
                                                            print("Codigo de error: ".$miExeception->getCode()."<br>");
                                                            /*
                                                             * Imprimir mensaje de la excepcion
                                                             */
                                                            print("Error: ".$miExeception->getMessage());
                                                        }
                                                    }else{
                                            ?>
                                            <form method="post" class='formulario_registro' onsubmit='return validar()' action=''>
							<div class="titulo_registro">
								<h1>Usted se esta registrando, por favor introduzca los datos adecuados</h1>
                                                                
							</div>
							<div>
								<div>
									<label>Nombre</label>
                                                                        <input type="text" pattern="/^[a-zA-Z]*$/" id="nombre" name="nombre">
								</div>
								<div>
									<label>Apellidos</label>
                                                                        <input type="text" pattern="/^[a-zA-Z\s]*$/" id="apellidos" name="apellidos">
								</div>
							</div>
                                                        <div>
								<div>
									<label>Fecha a nacimiento(aaaa/mm/dd)</label>
                                                                        <input type="datetime" id="fecha" name="fecha">
								</div>
								<div>
									<label>Curso</label>
									<select name="curso" id="curso">
                                                                                <option value="null"> </option>
                                                                                <option value="DAW1">DAW1</option>
                                                                                <option value="DAW2">DAW2</option>
                                                                        </select>
								</div>
							</div>
							<div>
								
							</div>
							<div>
								<label>Correo electronico</label>
								<input type="email" id="email" name="email">
							</div>
                                                        <div>
								<label>Identificador de tu usuario</label>
								<input type="text" id="idusuario" name="idusuario">
							</div>
							<div>
								<label>Usuario</label>
								<input type="text" id="usuario" name="usuario">
							</div>
							
							<div>
								<label>Contraseña</label>
								<input type="password" id="contrasenya" name="contrasenya">
							</div>
							<div>
								<label>Perfil de usuario</label>
								<select name="perfil"  id="perfil">
									<option value="null"> </option>
									<option value="Alumno">Alumno</option>
								</select>
							</div>
							<div>
								<label>Terminos y condiciones</label>
								<textarea id="terminos" disabled>Terminos y condiciones</textarea>
							</div>
							<div>
								<p><input type="checkbox"  id="condiciones" name="terminos">Acepto los terminos</p>
							</div>
							<div>
                                                            <input class="boton_registro" style="line-height: 0px;" type='submit' name='enviar' value='Confirmar'>
							</div>
						</form>
                                            
                                                <?php
                                                    }
                                                ?>
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