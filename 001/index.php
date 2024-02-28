<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro site PHP</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: lightsteelblue;
        }
    </style>
</head>
<body>
    <main>
        <h1>Meu primeiro site em PHP</h1>
    </main>
    <section>
        <?php 
            /*
                for ($c = 1; $c <= 30; $c++) {
                    print "<p>Olá, mundo $c!</p>";
                }
            */

            phpinfo();
        ?>
    </section>
    <script>
        window.alert('Seja bem-vindo(a) ao meu site!')
    </script>
</body>
</html>