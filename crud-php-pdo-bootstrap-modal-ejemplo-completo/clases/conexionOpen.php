<?php

$host = "localhost";
$user = "root";
$pass = "";
$DB = "empresa";
$tb1 = "usuarios";
$tb2 = "empleados";
$conexion = new mysqli($host,$user,$pass,$DB);

error_reporting(0);
if($conexion->connect_errno) {

    echo "lo sentimos, huvo un error en la  conexion ";

}
?>