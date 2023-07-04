<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Real</title>
    <?php 
        $num = $_GET['num'];
        if ($num == '') {
            $num = 0;
        }
        $inte = intval($num);
        $deci = $num - $inte;
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
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column jusify-content-center ">
        <h1 class="display-3 text-center">Resultado</h1>
        <div class="my-2">
            <div class="my-1 text-center">
                <?= "O número enviado foi $num" ?>
            </div>  
            <ul class="d-flex flex-column jusify-content-center align-items-center">
                <div class="my-1">
                    <li><?= "A parte inteira dele é " . number_format($inte, 0 , ',', '.') ?></li>
                </div>
                <div class="my-1">
                    <li><?= "A parte decimal dele é " . number_format($deci, 3, '.', '.') ?></li>
                </div>
            </ul>
        </div>
        <div class="my-2 align-self-center w-75 d-flex justify-content-center">
            <a class="bg-info text-center rounded-2 w-100" href="index.html">Voltar</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>