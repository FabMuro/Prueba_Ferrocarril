<?php 
	$sqlconnection=new mysqli("localhost","fmurom@unprg.edu.pe","Muro5455","db_prueba");

	if ($sqlconnection->connect_error) {
   die("Conexion fallida: " . $sqlconnection->connect_error);
}
 ?>