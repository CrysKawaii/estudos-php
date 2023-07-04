<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Estrutura Condicional</title>
</head>
<body class="bg-secondary" >
<header class="d-flex align-items-center justify-content-between border-bottom border-3 border-secondary" style="background-color: #8993C1;">
        <img class="mx-3" src="https://kinsta.com/wp-content/uploads/2018/05/what-is-php-3-1.png" alt="Me" width="150px" height="70px">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Quest</a></li>
            </ul>
        </nav>
        <form action="#" class="mx-3">
            <label for="idbusca"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input class="p-1" type="text" name="busca" id="idbusca" placeholder="procurar" size="32">
        </form>
    </header>
    <main class="w-50 bg-white m-auto my-3 p-4 rounded-2">
        <h1>Estruturas Condicionais</h1>
        <p>Muitas vezes na vida eu me depare com algumas situações que é preciso fazer escolhas que podem me levar em vários caminhos diferentes, sendo eles interessantes ou não. Com a programação tem um fenômeno parecido onde o programa toma uma decisão onde analisa de acordo com a condição ou com a escolha do usuário o caminho que ele vai seguir. Esse fenômeno é conhecido como IF, que na tradução livre é "SE" que é aí que se encaixa o conceito de estrutura condicional na programação.</p>
        <hr>
        <h2>IF</h2>
        <p>Começando pelo começo, para criar uma estrutura condicional em um programa usa-se o IF, abre parênteses e coloca a condição ou teste lógico como alguns chamam, depois abre chaves e coloca dentro do bloco a ação que será executado caso a condição for TRUE. Veja no exemplo:</p>
        <pre>
            if (1 > 10) {
                echo "1 é maior que 10";
            }
        </pre>
        <p>Nessa condicional a condição é: se 1 for maior que 10 escreva "1 é maior que 10", e obviamente quando esse código for executado ele vai escrever que 1 é maior que 10. Este foi apenas um exemplo muito simples de uma estrutura condicional. Mas e se caso a condição for FALSE, ou seja, ela não for verdadeira, o que o progama irá fazer? Bom, nesse exemplo nada será feito porque não tem a parte que especifica o que será feito caso a condição for TRUE.</p>
        <hr>
        <h2>ELSE</h2>
        <p>Caso a condição do IF for FALSE, isso é, não for atendida de acordo com a condição proposta há um comando que executa a ação caso o IF de cima não acontecer, esse é o ELSE que na tradução livre é "SENÂO", esse comando faz a condição contrária do IF: SE 1 for maior que 10 faça tal SENÂO faça tal, a ideia é basicamente essa. Veja no exemplo:</p>
        <pre>
            if (10 < 1) {
                echo "10 é menor que 1";
            }
            else {
                echo "10 não é menor que 1";
            }
        </pre>
        <p>Repare nesse código, a estrutra primária checa a seguinte condição: SE 10 for menor que 1 escreva "10 é menor que 1" SENÂO escreva "10 não é menor que 1", obviamente o que será exibido para o usuário será o comando do ELSE porque a condição do IF é falsa. Essa é a estrutura de um ELSE. Mas e se caso aparecer várias condições? E se eu quiser checar se 2 é maior que 10, ou ver se 20 é divisível por 5?</p>
        <hr>
        <h2>ELSE IF</h2>
        <p>Muito provalmente em algum momento será necessário fazer uma checagem com várias condições e não ser retido apenas no IF e ELSE, e pensando nisso criaram o ELSE IF que basicamente faz a mesma coisa que o IF e ELSE juntos (KKKKKK), o ELSE IF é usado quando o programa precisa de várias checagens para se atingir o resultado esperado. Veja no exemplo:</p>
        <pre>
            if (1 > 10) {
                echo "1 maior que 10";
            }
            else if (2 < 4) {
                echo "2 menor que 4";
            }
            else if (10 % 2 == 0) {
                echo "10 é divisível por 2";
            }
            else {
                echo "Nenhuma opção é verdadeira";
            }
        </pre>
        <p>Perceba esse programa, o que será mostrado ao usuário? Bom, as primeira condição ELSE IF será executada porque a primeira condição ELSE IF é TRUE, 2 é verdadeiramente menor que 4. Então o program primeiro faz a verificação da primeira condição, se não for TRUE ele passa para a de baixo que nesse caso foi TRUE, ou seja, ele mostra ao usuário a mensagem "2 menor que 4" e para o a execução do programa logo ali. Se caso essa segunda checagem fosse FALSE então o programa daria continuidade e iria para a de baixo que seria feita a verifição também e o processo se repete até o fim da estrutura. Se eu quisesse mostrar todas as condições verdadeiras para o usuário eu teria que usar apenas IF:</p>
        <pre>
            if (1 > 10) {
                echo "1 maior que 10";
            }
            if (2 < 4) {
                echo "2 menor que 4";
            }
            if (10 % 2 == 0) {
                echo "10 é divisível por 2";
            }
        </pre>
        <p>Repare nesse código, ele é composto apenas por IF's, então mesmo que a primeira condição for TRUE ela continuará a checar as outras condições de baixo porque a primeira não é da mesma estrutura que a segunda. O comando IF é de inicialização da estrutura então não faz sentido ter vários IF's em uma mesma estrutura condicional</p>
        <p>Um mega detalhe: Todo ELSE precisa de um IF, mas nem todo IF precisa ter ELSE, assim como todo ELSE IF precisa ter um IF inicial mas nem todo ELSE IF precisa ter um ELSE para finalizar.</p>
    </main> 
</body>
</html>