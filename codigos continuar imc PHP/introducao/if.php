<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = isset($_POST['idade']) ? $_POST['idade'] : 0;
}

// Define uma cor conforme a idade
if ($idade >= 18) {
    $cor = "lime";
} else {
    $cor = "red";
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida um if</title>

    <style>
        .card {
            margin: 10px 30px;
            border: 2px #ccc solid;
            padding: 30px;
            border-radius: 30px;
        }

        .success {
            background: green;
        }

        .warning {
            background: yellow;
        }

        .error {
            background: salmon;
        }
    </style>
</head>
<body>
    <h1>Validação de entrada com IF</h1>
    <!-- a sintaxe PHP abaixo substitui um ECHO -->
     <p>Você tem: <b><?= $idade ?></b> anos!</p>

     <p>Neste local você pode:</p>

     <!-- IF misturado com HTML -->
     <?php if($idade >= 18): ?>
        <div class="card success">
            <h2 style="color: <?= $cor ?>">MAIOR DE IDADE - PODE ENTRAR!</h2>
        </div>
    <?php elseif($idade >= 16): ?>
        <div class="card warning">
            <h2 style="color: <?= $cor ?>">MENOR DE IDADE - PODE ENTRAR ACOMPANHADO!</h2>
        </div>   
    <?php else: ?>
        <div class="card error">
            <h2 style="color: <?= $cor ?>">MENOR DE IDADE - NÃO PODE ENTRAR!</h2>
        </div> 
    <?php endif; ?>
</body>

</html>