<?php

include '../conexao.php';

$idatividade = $_POST['idatividade'];
$dateInicio = $_POST['dateInicio'];
$timeInicio = $_POST['timeInicio'];
$dateFim = $_POST['dateFim'];
$timeFim = $_POST['timeFim'];
$titulo = $_POST['titulo'];
$atividade = $_POST['atividade'];


$query = "UPDATE atividade SET dateInicio = '{$dateInicio}', timeInicio = '{$timeInicio}', dateFim = '{$dateFim}', timeFim = '{$timeFim}', titulo = '{$titulo}', atividade = '{$atividade}' where id_atividade = '{$idatividade}'";


//UPDATE `diariodebordo`.`atividade` SET `dateInicio`='2021-05-16', `timeInicio`='01:10:01', `dateFim`='2021-05-15', `timeFim`='02:10:01', `titulo`='teste23', `atividade`='teste23' WHERE  `id_atividade`=2954;

if (mysqli_query($conexao, $query)) {
    echo "<script>alert('Atividade Editada!');</script>";
    echo '<meta http-equiv="refresh" content="0;url=../painel.php" />';

    mysqli_close($conexao);

}else {
        echo "<script>alert('A atividade não pode ser editada!')</script>";
        echo "<script>alert('mysqli_errno($query) mysqli_error($query)')</script>";
        /*echo '<meta http-equiv="refresh" content="0;url=../painel.php" />';*/
        echo mysqli_errno($conexao). ": " . mysqli_error($conexao). "\n";

    mysqli_close($conexao);

}