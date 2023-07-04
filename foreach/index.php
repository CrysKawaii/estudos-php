<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1</title>
</head>
<style>

    table {
        border: 2px solid red;
    }

    td {
        border: 1px solid black;
    }

</style>
<body>
    <?php     
        $itens = [];

        for ($i = 0; $i < 30; $i++) {
            $item = array(
                'produto_id' => rand(1, 100),
                'quantidade' => rand(1, 100),
                'setor_id' => rand(1, 100)
            );

            $itens[] = $item;

        }
    ?>
    <table>
        <?php
        echo "<tr>";
            foreach ($itens as $item) {
                echo "<td>";
                    foreach ($item as $key => $value) {
                        echo "{$key} => $value </br>";
                    }
                    echo "</br>";
                echo "</td>";
            }
        echo "</tr>";
        ?>
    </table>
</body>
</html>
