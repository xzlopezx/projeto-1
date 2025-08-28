<?php
$mensagem = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $mensagem = "Ola";
         $mensagem .= $_POST['nome'];
    }else{
        $mesagem = "digite seu nome";
        }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['periodo']== 'm'){ 
        $mensagem='Bom dia';
    }else if ($_POST[periodo]== 't'){
        $mensagem='boa tarde';
    }else if($_POST[periodo]=='n'){
        $mensagem='boa noite';
    }
?>


<!DOCTYPE html>
    <html lang="pt-br">
        <body>
            <form action="teste.php" method="post">
            <label for="Nome">Nome</label>
            <select name="periodo">
                <option value="m">manha</option>
                <option value="t">tarde</option>
                <option value="n">noite</option>

            <button type="submit">ENVIAR</button
        </body>


        
</html>