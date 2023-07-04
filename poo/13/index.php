<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poli</title>
</head>
<body>
    <main>
        <?php 
            include 'Cachorro.php';

            $dog = new Cachorro;

            $dog -> reagirFrase('Olá');
            $dog -> reagirFrase('Dale');
            $dog -> reagirHora(11);
            $dog -> reagirHora(21);
            $dog -> reagirDono(true);
            $dog -> reagirDono(false);
            $dog -> reagirIdadePeso(2, 12.5);
            $dog -> reagirIdadePeso(17, 4.5);
        ?>
    </main>
</body>
</html>