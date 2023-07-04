<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Repetições</title>
    <style>
        
    </style>
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
    <main class="bg-white w-50 my-4 p-2 m-auto rounded-3">
        <h1 class="text-center">Estruturas de Repetições</h1>
        <hr>
        <h2>While</h2>
        <p>Para criar um laço de repetição em PHP é como muitas outras linguagens de programação, começando com o WHILE. A estrutura do WHILE é praticamente a mesma coisa que no JavaScript:</p>
        <pre>
            while () {

            }
        </pre>
        <p>Dessa forma, tendo em vista que a condição que vai ser verificada para se repetir enquanto for FALSE estará dentro dos parênteses e o que vai ser feito durante a repetição estará entre as chaves, ou seja, dentro do bloco WHILE.</p>
        <p>Um exemplo bem simples mas prático é o de um contador usando WHILE, que vai começar com uma variável $contador sendo declarada antes da estrutura e servirá como condição para se obter o resultado que é contar de 0 a 10. Veja como fica:</p>
        <pre>
            $contador = 0;
            while ($contador <= 10) {
                echo $contador;
                $contador++;
            }
        </pre>
        <p>Assim é uma estrutura de um WHILE simples. Com a condição de repetição dentro dos parênteses e o que será executado durante a repetição dentro do bloco. Basicamente o que essa estrutura irá fazer é checar se o contador é menor ou igual a 10 se for FALSE, isso é, se a variável contador for menor ou diferente de 10 ele irá repetir o programa, programa esse que mostra a variável na tela e incrementa mais 1 nela a cada reptição. A incrementação pode ser feita de 3 maneiras: $contador = $contador + 1; | $contador += 1; | $contador++; Essas três maneiras fazem a mesma coisa e são de suma importancia nesse laço de repetição porque se por um acado essa incrementação não for colocada o programa irá entrar em um loop infinito e não será exibido o resultado esperado.</p>
        <p>Agora veja o resultado desse código:</p>
        <?php 
            $contador = 0;
            while ($contador <= 10) {
                echo $contador;
                $contador++;
            }
        ?>
        <p>Uma simples contagem de 0 a 10, sem formatação nem nada, é isso que programa faz. E se eu quiser agora contar de 10 a 0? Ou seja, fazer uma contagem de trás para frente. É muito simples na verdade, basta mudar o contador do início para que comece com 10 e enquanto ele for maior ou igual a 0 a variável contador será tirada de 1 em 1 o seu valor, veja:</p>
        <pre>
            $contador = 10;
            while ($contador >= 0) {
                echo $contador;
                $contador--;
            }
        </pre>
        <p>O resultado desse programa é o esperado:</p>
        <?php 
            $contador = 10;
            while ($contador >= 0) {
                echo "$contador ";
                $contador--;
            }
        ?>
        <p>Dessa vez eu até formatei um pouco o resultado para melhor ver a conclusão. E também é possível contar pulando mais de uma casa:</p>
        <pre>
            while ($contador >= 0) {
                echo $contador;
                $contador -= 2;
            } 
        </pre>
        <p>Note que nesse caso não para usar o -- (menos menos) porque desse jeito só funcinar para a incrementação/decrementação de 1 em 1</p>
        <p>Mas o laço WHILE não serve apenas para fazer uma contagem de números simples, ele é uma estrutura de repetição que é usada para repetir coisas. Agora veja esse exemplo de um formulário repetido 5 vezes:</p>
        <?php $count = 1;?>
        <?php while ($count <= 5) {?>
            <div>
                <h4>Formulário <?= $count ?></h4>
                <form action="#" method="get">
                    <div>
                        <label for="idvalor1">Valor 1:</label>
                        <input type="number" name="valor1" id="idvalor1">
                    </div>
                    <div>
                        <label for="idvalor2">Valor 2:</label>
                        <input type="number" name="valor2" id="idvalor2">
                    </div>
                    <div>
                        <input type="submit" value="Somar">
                    </div>
                </form>
            </div>
        <?php $count++; }?>
        <p>Foi muito simples o que foi feito:</p>
        <pre>
            &lt;?php $count = 1; ?&gt;

            &lt;?php while ($count <= 5) { ?&gt;
                &lt;div&gt;
                    &lt;h4&gt;Formulário &lt;?= $count ?&gt;&lt;/h4&gt;
                    &lt;form action="#" method="get"&gt;
                        &lt;div&gt;
                            &lt;label for="idvalor1"&gt;Valor 1:&lt;/label&gt;
                            &lt;input type="number" name="valor1" id="idvalor1"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;label for="idvalor2"&gt;Valor 2:&lt;/label&gt;
                            &lt;input type="number" name="valor2" id="idvalor2"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;input type="submit" value="Somar"&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;

                &lt;?php $count++; } ?&gt;
        </pre>
        <p>Perceba onde começa e onde termina o bloco do WHILE, veja como é colocado a incrementação e note também o uso da super-tag PHP para colocar a parte PHP dentro do HTML mas sem precisar incluir tudo dentro do PHP, e olhe também onde foi colocado para mostrar a variável $count que exibe em que repetição está o formulário. São coisas simples mas que fazem total diferença na hora de codar.</p>
        <p>Tem um comando que pode modificar uma execução da esturtura de repetição enquanto ela está sendo executada, esse comando é o BREAK que como o nome já diz, ele quebra o laço independetemente se atingiu ou não a condição TRUE do laço. Esse comando força uma para na estrutura, veja o exmeplo:</p>
        <pre>
            $contador = 0;
            while ($contador <= 1000) {
                echo "$contador ";
                
                if ($contador == 15) {
                    break;
                }

                $contador++;
            }
        </pre>
        <p>Olhe este código, é declarada uma variável contador que recebe 0, depois vem um laço WHILE com a condição de contador menor ou igual a 1000 seguida pelo bloco de execução que mostra a variável e em seguida uma condicional dentro do WHILE (sim, pode ter outras estruturas dentro do laço incluindo até outro laço se necessário), veja que o IF tem a seguinte condição: se o contador for igual a 15 BREAK, ou seja, PARE, saia do laço de repetição!. Portanto o laço será quebrado antes da condição do WHILE se tornar TRUE, isso é, antes do contador chegar a 1000, e a incrementação é feita depois do IF, porque a checagem do contador tem que ser feita antes de ser incrementado o número para que o valor 15 seja mostrado, senão para no 14 porque vai ser incrementado e depois checado antes de voltar a ser mostrado na tela. Veja funcionando:</p>
        <?php 
            $contador = 0;
            while ($contador <= 1000) {
                echo "$contador ";

                if ($contador == 15) {
                    break;
                }

                $contador++;
            }
        ?>
        <p>O professor Guanabara não gosta muito desse comando porque interrompe o fluxo da estrutura. Há também um outro comando que faz meio que o contrário do BREAK, o CONTINUE que volta para o início do WHILE. Tmabém não é muito usado.</p>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Contador</h4>
            </div>
            <?php 
                $start = $_GET['inicio'] ?? 0;
                $end = $_GET['fim'] ?? 10;
                $contador = $start;
                $incremento = $_GET['pulos'] ?? 1;
            ?>
                <div lang="card-body ">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <div class="m-2">
                            <label for="idinicio">Start: </label>
                            <input type="number" name="inicio" id="idnicio">
                        </div>
                        <div class="m-2">
                            <label for="idfim">End: </label>
                            <input type="number" name="fim" id="idfim">
                        </div>
                        <div class="m-2">
                            <label for="idpulos">Passos: </label>
                            <select name="pulos" id="idpulos">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="m-2">
                            <input class="btn btn-info" type="submit" value="Contar">
                        </div>
                    </form>
                </div>
            <section class="m-2">
                <?php 
                    if ($start > $end) {
                        while ($contador >= $end) {
                            echo "-$contador";
                            $contador -= $incremento;
                        }
                    }
                    else {
                        while ($contador <= $end) {
                            echo "-$contador";
                            $contador += $incremento;
                        }
                    }
                ?>
            </section>
        </div>
        <hr>
        <h2>Do While</h2>
        <p>Existe uma forma de fazer um laço WHILE com teste lógico no final, porque tem isso? Não faço ideia! É útil? Não faço ideia! Mas é bom ter o conhecimento para se um dia eu precisar eu saber que existe. Bascimente essa estrutura é quase a mesma coisa que um WHILE normal mas com a diferença que o teste lógico fica no final:</p>
        <div class="bg-secondary p-3 w-75 m-auto rounded-4 text-white">
            <pre>
                $contador = 0;
                do {
                    echo $contador;
                    $contador++;
                } while ($contador <= 10);
            </pre>
            <p>Resultado:</p>
            <?php
                $contador = 0;
                do {
                    echo "$contador ";
                    $contador++;
                } while ($contador <= 10);
            ?>
        </div>
        <p>Como dito antes, a única diferença é que o teste lógico é no final. Uma coisa importante é que o ponto e vírgula no final não deve nunca ser esquecido!</p>
        <p>Para não deixar o DO WHILE tão de lado, vou usá-lo para fazer um código que mostra o fatorial do número 5 a tabuada do número 7, começando pelo fatorial:</p>
        <div class="bg-secondary p-3 w-75 m-auto rounded-4 text-white">
            <pre>
                $numero = 5;
                $fatorial = 1;
                echo "!$numero = ";
                do {
                    echo "$numero x ";
                    $fatorial = $fatorial * $numero;
                    $numero--;
                } while ($numero >= 1);
                echo " = $fatorial";
            </pre>
            <p>Resultado:</p>
            <?php
                $numero = 5;
                $fatorial = 1;
                echo "!$numero = ";
                do {
                    echo "$numero x ";
                    $fatorial = $fatorial * $numero;
                    $numero--;
                } while ($numero >= 1);
                echo " = $fatorial";
            ?>
        </div>
        <p>Agora a tabudada do número 7:</p>
        <div class="bg-secondary p-3 w-75 m-auto rounded-4 text-white">
            <pre>
        $numero = 7;
        $multiplicador = 1;
        $resultado = 0;
        do {
            $resultado = $numero * $multiplicador;
            echo "$numero x $multiplicador = $resultado &lt;/br&gt;";
            $multiplicador++;
        } while ($multiplicador <= 10);
            </pre>
            <p>Resultado:</p>
            <?php
                $numero = 7;
                $multiplicador = 1;
                $resultado = 0;
                do {
                    $resultado = $numero * $multiplicador;
                    echo "$numero x $multiplicador = $resultado </br>";
                    $multiplicador++;
                } while ($multiplicador <= 10);
            ?>
        </div>
        <p>Cara, não é difícil, apenas tente e você conseguirá, Deus O Criador está contigo então não tem o que temer!</p>
        <hr>
        <h2>For</h2>
        <p>A estrutura FOR é muito simples também, na verdade ela é quase a mesma coisa que no JavaScript:</p>
        <pre>
            for ($conotador = 0; $contador <= 10; $contador++) {
                echo $contador;
            }
        </pre>
        <p>Perceba que todo o processo que teria de ser feito no WHILE em mais de uma linha já é feito diretamente na declaração da estrutrua FOR em PHP. Consiste em 3 etapas: a primeira etapa é a declaração da variável ($contador = 0;), a segunda etapa é o teste lógico ($contador <= 10;) e a terceira e última etapa é a incrementação ou decrementação da variável ($contador++). Bem de boa. Aqui vai o resultado do código acima:</p>
        <?php 
            for ($contador = 0; $contador <= 10; $contador++) {
                echo $contador;
            }
        ?>
        <p>Viu como é simples? Bem de boa!</p>
        <p>Agora vou fazer um formulário para o usuário escolher um número e ser mostrado a tabuada desse número até o 15:</p>
        <div class="bg-secondary p-3 w-75 m-auto rounded-4 text-white text-center">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div>
                    <label class="my-1" for="idvalor">Digite o número:</label>
                    <br>
                    <input class="border border-2 rounded-3 p-1" type="number" name="valor" id="idvalor" placeholder="7">
                </div>
                <div>
                    <input class="btn btn-success my-2" type="submit" value="Calcular">
                </div>
            </form>
            <?php $valor = $_GET['valor'] ?? 7 ?>
            <?php for ($i = 1; $i <= 15; $i++) { ?>
            <?= "$valor x $i = " . $valor * $i ?>
            <br>
            <?php } ?>
        </div>
        <p>Foi muito simples fazer isso, e sabe o melhor? Para cada comando utilizei apenas um linha de PHP, ou seja, nada de html e css foram colocados dentro do PHP, incrível né? PROGRAMAÇÂO È DEMAISSS!!!</p>
    </main>
</body>
</html>