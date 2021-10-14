<?php
require("./connection.php");

echo "<center>";
echo "<table class='table1'>";
echo "<tr>";
echo "<th>Producto</th>";
echo "<th>Precio</th>";
echo "<th>Cantidad</th>";
echo "</tr>";
echo "</center>";

$query = "SELECT * FROM `personas` WHERE 1";
$result = mysqli_query($connection, $query);
while ($column = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $column['idpersona'] . "</td><td>" . $column['cedula'] . "</td><td>" . $column['nombres'];
	echo "</tr>";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<p>Hola
	<p>
</body>

</html>