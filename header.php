<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 16/11/20
 * Time: 22:42
 */

session_start();
include('verifica_login.php');

include ('conexao.php');

$dateInicioConsulta = date("Y-m-d");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diário De Bordo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

<h2>Olá,  <?php echo $_SESSION['usuario'];?></h2><h2><a href="logout.php">Sair</a></h2>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Diário De Bordo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#">My account</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <div>
                        <a href="criar-registros.php"><input type="button" value="Criar Registros"></a>
                        <a href="consultar-registros.php"><input type="button" value="Consultar Registro"></a>
                        <a href="relatorios.php"><input type="button" value="Relatorios"></a>
                    </div>
                </nav>