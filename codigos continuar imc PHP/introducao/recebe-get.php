<?php
// print_r faz a impressão de variáveis complexas, como arrays.
print_r($_GET);

// isset verifica se uma variável existe 
if(isset($_GET['nome'])) {
    echo "<h1>" . $_GET['nome'] . "</h1>";
}

//IF ternário
// $var = condicao ? retorno de true : retorno se false;
$idade = isset($_GET['idade']) ? $_GET['idade'] : 0;

$anoNascimento = 2025 - $idade;

echo "<h3>$anoNascimento</h3>";