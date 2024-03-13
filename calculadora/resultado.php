<html>
	<head>
	
	
	</head>
	<body>
		<h1> CALCULADORA </h1>
	
		<?php
			//Entrada de Dados
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operacao = $_POST["operacao"];
		
			//Processamento de Dados
			$soma = $num1 + $num2;
			$subtracao = $num1 - $num2;
			$multiplicacao = $num1 * $num2;
			$divisao = $num1 / $num2;
			
			//Saída de Dados
			if($operacao == "soma"){
				echo "<p>O resultado da soma é: $soma</p>";
			}
			else if ($operacao == "sub"){
				echo "<p>O resultado da subtração é: $subtracao</p>";
			}
			else if ($operacao == "multi"){
				echo "<p>O resultado da multiplicação é: $multiplicacao</p>";
			}
			else{
				echo "<p>O resultado da divisão é: $divisao</p>";
			}
		?>
	
	</body>

</html>