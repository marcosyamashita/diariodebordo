<?php
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

            <?php
            if (isset($_SESSION['nao_autenticado'])):
            ?>

            <div class="alert alert-danger">
                <span>ERRO: Usuario ou senha Invalidos!</span>
            </div>

            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <form action="login.php" method="POST">
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Login">
                <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="esqueceusenha.php">Esqueceu a senha?</a> <br>
                <a class="underlineHover" href="#">Cadastrar</a> <br><br>
                    <small class="text-muted">Desenvolvido por Marcos Yamashita</small>
            </div>

        </div>
    </div>
</body>

</html>