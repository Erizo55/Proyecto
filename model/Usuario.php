<?php
    require_once('UsuarioPDO.php');
    /**
     * Clase para el manejo de objetos usuario
     */

        /**
         * Clase Usuario.php
         * 
         * @author Erick Martin Robles
         * @version  1.0
         * @filesource
         */
    class Usuario {
        
        /**
         * @var string variable para guardar el codigo del usuario
         */
        protected $idUsuario;
        
        /**
         * @var string variable para guardar el nombre del usuario
         */
        protected $descUsuario;
        
        /**
         * @var string variable para guardar la contraseña del usuario
         */
        protected $password;
        
        /**
         * @var string variable para guardar el perfil del usuario
         */
        protected $perfil;
        
        /**
         * @var date variable para guarda la fecha de ultima conexion del usuario
         */
        protected $ultimaConexion;
        
        /**
         * @var string variable para guarda el nombre de alumno del usuario
         */
        protected $nombreAlumno;
        
        /**
         * @var string variable para guarda los apellidos de alumno del usuario
         */
        protected $apellidosAlumno;
        
         /**
         * @var string variable para guarda los apellidos de alumno del usuario
         */
        protected $cursoAlumno;

        /**
         * @var string variable para guarda los apellidos de alumno del usuario
         */
        protected $asignaturasAlumno;
        
        /**
         *  Devuelve el codigo del usuario de la clase
         * @return string codigo de la clase
         */
        public function getidUsuario() {
            return $this->idUsuario; 
        }
        
        /**
         *  Devuelve el nombre del usuario de la clase
         * @return string nombre de la clase
         */
        public function getdescUsuario() {
            return $this->descUsuario; 
            
        }
        
        /**
         *  Devuelve la contraseña del usuario de la clase
         * @return string contraseña de la clase
         */
        public function getpassword() {
            return $this->password; 
            
        }
        
        /**
         *  Devuelve el perfil del usuario de la clase
         * @return float perfil de la clase
         */
        public function getperfil() {
            return $this->perfil; 
            
        }
        
        /**
         *  Devuelve la ultima conexion del usuario de la clase
         * @return float ultima conexion de la clase
         */
        public function getultimaConexion() {
            return $this->ultimaConexion; 
            
        }
        
        /**
         *  Devuelve la ultima conexion del usuario de la clase
         * @return float ultima conexion de la clase
         */
        public function getnombreAlumno() {
            return $this->nombreAlumno; 
            
        }
        
        /**
         *  Devuelve la ultima conexion del usuario de la clase
         * @return float ultima conexion de la clase
         */
        public function getapellidosAlumno() {
            return $this->apellidosAlumno; 
            
        }
        
        /**
         *  Devuelve la ultima conexion del usuario de la clase
         * @return float ultima conexion de la clase
         */
        public function getcursoAlumno() {
            return $this->cursoAlumno;  
        }
        
        /**
         *  Devuelve la ultima conexion del usuario de la clase
         * @return float ultima conexion de la clase
         */
        public function getasignaturasAlumno() {
            return $this->asignaturasAlumno;  
        }
        
        /**
         *  Guardar codUsuario, descUsuario, password, perfil, ultimaConexion y contadorAccesos de un array
         * @param array $row array con los atributos de la clase
         */
        public function __construct($row) {
            $this->idUsuario = $row['idUsuario'];
            $this->descUsuario = $row['descUsuario'];
            $this->password = $row['password'];
            $this->perfil = $row['perfil'];
            $this->ultimaConexion = $row['ultimaConexion'];
            $this->nombreAlumno = $row['nombreAlumno'];
            $this->apellidosAlumno = $row['apellidosAlumno'];
            $this->cursoAlumno = $row['cursoAlumno'];
            $this->asignaturasAlumno = $row['asignaturasAlumno'];
        }
        
        /**
         *  Llamar a validar usuario y solo en caso afirmativo guardarlo como objeto
         * @param string $idUsuario codigo de usuario a validar
         * @param string $password contraseña de usuario a validar
         * @return object devuelve un objeto Usuario
         */
        public static function validarUsuario($idUsuario, $password) { 
            $usuarioObjeto = null; 
            $usuario = UsuarioPDO::validarUsuario($idUsuario, $password); // Array que contiene los datos del usuario. 
            if ($usuario) { // Si el usuario existe, se crea el objeto con los datos del usuario. 
                $usuarioObjeto = new Usuario($usuario); 
            } 
            return $usuarioObjeto; 
        }
        
        /**
         * Llamar a indertarDepartamento de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $codigo codigo de departamento a insertar
         * @param string $descripcion descripcion de departamento a insertar
         * @return object devuelve un objeto Departamento
         */
        public static function insertarUsuario($idUsuario, $descUsuario, $password, $perfil, $ultimaConexion) {
            $departamentoObjeto = new Usuario($codigo, $descripcion);
            $correcto = DepartamentoPDO::insertarDepartamento($codigo, $descripcion);
            return $correcto;
        }
    }
?>