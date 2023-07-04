<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php 
        $email = $_POST['mail'];
        $nome = '';
        if ($email == 'crysnanth@gmail.com') {
            $nome = 'Crys';
        }
        else {
            $nome = 'Novato';
        }
    ?>
    <title>Lobby</title>
</head>
<body>
    <header>
        <h1 class="display-1"><?= "Bem vindo de volta, $nome!" ?></h1>
    </header>
    <main class="m-auto w-50 text-center">
        <h3>O que vai fazer hoje?</h3>
        <div>
            <ul class="list-group">
                <li class="list-group-item">Invadir o FBI</li>
                <li class="list-group-item">Hackear a Nasa</li>
                <li class="list-group-item">Pegar o dinheiro do Elon Musk</li>
                <li class="list-group-item">Beber café</li>
            </ul>
        </div>
    </main>
</body>
</html>