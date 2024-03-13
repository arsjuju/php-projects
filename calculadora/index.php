<html>
	<head>
	
	
	</head>
	<body>
		<h1> CALCULADORA </h1>
	
		<!-- Começo do Formulário -->
		<form action="resultado.php" method="post"> <!-- Definimos pra onde vai o formulário e como vai  -->
			<p>
				Valor 1: <input type="text" name="num1" required > <br> <!-- Criação das linhas para enviar a informação  -->
				Valor 2: <input type="text" name="num2" required >
				
			 <p>Escolha uma das opções:</p> 
			
			<p>
				<input type="radio" name="operacao" value="soma" checked>
				Soma <br> 
				<input type="radio" name="operacao" value="sub">
				Subtração <br>
				<input type="radio" name="operacao" value="multi">
				Multiplicação <br> 
				<input type="radio" name="operacao" value="divi">
				Divisão
			</p>	
			
			</p>	
			<p>
				<input type="submit"> <!-- Criação do botão para enviar as informações  -->
			</p>
		</form> <!-- Fim do Formulário -->
	
	
	</body>

</html>