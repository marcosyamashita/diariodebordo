<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 08/01/21
 * Time: 15:40
 */

include "../conexao.php";
include "editar-atividade.php";

$dateInicio = $_POST['dateInicio'];
$timeInicio = $_POST['timeInicio'];
$dateFim = $_POST['dateFim'];
$timeFim = $_POST['timeFim'];
$titulo = $_POST['titulo'];
$atividade = $_POST['atividade'];


$query = "UPDATE atividade SET id_atividade = "
