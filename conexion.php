<?php
    function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "convocatoria";
        $conexion = new mysqli($servername, $username, $password, $dbname);
        $conexion->set_charset("utf8");
        
        // Comprobar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }else{
            echo "Conexión exitosa";
            return $conexion;
        }   
    }

?>