
<html>
	<head>

	</head>
	<body>
		<h1> CONTADOR </h1>
		
		<h2> Com o FOR </h2>
		
		<?php
			$soma = 0;
			for ($cont = 1; $cont <= 30; $cont++){
				$valor = $_GET["valor$cont"];
				$soma = $soma + $valor;
			}

			echo "<p> O somatório total é $soma</p>";
		?>
	</body>
</html>
