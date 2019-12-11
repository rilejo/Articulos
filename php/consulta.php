<?php

require ("conexion.php");

$connection = mysqli_connect($host, $user, $pass);

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" .mysqli_connect();
        }
  else
        {
            echo "Hemos conectado al servidor <br>" ;
        }
?>