<?php
//$ciudad = ['Cali', 'Bogotá', 'Pereira', 'Santander', 'Medellin']
$ciudad[0] =[
	"nombre" => "Cali",
	"poblacion" => 2000000,
];
$ciudad[1] =[
	"nombre" => "Bogotá",
	"poblacion" => 1000000,
];
$ciudad[2] =[
	"nombre" => "Pereira",
	"poblacion" => 500000,
];
$ciudad[3] =[
	"nombre" => "Santander",
	"poblacion" => 300000,
];
$ciudad[4] =[
	"nombre" => "Medellin",
	"poblacion" => 400000,
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Ciudades</h1>
	<hr>
	<?php
	// for($i = 0; $i <= 4; $i++){
	// 	echo '<h1> Nombre: '.$ciudad[$i]['nombre'].'</h1>';
	// 	echo '<h2> Población: '.$ciudad[$i]['poblacion'].'</h2>';
	// 	echo '<hr>';
	// }

	foreach($ciudad as $valor){
		echo '<h1> Nombre: '.$valor['nombre'].'</h1>';
	 	echo '<h2> Población: '.$valor['poblacion'].'</h2>';
	 	echo '<hr>';
	}
	?>
</body>
</html>