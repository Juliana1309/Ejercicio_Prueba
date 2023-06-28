<?php


$conexion = new mysqli_connect("localhost","root","","agendamiento_mantenimiento");

if (mysqli_connect_errno()) {
	echo "Este sitio esta presentando problemas";

}
$mysqli->set_charset("utf8");


?>