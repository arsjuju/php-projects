<html>

<head>
</head>

<body>
    <h1> TABELA DINÂMICA </h1>
    <table border="1">
        <tr>
            <td>
                Expressão
            </td>
            <td>Resultado</td>
        </tr>
        <?php

        for ($cont = 1; $cont <= 10; $cont++) {
            $num = $_GET["num"];
            $resultado = $cont * $num;
            ?>
            <tr>
                <td>
                    <?php echo "$cont x $num"; ?>
                </td>
                <td>
                    <?php echo "$resultado"; ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>


</html>