<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php 
                $num = $_GET["num"] ?? 0;
                $antecessor = $num - 1;
                $sucessor = $num + 1;
                echo "<br><u>O número escolhido foi <mark>$num</mark></u>";
                echo "<br>Seu antecessor é <mark>$antecessor</mark>";
                echo "<br>Seu sucessor é <mark>$sucessor</mark>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
