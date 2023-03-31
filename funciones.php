<?php

function lorem(){
	return '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur accusantium rerum quibusdam error totam labore vero dicta voluptatem asperiores ducimus consectetur aliquam earum autem dolore, delectus illo exercitationem dolorum cupiditate!</p>';
}
function promedio($n1, $n2){
	return ($n1 + $n2)/2;
}

echo promedio(10,20);
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
	<section>
		<?php echo lorem(); ?>
	</section>

	<footer>
		<h1>Todos los drerechos reservados <?php echo date ('Y'); ?></h1>
	</footer>
</body>
</html>