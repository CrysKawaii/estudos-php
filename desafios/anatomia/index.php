<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Anatomia da Divisão</title>
    <style>
        #valores {
            border-right: 5px solid black;
        }


        #um {
            opacity: 0.1%;
        }

        hr {
            position: relative;
            top: -10px;
            height: 5px;
            width: 40px;
            border: none;
            background-color: black;
            opacity: 100%;
        }
    </style>
</head>
<body class="bg-info-subtle">
    <?php 
        $dividendo = $_GET['dividendo'] ?? 10;
        $divisor = $_GET['divisor'] ?? 10;
        $resultado = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white text-center d-flex flex-column align-items-center">
    <h1 class="mx-2">Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label for="iddividendo">Dividendo: </label>
                <br>
                <input type="number" name="dividendo" id="iddividendo" value=<?= $dividendo ?>>
            </div>
            <div>
                <label for="iddivisor">Divisor: </label>
                <br>
                <input type="number" name="divisor" id="iddivisor" value=<?= $divisor ?>>
            </div>
            <div class="my-3">
                <input type="submit" value="Dividir">
            </div>
        </form> 
        <div class="fs-2 d-flex justify-content-center bg-primary-subtle w-50 rounded-3 p-2 text-black">
            <div id="valores" class="px-1">
                <?= "$dividendo" ?>
                <br><hr id="um" class="my-1">
                <u><?= "$resto" ?></u>
            </div>
            <div id="resultados">
                <?= "$divisor" ?>
                <br><hr class="my-1">
                <?= number_format($resultado) ?>
            </div>
        </div>
    </main> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>