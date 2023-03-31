<?php

$animales = ['Perro', 'Gato', 'Conejo', 'Tortuga', 'Pez', 'Cerdo', 'Cabra', 'Vaca', 'Cabra', 11, False];
// $animales = array('Perro', 'Gato', 'Conejo', 'Tortuga', 'Pez', 'Cerdo', 'Cabra', 'Vaca', 'Cabra');

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
	foreach($animales as $valor){
		echo '<h1>Mi animal favorito es: '.$valor.'</h1>';
	}
	?>
</body>
</html>