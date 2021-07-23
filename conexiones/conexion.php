<?php
/* Conexion a la base de datos */
function conectar(){
    try{
        /* servidor, usuario y contaseña de la base de datos */
        $db = new PDO('mysql:host=localhost;dbname=hedm_final', 'root', '');

        /* se retorana la conexion a la base de datos para posibles consultas */
        return $db;
    }catch(Exception $ex){
        /* En caso de no conectar la base de datos se muestra un mensaje junto con el mensaje de la excepcion */
        echo "ocurrio un error en la conexion". $ex->getMessage();
    }
}

?>