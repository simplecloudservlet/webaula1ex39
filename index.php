<!-- TODO1: PHP: Crie uma funcao que utilize 'if-else' para avaliar numeros aleatorios -->
<!-- TODO2: PHP: Crie uma funcao que utilize 'switch-case' para avaliar numeros aleatorios -->
<!-- TODO3: PHP: Crie uma funcao que utilize 'for' percorrer os elementos de um vetor -->
<!-- TODO4: PHP: Crie uma funcao que utilize 'while' percorrer os elementos de um vetor -->
<!-- TODO5: PHP: Crie uma funcao que utilize 'do-while' percorrer os elementos de um vetor -->


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

		echo $x;
		if($x >= 1 && $x < 50){
			echo ' Pouco<br>';
		} else 
		if($x >= 50 && $x < 100){
			echo ' Médio<br>';
		} else
		if($x >= 100){
			echo ' Muito<br>';
		} 

	}

	//Invoca a funcao
	f1();

	?>
<br>
<br>

<!-- TODO2 -->
<?php
	function f2(){

		$x = rand(1,200);

		echo $x . ' ';
		switch($x){
			case 1: {
				echo 'Um<br>';
				break;
			}
			case 2: {
				echo 'Dois<br>';
				break;
			}
			default : {
				echo 'Maior que dois';
				break;
			}
		}//end
	}//end

	//Invoca a funcao
	f2();

	?>
<br>
<br>

<!-- TODO3 -->
<?php
	function f3(){

		$vetor = [];

		array_push($vetor, 1,2,3);

		for($i=0; $i<count($vetor); $i++){
			echo $vetor[$i] . ',';
		}

	}//end

	//Invoca a funcao
	f3();

	?>
<br>
<br>

<!-- TODO4 -->
<?php
	function f4(){

		$vetor = [];

		array_push($vetor, 1,2,3);

		$i = 0;
		while($i<count($vetor)){
			echo $vetor[$i] . ',';
			$i++;
		}

	}//end

	//Invoca a funcao
	f4();

	?>
<br>
<br>

<!-- TODO5 -->
<?php
	function f5(){

		$vetor = [];

		array_push($vetor, 1,2,3);

		$i = 0;
		do {
			echo $vetor[$i] . ',';
			$i++;
		} while($i<count($vetor));

	}//end

	//Invoca a funcao
	f5();

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