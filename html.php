<?php

$animales = ['Perro', 'Gato', 'Conejo', 'Tortuga', 'Pez', 'Cerdo', 'Cabra', 'Vaca', 'Cabra'];
$animales = array('Perro', 'Gato', 'Conejo', 'Tortuga', 'Pez', 'Cerdo', 'Cabra', 'Vaca', 'Cabra');

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
	<!-- <h1>Mi animal favorito es: <?php echo $animales[0]?></h1> -->
	<?php 
	$i=0;
	while($i <= 8){
		echo '<h1>Mi animal favorito es: '.$animales[$i].'</h1>';
		$i++;
	}
	?>
</body>
</html>