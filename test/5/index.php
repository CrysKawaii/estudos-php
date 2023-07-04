<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    <main>
        <?php 
            include 'Carro.php';

            $carro1 = new Carro('Supra', 'MK4', 'vermelho', 1994, true, 200);
        ?>
        <pre>
            <?= "Eu tenho um {$carro1 -> getNome()} modelo {$carro1 -> getModelo()}, cor {$carro1 -> getCor()} do ano de {$carro1 -> getAno()}, {$carro1 -> getBlindado()}, e com {$carro1 -> getCavalos()} cavalos de potência" ?>
        </pre>
    </main>
</body>
</html>