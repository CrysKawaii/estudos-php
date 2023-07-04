<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Primos</title>
</head>
<body class="bg-secondary">
    <?php
        $num = $_GET['numero'];
        $contador = 0;
    ?>
    <main class="m-3 m-auto w-50 text-center bg-white rounded-3 d-flex flex-column align-items-center">
        <h1>Número primo?</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label class="bg-info-subtle rounded-1 p-1" for="idnumero">Número:</label>
                <br>
                <input class="my-2 border border-2 rounded-3 p-1" type="number" name="numero" id="idnumero" placeholder="15">
            </div>
            <div>
                <input class="btn btn-warning" type="submit" value="Checar">
            </div>
        </form>
        <div class="w-50 my-2 bg-warning-subtle rounded-5">
            <?= "Os mútiplos de $num são: " ?>
            <div>
                <?php
                    for ($i = 1; $i <= $num; $i++) {
                        if ($num % $i == 0) {
                            echo "<u>$i </U>";
                            $contador++;
                        }
                    }
                ?>
                <br>
                <?php if ($contador > 2) { ?>
                    <?= "$num não é primo!" ?>
                <?php } else { ?>
                    <?= "$num é primo!" ?>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>