<!-- TODO1: PHP: Crie uma funcao que utilize if-else para avaliar numeros aleatorios -->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php
	function f1(){

		$x = rand(1,200);

		if($x >= 1 && $x < 50){
			echo 'Pouco<br>';
		} else 
		if($x >= 50 && $x < 100){
			echo 'Médio<br>';
		} else
		if($x >= 100){
			echo 'Muito<br>';
		} 

	}

	//Invoca a funcao
	f1();

	?>
<br>
<br>


<form action='calcular.php' method="get">
		Número1: <input name="n1" type="text" required autofocus />
		<br>
		Número2: <input name="n2" type="text" required />
		<br>
		<input type="submit">
</form>
	
</body>

</html>