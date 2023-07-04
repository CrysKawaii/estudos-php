<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php 
            $numero = $_GET["num"] ?? 0;
            $resultado = $numero / 5.22;
            //$convertido = number_format($resultado, 2, ',', '.');
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
            $convertido = numfmt_format_currency($padrao, $resultado, 'BRL');
            echo "<p>Em sua humilde carteira americana você terá aproximadamente <strong>$convertido</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
