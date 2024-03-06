<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        
        <?php
            $r = $_GET["real"] ?? 0;
            $c = $_GET["cota"] ?? 4.94;

            $d = $r / $c;

            echo "<p>O valor de R$". number_format($r, 2, ",", ".") ." equivale a US$". number_format($d, 2, ",", ".") ."</p>";
            echo "<p>Cotação utilizada: R$". number_format($c, 3, ",", ".") ."  por cada US$</p>";
        ?>
    </main>
</body>
</html>