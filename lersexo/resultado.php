<html>

<head>
</head>

<body>
    <h1> LER SEXO E NOTA </h1>
    <?php
    $cont_f = 0;
    $soma_media_mulheres = 0;
    for ($cont = 1; $cont <= 5; $cont++) {
        $sexo = $_GET["sexo$cont"];

        if ($sexo == "f") {
            $cont_f = $cont_f + 1;
           $nota = $_GET["nota$cont"];
           $soma_media_mulheres = $soma_media_mulheres + $nota;
        }
    }
    $soma_media_mulheres = $soma_media_mulheres / $cont_f;
    echo "<p>Media de notas mulheres: $cont_f </>";
    ?>

</body>


</html>