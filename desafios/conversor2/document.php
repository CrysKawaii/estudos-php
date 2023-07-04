<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Teste de API</title>
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
        <h1>Usando uma API do banco central</h1>
        <p>Usar uma API pode facilitar muito na hora de criar um sistema que precisa ser atualizado a cada momento, como foi o caso do sistema de cotação do dólar que vou explicar aqui.</p>
        <p>O primeiro passo para adquirir essa API é ir no site oficial do Banco Central do Brasil, em seguida procure por dados abertos (na barra de pesquisa do site) ou <a href="https://dadosabertos.bcb.gov.br/">clique aqui</a>, que funciona também. Agora procure por <a href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios">dólar comercial</a>, em seguida <a href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994">cotação do dólar em perídodo</a> e você já estará na site que a API será disponibilizada. Apenas clique no <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MTAwfX0=">link</a> abaixo do título e finalmente teremos a tela de preenchimento dos dados que irá ser feito o requerimento.</a></p>
        <p>Nesse formulário coloque a data final como sendo o dia em que você está e a data de início como sendo 7 dias antes ou 1 mÊs antes, fica a seu critério, depois mude o campo máximo de 100 para 1 e coloque em ordenação "dataHoraCotacao desc", isso fará que os dados sejam mostrados no formato de hora que vemos diariamente, deixe a saída como JSON mesmo (JavaScript Objetct Notation), por fim marque as caixinhas cotação de compra e data e hora da cotação. </p>
        </body>
    </main>
</html>