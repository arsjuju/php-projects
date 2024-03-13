<html>
	<head>
	
	
	</head>
	<body>
		<h1> CALCULADORA MÉDIA FINAL </h1>
	
		<?php
			//Entrada de Dados
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$num3 = $_POST["num3"];
			$num4 = $_POST["num4"];
		
			//Processamento de Dados
			$media = ($num1*1 + $num2*2 + $num3*3 + $num4*4) / 10;
			
			//Saída de Dados
			echo"<p>A média final é: $media </p>";
		
		?>
	
	</body>

</html>