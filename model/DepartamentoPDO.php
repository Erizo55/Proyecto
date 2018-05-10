<?php
    require_once('DBPDO.php');
    /**
     * Clase para el manejo de objetos departamentopdo
     */

            /**
             * Clase DepartamentoPDO.php
             * 
             * @author Erick Martin Robles
             * @version  1.0
             * @filesource
             */
    class DepartamentoPDO{

        /**
         * Busqueda de un departamento por descripcion en la base de datos
         * @param string $descripcion descripcion de departamento a buscar
         * @return array informacion del usuario encontrado
         */
        public static function buscarDepartamento($descripcion) {
            $sentenciaSQL = "select * from departamento where descDepartamento LIKE '%$descripcion%' ORDER BY codDepartamento";
            $arrayDepartamento = []; // Array que guardará los datos de los departamentos en caso de que los encuentre.
            $resultado = DBPDO::ejecutaConsulta($sentenciaSQL); // Ejecución de la consulta preparada.
            if ($resultado -> rowCount()) { // Si encuentra departamentos guarda sus datos en un Array.
                $arrayDepartamento = $resultado -> fetchAll();
            }
            
            return $arrayDepartamento;
        }
        
        /**
         * Busqueda de un departamento por codigo en la base de datos
         * @param string $codigo codigo de departamento a buscar
         * @return array informacion del usuario encontrado
         */
        public static function buscarDepartamentoCod($codigo) {
            $sentenciaSQL = "select * from departamento where codDepartamento LIKE '%$codigo%' ORDER BY codDepartamento";
            $arrayDepartamento = []; // Array que guardará los datos de los departamentos en caso de que los encuentre.
            $resultado = DBPDO::ejecutaConsulta($sentenciaSQL); // Ejecución de la consulta preparada.
            if ($resultado -> rowCount()) { // Si encuentra departamentos guarda sus datos en un Array.
                $arrayDepartamento = $resultado -> fetchAll();
            }
            
            return $arrayDepartamento;
        }
        
        /**
         * Insertar un departamento nuevo en la base de datos
         * @param string $codigo codigo de departamento a insertar
         * @param string $descripcion descripcion de departamento a insertar
         * @return boolean devuelve true si ha insertado correctamente y falso si hubo algun error
         */
        public static function insertarDepartamento($codigo,$descripcion) {
            $sentenciaSQL = "insert into Departamento values ('$codigo','$descripcion')";
            $correcto = false;
            if (DBPDO::ejecutaConsulta($sentenciaSQL)) {
                $correcto = true;
            }
            return $correcto;
        }
        
        /**
         * Eliminacion de un departamento por codigo en la base de datos
         * @param string $codigo codigo de departamento a borrar
         * @return boolean devuelve true si ha borrado correctamente y falso si hubo algun error
         */
        public static function borrarDepartamento($codigo) {
            $sentenciaSQL = "delete from departamento where codDepartamento='$codigo'";
            $correcto = false;
            if (DBPDO::ejecutaConsulta($sentenciaSQL)) {
                $correcto = true;
            }
            return $correcto;
        }
        
        /**
         * Modificicion de un departamento por codigo en la base de datos
         * @param string $codigo codigo de departamento a modificar
         * @param string $descripcion descripcion de departamento a modificar
         * @return array devuelve true si ha modificado correctamente y falso si hubo algun error
         */
        public static function modificarDepartamento($codigo,$descripcion) {
            $sentenciaSQL = "update departamento set descDepartamento='$descripcion' where codDepartamento='$codigo'";
            $correcto = false;
            if (DBPDO::ejecutaConsulta($sentenciaSQL)) {
                $correcto = true;
            }
            return $correcto;
        }
        
        /**
         * Importacion de departamentos por un fichero xml en la base de datos
         * @param array $fichero fichero con todos los departamentos en un array a importar
         */
        public static function importarDepartamento($fichero) {
            $correcto = false;
            foreach ($fichero->departamento as $departamento) {
                $codigo = $departamento->codDepartamento;
                $descripcion = $departamento->descDepartamento;
                $sentenciaSQL = "insert into departamento values ('$codigo','$descripcion')";
                if (DBPDO::ejecutaConsulta($sentenciaSQL)) {
                    $correcto = true;
                }
            }
            return $correcto;
        }
    }
 
?>