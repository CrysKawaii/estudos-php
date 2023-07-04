<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Documentação A1</title>
</head>
<body class="bg-secondary">
<header class="d-flex align-items-center justify-content-between border-bottom border-3 border-secondary" style="background-color: #8993C1;">
        <a href="index.html"><img class="mx-3" src="https://kinsta.com/wp-content/uploads/2018/05/what-is-php-3-1.png" alt="Me" width="150px" height="70px"></a>
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Perguntas</a></li>
            </ul>
        </nav>
        <form action="#" class="mx-3">
            <label for="idbusca"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input class="p-1" type="text" name="busca" id="idbusca" placeholder="procurar" size="32">
        </form>
    </header>
    <main class="bg-light w-75 m-auto p-2 my-3 rounded-1">
        <h1>Funções de formatação</h1>
        <div>
            <h3><u>Função number_format()</u></h3>
            <p>Para formatar um número com quantas casas decimais ele vai ter depois da vírgula, use a função number_format().</p>
            <p>Exemplo: 153.989399539593 veja como esse número é muito grande em casas decimais, para deixa-lo com apenas duas casas eu uso a função:</p>
            <?php
                $num = 153.989399539593;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            ?>
            <?= "O número com a formatação correta: " . number_format($num, 2) ?>
            <p>Basicamnte o que eu fiz foi colocar o número em uma variável e depois utilizar a função number_format($num, 2) desse jeito. O primeiro parâmetro que foi passado é a variável com o número e o segundo é o número de casas que quero depois da vírgula (pode ser quantas casas precisar). Com essa função eu ainda posso mudar os sinais que tem no número, por exemplo trocar o ponto pela vírgula:</p>
            <?= "Usando a função: number_format(\$num, 2, ',', '.') dessa forma eu tenho o resultado: " . number_format($num, 2, ',', '.') ?>
            <p>Nesse caso houve mais dois parâmetros na função, o terceiro que serviu para indicar qual sinal deve ser posto para o separador de deciamal e o quarto para indicar qual sinal deve ser colocado para o separador de milhar. Essa função é muito simples e também muito útil. Não exite em usá-la quando necessário!</p>
        </div>
        <div>
            <h3><u>Função numfmt_format_currency()</u></h3>
            <p>De uma maneira mais profissional, tem a função que formata o número de fato como um número monetário a ser apresentado pelo usuário. Para utilizar essa função primeiro é necessário colocar um padrão, então eu declaro uma variaável $padrao que irá conter os seguintes valores: numfmt_create("pt_BR", NumberFormatter::CURRENCY). O que basicmante eu fiz aqui: eu informei um padrão, primeiro indicado que o meu site é português do Brasil e os valores serão mostrados para as pessoas em formato de moeda que os brasileiros são acostumados a ver, em seguida eu coloquei o formato dos números para serem exibidos como valor monetário, resumindo, os visitantes do meu site irão ver os valores com esse padrão do jeito monetário dos brasileiros(porque meu site é br, então não teria sentido de eu mostrar valores em formato americano por exmeplo). </p>
            <p>Com esse padrão definido eu uso ele para exibir os valores:</p>
            <?= "Usando agora a função numfmt_format_currency(\$padrao, \$num, \"BRL\") para complementar, eu tenho o resultado: " .numfmt_format_currency($padrao, $num, "BRL") ?>
            <p>Perceba como não foi difícil formatar esse número para valor monetário, tudo graças as funções que o PHP disponibiliza para nosso uso.</p>
        </div>
    </main>
</body>
</html>