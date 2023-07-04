<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Variáveis e constantes</title>
</head>
<body class="bg-dark">
    <header class="d-flex align-items-center justify-content-between border-bottom border-3 border-secondary" style="background-color: #8993C1;">
        <img class="mx-3" src="https://kinsta.com/wp-content/uploads/2018/05/what-is-php-3-1.png" alt="Me" width="150px" height="70px">
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
    <div class="text-secondary d-flex justify-content-center my-2">
        <?= 'PHP > Documentação > Variáveis e constantes' ?>
    </div>
    <main class="bg-light w-75 m-auto p-2 my-3 rounded-1">
        <h3>Variáveis e Constantes</h3>
        <hr>
        <?= 'O que é uma variável e uma constante?' ?>
        <?= 'Basicamente, todo computador tem uma memória principal, uma memória RAM' ?>
        <br>
        <div class="d-flex justify-content-center p-3 my-2 bg-primary-subtle w-75 m-auto">
            <img src="https://a-static.mlcdn.com.br/800x560/memoria-ram-8gb-ddr4-2400mhz-kingston-dimm-kvr24n17s8-8/cavuca1/11463/236f33bc5a14d44d9d7ea0df161e164a.jpg" alt="Memória RAM" width="100px" height="100px">
        </div>
        <br>
        <?= 'Isso é uma memória Ram, ela é utilizada por todo programa que o computador vai rodar. Agora imagine que essa memória seja como uma estante cheia de gavetas' ?>
        <br>
        <div class="d-flex justify-content-center p-3 my-2 bg-primary-subtle w-75 m-auto">
            <img src="https://st3.depositphotos.com/7520316/13610/v/450/depositphotos_136109528-stock-illustration-chest-of-drawers-icon-illustration.jpg" alt="Representação de uma memória" width="100px" height="100px">
        </div>
        <br>
        <?= 'Desse modo que está no desenho ^^' ?>
        <?= 'E todo sistema operacional ocupa espaços nessa memória, sendo assim, o espaço que sobra é usado pelos outros programas que o usuario executa no computador. Por isso que quanto mais memória, mais o desempenho será melhor.' ?>
        <?= 'Mas e se caso eu querer guardar meu nome na memória por exemplo? Tipo, tem todo esse espaço e eu quero reservar um espaço só para colocar meu nome, eu terei que endereçar um lugar na memória que ficará com meu nome guardado nela.' ?>
        <?= 'E eh aí que entra a parte de nós, programadores. Declaramos um espaço na memória sendo ele uma variável ou uma constante. Mas qual a diferença?' ?>
        <?= 'Uma variável, como o prórprio nome já diz, pode mudar, pode variar. Uma constante não varia, eh aquilo ali que eh para sempre.' ?>
        <?= 'Se eu pegar um espaço nesse armário e reservar um espaço para colocar um dado dentro, dando que ele pode mudar futuramente, então eh uma variável, caso contrário, ou seja, o dado não será alterado até o fim do programa, aí já eh uma constante.' ?>
        <?= 'Mas depois de tudo isso, como eu crio uma variável em PHP??. Bom, tem uma regra para a declaração de uma variável, que toda variável em PHP deve começar com o sinal de $ na frente do nome. O nome da variável deve ser referente ao dado que ela irá armazenar. Por exemplo, para uma variável que irá conter meu nome eu posso chamá-la de $nome, e dar o valor "Crys" por exemplo. Para atribuit esse valor a variável eu utilizo o sinal de igual "=", que na programção eh chamado de sinal de atribuição e lido como "recebe". Com isso eu faço: $nome = "Crys"; não esqueçendo esse ponto e vírgula no final que também eh obrigatório no PHP, lendo fica: a variável nome recebe o valor Crys.' ?>
        <br>
        <div class="d-flex justify-content-center p-3 my-2 bg-primary-subtle w-75 m-auto">
            <img src="https://arquivo.devmedia.com.br/noticias/documentacao/documentacao_php-variaveis_38220.png" alt="Declaração">
        </div>
        <br>
        <?= 'Desse modo ^^. Consulte o arquivo dessa página para ter mais detalhamento sobre isso.' ?>
        <br>
        <?php
            $nome = "Crys";
            $sobrenome = "Oliveira";
        ?>
        <?= "Bem vindo, $nome $sobrenome" ?>
        <br>
        <?= 'Essa mensagem foi escrita com a utilização de variáveis $nome e $sobrenome. E como foi dito anteriormente, as variáveis podem mudar no meio do programa se preciar.' ?>
        <br>
        <?php
            $nome = "Nant";
            $sobrenome = "Santos";
        ?>
        <?= "Olá novamente, $nome $sobrenome." ?>
        <br>
        <?= 'Essa frase foi escrita com as mesmas variável $nome e $sobrenome' ?>
        <br>
        <?= 'Agora vou declarar uma constante' ?>
        <br>
        <?php
            const VALOR = "10M";
        ?>
        <?= "Eu tenho dinheiro na quantidade de  " .VALOR. '.'  ?>
        <br>
        <?= 'Essa frase foi escrita utilizando uma constante para definir o valor do dinheiro (que é 10 milhões). E não pode ser mudada até o final do programa. Uma constante eh declarada toda em letras maisúsculas e tem uma linha de declaração "const", sendo essa toda em letras minúsculas. <br> Então eu fiz basicamente: const VALOR = "10M";' ?>
        <br>
        <?= 'E onde fica armazenada essa variável/constante no PHP? Já que essa linguagem eh Server Side, ou seja, do lado do servidor, esses espeços de memória ficam no Server. Mas e quando o cliente vê a variável? Bom, ele recebe só o resultado, a variável ou constante em si tá no servidor guardada lá.' ?>
        <br>
        <?= 'Tanto a variável quanto a constante ficam guardadas do memsmo jeito na memória. Ela vai ficar em um espaço na memória, esse espaço tem um identificado, no caso da variável eh o sinal de $ na frente do nome e na constante eh a declaração const na frente do nome' ?>
        <br>

        <div class="card bg-secondary-subtle w-50 p-2 rounded-3 my-2">
        <?= 'Regras para nomeção de variáveis/constantes' ?>
        <hr>
            <ol>
                <li>Variável sempre começam com o símbolo de $</li>
                <li>O segundo caractere depois do $ pode ser letra ou underline</li>
                <li>Do terceiro em seguinte aceita caracteres de a-z, A-Z, 0-9 e underline</li>
                <li>Aceita caracteres da tabela ASCII a partir de 128 (com acentos)</li>
                <li>Aceita caracteres acentuados</li>
                <li>A linguagem eh case sensitive em relação aos nomes</li>
                <li>Nomes especiais como $this não podem ser usados</li>
                <li>Não pode haver espaços em nomes de variáveis ou constantes</li>
            </ol>
        </div>

        <div class="card bg-secondary-subtle w-50 p-2 rounded-3 my-2">
        <?= 'Recomendações para nomear variáveis/constantes' ?>
        <hr>
            <ol>
                <li>Tente dar nomes claros e de fácil identificação</li>
                <li>Evite nomes muito curtos ou muito longos</li>
                <li>Defina um padrão de nomeação e siga em todo o projeto</li>
                <li>Para variáveis dê preferência a letras minúsculas</li>
                <li>Para constantes, dê preferência a letras maiúsculas</li>
                <li>Use camelCase para métodos e atributos</li>
                <li>Use SANAKE_CASE para nomear constantes</li>
            </ol>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c1ea196d9b.js" crossorigin="anonymous"></script>
</body>
</html>