<html>

<head>

</head>

<body>
	<h1> Tabuada </h1>

	<?php
	$num = $_GET["num"];

	for ($cont = 1; $cont <= 10; $cont++) {

		$resultado = $cont * $num;
		echo "$num x $cont = $resultado <br>";

	}
	?>
</body>

</html>