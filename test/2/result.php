<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php 
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $estado = $_GET['estado'];

        $quest = 0;
        const CHEFE = 'Nanth';

        if ($idade < 18) {
            $frase = 'Ainda é um pequeno jovem!';
        }
        else {
            $frase = 'Já está na melhor fase da vida!';
        }

        foreach ($_GET as $key) {
            $quest++;
        }
    ?>
    <title>Document</title>
</head>
<body>
    <header>
        <h1><?= "Bem vindo, $nome!" ?></h1>
    </header>
    <main>
        <p><?= "Então você tem $idade e mora em $estado. Muito prazer, sou o " .CHEFE  ?></p>
        <p><?= $frase ?></p>
        <p><?= "Você respondeu $quest perguntas" ?></p>
        <?= var_dump($_GET) ?>
    </main>
</body>
</html>