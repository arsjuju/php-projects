<html>
	<head>
	
	</head>
	<body>
		<h1> CADASTRO PESSOAL </h1>
		
		<form action="recebe_dados.php" method="get"> <!-- action= pra onde vai / method = como vai -->
		<p>
			Nome <input type="text" name="nome"> <!-- recebe o dado -->
		</p>
		
		<p>
			Sobrenome <input type="text" name="sobrenome">
		</p>
		
		<p>
			Email <input type="text" name="mail">
		</p>
		
		<p>
			Idade <input type="text" name="idade">
		</p>
		
		<p>
			<input type="submit" value="Cadastrar"> <!-- envia o dado -->
		</p>
		</form>
	</body>
</html>