<?php
$elección = "carro";
switch($elección){
	case 'Helado':
		echo "El helado cuesta $10";
		break;
	case 'Pizza':
		echo "La pizza cuesta $20";
		break;
	case 'Torta':
		echo "La torta cuesta $30";
		break;
	default:
	echo 'Opción no valida';
	break;
}
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
	<h1>Ingresa una opción:</h1>
	<hr>
	<h2>1. Pizza</h2>
	<h2>2. Helado</h2>
	<h2>3. Torta</h2>
</body>
</html>