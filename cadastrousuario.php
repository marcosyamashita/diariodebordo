<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 17/11/20
 * Time: 02:05
 */

session_start();

include ('conexao.php');



$usuario = $_GET['usuario'];
$senha = $_GET['senha'];
$repita = $_GET['repita'];

if ($senha <> $repita) {
    $_SESSION['senha_diferente'] = true;
    header('Location: cadastro.php');
    exit();
} else {
    //echo "Tudo Certo ate aqui!";
}

$query = "INSERT INTO usuario (id, nome, senha )";