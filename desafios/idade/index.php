<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Idade</title>
    <style>
        label {
            font-size: 14px;
            background-color: rgba(255, 99, 71, 0.3);
        }
    </style>
</head>
<body class="bg-info-subtle">
    <?php 
        $ano = $_GET['ano'] ?? date('Y');
        $ano_nascimento = $_GET['nasceu'] ?? 2005;
        $idade_atual = $ano - $ano_nascimento;
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white text-center">
        <h1>Idade relativa</h1>
        <form action=<?= $_SERVER['PHP_SELF'] ?> method="get">
            <div>
                <label for="idnasceu" class="p-1 rounded-2 my-2">Ano em que nasceu:</label>
                <br>
                <input type="number" name="nasceu" id="nasceu" value="2005" max="<?= date('Y') - 1 ?>" class="border-2 rounded-4 p-1">
            </div>
            <div>
                <label for="idano" class="p-1 rounded-2 my-2">Quer saber sua idade em que ano?(atualmente estamos em <?= date('Y') ?>)</label>
                <br>
                <input type="number" name="ano" id="idano" value=<?= $ano ?> class="border-2 rounded-4 p-1">
            </div>
            <input type="submit" value="Calcular" class="btn btn-success my-2">
        </form>
        <div>
            <u class="link-offset-2"><?= "No ano $ano você vai ter $idade_atual anos de idade" ?></u>
        </div>
    </main>
</body>
</html>