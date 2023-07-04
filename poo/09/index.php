<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura</title>
</head>
<body>
    <main>
        <?php 
            include 'Pessoa.php';
            include 'Livro.php';

            $p1 = new Pessoa('Paula', 37, 'F');
            $p2 = new Pessoa('Pedro', 54, 'M');

            $l1 = new Livro('O nome do Vento', 'Jeiko', 517, $p1);
            $l2 = new Livro('O Temor do Sábio', 'Jeika', 917, $p2);
            $l3 = new Livro('Clean Code', 'haeuj', 287, $p1);
            
            $l1 -> detalhes();
            $l2 -> detalhes();
            $l3 -> detalhes();
        ?>
    </main>
</body>
</html>