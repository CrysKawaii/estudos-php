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
            $num = $_GET["numeroDecimal"] ?? 0;
            $parte_inteira = (int) $num;
            $parte_decimal = $num - $parte_inteira;
            echo "O número em questão é $num";
            echo "<ul><li>A parte inteia do número é " .number_format($parte_inteira, 0, ',', '.'). "</li>";
            echo "<li>A parte decimal é " .number_format($parte_decimal, 3, ',', '.'). "</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
