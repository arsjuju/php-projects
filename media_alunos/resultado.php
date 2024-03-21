<html>

<head>
</head>

<body>
    <h1> LER SEXO E NOTA </h1>
    <?php
    $cont_f_ap = 0;
    $cont_f_rep = 0;
    $cont_m_ap = 0;
    $cont_m_rep = 0;
    for ($cont = 1; $cont <= 10; $cont++) {
        $sexo = $_GET["sexo$cont"];
        $media = $_GET["media$cont"];

        if (($sexo == "f") and ($media >=6)) {
            $cont_f_ap++;
           
        } else if (($sexo == "f") and ($media<= 6)){
            $cont_f_rep++;
           
        } else if (($sexo == "m") and ($media <= 6)) {
			$cont_m_rep++;
        } else {
			$cont_m_ap++;  } 
		}
	
    ?>

</body>


</html>