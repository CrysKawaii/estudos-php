<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Médias</title>
</head>
<body class="bg-info-subtle">
    <?php 
        $n1 = $_GET['n1'] ?? 10;
        $n2 = $_GET['n2'] ?? 10;
        $media_simples = ($n1 + $n2) / 2;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
        $media_ponderada = (($n1 * $peso1) + ($n2 * $peso2))  / ($peso1 + $peso2)
    ?>
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column align-items-center text-center">
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <div>
                <label for="idn1">Digite o primeiro valor:</label>
                <br>
                <input type="number" name="n1" id="idn1" require>
            </div>
            <div>
                <label for="idn2">Digite o segundo valor:</label>
                <br>
                <input type="number" name="n2" id="idn2" require>
            </div>
            <div>
                <label for="idpeso1">Digite o peso do primeiro número:</label>
                <br>
                <input type="number" name="peso1" id="idpeso1" require min="1">
            </div>
            <div>
                <label for="idpeso2">Digite o peso do segundo número:</label>
                <br>
                <input type="number" name="peso2" id="idpeso2" require min="1">
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success my-2" type="submit" value="Medir">
            </div>
        </form>
        <p>Os valores {<?= $n1 ?> com peso(<?= $peso1 ?>)} e {<?= $n2 ?> com peso(<?= $peso2 ?>)} tem as médias:</p>
        <ul>
            <li><?= "Simples --> $media_simples" ?></li>
            <li><?= "Ponderada --> $media_ponderada" ?></li>
        </ul>
    </main>
</body>
</html>