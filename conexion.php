<?php

$DB_HOST = "localhost"; 
$DB_USERNAME = "root"; 
$DB_PASSWORD = "1682"; 
$DB_NAME = "analisis2_practica1";  

$con = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD); 
mysql_select_db($DB_NAME, $con) or die('Error en la base de datos, Favor de intentarlo mas tarde.'); 

// esto es un comentario


//otra linea de prueba
?>