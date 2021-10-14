<?php
	$serverName = "localhost";
	$user = "root";
	$password = "";
	$dataBaseName = "dbinicial";
	$connection = mysqli_connect($serverName, $user, $password, $dataBaseName) or die("La conexion al servidor no fue establecida");
	$dataBase = mysqli_select_db($connection, $dataBaseName) or die("No se logro conectar a la base de datos");
?>