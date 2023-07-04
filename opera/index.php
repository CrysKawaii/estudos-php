<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <?php 
        $n1 = 5;
        $n2 = 2;
        $adic = $n1 + $n2;
        $sub = $n1 - $n2;
        $multi = $n1 * $n2;
        $divi = $n1 / $n2;
        $resto = $n1 % $n2;
        $potencia = $n1 ** $n2;
    ?>
    <title>Operadores e Funções aritméticas</title>
</head>
<body class="bg-secondary">
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
    <main class="w-50 bg-white m-auto my-3 p-3 rounded-2">
        <h2>Operadores aritméticos</h2>
        <p>O PHP tem algumas diferenças quando se trata de operadores em relação de outras linguagens. Por exemplo, em JS quando se tem a operação '2' + '2' o resultado tende a ser '22' porque em JS o operador + serve além de somar números para também fazer a concatenação, porém em PHP se você fizer essa mesma operação o resultado será 4, isso se deve ao fato de que existe um operador próprio para concatenação diferente do + por isso nesse caso o PHP faz a convesão de string para número automaticamente tornando o resultado sendo igual a 4 do tipo inteiro.</p>
        <p>Uma observação interessante, em versões um pouco mais antigas do PHP esse tipo de operação: '10 dolares' + '10 dolares' tinha como resultado o número inteiro 20, porque ele pegava a primeira parte da string e convertia para número inteiro e realizava a operação. Contudo se fosse: 'caminhou 10' + '10 foram caminhados' o resultado seria somente 10 porque o PHP não iria conseguir converter a primeira parte da primeira string e ficaria somente com a segunda. Entrentanto isso já foi corrigido nas versões mais recentes e não é possível mais fazer esse tipo de operação.</p>
        <h4>Tipos de operadores</h4>
        <div class="card w-50 m-auto bg-body-tertiary my-2 p-1 text-center">
            
            <ul class="list-group">
                <li class="list-group-item">Adição &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&nbsp;&nbsp;(+)&nbsp;&nbsp;</span></li>
                <li class="list-group-item">Subtração &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&nbsp;&nbsp;(-)&nbsp;&nbsp;</span></li>
                <li class="list-group-item">Multiplicação &nbsp;&nbsp;&nbsp;&nbsp; <span>&nbsp;&nbsp;(*)&nbsp;&nbsp;</span></li>
                <li class="list-group-item">Divisão &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&nbsp;&nbsp;(/)&nbsp;&nbsp;</span></li>
                <li class="list-group-item">Resto da divisão <span>&nbsp;&nbsp;(%)&nbsp;&nbsp;</span></li>
                <li class="list-group-item">Potência &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>&nbsp;&nbsp;(**)&nbsp;&nbsp;</span></li>
            </ul>
        </div>
        <p>Esses são os operadores mais comuns. Agora veja alguns exemplos desses operadores em ação:</p>
        <div class="card w-50 m-auto bg-body-tertiary my-2 p-1 text-center">
            <h4>Exemplos de operações</h4>
            <ul class="list-group">
                <li class="list-group-item"><?= "$n1 + $n2 = $adic"?></li>
                <li class="list-group-item"><?= "$n1 - $n2 = $sub"?></li>
                <li class="list-group-item"><?= "$n1 * $n2 = $multi"?></li>
                <li class="list-group-item"><?= "$n1 / $n2 = $divi"?></li>
                <li class="list-group-item"><?= "$n1 % $n2 = $resto"?></li>
                <li class="list-group-item"><?= "$n1 ** $n2 = $potencia"?></li>
            </ul>
        </div>
        <p>Mas essas foram apenas algumas expressões simples, e se acontecer de surgir uma expressão com mais operadores tipo: 5 + 2 / 2. E aí? Qual o resultado? O resultado dessa expressão é <?= $n1 + $n2 / $n2 ?>. Mas por que 6? Simplesmente porque o PHP e as outras linguagens de programação seguem o conceito matemático da ordem de precedência!</p>
        <h4>Ordem de precedência</h4>
        <div class="card w-50 m-auto bg-body-tertiary my-2 p-1">
            <ol class="list-group">
                <li class="list-group-item">1° ( ** )</li>
                <li class="list-group-item">2° ( * ) ( / ) ( % )</li>
                <li class="list-group-item">3° ( + ) e ( - )</li>
            </ol>
        </div>
        <p>Seguindo essa ordem as expressões serão realizadas, se tiver uma exponenciação ela sempre será a primeira a ser resolvida, depois vem a multiplicação, divisão e resto da divisão que tem a mesma ordem os 3, mas então qual será o primeiro se aparecer mais de um desses três? O que estiver mais a esquerda, ou seja, o que vier primeiro. Por fim há a adição e subtração como últimos na ordem, seguindo a regra do da esquerda para direita caso aparecça os dois em uma expressão.</p>
        <p>E tem mais um elemento em uma expressão que tem suma importância e tem prioridade maior que todas, estou falando dos parênteses (), esses carinhas podem mudar todo o resultado de uma expressão e tem a prioridade máxima na ordem de precedência, ou seja, na real seria assim:</p>
        <div class="card w-50 m-auto bg-body-tertiary my-2 p-1">
            <ol class="list-group">
                <li class="list-group-item">1° ( )</li>
                <li class="list-group-item">2° ( ** )</li>
                <li class="list-group-item">3° ( * ) ( / ) ( % )</li>
                <li class="list-group-item">4° ( + ) e ( - )</li>
            </ol>
        </div>
        <p>Lembrando que os parênteses não são operadores e sim modificadores da ordem de precedência.</p>
        <h2>Funções aritméticas</h2>
        <p>Os operadores ajudam, mas nem sempre são suficientes em todos os casos e é por isso que tem as funções aritméticas, para dar essa mãozinha que falta. Alguns exemplos de funções:</p>
        <div class="card w-50 m-auto bg-body-tertiary my-2 p-1">
            <ul class="list-group">
                <li class="list-group-item"><a class="list-group-item-action active" aria-current="true" href="https://www.php.net/manual/pt_BR/function.abs.php">abs()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.base-convert.php">base_convert()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.ceil.php">ceil()</a> e <a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.floor.php">floor()</a> 
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.round.php">round()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.hypot.php">hypot()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.intdiv.php">intdiv()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.min.php">min()</a> e <a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.max.php">max()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.pi.php">pi()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.pow.php">pow()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.sin.php">sin()</a>, <a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.cos.php">cos()</a> e <a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.tan.php">tan()</a></li>
                <li class="list-group-item"><a class="list-group-item-action" href="https://www.php.net/manual/pt_BR/function.sqrt.php">sqrt()</a></li>
            </ul>
        </div>
        <p>A função abs() retorna o número absoluto, ou seja, remove o sinal e deixa só a parte numérica.</p>
        <p>A função base_convert() retorna qualquer número convertido em alguma base, podendo ela ser hexadecialm, binária ou de base 10</p>
        <p>A ceil() arredonda para cima, a floor() arredonda para baixo e round() faz o arredonadamento padrão que conhecemos.</p>
        <p>hypot() calcula a hipotenusa, basta especificar o lado dos catetos e ela retorna o resultado.</p>
        <p>A intdiv() faz a divisão normal, porém entrega o resultado apenas da parte inteira do total, ou seja, se usar intdiv(5, 2) o resultado será 2.</p>
        <p>As funções min() e max() retornam o menor número e o maior número de uma sequência.</p>
        <p>pi() é a função que tem o PI mesmo, da matemática, aquele 3.14 e assim por diante.</p>
        <p>A função pow() é uma maneira alternativa de calcular potência, em vez de fazer 5 **2, pode ser feito pow(5, 2) que o resultado é a mesma coisa.</p>
        <p>As funções sin(), cos() e tan() calculam respectivamente o seno, cosseno e a tangente.</p>
        <p>E por fim a sqrt(), que calcula a raiz quadradada de um número. Porém há uma outra forma de calcular a raíz quadrada sendo ela usando a expressão (1/2), exemplo: 81 * (1/2), o resultado será a raíz quadradaa de 81, que é 9. Mas porque eu faria desse jeito já que pode gastar mais tempo e mais linhas? Bom, a função sqrt() apenas calcula a raíz quadrada, mas e a cúbica? ou a quarta? Por isso que tem como fazer (1/3) ou (1/4).</p>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>