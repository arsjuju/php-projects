<html>
	<head>

	</head>
	<body>
		<h1> CONTADOR </h1>
		
		<h2> Com o FOR </h2>
		
		<?php
			$num1 = $_GET["num1"];
			$num2 = $_GET["num2"];;
			echo "<p>Os valores Intermediários de $num1 e $num2</p>";
			for ($cont = $num1 + 1 ;$cont < $num2; $cont++) {
				
				echo "$cont ";
				
			}
		?>
	</body>
</html>