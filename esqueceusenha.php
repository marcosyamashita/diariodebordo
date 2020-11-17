<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 17/11/20
 * Time: 01:13
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - DIARIO DE BORDO</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="img/icone_user.png" id="icon" alt="icone" />
            </div>
            <form action="trocarsenha.php" method="GET">
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Digite o nome do usuário">
                <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Digite a Senha">
                <input type="password" id="repita" class="fadeIn third" nome="esqueceu" placeholder="Repita a senha">
                <input type="submit" class="fadeIn fourth" value="Enviar">
            </form>
        </div>
    </div>
</body>

</html>