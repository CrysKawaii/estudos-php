<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Quantidade de Salários</title>
    <style>
        label {
            font-size: 14px;
            background-color: rgba(255, 99, 71, 0.3);
        }
    </style>
</head>
<body class="bg-info-subtle">
    <?php 
        $salario_min = 1320;
        $salario = $_REQUEST['salario'] ?? 1280;
        $quantos_salarios = $salario / $salario_min;
        $resto = $salario % $salario_min;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
         
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white text-center">
        <h1>Cálculos de Sálario</h1>
        <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
            <div>
                <label for="idsalario" class="p-1 rounded-2 my-2">Digite seu salário:</label>
                <br>
                <label for="idsalario">R$</label><input type="number" name="salario" id="idsalario" step="0.01" class="border-2 rounded-3" value=<?= $salario ?>>
            </div>
            <input type="submit" value="Calcular" class="btn btn-success my-2">
        </form>
        <div>
            <p>Considerando o valor do salário mínimo sendo <?= numfmt_format_currency($padrao, $salario_min, 'BRL') ?></p>
        </div>
        <?= "Seu salário equivale a " . floor($quantos_salarios) . " salários mínimos" ?>
        <?= "e ainda lhe resta + " .  numfmt_format_currency($padrao, $resto, 'BRL') ?>
    </main>
</body>
</html>