<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário = octal
        // 3e2 = 3 x 10^2
        $num = 15;
        $nome = 'Crys';
        $din = 15.000;
        $verdade = true;
        var_dump($num);
        var_dump($nome);
        var_dump($din);
        var_dump($verdade);

        // $coe = (int)'950'; coerção
        // var_dump($coe);

        $lista = [1, 2, 3];

        class Pessoas {
            private string $nome;
        }

        $p = new Pessoas;


        echo 'Eu te amo ' . 'Deus';

        const NOME = 'Nant';
        echo "Meu nome é " .NOME;
    ?>
</body>
</html>
