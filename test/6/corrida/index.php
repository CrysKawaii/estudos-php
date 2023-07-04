<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corrida</title>
</head>
<body>
    <main>
        <?php 
            require_once '.\Carro.php';
            include 'Corrida.php';

            $carro[0] = new Carro('Jeilo', 'Toyota', 1994, 'Vermelho');
            $carro[1] = new Carro('Hypta', 'Mercedes', 2007, 'Prata');

            $racha = new Corrida($carro[0], $carro[1]);
            $racha -> correr();

            //var_dump($racha);
        ?>
        <a href="index.php">Nova corrida</a>
    </main>
</body>
</html>