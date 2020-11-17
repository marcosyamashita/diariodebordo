<?php
session_start();
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 15/11/20
 * Time: 12:23
 */

include('conexao.php');

//NÃO PERMITIR ACESSAR DIRETAMENTE O login.php SEM RECEBER DADOS VIA POST.

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();

}
// VALIDAÇÃO PARA EVITAR ATAQUE DE SQL INJECTION

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, nome from usuario where nome = '{$usuario}' and senha = md5('{$senha}') and ativo = 1";


$result = mysqli_query($conexao, $query);


$row = mysqli_num_rows($result);

echo $row;

print_r($_SESSION);

print_r($_POST);

if($row ==1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}