<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Reajuste Salárial</title>
    <style>
    
    label {
            font-size: 14px;
            background-color: rgba(255, 99, 71, 0.3);
        }

    </style>
</head>
<body class="bg-info-subtle">
    <?php 
        $produto = $_REQUEST['produto'] ?? 1320;
        $porcentagem = $_REQUEST['reajuste'] ?? 10;
        // Fórmula para calculo de porcentagem: valor * porcentagem / 100 
        $reajuste = $produto + ($produto * ($porcentagem/100));
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white text-center">
        <h1>Reajuste de Preços</h1>
        <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
            <div>
                <label for="idproduto" class="p-1 rounded-2 my-2">Digite o preço do produto:</label>
                <br>
                <input type="number" name="produto" id="idproduto" value="<?= $produto ?>" step="0.01">
            </div>
            <div>
                <label for="idreajuste" class="p-1 rounded-2 my-2">Porcentagem de ajuste:</label>
                <br>
                <input class="custom-range" type="range" name="reajuste" id="idreajuste" value="1" oninput="idvalor.innerHTML = Number(idreajuste.value)">
                <output id="idvalor">1</output>
            </div>
            <input type="submit" value="Calcular" class="btn btn-success my-2">
        </form>
        <u class="link-offset-2"><?= "Com o ajuste de $porcentagem% ele passará a ser " ?></u>
        <u class="link-offset-2"><?= numfmt_format_currency($padrao, $reajuste, 'BRL') ?></u>
    </main>
</body>
</html>