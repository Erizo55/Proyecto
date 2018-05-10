<?php
    require_once('DepartamentoPDO.php');
    /**
     * Clase para el manejo de objetos departamento
     */

        /**
         * Clase Departamento.php
         * 
         * @author Erick Martin Robles
         * @version  1.0
         * @filesource
         */
    class Departamento {
        
        /**
         * @var string atributo para guardar el codigo del departamento
         */
        protected $codDepartamento;
        
        /**
         * @var string atributo para guardar el nombre del departamento
         */
        protected $descDepartamento;

        /**
         *  Devuelve el codigo del departamento de la clase
         * @return string codigo de la clase
         */
        public function getcodDepartamento() {
            return $this->codDepartamento; 
        }
        
        /**
         *  Devuelve la descripcion del departamento de la clase
         * @return string descripcion de la clase
         */
        public function getdescDepartamento() {
            return $this->descDepartamento; 
            
        }
        
        /**
         *  Guardar codDepartamento, descDepartamento de un array
         * @param string $codDepartamento codigo del departamento. 
         * @param string $descDepartamento descripción del departamento. 
         */
        public function __construct($codDepartamento, $descDepartamento) { 
            $this->codDepartamento = $codDepartamento; 
            $this->descDepartamento = $descDepartamento; 
        } 
        
        /**
         * Llamar a buscarDepartamento de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $descripcion descripcion de departamento a buscar
         * @return object devuelve un objeto Departamento
         */
        public static function buscarDepartamento($descripcion) {
            $matrizDepartamentos = DepartamentoPDO::buscarDepartamento($descripcion); 
            $departamentoObjeto=null;
            $arrayDepartamentos = []; 
            foreach ($matrizDepartamentos as $departamento) { 
                $departamentoObjeto = new Departamento($departamento['codDepartamento'], $departamento['descDepartamento']);
                $arrayDepartamentos[]=$departamentoObjeto; 
            } 
            return $arrayDepartamentos;
        }
        
        /**
         * Llamar a buscarDepartamentoCod de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $codigo codigo de departamento a buscar
         * @return object devuelve un objeto Departamento
         */
        public static function buscarDepartamentoCod($codigo) {
            $matrizDepartamentos = DepartamentoPDO::buscarDepartamentoCod($codigo); 
            $departamentoObjeto=null;
            $arrayDepartamentos = []; 
            foreach ($matrizDepartamentos as $departamento) { 
                $departamentoObjeto = new Departamento($departamento['codDepartamento'], $departamento['descDepartamento']);
                $arrayDepartamentos[]=$departamentoObjeto; 
            } 
            return $arrayDepartamentos;
        }
        
        /**
         * Llamar a indertarDepartamento de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $codigo codigo de departamento a insertar
         * @param string $descripcion descripcion de departamento a insertar
         * @return object devuelve un objeto Departamento
         */
        public static function insertarDepartamento($codigo,$descripcion) {
            $departamentoObjeto = new Departamento($codigo, $descripcion);
            $correcto = DepartamentoPDO::insertarDepartamento($codigo, $descripcion);
            return $correcto;
        }
        
        /**
         * Llamar a borrarDepartamento de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $codigo codigo de departamento a borrar
         * @return object devuelve un objeto Departamento
         */
        public static function borrarDepartamento($codigo) {
            $correcto = DepartamentoPDO::borrarDepartamento($codigo);
            return $correcto;
        }
        
        /**
         * Llamar a modificarDepartamento de la clase DepartamentoPDO y solo en caso afirmativo guardarlo como objeto
         * @param string $codigo codigo de departamento a modificar
         * @return object devuelve un objeto Departamento
         */
        public static function modificarDepartamento($codigo, $descripcion) {
            $correcto = DepartamentoPDO::modificarDepartamento($codigo, $descripcion);
            return $correcto;
        }
        
        /**
         * Llamar a importarDepartamento de la clase DepartamentoPDO
         * @param file $fichero fichero xml con todos los departamentos a importar
         */
        public static function importarDepartamento($fichero) {
            $correcto = true;
            if (file_exists($fichero)) {
                $fichero = simplexml_load_file($fichero);
                if (DepartamentoPDO::importarDepartamentos($fichero)){
                    $correcto = false;
                }
            }
            return $correcto;
        }
    }
?>