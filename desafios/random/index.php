<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomicamente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php 
        $num = rand(1, 1000);
    ?>
</head>
<body class="bg-info-subtle">
    <main class="bg-secondary w-50 m-auto mt-5 p-2 rounded-4 text-white d-flex flex-column align-items-center">
        <h1 class="display-5 text-center">Número Gerado Randomicante</h1>
        <div class="text-center">
            <u class="link-offset-3"><?= "O número gerado dessa vez é $num" ?></u>
        </div>
        <div class="w-75 d-flex">
            <a style="text-decoration: none; color:white;" class="bg-info text-center w-100 p-2 rounded-2 my-3 border border-2 border-black" href="index.php">Gerar Novo</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>