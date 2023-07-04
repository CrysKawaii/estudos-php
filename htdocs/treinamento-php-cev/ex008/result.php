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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

             $dados = json_decode(file_get_contents($url), true);
            // var_dump($dados);

            $cota = $dados["value"][0]["cotacaoCompra"];
            // echo $cota;

            $numero = $_GET["num"] ?? 0;
            $resultado = $numero / $cota;
            // $convertido = number_format($resultado, 2, ',', '.');
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
            $convertido = numfmt_format_currency($padrao, $resultado, 'BRL');
            echo "<p>Em sua humilde carteira americana você terá aproximadamente <strong>$convertido</strong></p>";
        ?>
    </main>
</body>
</html> 
