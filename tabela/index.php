<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tabela</title>
    <style>
    </style>
</head>
<body class="bg-primary-subtle">
    <?php     
        $caixa = [];
        for ($i = 0; $i < 30; $i++) {
            $itens = array(
                'produto_id' => rand(1, 100),
                'quantidade' => rand(1, 100),
                'setor_id' => rand(1, 100)
            );
            $caixa[] = $itens;
        }
    ?>
    <main class="p-3 m-auto text-center">
        <div class="card rounded-3 bg-light-subtle p-2">
            <div class="table-responsive">
                <table class="table table-hover table-sm table-light table-striped">
                    <tr>
                        <thead>
                            <th>Posição</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Setor</th>
                        </thead>
                    </tr>
                    <tbody class="table-group-divider">
                        <?php $posicao = 1 ?>
                        <?php foreach($caixa as $id => $itens) { ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $itens['produto_id'] ?></td>
                                <td><?= $itens['quantidade'] ?></td>
                                <td><?= $itens['setor_id'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>