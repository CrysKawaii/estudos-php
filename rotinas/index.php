<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Rotinas</title>
</head>
<body class="bg-secondary">
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
    <main class="bg-white w-50 m-auto my-4 rounded-3 p-2">
        <h1>Rotinas em PHP</h1>
        <hr>
        <h2>Funções</h2>
        <p>Como em qualquer outra linguagem o PHP também tem FUNÇÔES que são as estruturas que ajudam muito quando se tem tarefas repetitivas no programa. As funções são utilizadas para poupar tempo e linhas, sem a necessidade de ficar fazendo a mesma coisa no código várias vezes, bastar realizar a chamada da função e passar os parâmetros se for o caso.</p>
        <p>Para criar uma função em PHP é muito simples, coloque o comando FUNCTION e na frente o nome da função seguido de paretêses (os paretêses são obrigatórios mesmo se a função não tiver parâmetros), em seguida abra chaves e coloque os comandos dentro do bloco da função. Veja no exemplo:</p>
        <div class="bg-body-tertiary">
            <pre>
                function soma($n1, $n2) {
                    $resultado = $n1 + $n2;
                    echo $resultado;
                }
            </pre>
        </div>
        <p>Perceba como é simples a criação de uma função. O que essa função faz é o seguinte: ela recebe dois parâmetros ($n1 e $n2), em seguida armazena a soma dos parâmetros em uma variável resultado ($resultado = $n1 + $n2;), e por fim ela mostra o resultado na tela (echo $resultado;). Mas como eu uso essa função? Simples! Basta fazer a chamada da função passando os parâmetros: </p>
        <div class="bg-body-tertiary">
            <pre>
                soma(5, 4);
            </pre>
        </div>
        <p>Dessa forma o programa irá passar o valor 5 para o parâmetro $n1 da função e o valor 4 para o $n2 realizando a soma e mostrando o resultado na tela para o usuário. </p>
        <hr>
        <h2>Funções com Retorno</h2>
        <p>Mas não acaba por aí! As funções podem ou não retornar valores em seu fim. Uma função que retorna valores dá uma maior facilidade no tratamento do resultado porque o valor retornado pode ser armazenado em um variável fora da função. Nessa função do exemplo ela não retorna nenhum valor, mas veja esse exemplo de uma função que retorna:</p>
        <div class="bg-body-tertiary">
            <pre>
                function subtrai($n1, $n2) {
                    $resultado = $n1 - $n2;
                    return $resultado;
                }
                $subtrai_numeros = $subtrai(10, 7);
                echo "A subtração dos números 10 e 7 é $subtrai_numeros";
            </pre>
        </div>
        <p>Note que aqui não foi preciso usar o comando ECHO, e perceba também que a função foi armazenada na variável $subtrai_numeros o que é totalemnte possível quando se retorna um valor na função, mas também daria para fazer diretamente sem precisar de uma variável guardando o resultado, dessa forma: </p>
        <div class="bg-body-tertiary">
            <pre>
                echo "A subtração dos números 10 e 7 é " . subtrai(10, 7);
            </pre>
        </div>
        <p>Essa é a grande vantagem das funções que retornam valores.</p>
        <hr>
        <h2>Funções com Argumentos Dinâmicos</h2>
        <p> Pensa que acabou? Está totalmente enganado, pequeno cavalheiro. Há também as funções com variáveis dinâmicas, mas o que é isso? Basicamente quando se tem uma função de soma por exemplo, mas não sabe quantos valores serã mandados por parâmetros há a possibilidade de fazer essa função receber quantos valores forem necessários com esse modelo de função com variáveis dinâmicas. Para fazer isso basta colocar reticências na frente do parâmetro entre parênteses da função. Veja este exemplo:</p>
        <div class="bg-body-tertiary">
            <pre>
                function soma(...$n) {
            
                }
            </pre>
        </div>
        <p>Com isso o argumento $n se tornará um array com todos os valores passados para ele, para somar os valores desse array utilizo uma função que retorna o número de argumentos dentro do array colocando o número dentro de uma variável que chamarei de total:</p>
        <div class="bg-body-tertiary">
            <pre>
                function soma(...$n) {
                    $total = func_num_args();
                }
            </pre>
        </div>
        <p>Dessa forma eu tenho a variável $total que contém a quantidade de argumentos da função, com isso é simples agora, basta fazer um laço FOR para somar os valores:</p>
        <div class="bg-body-tertiary">
            <pre>
                function soma(...$n) {
                    $total = func_num_args();
                    $soma_total = 0;
                    for ($i = 0; $i < $total; $i++) {
                        $soma_total += $n[$i];
                    }
                    return $soma_total
                }
            </pre>
        </div>
        <p>Explicando a função: primeiro ela é inicializada com uma variável dinâmica (...$n) depois o número de argumentos é colocado na variável total ($total = func_num_args();), em seguida é declarada uma variável com valor 0 que será a variável que terá a soma dos argumentos ($soma_total = 0;), depois é feito um laço que se irá fazer a iteração com a mesma quantidade de argumetos que tem, ou seja, se tem 7 argumentos então o FOR irá iterar 7 vezes (for ($i = 0; $i < $total; $i++) {), dentro do laço será feita a soma dos argumentos. PARTE IMPORTANTE! Como o parâmetro $n a função é dinâmico, ou seja, ele pode variar os valores dentro dele, o PHP o tranforma em um array com esses valores, sendo assim, um array pode ter os seus itens acessados através do índice que é a posiçaõ do item dentro do array, lembrando que começa sempre com 0, com isso para fazer a soma dos valores dentro do array foi feito esse laço FOR que a cada iteração o valor será somado na variável soma_total, perceba que $n tem entre colchete o $i que muda de valor a cada iteração, começando do 0 vai até a quantidade de argumentos que tem no array, isso é, tem o mesmo valor da posição do item dentro do array, que para ser acessado é preciso colocar o nome do array seguido os colchetes com a posição do item dentro dele, e essa parte da posição é feita pela variável $i que muda a cada iteração ($soma_total += $n[$i];), por fim a função retorna o valor da variával soma_total com todos os valores somados e o resultado dentro dela (return $soma_total). Espero que tenha ficado de fácil entendimento.</p>
        <hr>
        <h2>Passagem de Valor por Referência</h2>
        <p>Uma variável em PHP quando passada para um função não tem o valor alterado fora da função, veja o exmeplo:</p>
        <pre>
            function soma($x) {
                $x += 4;
                echo $x;
            }

            $a = 6;
            soma($a);
            echo $a;
        </pre>
        <p>O que será mostrado ao usuário nesse programa? O valor da variável $a continua sendo 6? Sim! O valor de $a continua sendo 6, isso porque ela foi passada com passagem de valor para a função, isto é, qualquer alteração feita no parâmetro $x que é o que recebe a variávl $a não terá efeito nenhum na variável em si. Então o comando echo $a mostrará 6. Porém há uma forma de alterar o valor de $a quando ele for alterado na função também, isso é a chamada passagem por referência. Para fazer isso basta colocar o E comercial (&) na frente do parâmetro da função, veja no exemplo:</p>
        <pre>
            function soma(&$x) {
                $x += 4;
                echo $x;
            }

            $a = 6;
            soma($a);
            echo $a;
        </pre>
        <p>Dessa forma a variável $a será afetada quando o valor dela que foi passado para função se alterar na função. Fazendo assim $a se tornar 10 após a chamada da função. Isso é a chamada passagem por referêcia. </p>
        <hr>
        <h2>Funções Externas</h2>
        <p>Já pensou em usar uma função de outro arquivo que você criou no seu programa? É possível!!! O PHP tem uma forma de "importar" funções exteras de outros arquivos que você tem no pacote. Para fazer isso é muito simples, basta usar o comando INCLUDE e colocar o nome e se estiver em outra pasta o caminho do arquivo que contém as funções. Por exmeplo, eu criei uma pasta com o nome 'functions' e dentro dessa pasta eu criei o arquivo sum.php que contém um script PHP com a função de uma simples soma entre dois número:</p>
        <pre>
            &lt;?php 
                function soma($n1, $n2) {
                    return $n1 + $n2;
                }
            ?&gt;
        </pre>
        <p>Com esse arquivo criado eu posso usá-lo para utilizar a função dentro dele, poupando assim o tempo e o esforço que eu teria se fosse refazer essa função no meu programa. Então para importar essa função eu uso o comando INCLUDE no início do script PHP no meu programa. Veja este exemplo:</p>
        <pre>
            &lt;?php 
                include 'functions/sum.php';

                soma(3, 5);
            ?&gt;
        </pre>
        <p>Esse programa irá usar uma função que eu criei em outro arquivo mas que funcionará do mesmo jeito aqui. A grande vantagem desse método é que se eu estiver com muitos arquivos usando essa função e precisar alterá-la eu posso ir apeans no arquivo da função e fazer as modificações nele que todos os outros que contém essa função serão alterados também.</p>
    </main>
</body>
</html>