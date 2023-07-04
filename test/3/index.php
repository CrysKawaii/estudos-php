<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Passagem por Ref</title>
</head>
<body>
    <main>
        <?php 
            include 'functions/sum.php';

            // function teste(& $a) {
            //     $a += + 3;
            //     echo $a;
            // }

            // $x = 7;
            // teste($x);
            // echo $x;

            $n1 = $_GET['num1'] ?? 0;
            $n2 = $_GET['num2'] ?? 0;


            
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <div>
                    <label for="idnum1">Digite um número:</label>
                    <input type="number" name="num1" id="idnum1" value="<?= $n1 ?>">
                </div>
                <div>
                    <label for="idnum2">Outro número:</label>
                    <input type="number" name="num2" id="idnum2" value="<?= $n2 ?>">
                </div>
                <div>
                    <input type="submit" value="Somar">
                </div>
        </form>
        <?= somar($n1, $n2) ?>
        <?= multiplicar($n1, $n2) ?>

    </main>
</body>
</html>