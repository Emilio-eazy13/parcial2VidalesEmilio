<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$carros = [
    "Toyota Corolla" => 20000,
    "Honda Civic" => 22000,
    "Ford Focus" => 21000,
    "Chevrolet Malibu" => 23000,
    "Nissan Altima" => 24000,
];

array_push($carros, ["Mazda 3" => 25000, "Volkswagen Jetta" => 26000]);
foreach ($carros as $modelo => $precio) {
    echo "El precio del $modelo es $$precio.<br>";
}


?>
</body>
</html>