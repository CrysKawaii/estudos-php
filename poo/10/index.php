<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <main>
        <?php 
            include 'Pessoa.php';
            include 'Aluno.php';
            include 'Professor.php';
            include 'Funcionario.php';

            $p1 = new Aluno('Pascal', 15, 'M');
            $p2 = new Professor('Marileu', 58, 'M');
            $p3 = new Funcionario('Jiranda', 49, 'F');

            $p1 -> setMatr(true);
            $p1 -> setCurso('Programação');

            $p2 -> setEspec('POO');
            $p2 -> setSalario(3000);

            $p3 -> setSetor('Informática');
            $p3 -> setTrabalhando(true); 
        ?>
        <pre>
            <?= print_r($p1) ?>
            <?= print_r($p2) ?>
            <?= print_r($p3) ?>
        </pre>
    </main>
</body>
</html>