<?php

include "conexao.php";

if (isset($_POST['dateInicioConsulta'] & $_POST['dateFimConsulta'])){

    $dateInicioConsulta = $_POST['dateInicioConsulta'];
    $dateFimConsulta = $_POST['dateFimConsulta'];

    $query = "SELECT * FROM atividade WHERE dateInicio BETWEEN '{$dateInicioConsulta}' AND '{$dateFimConsulta}'";
    $resultado = mysqli_query($conexao, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Relatorio de Atividades - Diario de Bordo</h1>

<div>
        <table class="table">
            <thead class="table-dark table-bordered text-center">
            <tr>
                <th>Título</th>
                <th>Atividade</th>
                <th>Data de Início</th>
                <th>Hora Inicio</th>
                <th>Hora Fim</th>
                <th>Usuário</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //Exibe resultados da tabela
            while ($exibe = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>{$exibe['titulo']}</td>";
                echo "<td>{$exibe['atividade']}</td>";
                echo "<td>". date('d/m/Y', strtotime($exibe['dateInicio'])). "</td>";
                echo "<td>{$exibe['timeInicio']}</th>";
                echo "<td>{$exibe['timeFim']}</th>";
                echo "<td>{$exibe['usuario']}</td>";
                echo "<td class='text-center'><form action='controller/editar-atividade.php' method='post'><button type='submit' name='id_atividade' value='{$exibe['id_atividade']}'>Editar</button></form></td>";
                echo "<td class='text-center'><form action='controller/excluir-atividade.php' method='post'><button onclick='return confirm('Tem certeza que deseja deletar este registro?')' name='id_atividade' value='{$exibe['id_atividade']}'>Excluir</button></form></td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
        <?php
        
        mysqli_close($conexao);
}
        ?>
    </div>
    
    
</body>
</html>