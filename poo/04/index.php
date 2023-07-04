<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>
    <main>
        <?php 
            include 'Caneta.php';

            $caneta4 = new Caneta('BIC', 'Azul', 0.5, 100);
            $caneta5 = new Caneta('Montblanc', 'Preta', 1.0, 100);
        ?>
        <pre>
            <?= print_r($caneta4) ?>
            <?= print_r($caneta5) ?>
        </pre>
        <?= "Eu tenho uma caneta modelo {$caneta4 -> getModelo()} com a ponta {$caneta4 -> getPonta()}" ?>
    </main>
</body>
</html>