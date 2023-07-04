<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <main>
        <code>
            <?php
                include 'ControleRemoto.php';
                $controle1 = new ControleRemoto;

                $controle1 -> ligar();
                $controle1 -> maisVolume();
                $controle1 -> maisVolume();
                $controle1 -> abrirMenu();
                $controle1 -> ligarMudo();
                $controle1 -> abrirMenu();
                $controle1 -> desligarMudo();
                $controle1 -> abrirMenu();
                $controle1 -> fecharMenu();
                $controle1 -> desligar();
            ?>
        </code>
    </main>
</body>
</html>