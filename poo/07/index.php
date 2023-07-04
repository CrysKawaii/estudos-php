<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutas Épicas Insanas Tá Doido</title>
</head>
<body>
    <main>
        <?php 
            include 'Lutador.php';
            include 'Luta.php';

            $nomes = ['Roberto', 'Lucas', 'Felipe', 'André', 'Caio', 'Marco'];
            $nacionalidades = ['BR', 'EUA', 'CA', 'JP', 'CH', 'AG'];
            $idades = [37, 39, 41, 33, 36, 42];
            $alturas = [1.78, 1.74, 1.89, 1.82, 1.90, 1.77];
            $pesos = [73, 69, 86, 64, 112, 78];
            $vitorias = [10, 12, 7, 16, 11, 4];
            $derrotas = [2, 4, 3, 1, 0, 5];
            $empates = [0, 1, 0 , 4, 3, 6];

            for ($i = 0; $i <= 5; $i++)
            {
                $participantes[$i] = new Lutador($nomes[$i], $nacionalidades[$i], $idades[$i], $alturas[$i], $pesos[$i], $vitorias[$i], $derrotas[$i], $empates[$i]);
            }
            
            $combate1 = new Luta;
            $combate1 -> marcarLuta($participantes[1], $participantes[3]);
            $combate1 -> lutar();

            $participantes[1] -> status();
            $participantes[3] -> status();

            //var_dump($combate1);
        ?>
        
    </main>
</body>
</html>