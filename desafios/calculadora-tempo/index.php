<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Calculadora de tempo</title>
</head>
<body class="bg-info-subtle">
    <?php 
        $tempo = $_GET['tempo'];
        $resto = $tempo;
        $semanas = intdiv($resto, 604800);
        $resto = $resto % 604800;
        $dias = intdiv($resto, 86400);
        $resto = $resto % 86400;
        $horas = intdiv($resto, 3600);
        $resto = $resto % 3600;
        $minutos = intdiv($resto, 60);
        $resto = $resto % 60;
        $segundos = $resto;
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column align-items-center">
        <h1>Calculadora de tempo</h1>
        <form action=<?= $_SERVER['PHP_SELF'] ?> method="get">
            <div class="my-2 d-flex flex-column align-itemns-center">
                <label for="idtempo">Digite o total de tempo (em segundos):</label>
                <input type="number" name="tempo" id="idtempo" value="<?=$tempo?>">
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="Calcular">
            </div>
        </form>
        <?= "O total de " . number_format($tempo, 0, ',', '.') . " de segundos equivale a:" ?>
        <div class="bg-white rounded-4 text-black p-2 my-2">
            <ul>
                <li><?="$semanas semanas"?></li>
                <li><?="$dias dias"?></li>
                <li><?="$horas horas"?></li>
                <li><?="$minutos minutos"?></li>
                <li><?="$segundos segundos restantes"?></li>
            </ul>
        </div>
    </main>
</body>
</html>