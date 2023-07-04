<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade</title>
</head>
<body>
    <main>
        <?php 
            include 'Caneta.php';

            $caneta3 = new Caneta;

            $caneta3 -> modelo = 'BIC';
            $caneta3 -> cor = 'Azul';
            //$caneta3 -> ponta = 0.5;
            //$caneta3 -> carga = 50;
            $caneta3 -> tampar();
        ?>
        <pre>
            <?= var_dump($caneta3) ?>
        </pre>
    </main>
</body>
</html>