<html>
	<head>
	
	
	</head>
	<body>
		<h1> IDENTIFIQUE SEU SEXO </h1>
	
		<?php
			//Entrada de Dados
			$sexo = $_GET["sexo"];
		
			//Processamento de Dados
			if($sexo == "m"){
				echo "<p> Foi escolhido o sexo masculino</p>";
			}
			else{
				echo "<p> Foi escolhido o sexo feminino</p>";
			}
		
		?>
	
	</body>

</html> 