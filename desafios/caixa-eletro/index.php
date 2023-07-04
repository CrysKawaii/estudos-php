<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Caixa Eletrônico</title>
</head>
<body class="bg-info-subtle">
    <?php 
        $quantia = $_GET['quantia'] ?? 0;
        $cem = intdiv($quantia, 100);
        $quantia = ($quantia - ($cem * 100));
        $cinquenta = intdiv($quantia, 50);
        $quantia = ($quantia - ($cinquenta * 50));
        $vinte = intdiv($quantia, 20);
        $quantia = ($quantia - ($vinte * 20));
        $dez = intdiv($quantia, 10);
        $quantia = ($quantia - ($dez * 10));
        $cinco = intdiv($quantia, 5);
        $quantia = ($quantia - ($cinco * 5));
        $um = intdiv($quantia, 1);
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white text-center">
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label for="idquantia">Digite quanto vai sacar:</label>
                <br>
                <input class="border-2 rounded-3" type="number" name="quantia" id="idquantia" value="<?= $_GET['quantia'] ?>" require>
            </div>
            <div>
                <input class="btn btn-success my-2" type="submit" value="Calcular">
            </div>
        </form>
        <?= "Você terá $cem notas de 100 reais" ?>
        <br>
        <?= "Você terá $cinquenta notas de 50 reais" ?>
        <br>
        <?= "Você terá $vinte notas de 20 reais" ?>
        <br>
        <?= "Você terá $dez notas de 10 reais" ?>
        <br>
        <?= "Você terá $cinco notas de 5 reais" ?>
        <br>
        <?= "Você terá $um moedas de 1 real" ?>
    </main>
</body>
</html>