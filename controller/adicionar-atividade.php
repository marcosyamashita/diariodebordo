<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 07/01/21
 * Time: 23:46
 */

session_start();

include ('../conexao.php');

/*RECEBENDO DADOS VIA GET PARA DEBUGAR!!!

$usuario = $_SESSION['usuario'];
$dateInicio = $_GET['dateInicio'];
$timeInicio = $_GET['timeInicio'];
$dateFim = $_GET['dateFim'];
$timeFim = $_GET["timeFim"];
$titulo = $_GET['titulo'];
$atividade = $_GET['atividade'];

echo "U = ". $usuario. ". <br> DI = ". $dateInicio. ". <br> TI = ". $timeInicio. ". <br> DF = " . $dateFim . ". <br> TF = ". $timeFim . ". <br> I = " . $titulo . ". <br> A = " . $atividade . ".";*/

//RECEBENDO DADOS VIA POST

$usuario = $_SESSION['usuario'];
$dateInicio = $_POST['dateInicio'];
$timeInicio = $_POST['timeInicio'];
$dateFim = $_POST['dateFim'];
$timeFim = $_POST["timeFim"];
$titulo = $_POST['titulo'];
$atividade = $_POST['atividade'];


$query = "INSERT INTO atividade(usuario, dateInicio, timeInicio, dateFim, timeFim, titulo, atividade) values('{$usuario}', '{$dateInicio}', '{$timeInicio}', '{$dateFim}', '{$timeFim}', '{$titulo}', '{$atividade}')";

if (mysqli_query($conexao, $query)) {
    echo "<script>alert('Atividade Adicionada Com Sucesso!');</script>";
    echo '<meta http-equiv="refresh" content="0;url=../painel.php" />';

    mysqli_close($conexao);

}else {
        echo "<script>alert('A atividade não pode ser adicionada.')</script>";
        echo '<meta http-equiv="refresh" content="0;url=../painel.php" />';

    mysqli_close($conexao);

}