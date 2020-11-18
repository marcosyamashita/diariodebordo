<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 17/11/20
 * Time: 02:05
 */

session_start();

include ('conexao.php');

//RECEBENDO DADOS VIA POST DO FORMULARIO

$usuario = $_POST['usuario'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repita = $_POST['repita'];

if ($senha <> $repita) {
    $_SESSION['senha_diferente'] = true;
    header('Location: cadastro.php');
    exit();
} else {
    //echo "Tudo Certo ate aqui!";
}

//VERIFICA SE JÁ EXISTE UM USUARIO CADASTRADO PELO CPF

$verifica = "SELECT nome, cpf FROM usuario WHERE cpf = $cpf";
$verificaresult = mysqli_query($conexao, $verifica);

$row = mysqli_num_rows($verificaresult);

//echo $row;
if ($row == 1) {

    header("Location: errosenha.php");

} else {

//EXECUTA A QUERY PARA CRIAÇÃO DO USUARIO

$query = "INSERT INTO `diariodebordo`.`usuario` (`nome`, `senha`, `email`, `cpf`) VALUES ('$usuario', md5('".$senha."'), '$email', '$cpf')";

if (mysqli_query($conexao, $query)) {
    echo "Inclusão realizada com sucesso!";
} else {
    echo "Error: " . $query. "<br>". mysqli_error($conexao);
}
mysqli_close($conexao);

    header('Location: index.php');

}