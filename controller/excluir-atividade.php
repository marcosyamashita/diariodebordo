<?php


$idatividade = $_POST['id_atividade'];

//echo $idatividade;


echo "<h4>Tem certeza que deseja excluir esse registro?</h4>";
echo "<form action='#' method='post'><input type='submit' onclick='delete()' value='Sim'></form>";
echo "<button onclick='javascript: history.go(-3)'>Não</button>";


function delete(){
    $query = "DELETE FROM atividade WHERE id = {'$idatividade'}";
}


?>