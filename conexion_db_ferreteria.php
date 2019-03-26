<?php

    class conexion_db_ferreteria{
    //clase para realizar la conexion con la base de datos
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $base_datos = "db_ferreteria";

        function conexion_db_ferreteria(){
            $conexion=mysql_connect($servidor,$usuario,$password,$base_datos) or 
            die ("no se puede conectar".mysql_error);
        }
    }

    $con = new conexion_db_ferreteria();
        print "listo";
?>