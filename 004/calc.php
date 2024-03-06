<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <h1>Somador de Números</h1>

        <?php
            $n1 = $_GET["v1"] ?? 0;
            $n2 = $_GET["v2"] ?? 0;
        
            $res = (int)$n1 + (int)$n2;
            echo "<p>A soma entre $n1 e $n2 é igual a $res</p>";
        ?>
    </main>
</body>
</html>