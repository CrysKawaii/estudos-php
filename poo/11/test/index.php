<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranças</title>
</head>
<body>
    <main>
        <?php 
            include 'Aluno.php';
            include 'Bolsista.php';
            include 'Professor.php';
            include 'Tecnico.php';

            $p[0] = new Aluno('Lola', 15, 'F');
            $p[1] = new Bolsista('Pila', 19, 'F');
            $p[2] = new Professor('Lela', 45, 'F');
            $p[4] = new Tecnico('Jipe', 32, 'F');
            $p[5] = new Pessoa(1, 2, 3);
        ?>
        <pre>
            <?= print_r($p) ?>
        </pre>
    </main>
</body>
</html>