<html>
	<head>
	
	
	</head>
	<body>
		<h1> CALCULADORA REAJUSTE DE SALÁRIO </h1>
	
		<?php
			//Entrada de Dados
			$salario = $_POST["salario"];
		
			//Processamento de Dados
			$reajuste = ($salario * 0.1) + $salario;
			
			//Saída de Dados
			echo"<p>O valor do salário reajustado é: $reajuste </p>";
		
		?>
	
	</body>

</html> 