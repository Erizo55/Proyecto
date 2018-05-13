<?php
    require_once('DBPDO.php');
    /**
     * Clase para el manejo de objetos usuariopdo
     */

            /**
             * Clase UsuarioPDO.php
             * 
             * @author Erick Martin Robles
             * @version  1.0
             * @filesource
             */
    class UsuarioPDO{

        /**
         * Validar usuario que nos pase la clase Usuario
         * @param string $usuario usuario a validar
         * @param string $password contraseña a validar
         * @return array informacion del usuario validado guardado en un array
         */
        public static function validarUsuario($usuario, $password) {
            
                date_default_timezone_set("Europe/Paris");
                setlocale(LC_TIME, "spanish");
                $fecha=strftime("%Y-%m-%d %H:%M:%S");
            
                $sql = "SELECT * FROM usuario ";
                $sql .= "WHERE descUsuario='$usuario' ";
                $sql .= "AND password='$password';";
                
                $sqlFecha="UPDATE usuario SET ultimaConexion='$fecha' WHERE descUsuario='$usuario'";
                
                $arrayUser = [];
                
                $resultado = DBPDO::ejecutaConsulta ($sql);
                $usuario = $resultado -> fetchObject();
                if($resultado->rowCount()){
                    $arrayUser['idUsuario'] = $usuario -> idUsuario;
                    $arrayUser['descUsuario'] = $usuario -> descUsuario;
                    $arrayUser['password'] = $usuario -> password;
                    $arrayUser['perfil'] = $usuario -> perfil;
                    
                    $resultadoFecha = DBPDO::ejecutaConsulta ($sqlFecha);
                    $arrayUser['ultimaConexion'] = $usuario -> ultimaConexion;
                }
                
                
                
                $idusuario=$arrayUser['idUsuario'];
                if($arrayUser['perfil']=="Alumno"){
                    
                    $sqlBuscarAlumno="SELECT alumno.nombre, alumno.apellidos FROM alumno INNER JOIN usuario ON alumno.idUsuario=usuario.idUsuario WHERE alumno.idUsuario LIKE '$idusuario'";
                    $resultadoAlumno = DBPDO::ejecutaConsulta ($sqlBuscarAlumno);
                    $alumno = $resultadoAlumno -> fetchObject();
                    if($resultadoAlumno->rowCount()){
                        $arrayUser['nombreAlumno'] = $alumno -> nombre;
                        $arrayUser['apellidosAlumno'] = $alumno -> apellidos;
                    }
                    
                    $nombreAlumno=$arrayUser['nombreAlumno'];
                    $sqlBuscarCurso="SELECT matricula.idCurso FROM matricula INNER JOIN alumno ON matricula.idAlumno=alumno.idAlumno WHERE alumno.nombre LIKE '$nombreAlumno'";
                    $resultadoCurso = DBPDO::ejecutaConsulta ($sqlBuscarCurso);
                    $curso = $resultadoCurso -> fetchObject();
                    if($resultadoCurso->rowCount()){
                        $arrayUser['cursoAlumno'] = $curso -> idCurso;
                    }

                    $cursoAlumno=$arrayUser['cursoAlumno'];
                    $sqlBuscarAsignatura="SELECT asignatura.nombre FROM asignatura INNER JOIN cursoAsignaturas ON asignatura.idAsignatura=cursoAsignaturas.idAsignatura WHERE cursoAsignaturas.idCurso LIKE '$cursoAlumno'";
                    $resultadoAsignatura = DBPDO::ejecutaConsulta ($sqlBuscarAsignatura);
                    if($resultadoAsignatura->rowCount()){
                        $arrayUser['asignaturasAlumno'] = $resultadoAsignatura -> fetchAll(PDO::FETCH_COLUMN,0);
                    }
                    
                }else if ($arrayUser['perfil']=="Profesor") {
                    $sqlBuscarProfesor="SELECT profesor.idProfesor, profesor.nombre, profesor.apellidos FROM profesor INNER JOIN usuario ON profesor.idUsuario=usuario.idUsuario WHERE profesor.idUsuario LIKE '$idusuario'";
                    $resultadoProfesor = DBPDO::ejecutaConsulta ($sqlBuscarProfesor);
                    $profesor = $resultadoProfesor -> fetchObject();
                    if($resultadoProfesor->rowCount()){
                        $idProfesor= $profesor -> idProfesor;
                        $arrayUser['nombreProfesor'] = $profesor -> nombre;
                        $arrayUser['apellidosProfesor'] = $profesor -> apellidos;
                    }
                    
                    $sqlBuscarImparte="SELECT asignatura.nombre FROM asignatura INNER JOIN profesor ON asignatura.idProfesor=profesor.idProfesor WHERE profesor.idProfesor LIKE '$idProfesor'";
                    $resultadoImparte = DBPDO::ejecutaConsulta ($sqlBuscarImparte);
                    if($resultadoImparte->rowCount()){
                        $arrayUser['asignaturasAlumno'] = $resultadoImparte -> fetchAll(PDO::FETCH_COLUMN,0);
                    }
                    
                }else if($arrayUser['perfil']=="Administrador"){
                    
                    $sqlBuscarAlumno="SELECT alumno.nombre, alumno.apellidos FROM alumno INNER JOIN usuario ON alumno.idUsuario=usuario.idUsuario WHERE alumno.idUsuario LIKE '$idusuario'";
                    $resultadoAlumno = DBPDO::ejecutaConsulta ($sqlBuscarAlumno);
                    $alumno = $resultadoAlumno -> fetchObject();
                    if($resultadoAlumno->rowCount()){
                        $arrayUser['nombreAlumno'] = $alumno -> nombre;
                        $arrayUser['apellidosAlumno'] = $alumno -> apellidos;
                    }else{
                        $sqlBuscarProfesor="SELECT profesor.idProfesor, profesor.nombre, profesor.apellidos FROM profesor INNER JOIN usuario ON profesor.idUsuario=usuario.idUsuario WHERE profesor.idUsuario LIKE '$idusuario'";
                        $resultadoProfesor = DBPDO::ejecutaConsulta ($sqlBuscarProfesor);
                        $profesor = $resultadoProfesor -> fetchObject();
                        if($resultadoProfesor->rowCount()){
                            $arrayUser['nombreProfesor'] = $profesor -> nombre;
                            $arrayUser['apellidosProfesor'] = $profesor -> apellidos;
                        }
                    }
                    
                    $sqlBuscarAdmin="SELECT asignatura.nombre FROM asignatura";
                    $resultadoAdmin = DBPDO::ejecutaConsulta ($sqlBuscarAdmin);
                    if($resultadoAdmin->rowCount()){
                        $arrayUser['asignaturasAlumno'] = $resultadoAdmin -> fetchAll(PDO::FETCH_COLUMN,0);
                    }
                }
                
                
                
                
                
                
                
                //Aumentar contador de acceso
                //actualizar fecha de ultima conexion
                return $arrayUser;
            }
    }
 
?>