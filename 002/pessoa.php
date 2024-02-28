<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Pessoa</title>
</head>
<body>
    <main>
        <h1>Novo cadastro</h1>
        <?php 
            $n = $_REQUEST["nome"] ?? "desconhecido";
            // Dupla coalescência
            date_default_timezone_set("America/Sao_Paulo");
            $hora = date("H");
            if ($hora >= 0 && $hora < 12) {
                $msg = "Bom dia";
            } else if ($hora < 18) {
                $msg = "Boa tarde";
            } else {
                $msg = "Boa noite";
            }
            echo "<p>Muito prazer em te conhecer <strong>$n</strong>! São $hora horas, $msg!</p>";
        ?>
    </main>
</body>
</html>