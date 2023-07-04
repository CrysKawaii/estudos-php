<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Raízes</title>
    <style>
        label {
            font-size: 14px;
            background-color: rgba(255, 99, 71, 0.3);
        }
    </style>
</head>
<body class="bg-info-subtle">
    <?php 
        $numero = $_GET['num'] ?? 64;
        $raiz_quadrada = $numero ** (1/2);
        $raiz_cubica = $numero ** (1/3);
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column align-items-center">
        <h1>Cálculo de raizes</h1>
        <form action=<?= $_SERVER['PHP_SELF'] ?> method="get">
            <div>
                <label for="idnum" class="p-1 rounded-2 my-2">Digite um número:</label>
                <br>
                <input class="border-2 rounded-3 p-1" type="number" name="num" id="idnum" value=<?= $numero ?>>
            </div>
            <div class="d-flex justify-content-center"><input type="submit" value="Calcular" class="btn btn-success my-2"></div>
        </form>
        <ul>
            <li><u class="link-offset-2"><?= "A raíz quadrada do número é " . number_format($raiz_quadrada, 2) ?></u></li>
            <li><u class="link-offset-2"><?= "A raíz cúbica do número é " .  number_format($raiz_cubica, 2) ?></u></li>
        </ul>
    </main>
</body>
</html>