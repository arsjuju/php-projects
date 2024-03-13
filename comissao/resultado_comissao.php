<html>
	<head>
	
	
	</head>
	<body>
		<h1> CALCULADORA SALÁRIO FINAL </h1>
	
		<?php
			//Entrada de Dados
			$salario = $_POST["salario"];
			$vendas = $_POST["vendas"];
		
			//Processamento de Dados
			$comissao = ($vendas * 0.15) + $salario;
			//Saída de Dados
			echo"<p>O valor do salário reajustado é: $comissao </p>";
		
		?>
	
	</body>

</html> 