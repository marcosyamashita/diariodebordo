<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 17/11/20
 * Time: 01:13
 */

session_start();
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
            <div>
                <p>CADASTRO DE USUÁRIO</p>
            </div>
            <form action="cadastrousuario.php" method="POST">
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Digite o nome do usuário" required>
                <input type="text" id="cpf" class="fadeIn second" name="cpf" placeholder="Digite o CPF Somente numeros" required maxlength="11">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Digite o email" required>

                <?php

                if (isset($_SESSION['senha_diferente'])) {
                ?>
                <input type="password" id="senha" class="fadeIn third p-3 mb-2 bg-danger text-white" name="senha" placeholder="Digite a Senha" required>
                <input type="password" id="repita" class="fadeIn third p-3 mb-2 bg-danger text-white" name="repita" placeholder="Repita a senha" required>
                <p class="text-danger">As senhas digitadas devem ser iguais!!!</p>

                <?php }
                else {
                ?>
                <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Digite a Senha" required>
                <input type="password" id="repita" class="fadeIn third" name="repita" placeholder="Repita a senha" required>

                <?php

                };
                unset($_SESSION['senha_diferente']);
                ?>

                <input type="submit" class="fadeIn fourth" value="Enviar">
                <br><small class="text-muted">Desenvolvido por Marcos Yamashita</small>
            </form>
        </div>
    </div>
</body>

</html>