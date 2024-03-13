<html>
	<head>

	</head>
	<body>
		<h1> CONTADOR </h1>
		
		<h2> Com o While </h2>
		<?php
			$cont = 1;
			$num = $_GET["num"];
			while ($cont <= $num) {
				
				echo "<p> Estou contando $cont</p>";
				$cont++;
		
			}
		?>
		<h2> Com o DO..While </h2>
		
		<?php
			$cont = 1;
			$num = $_GET["num"];
			do {
				
				echo "<p>Estou contando $cont </p>";
				$cont++;
				
			} while ($cont <= $num);
		?>
		<h2> Com o FOR </h2>
		
		<?php
			$num = $_GET["num"];
			for ($cont = 1; $cont <= $num; $cont++) {
				
				echo "<p>Estou contando $cont </p>";
				
			}
		?>
	</body>
</html>