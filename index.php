<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hello World!</h1>";
    // Para declarar variaveis usatilizamos $
    // Elas devem comecar com letra e serem minusculas
    // Utilizamos o padrão camelCase para +1 palavra
    // O PHP é fracamente tipado, uma variavel pode mudar de tipo

    $texto = "Yuri do Amaral Carvalho Guerra";
    $texto2 =  'Yuri do Amaral Carvalho Guerra';
    $doisTextos = "Meu nome é " . "Yuri do Amaral Carvalho Guerra";
    $textosVariavel = "Meu nome é " . $texto . "!";
    $variavelMeio = "Meu nome é $texto !";

    $idade = 19; //inteiro
    $altura = 1.75; //flutuante
    $aluno = true; //booleano
    $vetor = ['Uva', 'Banana', 'Maçã'];
    $array = [$vetor, ['Arroz', 'Feijão', 'Ovo']];
    $nomeado = [
        'nome' => 'Ronan Adriel Zenatti',
        'idade' => 19,
        'altura' => 1.75
    ];

    // Imprimir uma variavel
    echo $nome;

    // Com tags do HTML
    echo "<h2>$doisTextos</h2>";

    $doisTextos = "Agora eu mudei o texto!";
    echo "<h3>$doisTextos</h3>";
    ?>

    <div style="height: 100px; background: #ccc; text-align: center">
        <?php echo $textosVariavel ?>
    </div>

    <br>

    <div style="background: yellow; height: 100px;">
        <?php
        $valor1 = 10;
        $valor2 = 5;
        ?>
        <p> <b>Soma: </b> <?= $valor1 + $valor2 ?> </p>
        <p> <b>Subtração: </b> <?= $valor1 - $valor2 ?> </p>
        <p> <b>Multiplicação: </b> <?= $valor1 * $valor2 ?> </p>
        <p> <b>Divisão: </b> <?= $valor1 / $valor2 ?> </p>
    </div>

    <p>Vetor[1]: <?= $vetor[1] ?></p>
    <p>Array[1,2]: <?= $array[1] [2] ?></p>
    <p>Nomeado[nome]: <?= $nomeado['nome'] ?></p>

    <?php
    // Troca o conteudo do vetor[1]
    $vetor[1] = "pera";
    ?>

    <p>Vetor[1] alterado: <?= $vetor[1] ?></p>

    <ul>
        <?php
        foreach ($vetor as $item):
        ?>
            <li><?= $item ?></li>
        <?php
        endforeach;
        ?>
    </ul>
</body>
</html>