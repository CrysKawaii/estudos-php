<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo</title>
</head>
<body>
    <main>
        <?php 
            include 'Mamifero.php';
            include 'Reptil.php';
            include 'Peixe.php';
            include 'Ave.php';
            include 'Canguru.php';
            include 'Cachorro.php';
            include 'Cobra.php';
            include 'Tartaruga.php';
            include 'Goldfish.php';
            include 'Arara.php';

            $mami = new Mamifero;
            $ave = new Ave;
            $cang = new Canguru;

            $mami -> emitirSom();
            $ave -> emitirSom();
            $cang -> locomover();
            $mami -> locomover();
        ?>
    </main>
</body>
</html>