<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroalimentares</title>
</head>
<body>
    <?php 
        // Pegando os dados do formulário retroalimentar

        $num1 = $_GET['n1'] ?? 0;
        $num2 = $_GET['n2'] ?? 0;
        $soma = $num1 + $num2;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label for="idn1">Número 1:</label>
                <input type="number" name="n1" id="idn1" value="<?= $num1 ?>">
            </div>
            <div>
                <label for="idn2">Número 2:</label>
                <input type="number" name="n2" id="idn2" value="<?= $num2 ?>">
            </div>
            <input type="submit" value="Somar">
        </form>
        <?= "A soma dos números é $soma" ?>
    </main>
</body>
</html>