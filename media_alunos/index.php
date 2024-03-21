<html>

<head>
</head>

<body>
    <h1> LER SEXO E NOTA </h1>

    <form method="get" action="resultado.php">
        <?php
        for ($cont = 1; $cont <= 5; $cont++) {
            ?>
            <p>
                <?php echo $cont; ?>°Pessoa <br>
                Informe a média final: <br>
                <input type="text" name="media<?php echo "$cont"; ?>"><br>

                Informe o sexo: <br>
                <input type="radio" name="sexo<?php echo "$cont"; ?>" value="m"> Masculino <br>
                <input type="radio" name="sexo<?php echo "$cont"; ?>" value="f"> Feminino
            </p>
            <?php
        }
        ?>

        <p>
            <input type="submit" value="Ler">
        </p>
    </form>
</body>

</html>