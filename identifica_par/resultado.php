<html>
	<head>
	
	
	</head>
	<body>
		<h1> IDENTIFICA PAR OU IMPAR </h1>
	
		<?php
			//Entrada de Dados
			$num = $_POST["num"];
		
			if($num % 2){
				echo "<p>O número $num é impar</p>";
			}
			else{
				echo "<p>O número $num é par</p>";
			}
		?>
	
	</body>

</html>