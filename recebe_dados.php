<html>
	<head>
	
	</head>
	<body>
		<h1> CADASTRO PESSOAL </h1>
		
		<?php
		
			$nome = $_GET["nome"];
			$sobrenome = $_GET["sobrenome"];
			$email = $_GET["mail"];
			$idade = $_GET["idade"];
			
			echo"<p> Nome: $nome </p>";
			echo"<p> Sobrenome: $sobrenome </p>";
			echo"<p> email: $email </p>";
			echo"<p> idade: $idade </p>";
		
		?>
		
	</body>
</html>