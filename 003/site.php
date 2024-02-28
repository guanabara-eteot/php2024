<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor do Site</title>
    <?php 
        $cor = $_REQUEST["cor"] ?? "white";
    ?>
    <style>
        body {
            background-color: <?=$cor?>;
            color: white;
        }
    </style>
</head>
<body>
    <main>
        <h1>Site personalizado</h1>

        <p>Exemplo de site personalizado!</p>
    </main>
</body>
</html>