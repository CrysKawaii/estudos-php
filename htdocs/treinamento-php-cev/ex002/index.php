<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo</h1>
    <?php 
        // aqui data a timezone para o horário de São Paulo, porque por padrão vem outro horário de outro lugar
        date_default_timezone_set("America/Sao_Paulo");
        // d para dia, M para mês e Y para ano, se escrever o d maiúsculo é mostrado o nome do dia
        echo "Hoje é dia " .date("d/M/Y");
        // G para hora, i para minutos e s para segundos
        echo " hora " .date("G:i:s");


        const PAIS = "Brasil";
        echo "Eu moro no " .PAIS;


    ?>
</body>
</html>