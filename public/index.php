<?php
$nome = $_GET['nome'];
$mensagem = "Boa noite $nome";
$num1 = 10;
$num2 = 30;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Projetc</title>
</head>
<body>
    <h1>Projeto 1</h1>
    <b>Bem-vindos<strong></b>
    <p><i> <b>
        <?= $num1 . $num2?>
        <?= $num1 + $num2?>
       <p><?= $mensagem ?><p>

</body>
</html>