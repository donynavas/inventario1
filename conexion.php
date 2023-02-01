<?php


$mysqli = new mysqli("localhost","root","","bd1");
{
    if($mysqli->connect_errno){
        echo "Fallo al Conectar a la Base de Datos: (" . $mysqli->connect_errno . " ) ". $mysqli->connect_error;
    }
}
?>

