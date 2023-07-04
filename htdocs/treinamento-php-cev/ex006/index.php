<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Gerador de números entre 0 e 100</h1>
    </header>
    <main>
        <?php 
            $gerado = mt_rand(1, 100);
            echo "O número gerado é $gerado";
        ?>
        <button onclick="window.location.reload()">Gerar novos números</button>
    </main>
</body>
</html>
