<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Antes e Depois</title>
    <?php 
        $numero = $_GET['num'] ?? 0;
        if ($numero > 0) {
            $ante = $numero - 1;
            $sucessor = $numero + 1;
        }
        else {
            $ante = '?';
            $sucessor = '?';
        }
        
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
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white">
        <h1 class="text-center display-3">Resultado</h1>
        <div class="text-center d-flex flex-column w-100">
            <div>
                <?php if ($numero == 0) {?>
                    <?= "Nenhum número foi recebido!" ?>
                <?php } else {?>
                    <?= "O número enviado foi $numero" ?>
                <?php }?>
            </div>
            <br>
            <div>
                <?= "Seu antecessor é $ante" ?>
            </div>
            <br>
            <div>
                <?= "Seu sucessor é $sucessor" ?>
            </div>
            <br>
            <div class="my-2 align-self-center w-75 d-flex justify-content-center">
                <a class="bg-info text-center rounded-2 w-100" href="index.html">Voltar</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>