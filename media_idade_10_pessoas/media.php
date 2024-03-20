
<html>
	<head>

	</head>
	<body>
		<h1> Média das idades de 10 pessoas </h1>

		<?php
			$soma = 0;
			for ($cont = 1; $cont <= 10; $cont++){

				$idade = $_GET["idade$cont"];
				$soma = $soma + $idade;
			}

            $media = $soma / 10;
			echo "<p> A média das idades é $media</p>";
		?>
	</body>
</html>
