<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Arrays</title>
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
        <h1>Arrays</h1>
        <p>Para se criar um array em PHP é muito simples, basta declarar uma variável do tipo array: <br> $nums = array(1, 2, 3, 4, 5).
        Bem simples mesmo. Também há outra forma de criar um array, até mais fácil que essa (minha opnião), que é simplesmente colocando os elementos entre colchete: <br> $num = [1, 2, 3, 4, 5,]. É a mesma coisa, mas de uma maneira mais simplificada eu diria.</p>
        <p>Também existe a possibildade de criar um <strong>RANGE</strong> que é um array mas com detalhes diferentes na sua criação. Para criar um range basta fazer: <br> $num = range(5, 20, 5). Você deve estar se perguntando, tá criou um array de 3 posições com 3 elementos né? Não exatamente, usarei o var_dump para mostrar:</p>
        <?php $nums = range(5, 20, 5); ?>
        <pre>
            <?= print_r($nums) ?>
        </pre>
        <p>Perceba como foi feita a coisa. Um array foi criado, com 4 elementos nele, começando obviamente do índice 0 e seguindo até o 3. Note que foi os elementos foram 5, 10, 15 e 20, percebeu? O que o RANGE na verdade faz é criar um array onde os parâmetros passados são: primeiro o número que começa, depois o número que termina e por fim a quantidade de casas que vão ser andadas até chegar no número.</p>
        <p>Para adicionar valore em um array através de uma estrutura de repetição basta colocar um colchete vazio depois do array onde será adiccionado os valores, esse colchete inidca que o valor será adicioando ao final do array. Veja este exemplo:</p>
        <pre>
            $num = [];
            for ($i = 0; $i <= 10; $i++) {
                $num[] = rand(1, 100);
            }
        </pre>
        <p>Com isso eu tenho um array de 11 elementos criado automaticamente pelo PHP.</p>
        <hr>
        <h2>Arrays com Chaves Associativas</h2>
        <p>É possível personalizar as chaves dos arrays, chaves são onde ficam os valores dos arrays. Veja neste exemplo: <br>
        $cadastro = ['nome' => 'Crys', 'idade' => 18, 'peso' => 62.7] <br>
        Isso é um array mas com as chaves nomeadas ao invés de ter os índices. Também há a forma de mostrar esse array com um foreach do PHP:</p>
        <pre>
            foreach ($cadastro as $valor) {
                echo $valor;
            }
        </pre>
        <p>Esse foreach irá mostrar cada valor que tem nas chaves:</p>
        <?php 
            $cadastro = ['nome' => 'Crys', 'idade' => 18, 'peso' => 62.7];
            foreach ($cadastro as $valor) {
                echo "$valor ";
            }
        ?>
        <p>Se por um acaso eu quiser adicionar uma nova chave com um novo valor eu faço: <br> $cadastro['altura'] = 1.78; <br> Automaticamente o PHP irá criar essa nova parte no array e irá implementá-la, agora veja com o novo valor:</p>
        <?php $cadastro['altura'] = 1.78; ?>
        <?= print_r($cadastro) ?>
        <p>Perfeito, e para remover um valor usa-se a função unset e a chave em que o valor se encontra: <br> unset($cadastro['idade']);<br>Agora veja:</p>
        <?php unset($cadastro['idade']); ?>
        <?= print_r($cadastro) ?>
        <p>Simples!</p>
        <hr>
        <h2>Matrizes em PHP</h2>
        <p>Bom, matrizes em PHP são simplesmente arrays dentro de arrays! Vamos lá: <br> $fila = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)); <br> Isso pode ser chamado sim de uma matriz. Eu coloquei o nome fila para um melhor entendimento, imagine um cinema, nesse cinema tem a sessão onde passa os filmes, cada sessão tem sua sala que é cheia de cadeiras para as pessoas sentarem, cada cadeira está em uma fileira, ou seja, existe uma fila de cadeiras, cada fileira tem 3 cadeiras começando da fileira de posição 0 e seguindo até a posição 2. Cada fileira tem 3 cadeiras que tem suas posições de 0 a 2 também. Basicamente, com essa imagem na cabeça você conseguiu entender como funciona as matrizes, e se ainda tá complexo olhe isso:</p>
        <pre>
            fila[0] => (cadeira[0] => 1,
                        cadeira[1] => 2,
                        cadeira[2] => 3
                        )
            fila[1] => (cadeira[3] => 1,
                        cadeira[4] => 2,
                        cadeira[5] => 3
                        )
            fila[2] => (cadeira[6] => 1,
                        cadeira[7] => 2,
                        cadeira[8] => 3
                        )
        </pre>
        <p>É a mesma coisa que isso:</p>
        <?php $fila = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)); ?>
        <pre><?= print_r($fila) ?></pre>
        <p>A diferença eh que no print_r não mostra o índice do array principal. <br> Agora se eu quisesse por exemplo mostrar apenas as cadeiras da fila 1 que são as únicas disponíveis, eu faço:</p>
        <pre>
            foreach ($fila[1] as $valor) {
                echo "Cadeira de número $valor está disponível &lt;/br&gt;"
            }

            =====Saída=====
            <?php foreach ($fila[1] as $valor) { ?>
<?= "Cadeira de número $valor está disponível </br>" ?>
            <?php }?>
        </pre>
        <p>Usando um FOREACH do jeito certo fica tudo de boa. O que eu fiz nessa estrutura foi basicamente pegar todos os valores que são tratados no array fila da posição 1, isto é $fila[1]. Simples!</p>
        <p>O "as" que tem no foreach significa meio que: considerado como valor, é essa linha de raciocínio.</p>
        <hr>
        <h3>Funções para Auxilixar nos Arrays</h3>
        <h4>print_r</h4>
        <p>Essa função mostra um array em sua forma mais simples, como a chave e o valor. Veja neste exemplo:</p>
        <pre>
            $num = [];
            for ($i = 0; $i <= 10; $i++) {
                $num[] = rand(1, 100);
            }

            print_r($num);

            =====Saída=====

            <?php 
                $num = [];
                for ($i = 0; $i <= 10; $i++) {
                    $num[] = rand(1, 100);
                }
                
                print_r($num);
            ?>
        </pre>
        <p>Olhe como a função print_r funciona mostrando os valores e as chaves desse array.</p>
        <hr>
        <h4>var_dump</h4>
        <p>Essa função mostra o array de um jeito um pouco mais completo. Veja no exmeplo:</p>
        <pre>
            $num = [];
            for ($i = 0; $i <= 10; $i++) {
                $num[] = rand(1, 100);
            }

            print_r($num);

            =====Saída=====

            <?php 
                $num = [];
                for ($i = 0; $i <= 10; $i++) {
                    $num[] = rand(1, 100);
                }
                
                var_dump($num);
            ?>
        </pre>
        <p>Um pouco mais complexo né? Mas é de boa entender, primeiro ela já informa quantos elementos tem dentro do array que nesse caso são 11, em seguida mostra o índice e também o tipo do valor que está no array, em casos de string ela também mostra o tamanho da string.</p>
        <hr>
        <h4>count</h4>
        <p>Função essa que conta quantos elementos tem no array. Exemplo, "O array gerado com laço FOR tem " . count($num) . " elementos"</p>
        <?php echo "O array gerado com laço FOR tem " . count($num) . " elementos"; ?>
        <hr>
        <h4>array_push</h4>
        <p>Essa função adiciona elementos no final do array. Veja no exemplo:</p>
        <pre>
            $num = [0, 6, 2, 44, 57];
                
            array_push($num, 15);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [0, 6, 2, 44, 57];
                
                array_push($num, 15);
                print_r($num);
            ?>
        </pre>
        <p>Notou o último elemento? Basicamente essa função tem o mesmo papel que fazer: $num[] = 15, porém com uma função específica para array. O primeiro parâmetro é a varável que está o array e o segundo é o valor a ser adicionado no array. Preste atenção em uma coisa,a função que exibe o array está depois da função que adiciona o elemento, isso tem que ser feito assim para o elemento adicionado ser exibido porque o PHP e outras muitas linguagens de programação interpretam o código em uma ordem (de cima para baixo, linha por linha) então se fosse colocado print_r antes da função array_push não teria sido exibido o elemento adicionado porque ele ainda não tinha sido adicionado.</p>
        <hr>
        <h4>array_pop</h4>
        <p>Para deletar o último elemento de um array use a função array_pop que o trabalho será feito. Exemplo:</p>
        <pre>
            $num = [0, 6, 2, 44, 57];
                
            array_pop($num);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [0, 6, 2, 44, 57];
                
                array_pop($num);
                print_r($num);
            ?>
        </pre>
        <p>Percebeu o último? Não é mais 57 e sim 44, porque o 57 foi deletado. Simples e pode vir a ser bastante útil.</p>
        <hr>
        <h4>array_unshift</h4>
        <p>Tá, já sei como colocar e deletar elementos no final de um array, mas e no início? Esse é o papel da função array_unshift. Veja mo exemplo:</p>
        <pre>
            $num = [0, 6, 2, 44, 57];
                
            array_unshift($num, 15);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [0, 6, 2, 44, 57];
                
                array_unshift($num, 15);
                print_r($num);
            ?>
        </pre>
        <p>Fácil, simples, isso é PHP. Percebeu que todo o array foi alterado? O elemento de índice 0 que antes era o prórprio 0 passou a ser o elemento de índice 1, o 15 que se tornou o primeiro. A função já fez tudo isso.</p>
        <hr>
        <h4>array_shift</h4>
        <p>Agora que você sabe adicionar no início, nada mais justo que deletar no início também né? Esse é o trabalho da função array_shift. Veja no exemplo:</p>
        <pre>
            $num = [0, 6, 2, 44, 57];
                
            array_shift($num);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [0, 6, 2, 44, 57];
                
                array_shift($num);
                print_r($num);
            ?>
        </pre>
        <p>O elemento 0 foi deletado deixando assim o elemento de número 6 como sendo o primeiro no array, até o índice foi alterado também.</p>
        <hr>
        <h4>sort</h4>
        <p>Função que simplesmente coloca os elementos na ordem crescente. Exemplo:</p>
        <pre>
            $nums = [];
            for ($i = 0; $i <= 10; $i++) {
                array_push($nums, rand(1, 100));
            }
            sort($nums);
            print_r($nums);

            =====Saída=====

            <?php 
                $nums = [];
                for ($i = 0; $i <= 10; $i++) {
                    array_push($nums, rand(1, 100));
                }
                sort($nums);
                print_r($nums);
            ?>
        </pre>
        <p>Tá vendo? AInda fiz um FOR para colocar números aleatórios para dar ainda mais provas que de realmente funciona. Simples.</p>
        <hr>
        <h4>rsort</h4>
        <p>De forma contrária a função rsort coloca em ordem decrescente o array. Exemplo:</p>
        <pre>
            $nums = [];
            for ($i = 0; $i <= 10; $i++) {
                array_push($nums, rand(1, 100));
            }
            rsort($nums);
            print_r($nums);

            =====Saída=====

            <?php 
                $nums = [];
                for ($i = 0; $i <= 10; $i++) {
                    array_push($nums, rand(1, 100));
                }
                rsort($nums);
                print_r($nums);
            ?>
        </pre>
        <p>Bem de boa, apenas colocando a letra r na frente da função sort ela já faz o reverso.</p>
        <hr>
        <h4>asort</h4>
        <p>Uma maneira de ordenar os elemento mas sem alterar os índices deles é usando a função asort, que faz esse trabalho. Exemplo:</p>
        <pre>
            $nums = [];
            for ($i = 0; $i <= 10; $i++) {
                array_push($nums, rand(1, 100));
            }
            asort($nums);
            print_r($nums);

            =====Saída=====

            <?php 
                $nums = [];
                for ($i = 0; $i <= 10; $i++) {
                    array_push($nums, rand(1, 100));
                }
                asort($nums);
                print_r($nums);
            ?>
        </pre>
        <p>Percebeu como os índices estão fora de ordem? Mas note que os elementos estão todos ordenados certinhos.</p>
        <hr>
        <h4>arsort</h4>
        <p>Do mesmo jeito tem a função que ordena os elementos em ordem decrescente e mão altera o índice. Exemplo:</p>
        <pre>
            $nums = [];
            for ($i = 0; $i <= 10; $i++) {
                array_push($nums, rand(1, 100));
            }
            arsort($nums);
            print_r($nums);

            =====Saída=====

            <?php 
                $nums = [];
                for ($i = 0; $i <= 10; $i++) {
                    array_push($nums, rand(1, 100));
                }
                arsort($nums);
                print_r($nums);
            ?>
        </pre>
        <p>Tem nem o que falar, ta na tela aí.</p>
        <hr>
        <h4>ksort</h4>
        <p>Bom, agora que foi dito como ordenar os elementos nada mais justo que ensinar ordenar as chaves (índices) né? O PHP tem uma função prontinha pra isso. Veja no exemplo:</p>
        <pre>
            $num = [9 => 0, 31 => 6, 2 => 2, 7 => 44, 1 => 57];
                
            ksort($num);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [9 => 0, 31 => 6, 2 => 2, 7 => 44, 1 => 57];
                
                ksort($num);
                print_r($num);
            ?>
        </pre>
        <p>Note que os índices estão ordenados mas os elementos não, isso porque essa função serve apenas para as chaves do array e não para os valores.</p>
        <hr>
        <h4>krsort</h4>
        <p>Como em todas as outras funções de ordem de arrays no PHP, essa também tem o seu reverso. Veja no exemplo:</p>
        <pre>
            $num = [9 => 0, 31 => 6, 2 => 2, 7 => 44, 1 => 57];
                
            krsort($num);
            print_r($num);

            =====Saída=====

            <?php 
                $num = [9 => 0, 31 => 6, 2 => 2, 7 => 44, 1 => 57];
                
                krsort($num);
                print_r($num);
            ?>
        </pre>
        <p>Simplesmente PHP.</p>
    </main> 
</body>
</html>