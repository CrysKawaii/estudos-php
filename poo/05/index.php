<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Conta Bancaria</title>
</head>
<body class="bg-secondary">
    <main>
        <?php 
            include 'ContaBanco.php';

            $p1 = new ContaBanco;
            
            $p1 -> abrirConta('cc');
            $p1 -> setDono('Jubileu');
            $p1 -> setNumConta(111);
            $p1 -> depositar(300);
            $p1 -> pagaMensal();
            $p1 -> sacar(338);
            $p1 -> fecharConta();


            $p2 = new ContaBanco;
            $p2 -> abrirConta('cp');
            $p2 -> setDono('Creusa');
            $p2 -> setNumConta(222);
            $p2 -> depositar(500);
            $p2 -> sacar(1000);
            $p2 -> pagaMensal();
            $p2 -> sacar(630);
            $p2 -> fecharConta();
            
        ?>
        <pre>
            <?= print_r($p1) ?>
            <?= print_r($p2) ?>
        </pre>
    </main>
</body>
</html>