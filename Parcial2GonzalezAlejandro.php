<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exámen de Parcial 2 - Programación</title>
		<style type="text/css">
	body{
			background: cadetblue;
			text-align: center;
				font-size: 30px;
}
</style>
</head>
</head>
<body>
<?php
$Telefonos = array("Xiaomi X3" => rand(1500,2500), "Samsung S20" => rand(4000,7700), "Motorola G30" => rand(1200, 2000), "Iphone 13 Pro" => rand(8000,15000), "Samsung S23 Ultra" => rand(11000,17000),);

echo "Primeros 5 Telefonos: <br>";
foreach ($Telefonos as $Telefono => $Precio) {
	echo "El Telefono $Telefono cuesta: $$Precio pesos mexicanos <br>";
}

echo "<p>";

$Telefonos += [ "Samsung S24 Ultra" => rand(18000, 25000) ];
$Telefonos += [ "Iphone 16 Pro Max" => rand(15000, 30000) ];
//Está función es igual que "Array_push, pero utiliza menos caracteres, es mas rapido de usar, mas eficiente y más practico para ahorrar tiempo."

echo "Primeros 5 Telefonos + 2 nuevos: <br>";
arsort($Telefonos);
foreach ($Telefonos as $Telefono => $Precio) {
	echo "El Telefono $Telefono cuesta: $$Precio pesos mexicanos <br>";
}
?>
</body>
</html>