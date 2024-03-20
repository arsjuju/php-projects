<html>
	<head>
	
	</head>
	<body>
		<h1> Soma 30 números </h1>
		
		<form method="get" action="soma.php">
			<?php
				for ($cont = 1; $cont <= 10; $cont++){
			?>
					<p>
						Valor <?php echo "$cont";?>
						<input type="text" name="valor<?php echo "$cont";?>">
					</p>
			<?php
				}
			?>
			
			<p>
				<input type="submit" value="Somar">
			</p>
		</form>
	</body>
</html>