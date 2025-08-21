<?php
$nome = $_GET['nome'];
$mensagem = "Boa noite $nome";

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
      <p><?= $mensagem ?><p>

</body>
</html>