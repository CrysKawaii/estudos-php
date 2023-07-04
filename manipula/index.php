<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Manipulação de Strings</title>
    <style>
        main {
            text-align: justify;
        }
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
    <main class="w-50 bg-white m-auto my-3 p-4 rounded-2">
        <div class="card p-2 text-center">
            <div class="card-header">
                <h1 class="card-tittle">Strings em PHP</h1>
                <h2>Quatro formatos de string</h2>
            </div>
            <div class="card-body w-50 m-auto">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">Double Quoted</li>
                    <li class="list-group-item list-group-item-action">Single Quoted</li>
                    <li class="list-group-item list-group-item-action"><a  href="https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.heredoc">Heredocs</a></li>
                    <li class="list-group-item list-group-item-action"><a href="https://www.php.net/manual/pt_BR/language.types.string.php#language.types.string.syntax.nowdoc">Nowdocs</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <h3>Double Quoted e Sigle Quoted</h3>
        <p>As aspas duplas são uma maneira comum de colocar qualquer elemento em formato de string, com as aspas duplas qualquer número e até mesmo valor booleano vira uma string. Com as aspas duplas existe a interpretação do conteúdo, o PHP não irá apenas exibir o conteúdo, ele também vai analisar. Por exemplo, se eu mandar exibir o comando: <mark>"PHP \u{1F418}"</mark> entre aspas duplas do jeito que está o resultado será:</p>
        <mark><?= "PHP \u{1F418}" ?></mark>
        <br><br>
        <p>O caractere \u é uma sequência de escape para mostrar emojis em PHP. Agora, se eu mando escrever em aspas simples veja o que acontece:</p>
        <mark><?= 'PHP \u{1F418}' ?></mark>
        <br><br>
        <p>Notou a diferença? Não houve a interpretação nas aspas simples. Outor exemplo é usando variáveis, vou declarar uma variável nome com o valor 'Crys' em PHP e pedir para ser exibido a mensagem <mark>"Olá $nome"</mark>.</p>
        <?php
            $nome = 'Crys';
            const ESTADO = 'Minas';
        ?>
        <mark><?= "Olá, $nome!" ?></mark>
        <br><br>
        <p>Viu só? Eu pedi para que fosse exibido o valor da variável usando as aspas duplas. Agora a mesma coisa, mas com aspas simples:</p>
        <mark><?= 'Olá, $nome' ?></mark>
        <br><br>
        <p>Percebeu que não houve novamente a interpretação com as aspas simples? Esssa é a diferença! Isso de mostrar o valor da variável em uma string é chamado de interpolação. Tá, mas e as <mark>constantes</mark>? Basicamente, como as constantes não tem o cifrão $ na frente do nome o PHP não faz consegue fazer a interpretação e não é possível fazer essa interpolação, mas então como eu concateno? Simples, use o <mark>operador de concatenação</mark>, o ponto (.). Declarei uma contante ESTADO e coloquei o valor 'Minas', agora quero exibir que moro em Minas, então eu faço: <mark>"Eu moro no estado de " .ESTADO;</mark></p>
        <mark><?= "Eu moro no estado de " .ESTADO ?></mark>
        <br><br>
        <p>Tá lá, funcionou! Esse é o único jeito (que eu sei e aprendi) de concatenar uma constante.</p>
        <p><strong>Uma coisa importante: dentro de aspas duplas não pode ser colocado aspas duplas e dentro de aspas simples não pode se colocado aspas simples.</strong></p>
        <p>Porém, dentro de aspas duplas, eu posso colocar aspas simples e dentro de aspas simples eu posso colocar aspas duplas.</p>
        <p>Por isso que para algumas funções é necessário usar o operador de concatenação, exemplo: se eu quero mostrar o ano atual eu preciso usar a função <mark>date('Y')</mark> do PHP, mas não posso simplesmente fazer: "Estou no ano date('Y')" porque vai dar errado.</p>
        <p>Eu tenho que usar a concatenação: <mark>"Estou no ano de " .date('Y');</mark> Dessa forma funciona de boas.</p>
        <?= "Estou no ano " .date('Y') ?>
        <p>Perfecto!</p>
        <hr>
        <p>Mas e quando eu preciso mostrar as aspas duplas na string? Bom, aí é preciso usar uma sequência de escape para isso, que nesse caso das aspas duplas é <mark>\"</mark> para mostrar. Então a string ficaria assim: "Meu nome eh Crysnanth mas meu apelido eh <mark>\"Crys\"</mark>";</p>
        <?= "Meu nome é Crysnanth, mas meu apelido é \"Crys\"!" ?>
        <p>Exibindo assim, da forma esperada!</p>
        <hr>
        <p>Existem diversas <mark>sequências de escape</mark> no PHP, para saber sobre elas <a href="https://www.php.net/manual/pt_BR/language.types.string.php#:~:text=Sequências%20de%20escape,-Sequências&text=Como%20com%20as%20strings,interpretação%20de%20strings%20para%20detalhes." target="_blank">Clique aqui</a></p>
        <hr>
        <h2>Funções para Manipulação de Strings</h2>
        <hr>
        <h4>printf</h4>
        <p>Retorna uma string formatada. Por exemplo:</p>
        <pre>
    $produto = 'amendoim';
    $preco = '10';

    printf('Eu comprei %s por %.2f reais no mercado', $produto, $preco)

        <?php 
            $produto = 'amendoim';
            $preco = '10';

            printf('Eu comprei %s por %.2f reais no mercado', $produto, $preco)
        ?>
        </pre>
        <p>Perceba que no lugar de colocar as variáveis como de costume em uma string double quoted, aqui eu coloquei %s no lugar onde eu queria o nome do produto que é uma string, por isso o s, depois eu coloquei o preço como número real, ou seja, float, com duas casas depois da vírgula ficando assim: %;2f</p>
        <p>Obviamente tem muito mais parâmetro que a função printf aceita, vou deixar alguns aqui:</p>
        <ul>
            <li>%d valor decimal (negativo ou positivo)</li>
            <li>%u valor decimal (apenas positivo)</li>
            <li>%f valor real</li>
            <li>%s string</li>
        </ul>
        <hr>
        <h4>print_r</h4>
        <p>A função print_r retorna uma variável array mostrando os seus elementos e suas posições, veja no exmeplo:</p>
        <pre>
    $lista = [1, 2, 5, 7, 3, 4];

    print_r($lista);
        </pre>
        <p>A saída desse comando será:
        <?php 
                $lista = [1, 2, 5, 7, 3, 4];

                print_r($lista);
            ?>
        </p>
        <hr>
        <h4>strlen</h4>
        <p>Retorna o número de caracteres da string, contando até os espaços:</p>
        <pre>
            $texto = 'olá, bom dia a todos';

            strlen($texto);
            <?php $texto = 'olá, bom dia a todos'; ?>
            <?= strlen($texto) ?>
        </pre>
        <p>Essa variável com string tem 21 caracteres, contando até com os espaços.</p>
        <hr>
        <h4>trim</h4>
        <p>Já se deparou com alguém que tecla umas 3 vezes o botão de espaço na hora de preencher um formulário? Existe uma função em PHP que resolve esse problema e remove os espaços extras no início e no final da frase. Pode ser muito útil em formulários, veja o exemplo:</p>
        <pre>
            $nome = '   Pedro Pascal   ';
        </pre>
        <?php $nome = '   Pedro Pascal   '; ?>
        <p>Perceba como já ficou espaçado a string que recebeu o nome, se for usado o strlen nessa variável irá retornar <?= strlen($nome) ?> que é o número de caracteres ao todo na variável contando os espaços e tudo mais. Para remover automativamente esses espaços pode ser usado a função trim que faz esse trabalho:</p>
        <pre>
            $nome = '   Pedro Pascal   ';
            $novo_nome = trim($nome);
        </pre>
        <?php $novo_nome = trim($nome) ?>
        <p>Agora se for usado o comando strlen a saída será <?= strlen($novo_nome) ?> que é o número de caracteres mas agora contando apenas o espaço entre as palavras. Ainda há variações para essa função como a função <strong><u>ltrim</u></strong> que remove apenas os espaços da esquerda, e a função <strong><u>rtrim</u></strong> que remove apenas os espaços da direita.</p>
        <hr>
        <h4>str_word_count</h4>
        <p>Uma função que basicamente conta o quantas palavras tem na string. Veja no exemplo:</p>
        <pre>
            $endereco = 'Rua Ades Varjão 50';

            echo str_word_count($endereco, 0);
        </pre>
        <?php $endereco = "Rua Ades Varjão 50"; ?>
        <p>A saída desse programa será <?= str_word_count($endereco, 0) ?> porque foram quatro as palavras que essa variável tem, contando sim até o número que veio. Mas não para por aí, veja aquele 0 no final da função, pra que ele serve? Bom, esse número vai até o 2, o zero mostra somente o número de palavras que tem na string, já o número 1 cria uma array com essas palavras: <?= print_r(str_word_count($endereco, 1, "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº")) ?>. Para ver essa array é preciso usar a funçaõ print_r, ou var_dump ou var_export, qualquer uma dessas já mostra o array. O número final sendo 2 o array mudará para a posiçaõ sendo a que cada palavra está: <?= var_dump(str_word_count($endereco, 2, "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº")) ?>. Dessa forma, note que a posição é referente a posição do caractere que a palavra começa. Porém essa função tem uma pequena coisa chatinha, os caracteres acentudos não são reconhecidos como parte de uma palavra e sim como uma palavra inteira diferente o que pode acarretar nisso: <?= print_r(str_word_count($endereco, 1)) ?>. Notou? Ela meio que cortou o caractere acentuado e jogou a letra depois do caractere como uma palavra, isso é um problema mas todo problema tem solução! Para corrigir isso é necessaário especificar as acentuações dentro das palavras, ou seja, colocar todos os possíveis caracteres que podem aparecer com acento dentro da string: "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº", coloque isso no final da função: <pre>var_dump(str_word_count($endereco, 2, "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº"))</pre> Dessa forma o problema já é resolvido.</p>
        <hr>
        <h4>explode</h4>
        <p>Essa função é uma versão alternativa da str_word_count, ela faz meio que a mesma coisa mas com uma pequena diferença, nessa função você tem que informar qual o caractere que separa as palavras. Veja no exemplo:</p>
        <pre>
            $nome = 'Crysnanth dos Santos Oliveira';

            print_r(explode(" ", $nome));
        </pre>
        <?php $nome = 'Crysnanth dos Santos Oliveira'; ?>
        <p>Notou a diferença? O resultado desse programa é <?= print_r(explode(" ", $nome)); ?>. A grande vantagem aqui é que essa função separa por meio do caractere que você informou, ou seja, ela não faz as considerações das palavras automaticamente, sendo assim, as palavras com acento não ficam separadas e não é necessário especificas os caracteres com acentução toda vez que for usar essa função.</p>
        <hr>
        <h4>str_split</h4>
        <p>Se caso for necessário separar uma string em um array que cada caractere é um índice diferente, é esse mesmo o papel que a str_split faz. Veja no exmeplo:</p>
        <pre>
            $nome = 'Ednaldo';
            $lista_letras = str_split($nome);
            print_r($lista_letras);
        </pre>
        <?php 
            $nome = 'Ednaldo';
            $lista_letras = str_split($nome);
        ?>
        <p>Basicamente o que essa função irá fazer será dividir cada letra em elementos diferentes em um array: <?= print_r($lista_letras); ?>. Muito simples e pode ser que em alguma ocasião isso seja útil de alguma forma.</p>
        <hr>
        <h4>implode</h4>
        <p>Faz exatamente o contrário da explode, a implode junta as palavras de um array, veja no exemplo:</p>
        <pre>
            $frase = ['bom', 'dia', 'amigos'];

            $frase_formatada = implode("-", $frase);

            echo $frase;
        </pre>
        <?php 
            $frase = ['bom', 'dia', 'amigos'];

            $frase_formatada = implode("-", $frase);
        ?>
        <p>Perceba que a estrutura é muito semelhante a da explode, o resultado é: <?= $frase_formatada ?>. Notou que a frase veio com esses traços? Foi eu mesmo que especifique na função, que também pode ser alterado para qualquer caractere ou espaço que seja. A função join funciona da mesma maneira, tem segredo não.</p>
        <hr>
        <h4>chr</h4>
        <p>Como você bem sabe, cada tecla do teclado tem seu código numérico dela e em PHP tem uma função que mostra qual letra pertence a aquele código.</p>
        <pre>
            $letra = chr(99);

            echo "A letra de número 99 é $letra";
        </pre>
        <?php 
            $letra = chr(99);

            echo "A letra de número 99 é $letra";
        ?>
        <p>Com isso tenho as letras através de cada código dela.</p>
        <hr>
        <h4>ord</h4>
        <p>Essa função faz exatamente o contrário da função chr, nesse caso eu tenho a letra mas quero o códido dela:</p>
        <pre>
            $letra = ord('H');

            echo "A letra H tem o código $letra";
        </pre>
        <?php $letra = ord('H'); ?>
        <p>Esse program irá mostrar: <?= "A letra H tem o código $letra" ?>. Viu como é simples? Programar é bom demais!</p>
        <hr>
        <h4>strtolower</h4>
        <p>Essa função irá deixar todas as letras maiúsculas em minúsculas, exmeplo: strtolower("Crysnanth dos Santos") será: crysnanth dos santos. Simples, todas as maiúsculas passaram a ser minúsculas.</p>
        <hr>
        <h4>strtoupper</h4>
        <p>Essa função torna todas as letras minúsculas em letras maiúsculas. Tem segredos não, strtoupper("bom dia") será: BOM DIA </p>
        <hr>
        <h4>ucfirst</h4>
        <p>Se procura uma função que coloca a primeira letra em maiúscula use a ucfirst. Veja o exemplo: ucfirst('oi amigo') >> Oi amigo; Note que será somente a primeira letra em maiúsculo, daí vem o nome da função uc (upper case, letra maiúscula) first (primeira). Simples.</p>
        <hr>
        <h4>ucwords</h4>
        <p>Agora se você procura uma função que torna todas as primeiras letras em maiúsculas, então use a ucwords que ela fará esse trabalho. Simples.</p>
        <hr>
        <h4>strrev</h4>
        <p>Essa função chega a ser engraçada, ela torna uma string ao contrário, ou seja, reverte a ordem das letras e palavras.  Veja no exmeplo: strrev("Crysnanth dos Santos Oliveira") se torna: <?= strrev("Crysnanth dos Santos Oliveira")?>. Existe e funciona KKKK.</p>
        <hr>
        <h4>strpos</h4>
        <p>POSIÇÃO. Essa função procura e informa a posição de uma determinada string dentro da string solicitada. Veja no exemplo:</p>
        <pre>
            $nome = 'Crys dos Rios';
            $posi_dos = strpos($nome, 'dos');
            
            echo $posi_dos;
        </pre>
        <?php 
            $nome = 'Crys dos Rios';
            $posi_dos = strpos($nome, 'dos');
        ?>
        <p>O que esse código vai fazer é basicamente pegar a variável nome e procurar dentro dela a posição da string 'dos' e informar, sendo a saída do código: <?= $posi_dos?> que é a posição onde se inicia a string 'dos'. Simples e pode se bastante útil, porém saiba que essa função procura do jeito que foi especificado nela, ou seja, case sensitive.</p>
        <hr>
        <h4>stripos</h4>
        <p>E se você está pensando que a função strpos pode não te ajudar poque a string tá em maiúscula ou minúscula saiba que o PHP já tem uma função que ignora esse case sensitive e faz a busca para você. Ela é a stripos, esse i vem de ignore, isso mesmo. Simples e pode ser mais útil ainda.</p>
        <hr>
        <h4>substr_count</h4>
        <p>Essa função conta quantas vezes foi encontrado uma string dentro de outra, por exemplo: </p>
        <pre>
            $frase = "Bom dia amigo, como eu posso ajudar um amigo tão chegado?";
            $conta_amigo = substr_count($frase, 'amigo');

            echo "A palavra amigo foi encontrada $conta_amigo vezes";
        </pre>
        <?php 
            $frase = "Bom dia amigo, como eu posso ajudar um amigo tão chegado?";
            $conta_amigo = substr_count($frase, 'amigo');
        ?>
        <p>Essa função irá retornar o número de vezes que a string amigo foi encontrada, sendo: <?= "A palavra amigo foi encontrada $conta_amigo vezes" ?>. Interessante eu digo.</p>
        <hr>
        <h4>substr</h4>
        <pre>
            $slogan = 'Aqui você é feliz!';
            $parte_slogan = substr($slongan, 0, 4);
            echo $parte_slogan;

            ====Saída===
            <?php 
                $slogan = 'Aqui você é feliz!';
                $parte_slogan = substr($slogan, 0, 4);?>
<?= $parte_slogan ?>
        </pre>
        <p>A função escrever do caractere na posição 0 até o caractere da posição 4, formando a string 'Aqui', essa é a função substr. Não para por aí, se no lugar do 0, 4 eu colocar somente 4 por exemplo, a função iria me retornar 'você é feliz!' porque passar apenas um parâmetro determina que a posição de início será aquela e o resto da frase será retornada a partir daquele caractere. Do mesmo jeito que se eu coloquase por exemplo um número negativo como o -6 por exemplo, o retorno da função seria 'feliz!' porque ela consideraria o último caractere até a posição -6, ou seja, de trás para frente.</p>
        <hr>
        <h4>str_pad</h4>
        <p>Essa é a função que coloca os espaços necessários para preencher um determinado tamanho:</p>
        <pre>
            $nome = "Crys";
            echo "Meu nome é " . str_pad($nome, 15, '-', STR_PAD_RIGHT);

            ====Saída====
            <?php 
            $nome = "Crys";
    echo "Meu nome é " . str_pad($nome, 15, '-', STR_PAD_RIGHT);
            ?>
        </pre>
        <p>Percebeu? A string nome tem apenas 4 caracteres, mas eu quis que o espaço em que ela fosse colocado preenchesse 15 caracteres usadno traços onde não tinha letras, e ainda escolhi a direção que pode ser para a direita, esquerda ou atém mesmo em ambos os lados: STR_PAD_RIGHT, STR_PAD_LEFT, ou STR_PAD_BOTH. Se o tipo do lado não for especificado ele é por padrão para a direita.</p>
        <hr>
        <h4>str_repeat</h4>
        <p>Essa função é muito útil para evitar ficar usando estruturas de repetição para repetir strings, com o simples comando: str_repeat('-', 20) eu posso criar uma linha com 20 traços.</p>
        <?= str_repeat('-', 20) ?>
        <p>Dessa forma mesmo. Simples e bastante eficaz.</p>
        <hr>
        <h4>str_replace</h4>
        <p>Essa é a famosa função que troca uma palavra por outra. Basta colocar str_replace('palavra a ser trocada', 'palavra que vai no lugar da que vai ser trocada', variável que contém a string). Veja no exemplo:</p>
        <pre>
            $frase = 'Eu amo jogar!';
            $nova_frase = str_replace('jogar', 'programar', $frase);

            echo $nova_frase;

            ====Saída====
            <?php 
            $frase = 'Eu amo jogar!';
            $nova_frase = str_replace('jogar', 'programar', $frase);

            echo $nova_frase;
        ?>
        </pre>
        <p>Percebeu a troca? Trocou a palavra jogar por programar, e se por acaso você quiser ignorar o case sensitive é só colocar o famoso i na frente do replace: str_ireplace() que funciona direitinho!</p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>