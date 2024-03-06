<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <h1>Calculadora Básica</h1>

        <?php
            $n1 = $_GET["v1"] ?? 0;
            $n2 = $_GET["v2"] ?? 0;
            $op = $_GET["op"] ?? "+";

            switch ($op) {
                case "+":
                    $res = $n1 + $n2;
                    echo "<p>A soma entre $n1 e $n2 é igual a $res</p>";
                    break;
                case "-":
                    $res = $n1 - $n2;
                    echo "<p>A diferença entre $n1 e $n2 é igual a $res</p>";
                    break;
                case "*":
                        $res = $n1 * $n2;
                        echo "<p>O produto entre $n1 e $n2 é igual a $res</p>";
                        break;
                case "/":
                    if ($n2 == 0) {
                        echo "<p>Não é possível fazer divisão por ZERO</p>";
                    } else {
                        $res = $n1 / $n2;
                        echo "<p>O quociente entre $n1 e $n2 é igual a " . number_format($res, 2, ",", ".") . "</p>";
                    }
                    break;
                default:
                    echo "<p>Alguma coisa deu errado</p>";
            }
        ?>
    </main>
</body>
</html>