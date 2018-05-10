<?php
    if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) { 
            require_once "config/constDB.php"; 
        } 
        else { 
            require_once "../config/constDB.php"; 
    } 
        /*
         * Clase DBPDO.php
         * 
         * @author Erick Martin Robles
         * @version  1.0
         * @filesource
         */
    class DBPDO {
        /**
         * Ejecutar cualquier consulta 
         * @param string $sql consulta a ejecutar
         * @return int numero de registros que encuentra la consulta
         */
        public static function ejecutaConsulta($sql) {
            try{
                $dwes = new PDO(DSN, USUARIO, PASSWORD);
                $dwes ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $resultado = null;
                if (isset($dwes)){
                    $resultado = $dwes->query($sql);
                    return $resultado;
                } 
            }
            catch(Exception $miExeception){
                print("Codigo de error: ".$miExeception->getCode()."<br>");
                print("Error: ".$miExeception->getMessage());
                unset($dwes);
            }
            
        }
    }
?>
