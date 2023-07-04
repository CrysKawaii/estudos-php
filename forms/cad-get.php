<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento dos Dados</title>
</head>
<body>
    <?php 
        $nome = $_GET['nome'] ?? "anonimo";
    ?>
    <header>
        <h1>Olá! <?= $nome ?> </h1>
    </header>
    <main>
        <p>Muito prazer em ter você conosco!</p>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>