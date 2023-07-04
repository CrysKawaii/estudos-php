<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Conversor de Moeadas</title>
    <?php 
        $quantia = $_GET['reais'];
        $dolar = 5.05;
        $calc = $quantia / $dolar;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $total = numfmt_format_currency($padrao, $calc, 'USD');
    ?>
    <style>
        a {
            padding: 10px;
            text-decoration: none;
            color: black;
            border: 2px solid black;
        }
    </style>
</head>
<body class="bg-info-subtle">
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column text-center">
        <h1 class="display-3 text-center">Dólares</h1>
        <div class="fs-2">
            <?= "Na sua carteira você tem $total dólares" ?>
        </div>
        <div class="my-2 align-self-center w-75 d-flex justify-content-center">
            <a class="bg-info text-center rounded-2 w-100" href="index.html">Voltar</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>