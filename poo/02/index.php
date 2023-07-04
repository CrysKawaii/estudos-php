<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Começando</title>
</head>
<body>
    <main>
        <?php 
            include 'Caneta.php';
            include 'Notebook.php';

            $caneta1 = new Caneta;

            $caneta1 -> cor = 'Azul';
            $caneta1 -> modelo = 2020;
            $caneta1 -> ponta = 0.5;
            $caneta1 -> carga = 50;
            $caneta1 -> destampar();
            $caneta1 -> rabiscar();
        ?>
        <pre>
            <?= var_dump($caneta1) ?>
        </pre>
        <br>
        <?php 
            $caneta2 = new Caneta;

            $caneta2 -> cor = 'Preta';
            $caneta2 -> modelo = 2021;
            $caneta2 -> ponta = 0.7;
            $caneta2 -> carga = 80;
            $caneta2 -> tampar();
            $caneta2 -> rabiscar();
        ?>
        <pre>
            <?= var_dump($caneta2) ?>
        </pre>
        <?php 
            $note1 = new Notebook;

            $note1 -> cor = 'Prateado';
            $note1 -> tela = 'Full HD';
            $note1 -> processador = 'I5';
            $note1 -> memoria_ram = 8;
            $note1 -> armazenamento = 128;
            $note1 -> ligar();
        ?>
        <pre>
            <?= var_dump($note1) ?>
        </pre>
    </main>
</body>
</html>