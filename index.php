<?php
require("./connection.php");

echo "<div class='mainContainer'>";
echo "<table class='table table-striped table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>ID</th>";
echo "<th scope='col'>Cédula</th>";
echo "<th scope='col'>Nombres</th>";
echo "<th scope='col'>Apellidos</th>";
echo "<th scope='col'>Correo</th>";
echo "<th scope='col'>Dirección</th>";
echo "<th scope='col'>Teléfono</th>";
echo "<th scope='col'>Fecha de nacimiento</th>";
echo "</tr>";
echo "</thead>";
echo "</center>";

$query = "SELECT * FROM `personas` WHERE 1";
$result = mysqli_query($connection, $query);
while ($column = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $column['idpersona'] . "</td><td>" . $column['cedula'] . "</td><td>" . $column['nombres'] . "</td><td>" . $column['apellidos'] . "</td><td>" . $column['correo'] . "</td><td>" . $column['direccion'] . "</td><td>" . $column['telefono'] . "</td><td>" . $column['fechaNacimiento'] . "</td>";
	echo "</tr>";
}

echo "</div>";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./styles.css">
	<title>Document</title>
</head>

<body>
	<h1 class="display-3">Base de datos</h1>
	<h4 class="spacedBottom">Informacion obtenida de la base de datos <small class="text-muted">dbinicial</small> en la tabla <small class="text-muted">personas</small></h4>
</body>

</html>